<?php

class evento extends controller {
   
    public function __construct() {
        parent::__construct();
        include 'controllers/loginController.php';
        $valida = new login();
        $valida->sessao_valida();
    }
    
    public function index_action() {

        //list all records
        $model_eventos = new eventoModel();
        $eventos_res = $model_eventos->getEvento(''); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $eventos_res);
        $this->smarty->assign('title', 'Eventos');
        //call the smarty
        $this->smarty->display('evento/index.tpl');
    }

    public function add() {
        //list all records
        $model_statuseventos = new statuseventoModel();
        $statuseventos_res = $model_statuseventos->getStatusEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('liststatusevento', $statuseventos_res);
        
        //list all records
        $model_cidade = new cidadeModel();
        $cidade_res = $model_cidade->getCidade(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listscidade', $cidade_res);
        
        $this->smarty->assign('title', 'Novo Evento');
        $this->smarty->display('evento/new.tpl');
    }

    public function save() {
        $modelevento = new eventoModel();
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_cidade'] = $_POST['cidade'];
        $dados['id_status'] = $_POST['status'];
        $modelevento->setEvento($dados);

        header('Location: /evento');
    }

    public function update() {
        $id = $this->getParam('id');
   
        $modelevento = new eventoModel();
        $dados['codigo'] = $id;
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_cidade'] = $_POST['cidade'];
        $dados['id_status'] = $_POST['status'];
        $modelevento->updEvento($dados);

        header('Location: /evento');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelevento = new eventoModel();
        $resevento = $modelevento->getEvento('e.codigo=' . $id);
        $this->smarty->assign('registro', $resevento[0]);
        $this->smarty->assign('title', 'Detalhes dos Eventos');
        //call the smarty
        $this->smarty->display('evento/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelevento = new eventoModel();
        $resevento = $modelevento->getEvento('e.codigo=' . $id);
        $this->smarty->assign('registro', $resevento[0]);
        
        $model_statuseventos = new statuseventoModel();
        $statuseventos_res = $model_statuseventos->getStatusEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('liststatusevento', $statuseventos_res);
        
        //list all records
        $model_cidade = new cidadeModel();
        $cidade_res = $model_cidade->getCidade(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listscidade', $cidade_res);
        
        
        $this->smarty->assign('title', 'Detalhes dos Eventos');
        //call the smarty
        $this->smarty->display('evento/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelevento = new eventoModel();
        $dados['codigo'] = $id;
        $modelevento->delEvento($dados);

        header('Location: /evento');
    }

    
    
}

?>
