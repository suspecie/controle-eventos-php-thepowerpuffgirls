<?php

class cliente extends controller {

    public function index_action() {

        //list all records
        $model_clientes = new clienteModel();
        $clientes_res = $model_clientes->getCliente(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listcliente', $clientes_res);
        $this->smarty->assign('title', 'Cliente');
        //call the smarty
        $this->smarty->display('cliente/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Novo Cliente');
        $this->smarty->display('cliente/new.tpl');
    }

    public function save() {
        $modelcliente = new clienteModel();
        $dados['nome'] = $_POST['nome'];
        $dados['endereco'] = $_POST['endereco'];
        $dados['codigo_uc'] = $_POST['codigo_uc'];
        $dados['codigo_nis'] = $_POST['codigo_nis'];
        $dados['cpf'] = $_POST['cpf'];
        $dados['rg'] = $_POST['rg'];       
        $modelcliente->setCliente($dados);

        header('Location: /cliente');
    }

    public function update() {
        $id = $this->getParam('id');
        
         

        $modelcliente = new clienteModel();
        $dados['codigo'] = $id;
        $dados['nome'] = $_POST['nome'];     
        $dados['endereco'] = $_POST['endereco'];
        $dados['codigo_uc'] = $_POST['codigo_uc'];
        $dados['codigo_nis'] = $_POST['codigo_nis'];
        $dados['cpf'] = $_POST['cpf'];
        $dados['rg'] = $_POST['rg'];   
        $modelcliente->updCliente($dados);

        header('Location: /cliente');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelcliente = new clienteModel();
        $rescliente = $modelcliente->getCliente('codigo=' . $id);
        $this->smarty->assign('registro', $rescliente[0]);
        $this->smarty->assign('title', 'Cliente Detalhes');
        //call the smarty
        $this->smarty->display('cliente/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelcliente = new clienteModel();
        $rescliente = $modelcliente->getCliente('codigo=' . $id);
        $this->smarty->assign('registro', $rescliente[0]);
        $this->smarty->assign('title', 'Cliente Detalhes');
        //call the smarty
        $this->smarty->display('cliente/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelcliente = new clienteModel();
        $dados['codigo'] = $id;
        $modelcliente->delCliente($dados);

        header('Location: /cliente');
    }

}

?>
