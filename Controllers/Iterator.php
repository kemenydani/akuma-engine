<?php
namespace Controllers;

class Iterator extends Uploader {
    
    public $params;
    public $maxDepth;
    public $uploadRoot;
    
    public function __construct() {
        //$this->uploadRoot = 'uploads/';
        $this->uploadRoot = 'uploads/';
        $this->maxDepth = 0;
    }
    
    public function delete(){
        $post = filter_input_array(INPUT_POST);
        $dbo = new \Core\Database('upload');

        for($i = 0; $i < count($post['selectedItems']); $i++){
            
            $result = $dbo->query("SELECT * FROM ".$dbo->Table." WHERE file_name_md5 = '" . $post['selectedItems'][$i]['filename'] . "' LIMIT 1");
            $item = $result->fetch(\PDO::FETCH_ASSOC);    
            $details = json_decode($item['file_details'], true);

            $dbo->delete('file_name_md5', $post['selectedItems'][$i]['filename']);
            
            unlink($details['path']['move_path']);
            
            if(isset($details['path']['thumb_path'])){
                unlink($details['path']['thumb_path']);
            }
            
        }

        die(json_encode([$details]));
    }
   
    public function Browse(){
        global $db;
        
        $dbo = new \Core\Database('upload');
        
        $dir = $this->uploadRoot;
        
        $data = filter_input_array(INPUT_POST);
        
        if(isset($data['dir'])){
           $dir = $data['dir'];
        }

        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST );
        $iterator->setMaxDepth($this->maxDepth);
        
        foreach ( $iterator as $part ) {
     
                if($part->isDir()){
                    
                    $response['content'][] = [
                       'type' => $part->getType(),
                       'filename' => $part->getFilename(),
                       'extension' => $part->getExtension(),
                       'size' => $part->getSize(),
                       'absolute_path' => $part->getRealPath(),
                       'relative_path' => $part->getPathname(),
                       'depth' => $iterator->getDepth()
                    ];
                   
                } else {
                    $result = $dbo->query("SELECT * FROM ".$dbo->Table." "
                            . "WHERE file_name_md5 = '" . $part->getFilename() . "' LIMIT 1");
        
                    $item = $result->fetch(\PDO::FETCH_ASSOC);
                    
                    $details = json_decode($item['file_details'], true);
                    
                    $response['content'][] = [
                       'type' => $part->getType(),
                       'filename' => $part->getFilename(),
                       'extension' => $part->getExtension(),
                       'thumb_img' => BASE . $details['path']['thumb_path'],
                       'title' => $details['filename'],
                       'date_uploaded' => $item['date_uploaded'],
                       'filetype' => $details['file_type'],
                       'filesize' => round(($details['file_size']/1000000),2),
                       'size' => $part->getSize(),
                       'absolute_path' => $part->getRealPath(),
                       'relative_path' => str_replace('\\', '/', $part->getPathname()),
                       'depth' => $iterator->getDepth(),
                    ];
                   
                }

        }
        
        $response['current'] = $iterator->getInnerIterator()->key(); 
        
        if(strtolower($iterator->getInnerIterator()->key())!= strtolower($this->uploadRoot)){
           $response['previous'] = preg_replace('/\W\w+\s*(\W*)$/', '$1', $iterator->getInnerIterator()->key());
        } 
        
        //var_dump($response);
        die(json_encode($response));
        return;

    } 

}

//                $part->getFilename()
//                $part->getExtension()
//                $part->getSize()
//                $part->getBasename() = $part->getFilename()
//                $part->getPathname()
//                $part->getType()
//                $part->getLinkTarget() = $part->getRealPath() - $part->getPathname()
//                $part->isFile()
//                $part->isDir()
//                $part->isFile()