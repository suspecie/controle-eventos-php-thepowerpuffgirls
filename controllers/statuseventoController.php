<?php

class statusevento extends controller {

    public function index_action() {

        //list all records
        $model_statuseventos = new statuseventoModel();
        $statuseventos_res = $model_statuseventos->getStatusEvento(''); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('liststatusevento', $statuseventos_res);
        $this->smarty->assign('title', 'Status Eventos');
        //call the smarty
        $this->smarty->display('statusevento/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Novo Status Evento');
        $this->smarty->display('statusevento/new.tpl');
    }

    public function save() {
        $modelstatusevento = new statuseventoModel();
        $dados['descricao'] = $_POST['descricao'];
        $modelstatusevento->setStatusEvento($dados);

        header('Location: /statusevento');
    }

    public function update() {
        $id = $this->getParam('id');
   
        $modelstatusevento = new statuseventoModel();
        $dados['codigo'] = $id;
        $dados['descricao'] = $_POST['descricao'];
        $modelstatusevento->updStatusEvento($dados);

        header('Location: /statusevento');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelstatusevento = new statuseventoModel();
        $resstatusevento = $modelstatusevento->getStatusEvento('codigo=' . $id);
        $this->smarty->assign('registro', $resstatusevento[0]);
        $this->smarty->assign('title', 'Detalhes dos Status Eventos');
        //call the smarty
        $this->smarty->display('statusevento/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelstatusevento = new statuseventoModel();
        $resstatusevento = $modelstatusevento->getStatusEvento('codigo=' . $id);
        $this->smarty->assign('registro', $resstatusevento[0]);
        $this->smarty->assign('title', 'Detalhes dos Status Eventos');
        //call the smarty
        $this->smarty->display('statusevento/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelstatusevento = new statuseventoModel();
        $dados['codigo'] = $id;
        $modelstatusevento->delStatusEvento($dados);

        header('Location: /statusevento');
    }
    

}

?>
