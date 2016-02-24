<?php

class cliente extends controller {

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
        //send the records to template sytem
        $this->smarty->assign('title', 'Cliente');
        //call the smarty
        $this->smarty->display('cliente/index.tpl');
    }
    
      public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    
    public function mostraGrid() {
        $total_reg = "10"; // número de registros por página
        $pagina = $_SESSION['pagina'];
        if (!$pagina) {
            $pc = "1";
        } else {
            $pc = $pagina;
        }
        $inicio = $pc - 1;
        $inicio = $inicio * $total_reg;
        //Busca os registros para o Grid
        $model = new model(); 

        $qry_limitada = $model->readSQL("SELECT * FROM cliente LIMIT $inicio,$total_reg");
        $this->smarty->assign('listcliente', $qry_limitada);
        // Total de Registros na tabela    
        $qry_total = $model->readSQL("SELECT count(*)as total FROM cliente");
        $total_registros = $qry_total[0]['total']; //pega o valor
        $html = $this->paginador($pc, $total_registros, 'cliente');
        return $html;
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
