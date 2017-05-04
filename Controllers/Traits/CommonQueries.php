<?php
namespace Controllers\Traits;

trait CommonQueries {
    
    private $props = [];
    private $table;
    private $data;

    public function __construct($properties) {
        
        if(!empty($properties)){
           $this->detectProperty($properties);
        }
        
        if(filter_input_array(INPUT_POST)){
           $this->range = implode(', ', filter_input_array(INPUT_POST));  
        } else {
           $this->range = $this->props['rng'];
        }

    }
    
    public function className() {
         $path = explode('\\', __CLASS__);
         return array_pop($path); 
    }
    
    public function getConfig($module) {
         return include ''.\Core\MVC::$configDir.'/'.$module.'.php'; 
    }
    
    public function selfConfig(){
       $this->getConfig($this->className());
    }
    
    public function select(){
      global $db;
      
      $errors = [];
      //get the post array.
      $postData = filter_input_array(INPUT_POST);
      
      $result = $db->query("SELECT * FROM ".DBPREFIX."_".$postData['tbl']." gi LEFT JOIN ".DBPREFIX."_gallery_categories gc ON gc.cat_id = gi.cat_id ");
      $items = $result->fetchAll(\PDO::FETCH_ASSOC);

      $response = [
         'errors' => $this->props,
         'items' => $items
      ];
     
      die(json_encode($response));
      return;
      
    }
    
    public function detectProperty($properties){
        
         $valid = ['page','tbl','tar','val','rng','cat'];

         foreach($properties as $key=>$value){
            for($x = 0; $x < count($valid); $x++){
               if(is_int(strpos($value, $valid[$x]))){
                  $ex = explode('=', $value);
                  $array[$ex[0]] = $ex[1];
               }
            }
    
         }
         $this->props = $array;
         /*
         
         $parts = explode('=', $properties);
         var_dump($parts);

         for($i = 0; $i < count($parts); $i++){
             $array[$parts[$i]] = $parts[$i+1];
         }
         
         var_dump($array);

*/
         /*
         for($i = 0; $i < count($parts); $i++){
             $params[$i] = explode('=', $parts[$i]);
         }

         for($j = 0; $j < count($params); $j++){ //params count 3;
             for($x = 0; $x < 2; $x++){
                 $assoc[$params[$j][0]] = $params[$j][1];
             }
         }

         foreach($assoc as $key=>$value){
             if(!in_array($key, $valid)){
                 unset($assoc[$key]);
             } 
         }

         $this->props = $assoc;
     */
    }
    
    public function delete(){
       global $db;

       $stmt = $db->prepare("DELETE FROM ".DBPREFIX."_".$this->props['tbl']." WHERE ".$this->props['tar']." IN ($this->range)");
       $stmt->execute();
       die (json_encode(array('status' => 'success')));
       return;
          
    }
    
    public function activate(){
        global $db;
        
        $stmt = $db->prepare("UPDATE ".DBPREFIX."_".$this->props['tbl']." SET active = 1 WHERE ".$this->props['tar']." IN ($this->range)");
        $stmt->execute();
        die (json_encode(array('status' => 'success')));
        return; 
        
    }
    
    public function deactivate(){
        global $db;
        
        $stmt = $db->prepare("UPDATE ".DBPREFIX."_".$this->props['tbl']." SET active = 0 WHERE ".$this->props['tar']." IN ($this->range)");
        $stmt->execute();
        die (json_encode(array('status' => 'success')));
        return; 
        
    }

    public function feature(){
        global $db;
        
        $stmt = $db->prepare("UPDATE ".DBPREFIX."_".$this->props['tbl']." SET featured = 1 WHERE ".$this->props['tar']." IN ($this->range)");
        $stmt->execute();
        die (json_encode(array('status' => 'success')));
        return;
        
    }
    
    public function unfeature(){
        global $db;
        
        $stmt = $db->prepare("UPDATE ".DBPREFIX."_".$this->props['tbl']." SET featured = 0 WHERE ".$this->props['tar']." IN ($this->range)");
        $stmt->execute();
        die (json_encode(array('status' => 'success')));
        return;
        
    }
    
    public function categorise(){
        global $db;
        
        $stmt = $db->prepare("UPDATE ".DBPREFIX."_".$this->props['tbl']." SET cat_id = '".$this->props['cat']."' WHERE ".$this->props['tar']." IN ($this->range)");
        $stmt->execute();
        die (json_encode(array('status' => 'success')));
        return;
        
    }
    
    
}
