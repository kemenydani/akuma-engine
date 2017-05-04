<?php
namespace Controllers\Traits;

trait FileUploader {
   
   public function upload() {
      global $db;
      //header('Content-Type: application/json');

      $uploaded = [];
      $allowed = ['jpg', 'png', 'pdf'];

      $failed = [];
      $succeded = 0;
      
      if(!empty($_FILES['file'])){
         foreach($_FILES['file']['name'] as $key => $name){
            if($_FILES['file']['error'][$key] === 0){
            
               $temp = $_FILES['file']['tmp_name'][$key];
               $ext = explode('.', $name);
               $ext = strtolower(end($ext));

               $file = md5_file($temp) . time() . '.' . $ext;
               $path = "uploads/".$_POST['folder']."/".$file."";
               $name = strtolower(str_replace(' ', '_', $name));
               
               if(in_array(strtolower($ext), $allowed) === true && move_uploaded_file($temp, $path)){
                  
                  $db->query("INSERT INTO ".DBPREFIX."_uploads (`file_name`,`extension`, `file_path`, `date_posted`) VALUES ('".$name."','".$ext."','".$path."', NOW())");
                  
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
         
         if(!empty($_POST['ajax'])){
            echo json_encode(
               [
                   'succeded' => $succeded,
                   'failed' => $failed,
               ]     
            );
         }
         
      }
   }
}
