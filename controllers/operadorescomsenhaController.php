<?php

class operadorescomsenha extends controller {

    public function index_action() {

        //list all records
        $model_operadorescomsenha = new operadorescomsenhaModel();
        $operadorescomsenha_res = $model_operadorescomsenha->getoperadorescomsenha(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listoperadorescomsenha', $operadorescomsenha_res);
        $this->smarty->assign('title', 'Operadores');
        //call the smarty
        $this->smarty->display('operadorescomsenha/index.tpl');
    }

    public function add() {
        $model_tipoacesso=new tipoacessoModel();
        $tipoacesso_res=$model_tipoacesso->getTipoacesso();
        $this->smarty->assign('listtipoacesso', $tipoacesso_res);
        
        $this->smarty->assign('title', 'Novo Operador');
        $this->smarty->display('operadorescomsenha/new.tpl');
    }

    public function save() {
        $modeloperadorescomsenha = new operadorescomsenhaModel();
        $dados['nome'] = $_POST['nome'];
        $dados['senha'] = $_POST['senha'];
        $dados['tipo_acesso'] = $_POST['tipo_acesso'];
        $modeloperadorescomsenha->setoperadorescomsenha($dados);

        header('Location: /operadorescomsenha');
    }

    public function update() {
        $id = $this->getParam('id');
        $modeloperadorescomsenha = new operadorescomsenhaModel();
        $dados['codigo'] = $id;
        $dados['nome'] = $_POST['nome'];
        $dados['senha'] = $_POST['senha'];
        $dados['tipo_acesso'] = $_POST['tipo_acesso'];
        $modeloperadorescomsenha->updoperadorescomsenha($dados);

        header('Location: /operadorescomsenha');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modeloperadorescomsenha = new operadorescomsenhaModel();
        $resoperadorescomsenha = $modeloperadorescomsenha->getoperadorescomsenha('o.codigo=' . $id);
        $this->smarty->assign('registro', $resoperadorescomsenha[0]);
        $this->smarty->assign('title', 'Operadores Detalhes');
        //call the smarty
        $this->smarty->display('operadorescomsenha/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelcliente = new operadorescomsenhaModel();
        $rescliente = $modelcliente->getoperadorescomsenha('o.codigo=' . $id);
        $this->smarty->assign('registro', $rescliente[0]);
        $model_tipoacesso=new tipoacessoModel();
        $tipoacesso_res=$model_tipoacesso->getTipoacesso();
        $this->smarty->assign('listtipoacesso', $tipoacesso_res);       
        $this->smarty->assign('title', 'Operadores Detalhes');
        //call the smarty
        $this->smarty->display('operadorescomsenha/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelcliente = new operadorescomsenhaModel();
        $dados['codigo'] = $id;
        $modelcliente->deloperadorescomsenha($dados);

        header('Location: /operadorescomsenha');
    }

}

?>