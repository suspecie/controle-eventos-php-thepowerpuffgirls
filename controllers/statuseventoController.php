<?php

class statusevento extends controller {

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
        $model_statuseventos = new statuseventoModel();
        $statuseventos_res = $model_statuseventos->getStatusEventoLimit(null,$inicio,$total_reg); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('liststatusevento', $statuseventos_res);
       
        
        $query_total = $model_statuseventos->getCountStatusEvento();
        
        $total_registros = $query_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'statusevento');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    
    

}

?>
