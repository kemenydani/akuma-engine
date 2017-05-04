<?php
namespace Controllers\Traits;

trait controllerExtension {
    
    public function itemExists(){
        global $db;
        
        if(isset($this->params[0])){
            $result = $db->query("SELECT * FROM ".\DBPREFIX."_".$this->table." "
                               . "WHERE " . $this->table_key . " = '" . $this->params[0] . "' LIMIT 1"); //
            $item = $result->fetch(\PDO::FETCH_ASSOC); 
           
            if($item){
               return $item;
            } else {
                return false;
            }
        } 
        return false;
    }
    
    public function isUpdateCall($formData){
        if($formData){

            if($this->update([
                 'id' => ['name' => 'news_id', 'value' => $this->params[0]],
                 'data' => $formData,
                 'table' => $this->table
            ])){
                return true;
            }

        } 
        
        return false;
        
    }
    
    public function update($formData){
        global $db;
        
        if($formData){
            
            \array_filter($formData, 'strlen');

            $query = 'UPDATE ' . DBPREFIX . '_' . $this->table . ' SET';
            $values = array();

            foreach ($formData as $name => $value) {
                $query .= ' '.$name.' = :'.$name.',';
                $values[':'.$name] = $value;
            }

            $query = substr($query, 0, -1).' ';
            $query .= "WHERE " . $this->table_key . " = " . $this->params[0] . "";

            $sth = $db->prepare($query);

            if($sth->execute($values) === true){
               return true;
            }
        }
        return false;  
    }
    
    public function insert($formData){
        global $db;
        
        if($formData){
            
            \array_filter($formData, 'strlen');
            $binds = [];
            
            foreach ($formData as $name => $value) {
                $keys .= ''.$name.', ';
                $bind_names .= ':'.$name.', ';
                $binds[':'.$name]  = $value;
            }

            $keys = substr($keys, 0, -2).'';
            $bind_names = substr($bind_names, 0, -2).'';

            $query = 'INSERT INTO ' . DBPREFIX . '_' . $this->table . ' ('.$keys.') VALUES ('.$bind_names.')';
            $sth = $db->prepare($query);

            if($sth->execute($binds) === true){
               return true;
            }
        }
        return false;  
    }
    
    public function isAjaxCall(){
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' ) {
            return true;
        } 
    }
    
    public function moveLocation($location){
        header('Location:' . BASE . $location );
    }
    
    public function manageUpdateResponse($item, $success, $errors, $template){
        global $Smarty;
        
        if($this->isAjaxCall() === true){
           die(json_encode(['item' => $item,'success' => $success,'errors' => $errors]));
           return;
        } else {
           $Smarty->assign("item", $item);
           $Smarty->assign("success", $success);
           $Smarty->assign("errors", $errors);
           $Smarty->display($this->tempdir. '/' .$template . '.tpl'); 
        }
        
    }
    
    public function view(){
        global $db, $Smarty;
        
        $result = $db->query("SELECT * FROM ".DBPREFIX."_".$this->table." "
                           . "WHERE ".$this->table_key." = '" . $this->params[0] . "' LIMIT 1");
        
        $item = $result->fetch(\PDO::FETCH_ASSOC);

        $Language = new \Core\Language();
        
        $Smarty->assign('Language', $Language);
        $Smarty->assign('item', $item);
        $Smarty->display($this->tempdir.'/_view.tpl');

    }
    
    public function all(){
        global $db, $Smarty;
        
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table."")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_".$this->table." LIMIT :limit, :perpage");
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display($this->tempdir.'/all.tpl');

    }
    
    public function admin() {
       global $Smarty;
       
       $Smarty->display($this->tempdir.'/admin.tpl');
       
    }
    
    public function manage(){
       
        $formData = filter_input_array(INPUT_POST);
	 //var_dump($formData); die();
        $items = implode(', ', $formData['choosen']);
        if(isset($formData['method'])){
	    // fixed for PHP 7.0 DEPRE.
	    \call_user_func([$this, $formData['method']], $items);
            //\call_user_method($formData['method'], $this, $items);
        }
        
        header('Location:' . $_SERVER['HTTP_REFERER']);
    }
    
    public function delete($items = null){
        
        $dbo = new \Core\Database($this->table);
        if(isset($items)){
           $dbo->deleteMultiple([$this->table_key, $items]);
           return;
        } else {
           $dbo->delete($this->table_key, $this->params[0]);
           header('Location:' . $_SERVER['HTTP_REFERER']);
        }
        
        
    }
    public function activate($items = null){
        
        $dbo = new \Core\Database($this->table);
        
        if(isset($items)){
           $dbo->prepare("UPDATE ".$dbo->Table." SET active = 1 WHERE ".$this->table_key." IN ($items)");
        } else {
           $dbo->prepare("UPDATE ".$dbo->Table." SET active = 1 WHERE ".$this->table_key." = ".$this->params[0]." ");
        }
        $dbo->execute();
        header('Location:' . $_SERVER['HTTP_REFERER']);
        return; 
        
    }
    
    public function deactivate($items = null){
        
        $dbo = new \Core\Database($this->table);
        
        if(isset($items)){
           $dbo->prepare("UPDATE ".$dbo->Table." SET active = 0 WHERE ".$this->table_key." IN ($items)");
        } else {
           $dbo->prepare("UPDATE ".$dbo->Table." SET active = 0 WHERE ".$this->table_key." = ".$this->params[0]." ");
        }
        $dbo->execute();
        header('Location:' . $_SERVER['HTTP_REFERER']);
        return; 
        
    }
    

}
