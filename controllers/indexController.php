<?php

class index extends controller {
    
        public function __construct() {
        parent::__construct();
        include 'controllers/loginController.php';
        $valida = new login();
        $valida->sessao_valida();
        
        }
    

    public function index_action() {   
            
         $this->smarty->display('index/index.tpl');
    }
    
 
}