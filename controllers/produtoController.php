<?php

class produto extends controller {
   
    public function __construct() {
        parent::__construct();
        include 'controllers/loginController.php';
        $valida = new login();
        $valida->sessao_valida();
    }
    
    public function index_action($pagina = 1) {

        //list all records
        $_SESSION['pagina'] = $pagina;

        $this->smarty->assign('paginador', $this->mostraGrid());


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
        $dados['qtd_total'] = $_POST['quantidade'];
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
        $dados['qtd_total'] = $_POST['quantidade'];
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
    
    
    public function mostraGrid(){
        $total_reg = "10"; // número de registros por página
        $pagina = $_SESSION['pagina'];
        if (!$pagina) {
            $pc = "1";
        } else {
            $pc = $pagina;
        }
        
        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        
         //list all records
        $model_produtos = new produtoModel();
        $produtos_res = $model_produtos->getProdutoLimit(null,$inicio,$total_reg); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listproduto', $produtos_res);
        
        
        $query_total = $model_produtos->getCountProduto();
        
        $total_registros = $query_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'produto');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    

}

?>
