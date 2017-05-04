<?php
namespace Controllers;

class Matches {

    use Traits\controllerExtension;
    use Traits\Layout;

    public $dbh;
    public $params;
    public $name = 'Matches';
    public $tempdir = 'Matches';
    public $table = 'matches';
    public $table_key = 'match_id';
    public $perpage = 8;

    public function index() {
        $this->all();
    }

    public function admin(){
        $this->page = $this->params[0];
        $this->defaultListLayout([
            'table' => $this->table,
            'pages' => true,
            'search' => true,
            'order_field' => 'match_id',
            'order_dir' => 'DESC',
            'display' => [
                'tpl' => 'Admin/_match_item_list',
                'table' => [
                    ['key'=>'match_id', 'title' => 'Id'],
                    ['key'=>'enemy_name', 'title' => 'Enemy team'],
                    ['key'=>'home_team_id', 'title' => 'Home team'],
                    ['key'=>'date_created', 'title' => 'Date Created'],
                ]
            ]
            
        ]);
  
    }
    
    public function add(){
        global $db, $Smarty;
        
        $formData = filter_input_array(INPUT_POST);
        $error = [];
        $cfg = new \Core\Config($this->name);
        $dbo = new \Core\Database($this->table);
        
        if($formData){
            
            if(empty($error)){
                $maps = [];
                if(isset($formData['map'])){
                    for($i = 0; $i < count($formData['map']); $i++){
                        
                        if(isset($formData['map'][$i]['name'])){
                            $name = $formData['map'][$i]['name'];
                        } else {
                            $name = "";
                        }
                        if(isset($formData['map'][$i+1]['home_score'])){
                            $home_score = $formData['map'][$i+1]['home_score'];
                        } else {
                            $home_score = '';
                        }
                        if(isset($formData['map'][$i+2]['enemy_score'])){
                            $enemy_score = $formData['map'][$i+2]['enemy_score'];
                        } else {
                            $enemy_score = '';
                        }
                        
                        $maps[] = [
                            'name' => (string)$name,
                            'home_score' => $home_score,
                            'enemy_score' => $enemy_score
                        ];
                        
                        $i+=2;

                    }
                } 
                
                $formData['map'] = $maps;

                $home_total = 0;
                $enemy_total = 0;

                foreach($maps as $map => $details){
                    $home_total += (int)$details['home_score'];
                    $enemy_total += (int)$details['enemy_score'];
                }

                $formData['home_score'] = $home_total;
                $formData['enemy_score'] = $enemy_total;
                
                
                $dbo->insert($formData);
                $Smarty->assign('message', 'Succesfully created!');
            } else {
               die (json_encode(['error' => true, 'message' => 'Something went wrong']));
            }
            
        }
        
        $Smarty->assign('fields', $cfg->Fields);
        $Smarty->display('Admin/_default_edit_form_fields.tpl');
    }
    
    public function edit(){
                global $Smarty;

        $this->id = $this->params[0];
        $formData = \filter_input_array(\INPUT_POST);
        $dbo = new \Core\Database($this->table);
        $cfg = new \Core\Config($this->name);

        $dbo->query('SELECT * FROM '.$dbo->Table.' WHERE '.$this->table_key.' = '.$this->id.' ');
        $item = $dbo->fetch();
        
        if(($item) === false)
            header('Location:' . BASE . $this->name .'/admin/' );

        $maps = [];
        if(isset($formData['map'])){
            for($i = 0; $i < count($formData['map']); $i++){

                if(isset($formData['map'][$i]['name'])){
                    $name = $formData['map'][$i]['name'];
                } else {
                    $name = "";
                }
                if(isset($formData['map'][$i+1]['home_score'])){
                    $home_score = $formData['map'][$i+1]['home_score'];
                } else {
                    $home_score = '';
                }
                if(isset($formData['map'][$i+2]['enemy_score'])){
                    $enemy_score = $formData['map'][$i+2]['enemy_score'];
                } else {
                    $enemy_score = '';
                }

                $maps[] = [
                    'name' => (string)$name,
                    'home_score' => $home_score,
                    'enemy_score' => $enemy_score
                ];

                $i+=2;

            }
        } 

        if(\filter_input_array(\INPUT_POST)){
            $formData['map'] = $maps;
            
            $home_total = 0;
            $enemy_total = 0;
            
            foreach($maps as $map => $details){
                $home_total += (int)$details['home_score'];
                $enemy_total += (int)$details['enemy_score'];
            }
            
            $formData['home_score'] = $home_total;
            $formData['enemy_score'] = $enemy_total;
            
            if($dbo->update($formData, $this->table_key, $this->id)){
                $Smarty->assign('message', 'Succesfully edited!');
            }
        }
        $Smarty->assign("fields", $cfg->Fields);
        $Smarty->assign("item", $item);
        $Smarty->assign("errors", $errors);
        $Smarty->display('Admin/_default_edit_form_fields.tpl');
        
    }
    
    public function all(){
        global $db, $Smarty;
   
        $total = $db->query("SELECT COUNT(*) as rows FROM ".DBPREFIX."_".$this->table."")->fetch(\PDO::FETCH_OBJ);
        $pages = \ceil($total->rows / $this->perpage);
        
        $current = isset($this->params[0]) ? $this->params[0] : 1;
        $range  = $this->perpage * ($current - 1);

        $stmt = $db->prepare("SELECT * FROM ".DBPREFIX."_matches ORDER BY match_id DESC LIMIT :limit, :perpage");
        $stmt->bindParam(':limit', $range, \PDO::PARAM_INT);
        $stmt->bindParam(':perpage', $this->perpage, \PDO::PARAM_INT);
        
        $stmt->execute();
        $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
        
        $Smarty->assign('total', $total->rows);
        $Smarty->assign('pages', $pages);
        $Smarty->assign('current', $current);
        $Smarty->assign('items', $items);
        $Smarty->display('Matches/_default_item_list.tpl');

    }


}