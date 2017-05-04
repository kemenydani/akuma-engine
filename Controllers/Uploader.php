<?php //

namespace Controllers;

class Uploader {
    
    public static $allowed;
    public static $imageLimit = [];
    public static $thumbDir;
    public  $thumbPath;
    public $uploadDir;
    public $uploadRoot;
    public $uploadPath;
    public $uploaded = 0;
    public $failed = [];
    
    public $file;
    
    public function handleRequest(){

        $post = filter_input_array(INPUT_POST); //additional post data
        $this->uploadDir = str_replace('\\', '/', $post['upload_dir']);
        $this->uploadRoot = 'uploads/';
        
        if(!empty($_FILES['file']) && isset($this->uploadDir)){
            foreach($_FILES['file']['name'] as $key => $name){
                if($_FILES['file']['error'][$key] === 0){
                    
                    $fileInfo = new \SplFileInfo($name);
                    $this->file['temp_name'] = $_FILES['file']['tmp_name'][$key];
                    $this->file['ext'] = \strtolower($fileInfo->getExtension());
                    $this->file['old_name'] = \strtolower(str_replace(' ', '_', $name));
                    $this->file['new_name'] = md5_file($this->file['temp_name']) . time() . '.' . $this->file['ext'];
                    $this->file['move_path'] = $this->uploadDir . $this->file['new_name'];

                    
                    //if(\in_array($this->file['ext'], self::$allowed)){
                    if(\in_array($this->file['ext'], ['jpg', 'png', 'pdf', 'doc', 'docx'])){
                        
                        if(\in_array($this->file['ext'], ['jpg', 'png', 'gif'])){
                            $this->handleImage($this->file['temp_name']); //we have an image
                        } else {
                            move_uploaded_file($this->file['temp_name'], $this->file['move_path']);
                        } 
                        
                        $this->uploaded++;
                        $this->registerFile();
                        
                    } else {
                        
                        $fail = [
                            'name' => $this->file['old_name'],
                            'message' => 'The extension of this file is not allowed.'  
                        ];
                        
                        \array_push($this->failed, $fail);
                        
                    }
                    
                }
            }
            
            die(json_encode(['succeded' => $this->uploaded,'failed' => $this->failed, 'upload_path' => $this->file['move_path']]));
            return;
            
        }  
    }
    
    public function handleImage(){

        $dimensions = \getimagesize($this->file['temp_name']); 
        $this->file['width'] = $dimensions[0];
        $this->file['height'] = $dimensions[1];
        //sizes
        
        if($this->file['width'] > 250){
           move_uploaded_file($this->file['temp_name'], $this->file['move_path']);
           $this->file['thumb_name'] = 'thumbnail_' . $this->file['new_name'];
           $this->resizeUploadImage(250, $this->uploadDir . 'thumbnail_' . $this->file['new_name']);
        } else {
 
           move_uploaded_file($this->file['temp_name'], $this->file['move_path']);
           $this->file['thumb_name'] = 'thumbnail_' . $this->file['new_name'];
           copy($this->file['move_path'], 'uploads/thumbs/' . $this->file['thumb_name']);
       
        }

        
    }
    
   public function registerFile(){
        global $db;
        
        $db->query("INSERT INTO ".DBPREFIX."_uploads (`file_name`,`md5_name`,`extension`, `file_path`, `date_posted`) "
                 . "VALUES ('".$this->file['old_name']."','".$this->file['new_name']."','".$this->file['ext']."','".$this->file['move_path']."', NOW())");

        
    }
    
    public function resizeUploadImage($target_width, $target_path){

        switch ($this->file['ext']) {
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

        $aspect_ratio = $target_width / $this->file['width'];
        $new_width = $this->file['width'] * $aspect_ratio;
        $new_height = $this->file['height'] * $aspect_ratio;
        //set new size values
        
        $old_image = $image_create_func($this->file['move_path']);
        $new_image = imagecreatetruecolor($new_width, $new_height);
        //create new image pattern
        
        if($this->file['ext'] === 'png'){
            imagealphablending($new_image, false);
            imagesavealpha($new_image,true);
            $transparent = imagecolorallocatealpha($new_image, 255, 255, 255, 127);
            imagefilledrectangle($new_image, 0, 0, $new_width, $new_height, $transparent);
        }
        //fix for keeping png transpercy

        imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $this->file['width'], $this->file['height']);
        
        $image_save_func($new_image, $target_path);
        
//        $this->file['thumb_name'] = 'thumbnail_' . $this->file['new_name'];
//        $image_save_func($new_image, 'uploads/thumbs/' . $this->file['thumb_name']);
 
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function uploader(){
        global $db;
        
        $post = filter_input_array(INPUT_POST);
        $uploaded = [];
        $allowed = ['jpg', 'png', 'pdf', 'doc', 'docx'];
        $failed = [];
        $succeded = 0;

        if(!empty($_FILES['file']) && isset($post['upload_dir'])){
            foreach($_FILES['file']['name'] as $key => $name){
                if($_FILES['file']['error'][$key] === 0){
                    
                    $temp = $_FILES['file']['tmp_name'][$key];
                    
                    $dimensions = \getimagesize($temp); 
                    $width = $dimensions[0];
                    $height = $dimensions[1];
                    $ext = explode('.', $name);
                    $ext = strtolower(end($ext));
                    $file = md5_file($temp) . time() . '.' . $ext;
                    $path = $post['upload_dir'].'/'.$file."";
                    $name = strtolower(str_replace(' ', '_', $name));
                    
                    if(\in_array($ext, $allowed) === true){
                        
                      if($width > 500 && $width > 250){
                          
                          
                          $new_width = 250;
                          $new_height = ($new_width/$width)*$height;
                          
                          $new_image = imagecreatetruecolor($new_width, $new_height);
                          $old_image = imagecreatefromstring(file_get_contents($_FILES['file']['tmp_name'][$key]));
                          imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                          $thumb_path = $this->uploadRoot.'thumbs/'.'thumb_'.$file;
                          imagejpeg($new_image, $thumb_path);

                       
                      }
                      
                      move_uploaded_file($temp, $path);
                      
                      $db->query("INSERT INTO ".DBPREFIX."_uploads (`file_name`,`extension`, `file_path`, `thumb_path`, `date_posted`) VALUES ('".$name."','".$ext."','".$path."','".$thumb_path."', NOW())");

                      $succeded++;

                    } else {

                        $fail = [
                          'name' => $name,
                          'error_msg' => 'The extension of this file is not allowed.'  
                        ];

                        array_push($failed, $fail);

                    }
                }
            }

            die(json_encode(['succeded' => $succeded,'failed' => $failed]));
            return;

      }
    }
    
}
