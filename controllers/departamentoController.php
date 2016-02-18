<?php

class departamento extends controller {

    public function index_action() {

        //list all records
        $model_departamentos = new departamentoModel();
        $departamentos_res = $model_departamentos->getDepartamento(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listdepartamento', $departamentos_res);
        $this->smarty->assign('title', 'Departamento');
        //call the smarty
        $this->smarty->display('departamento/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Novo Departamento');
        $this->smarty->display('departamento/new.tpl');
    }

    public function save() {
        $modeldepartamento = new departamentoModel();
        $dados['departamento'] = $_POST['name'];
        //$dados['created'] = date("Y-m-d H:i:s");
        //$dados['active'] = 1;
        $modeldepartamento->setDepartamento($dados);

        header('Location: /departamento');
    }

    public function update() {
        $id = $this->getParam('id');

        $modeldepartamento = new departamentoModel();
        $dados['codigo'] = $id;
        $dados['departamento'] = $_POST['name'];
        $modeldepartamento->updDepartamento($dados);

        header('Location: /departamento');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modeldepartamento = new departamentoModel();
        $resdepartamento = $modeldepartamento->getDepartamento('codigo=' . $id);
        $this->smarty->assign('registro', $resdepartamento[0]);
        $this->smarty->assign('title', 'Detalhes do Departamento');
        //call the smarty
        $this->smarty->display('departamento/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modeldepartamento = new departamentoModel();
        $resdepartamento = $modeldepartamento->getDepartamento('codigo=' . $id);
        $this->smarty->assign('registro', $resdepartamento[0]);
        $this->smarty->assign('title', 'Editar Departamento');
        //call the smarty
        $this->smarty->display('departamento/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modeldepartamento = new departamentoModel();
        $dados['codigo'] = $id;
        $modeldepartamento->delDepartamento($dados);

        header('Location: /departamento');
    }

}

?>
