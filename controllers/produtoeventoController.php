<?php

class produtoevento extends controller {
   
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

        
        $this->smarty->assign('title', 'Produto Evento');
        //call the smarty
        $this->smarty->display('produtoevento/index.tpl');
    }

    public function add() {
        //list all records
        $model_produtoevento = new produtoeventoModel();
        $produtoevento_res = $model_produtoevento->getProdutoEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listprodutoevento', $produtoevento_res);
        
        //list all records
        $model_evento = new eventoModel();
        $evento_res = $model_evento->getEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $evento_res);
        
        //list all records
        $model_produto = new produtoModel();
        $produto_res = $model_produto->getProduto(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listproduto', $produto_res);
        
        $this->smarty->assign('title', 'Novo Produto Evento');
        $this->smarty->display('produtoevento/new.tpl');
    }

    public function save() {
        $modelprodutoevento = new produtoeventoModel();
        $dados['id_evento'] = $_POST['evento'];
        $dados['id_produto'] = $_POST['produto'];
        $dados['qtd'] = $_POST['quantidade'];
        $modelprodutoevento->setProdutoEvento($dados);

        header('Location: /produtoevento');
    }

    public function update() {
        $id = $this->getParam('id');
   
        $modelprodutoevento = new produtoeventoModel();
        $dados['codigo'] = $id;
        $dados['id_evento'] = $_POST['evento'];
        $dados['id_produto'] = $_POST['produto'];
        $dados['qtd'] = $_POST['quantidade'];
        $modelprodutoevento->updProdutoEvento($dados);

        header('Location: /produtoevento');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelprodutoevento = new produtoeventoModel();
        $resprodutoevento = $modelprodutoevento->getProdutoEvento('ep.codigo=' . $id);
        $this->smarty->assign('registro', $resprodutoevento[0]);
        $this->smarty->assign('title', 'Detalhes dos ProdutoEventos');
        //call the smarty
        $this->smarty->display('produtoevento/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelprodutoevento = new produtoeventoModel();
        $resprodutoevento = $modelprodutoevento->getProdutoEvento('ep.codigo=' . $id);
        $this->smarty->assign('registro', $resprodutoevento[0]);
        
         //list all records
        $model_evento = new eventoModel();
        $evento_res = $model_evento->getEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $evento_res);
        
        //list all records
        $model_produto = new produtoModel();
        $produto_res = $model_produto->getProduto(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listproduto', $produto_res);
        
        
        $this->smarty->assign('title', 'Detalhes dos ProdutoEventos');
        //call the smarty
        $this->smarty->display('produtoevento/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelprodutoevento = new produtoeventoModel();
        $dados['codigo'] = $id;
        $modelprodutoevento->delProdutoEvento($dados);

        header('Location: /produtoevento');
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
        $model_produtoevento = new produtoeventoModel();
        $produtoevento_res = $model_produtoevento->getProdutoEventoLimit(null,$inicio,$total_reg); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listprodutoevento', $produtoevento_res);
        
        
        $query_total = $model_produtoevento->getCountProdutoEvento();
        
        $total_registros = $query_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'produtoevento');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }

    
    
}

?>
