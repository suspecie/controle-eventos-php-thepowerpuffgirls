<?php

class statusProd extends controller {

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

        
        $this->smarty->assign('title', 'Status');
        //call the smarty
        $this->smarty->display('statusprod/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Novo Status');
        $this->smarty->display('statusprod/new.tpl');
    }

    public function save() {
        $modelstatusprod = new statusProdModel();
        $dados['status_prod'] = $_POST['name'];
        //$dados['created'] = date("Y-m-d H:i:s");
        //$dados['active'] = 1;
        $modelstatusprod->setStatus($dados);

        header('Location: /statusprod');
    }

    public function update() {
        $id = $this->getParam('id');

        $modelstatusprod = new statusProdModel();
        $dados['codigo'] = $id;
        $dados['status_prod'] = $_POST['name'];
        $modelstatusprod->updStatus($dados);

        header('Location: /statusprod');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelstatusprod = new statusProdModel();
        $resstatusprod = $modelstatusprod->getStatus('codigo=' . $id);
        $this->smarty->assign('registro', $resstatusprod[0]);
        $this->smarty->assign('title', 'Detalhes do Status');
        //call the smarty
        $this->smarty->display('statusprod/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelstatusprod = new statusProdModel();
        $resstatusprod = $modelstatusprod->getStatus('codigo=' . $id);
        $this->smarty->assign('registro', $resstatusprod[0]);
        $this->smarty->assign('title', 'Editar Status');
        //call the smarty
        $this->smarty->display('statusprod/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelstatusprod = new statusProdModel();
        $dados['codigo'] = $id;
        $modelstatusprod->delStatus($dados);

        header('Location: /statusprod');
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
        $model_statusprod = new statusProdModel();
        $statusprod_res = $model_statusprod->getStatusLimit(null,$inicio,$total_reg); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('liststatusprod', $statusprod_res);
        
  
        $query_total = $model_statusprod->getCountStatus();
        
        $total_registros = $query_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'statusprod');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }

}

?>
