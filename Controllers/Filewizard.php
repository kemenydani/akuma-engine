<?php

namespace Controllers;

class Filewizard {
    
    private $BaseFolder = 'uploads';
    private $FileInfo;
    private $Files;
    private $File;
    private $tmp_name;
    public $uploaded = 0;
    public $failed = [];
    
    public function upload(){
        
        if(!empty($_FILES['file'])){
            foreach($_FILES['file']['name'] as $key => $name){
                if($_FILES['file']['error'][$key] === 0){
                    
                    $Fileinfo = new \SplFileInfo($name);
                    
                    if(\in_array(strtolower($Fileinfo->getExtension()), ['jpg', 'png', 'pdf', 'doc', 'docx'])){
                        
                        $this->File = [];
                        
                        $this->File['extension'] = strtolower($Fileinfo->getExtension());
                        $this->tmp_name = $_FILES['file']['tmp_name'][$key];
                        $this->File['filename'] = utf8_encode(\strtolower(str_replace(' ', '_', $Fileinfo->getFilename()))); 
                        $this->File['md5_name'] = \md5_file($this->tmp_name) . time() . '.' . $this->File['extension'];
                        
                        $isimage = getimagesize($_FILES['file']['tmp_name'][$key]);
                        if($isimage){
                            $this->File['file_type'] = 'image';
                            $this->File['width'] = $isimage[0];
                            $this->File['height'] = $isimage[1];
                            //$this->File['size_string'] = $isimage[3]; //elbassza a json decodet
                            $this->File['mime'] = $isimage['mime'];
                        }
                        
                        $isdir = is_dir($_FILES['file']['tmp_name'][$key]);
                        if($isdir){
                           $this->File['file_type'] = 'directory';
                        }
                        
                        $this->File['file_size'] = filesize($this->tmp_name);
 
                        $this->Files[] = $this->File;
                        $this->moveFiles();
                        
                    } else {
                        
                        $fail = [
                            'name' => $name,
                            'message' => 'The extension of this file is not allowed.'  
                        ];
                        
                        $this->failed[] = $fail;
                        
                    } //create useful arrays from file properties
                }
            }
            
            die(json_encode(['succeded' => $this->uploaded,'failed' => $this->failed]));
            return;
            
        } 
        
    } 
    
    public function registerFile(){
        $dbo = new \Core\Database('upload');
        $dbo->query("INSERT INTO ".$dbo->Table." (`file_extension`,`file_name`,`file_name_md5`, `file_details`) "
                  . "VALUES ('".$this->File['extension']."','".$this->File['filename']."','".$this->File['md5_name']."','".json_encode($this->File)."')");
    }
    
    public function moveFiles(){
        
        $post = filter_input_array(INPUT_POST);
        $this->uploadDir = str_replace('\\', '/', $post['upload_dir']);

        $this->File['path']['move_path'] = $this->uploadDir . $this->File['md5_name'];
        
        if(move_uploaded_file($this->tmp_name, $this->File['path']['move_path'])){
            $this->uploaded++;
        }
        
        if($this->File['file_type'] === 'image'){
           $this->createThumbnail();
        }
           
        $this->registerFile();
        
    }
    
    public function createThumbnail(){
        
        $this->File['thumb_name'] = 'thumbnail_' . $this->File['md5_name'];
        $this->File['path']['thumb_path'] = $this->BaseFolder . '/thumbnails/' . 'thumbnail_' . $this->File['md5_name'];
        
        if($this->File['width'] > 300){
           $this->resizeUploadImage(300, $this->File['path']['thumb_path']);
        } else {
           copy($this->File['path']['move_path'], $this->File['path']['thumb_path']);
        }
        
    }
    
    public function resizeUploadImage($target_width, $target_path){

        switch ($this->File['extension']) {
                case 'jpg':
                        $image_create_func = 'imagecreatefromjpeg';
                        $image_save_func = 'imagejpeg';
                        break;

                case 'png':
                        $image_create_func = 'imagecreatefrompng';
                        $image_save_func = 'imagepng';
                        break;

                case 'gif':
                        $image_create_func = 'imagecreatefromgif';
                        $image_save_func = 'imagegif';
                        break;

                default: 
                        throw Exception('Unknown image type.');
        }

        $aspect_ratio = $target_width / $this->File['width'];
        $new_width = $this->File['width'] * $aspect_ratio;
        $new_height = $this->File['height'] * $aspect_ratio;
        //set new size values
        
        $old_image = $image_create_func($this->File['path']['move_path']);
        $new_image = imagecreatetruecolor($new_width, $new_height);
        //create new image pattern
        
        if($this->File['extension'] === 'png'){
            imagealphablending($new_image, false);
            imagesavealpha($new_image,true);
            $transparent = imagecolorallocatealpha($new_image, 255, 255, 255, 127);
            imagefilledrectangle($new_image, 0, 0, $new_width, $new_height, $transparent);
        }
        //fix for keeping png transpercy

        imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $this->File['width'], $this->File['height']);
        
        $image_save_func($new_image, $target_path);

    }
    
    public function handleFile(){
        
    }
    
    public function upform(){
        global $Smarty;
        $dbo = new \Core\Database('upload');
        $result = $dbo->query("SELECT * FROM ".$dbo->Table." "
                            . "WHERE file_name_md5 = '1c9a4ccc9a15be39112a55b389bfd8c41441531268.jpg' LIMIT 1");
        
        $item = $result->fetch(\PDO::FETCH_ASSOC);
            
   
        var_dump($item['file_details']);
        
        var_dump(json_decode($item['file_details']));
        
                    
        $Smarty->display('Admin/upload.tpl');
    }
    
}
