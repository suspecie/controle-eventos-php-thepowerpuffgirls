<?php

class cidade extends controller {
    
    public function __construct() {
        parent::__construct();
        include 'controllers/loginController.php';
        $valida = new login();
        $valida->sessao_valida();
    }
    
    public function index_action() {

        //list all records
        $model_cidades = new cidadeModel();
        $cidades_res = $model_cidades->getCidade(''); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listcidade', $cidades_res);
        $this->smarty->assign('title', 'Cidade');
        //call the smarty
        $this->smarty->display('cidade/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Nova Cidade');
        $this->smarty->display('cidade/new.tpl');
    }

    public function save() {
        $modelcidade = new cidadeModel();
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_estado'] = $_POST['estado'];
        $modelcidade->setCidade($dados);

        header('Location: /cidade');
    }

    public function update() {
        $id = $this->getParam('id');
   
        $modelcidade = new cidadeModel();
        $dados['codigo'] = $id;
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_estado'] = $_POST['estado'];
        $modelcidade->updCidade($dados);

        header('Location: /cidade');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelcidade = new cidadeModel();
        $rescidade = $modelcidade->getCidade('codigo=' . $id);
        $this->smarty->assign('registro', $rescidade[0]);
        $this->smarty->assign('title', 'Detalhes Cidade');
        //call the smarty
        $this->smarty->display('cidade/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelcidade = new cidadeModel();
        $rescidade = $modelcidade->getCidade('codigo=' . $id);
        $this->smarty->assign('registro', $rescidade[0]);
        $this->smarty->assign('title', 'Detalhes Cidade');
        //call the smarty
        $this->smarty->display('cidade/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelcidade = new cidadeModel();
        $dados['codigo'] = $id;
        $modelcidade->delCidade($dados);

        header('Location: /cidade');
    }
    

}

?>
