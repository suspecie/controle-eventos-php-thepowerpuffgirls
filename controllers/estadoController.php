<?php

class estado extends controller {
    
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

       
        $this->smarty->assign('title', 'Estado');
        //call the smarty
        $this->smarty->display('estado/index.tpl');
    }

    public function add() {
        $this->smarty->assign('title', 'Novo Estado');
        $this->smarty->display('estado/new.tpl');        
    }

    public function save() {
        $modelestado = new estadoModel();
        $dados['estado'] = $_POST['name'];
        //$dados['created'] = date("Y-m-d H:i:s");
        //$dados['active'] = 1;
        $modelestado->setEstado($dados);

        header('Location: /estado');
    }

    public function update() {
        $id = $this->getParam('id');

        $modelestado = new estadoModel();
        $dados['codigo'] = $id;
        $dados['estado'] = $_POST['name'];
        $modelestado->updEstado($dados);

        header('Location: /estado');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelestado = new estadoModel();
        $resestado = $modelestado->getEstado('codigo=' . $id);
        $this->smarty->assign('registro', $resestado[0]);
        $this->smarty->assign('title', 'Detalhes do Estado');
        //call the smarty
        $this->smarty->display('estado/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelestado = new estadoModel();
        $resestado = $modelestado->getEstado('codigo=' . $id);
        $this->smarty->assign('registro', $resestado[0]);
        $this->smarty->assign('title', 'Editar Estado');
        //call the smarty
        $this->smarty->display('estado/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelestado = new estadoModel();
        $dados['codigo'] = $id;
        $modelestado->delEstado($dados);

        header('Location: /estado');
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
        $model_estados = new estadoModel();
        $estados_res = $model_estados->getEstadoLimit(null,$inicio,$total_reg); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listestado', $estados_res);
       
        
        $query_total = $model_estados->getCountEstado();
        
        $total_registros = $query_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'estado');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    

}

?>
