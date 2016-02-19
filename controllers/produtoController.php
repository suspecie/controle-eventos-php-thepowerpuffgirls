<?php

class produto extends controller {
   
    public function __construct() {
        parent::__construct();
        include 'controllers/loginController.php';
        $valida = new login();
        $valida->sessao_valida();
    }
    
    public function index_action() {

        //list all records
        $model_produtos = new produtoModel();
        $produtos_res = $model_produtos->getProduto(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listproduto', $produtos_res);
        $this->smarty->assign('title', 'Produto');
        //call the smarty
        $this->smarty->display('produto/index.tpl');
    }

    public function add() {
        //chama status
        $model_statusprod = new statusProdModel();
        $status_res = $model_statusprod->getStatus(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listastatusprod', $status_res);
        
        //chama depto
        $model_deptoprod = new departamentoModel();
        $dpto_res = $model_deptoprod->getDepartamento('');
        $this->smarty->assign('listadeptoprod', $dpto_res);
        
        $this->smarty->assign('title', 'Novo Produto');
        $this->smarty->display('produto/new.tpl');
    }

    public function save() {
        $modelproduto = new produtoModel();
        $dados['produto'] = $_POST['name'];
        $dados['id_status'] = $_POST['status'];
        $dados['codigo_departamento'] = $_POST['departamento'];
        //$dados['created'] = date("Y-m-d H:i:s");
        //$dados['active'] = 1;
        $modelproduto->setProduto($dados);

        header('Location: /produto');
    }

    public function update() {
        $id = $this->getParam('id');

        $modelproduto = new produtoModel();
        $dados['codigo'] = $id;
        $dados['produto'] = $_POST['name'];
        $dados['id_status'] = $_POST['status'];
        $dados['codigo_departamento'] = $_POST['departamento'];
        $modelproduto->updProduto($dados);

        header('Location: /produto');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelproduto = new produtoModel();
        $resproduto = $modelproduto->getProduto('p.codigo=' . $id);
        $this->smarty->assign('registro', $resproduto[0]);
        $this->smarty->assign('title', 'Detalhes do Produto');
        //call the smarty
        $this->smarty->display('produto/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelproduto = new produtoModel();
        $resproduto = $modelproduto->getProduto('p.codigo=' . $id);
        $this->smarty->assign('registro', $resproduto[0]);
        
           //chama status
        $model_statusprod = new statusProdModel();
        $status_res = $model_statusprod->getStatus(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listastatusprod', $status_res);
        
        //chama depto
        $model_deptoprod = new departamentoModel();
        $dpto_res = $model_deptoprod->getDepartamento('');
        $this->smarty->assign('listadeptoprod', $dpto_res);

        
        $this->smarty->assign('title', 'Editar Produto');
        //call the smarty
        $this->smarty->display('produto/edit.tpl');
        
        
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelproduto = new produtoModel();
        $dados['codigo'] = $id;
        $modelproduto->delProduto($dados);

        header('Location: /produto');
    }

}

?>
