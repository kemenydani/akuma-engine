<?php

namespace Controllers\Traits;

trait Layout {
    
    public function defaultAddLayout($criterias = null){
        global $Smarty;
        
        $formData = filter_input_array(INPUT_POST);
        $errors = [];
        $cfg = new \Core\Config($this->name);
        $dbo = new \Core\Database($this->table);

        if($formData){

	    foreach($formData as $field_name => $field_value){
		if(array_key_exists($field_name, $criterias)){
		    foreach($criterias[$field_name] as $criteria){
			$error = $this->Validate($field_name, $field_value, $criteria);
			if($error){
			    $errors[$field_name][] = $error;
			}
		    }
		}
	    }

            if(empty($errors)){
               $dbo->insert($formData);
               $Smarty->assign('message', 'Succesfully added!');
            } else {
	       $Smarty->assign('data', $formData);
               $Smarty->assign('errors', $errors);
            }
            
        }
        
        $Smarty->assign('fields', $cfg->Fields);
        $Smarty->display('Admin/_default_edit_form_fields.tpl');
    }
    
    public function defaultEditLayout($criterias = null){
        global $Smarty;

        $this->id = $this->params[0];
        $formData = \filter_input_array(\INPUT_POST);
        $dbo = new \Core\Database($this->table);
        $cfg = new \Core\Config($this->name);
	$dbo->query('SELECT * FROM '.$dbo->Table.' WHERE '.$this->table_key.' = '.$this->id.' ');
        $item = $dbo->fetch();
	
	if($item === false){ 
	    header('Location:' . BASE . $this->name .'/admin/' );	    
	};
	
	if($formData){
	    
	    foreach($formData as $field_name => $field_value){
		if(array_key_exists($field_name, $criterias)){
		    foreach($criterias[$field_name] as $criteria){
			$error = $this->Validate($field_name, $field_value, $criteria, $item[$field_name]);
			if($error){
			    $errors[$field_name][] = $error;
			}
		    }
		}
	    }
	    
	    if(empty($errors)){
               $dbo->update($formData, $this->table_key, $this->id);
               $Smarty->assign('message', 'Succesfully edited!');
            } else {
	       $Smarty->assign('data', $formData);
               $Smarty->assign('errors', $errors);
            }
	    
	}
        
        $Smarty->assign("fields", $cfg->Fields);
        $Smarty->assign("item", $item);
        $Smarty->display('Admin/_default_edit_form_fields.tpl');
        
    }
    
    public function Validate($field_key, $field_value, $field_criteria, $self_value = null){

	switch($field_criteria) {
	    case 'required':
		if(strlen((string)$field_value) === 0){
		    $error = "This field is required.";
		}
		break;
	    case 'unique':
		if(!($self_value == $field_value)){
		    $dbo = new \Core\Database($this->table);
		    $dbo->query('SELECT * FROM '.$dbo->Table.' WHERE '.$field_key.' = "'.$field_value.'"');
		    if($dbo->rowCount() > 0){
			$error = "Already exists";
		    }
		}
		break;
	    case 'min':
		
		break;
	    case 'max':
		
		break;
	}
	
	return $error;
	
    }

    public function defaultListLayout($options = null){
        global $Smarty;
  
        $cfg = new \Core\Config($this->name);
        $dbo = new \Core\Database($this->table);
        
        \Core\Search::$column_prefix = 'main';
        $seo = new \Core\Search();
        $seo->detectSearchRequest();

        if(isset($seo->SqlOrder)){
            $or = $seo->SqlOrder;
        } elseif(isset($options['order_field'])) {
            $or = ' ORDER BY main.'.$options['order_field'].' '.$options['order_dir'].'';
        } else {
            $or = '';
        }
        $dbo->Sql = 'SELECT main.* FROM '.$dbo->Table.' main' . $seo->SqlWhere . $or;
        
        $dbo->Binds = $seo->createPDOBinds();
        $dbo->prepare();
        $dbo->bindParams();
        $dbo->execute();

        if($found_rows = $dbo->rowCount()){
           
            if($options['pages']){
               $pgo = new \Core\Pagination();
               $pgo->paginate($this->page, $this->perpage, $found_rows);
               $dbo->Sql .= ' LIMIT :startrecord, :limit';
            }

            $dbo->prepare();
            $dbo->bindParams();
            $dbo->bindParam('startrecord', $pgo->Start);
            $dbo->bindParam('limit', $pgo->Limit);
            $dbo->execute();
            
            $cfg->Fields = $seo->setValues($cfg->Fields);
            $items = $dbo->fetchAll();
            $Smarty->assign('pagination', $pgo->getDetails());
            
        }
        
        $Smarty->assign('searchurl', $seo->GetUrl);
        $Smarty->assign('fields', $cfg->Fields);
        $Smarty->assign('items', $items);
        if($options['display']['table']){
           $Smarty->assign('table', $options['display']['table']);  
        }
        $Smarty->display($options['display']['tpl'].'.tpl');

    }
    
}