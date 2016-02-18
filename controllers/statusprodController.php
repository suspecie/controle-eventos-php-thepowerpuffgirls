<?php

class statusProd extends controller {

    public function index_action() {

        //list all records
        $model_statusprod = new statusprodModel();
        $statusprod_res = $model_statusprod->getStatus(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('liststatusprod', $statusprod_res);
        $this->smarty->assign('title', 'Status');
        //call the smarty
        $this->smarty->display('statusprod/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Novo Status');
        $this->smarty->display('statusprod/new.tpl');
    }

    public function save() {
        $modelstatusprod = new statusprodModel();
        $dados['statusprod'] = $_POST['name'];
        //$dados['created'] = date("Y-m-d H:i:s");
        //$dados['active'] = 1;
        $modelstatusprod->setStatus($dados);

        header('Location: /statusprod');
    }

    public function update() {
        $id = $this->getParam('id');

        $modelstatusprod = new statusprodModel();
        $dados['codigo'] = $id;
        $dados['statusprod'] = $_POST['name'];
        $modelstatusprod->updStatus($dados);

        header('Location: /statusprod');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelstatusprod = new statusprodModel();
        $resstatusprod = $modelstatusprod->getStatus('codigo=' . $id);
        $this->smarty->assign('registro', $resstatusprod[0]);
        $this->smarty->assign('title', 'Detalhes do Status');
        //call the smarty
        $this->smarty->display('statusprod/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelstatusprod = new statusprodModel();
        $resstatusprod = $modelstatusprod->getStatus('codigo=' . $id);
        $this->smarty->assign('registro', $resstatusprod[0]);
        $this->smarty->assign('title', 'Editar Status');
        //call the smarty
        $this->smarty->display('statusprod/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelstatusprod = new statusprodModel();
        $dados['codigo'] = $id;
        $modelstatusprod->delStatus($dados);

        header('Location: /statusprod');
    }

}

?>