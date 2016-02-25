<?php

class cidade extends controller {
    
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

        $this->smarty->assign('title', 'Cidade');
        //call the smarty
        $this->smarty->display('cidade/index.tpl');
    }

    public function add() {
         //chama estado
        $model_estados = new estadoModel();
        $estados_res = $model_estados->getEstado(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listestado', $estados_res);
        
        
        $this->smarty->assign('title', 'Nova Cidade');
        $this->smarty->display('cidade/new.tpl');
    }

    public function save() {
        $modelcidade = new cidadeModel();
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_estado'] = $_POST['estado'];
        $modelcidade->setCidade($dados);

        header('Location: /cidade');
    }

    public function update() {
        $id = $this->getParam('id');
   
        $modelcidade = new cidadeModel();
        $dados['codigo'] = $id;
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_estado'] = $_POST['estado'];
        $modelcidade->updCidade($dados);

        header('Location: /cidade');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelcidade = new cidadeModel();
        $rescidade = $modelcidade->getCidade('c.codigo=' . $id);
        $this->smarty->assign('registro', $rescidade[0]);
        $this->smarty->assign('title', 'Detalhes Cidade');
        //call the smarty
        $this->smarty->display('cidade/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        $modelcidade = new cidadeModel();
        $rescidade = $modelcidade->getCidade('c.codigo=' . $id);
        $this->smarty->assign('registro', $rescidade[0]);
        
             //chama estado
        $model_estados = new estadoModel();
        $estados_res = $model_estados->getEstado(''); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listestado', $estados_res);
                       
        //list all records
        $model_cidade = new cidadeModel();
        $cidade_res = $model_cidade->getCidade(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listscidade', $cidade_res);
        
        
        $this->smarty->assign('title', 'Detalhes Cidade');
        //call the smarty
        $this->smarty->display('cidade/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelcidade = new cidadeModel();
        $dados['codigo'] = $id;
        $modelcidade->delCidade($dados);

        header('Location: /cidade');
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
        $model_cidade = new cidadeModel();
        $cidades_res = $model_cidade->getCidadeLimit(null,$inicio,$total_reg); 
        //var_dump($cidades_res);die();
        //send the records to template sytem
        $this->smarty->assign('listcidade', $cidades_res);
          
        $query_total = $model_cidade->getCountCidade('');
     
        $total_registros = $query_total[0]['total']; //pega o valor
        
        $html = $this->paginador($pc, $total_registros, 'cidade');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    

}

?>
