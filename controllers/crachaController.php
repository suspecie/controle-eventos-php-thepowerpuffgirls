<?php

class cracha extends controller {

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

      
        $this->smarty->assign('title', 'Cracha');
        //call the smarty
        $this->smarty->display('cracha/index.tpl');
    }

    

    public function buscar() {
        
        $modelcracha = new crachaModel();
        $dados['id_cliente'] = $_POST['cliente'];
        $modelparticipacao = new participacaoModel();
        $participacaores = $modelparticipacao->getParticipacao('p.id_cliente=' . $dados['id_cliente']);
        
        if ($participacaores) {
            $crachares = $modelcracha->getCracha('cr.id_cliente=' . $participacaores[0]['id_cliente']);
        }else{
            $crachares = array();
        }
 

        if ($participacaores && !$crachares) {
            $data['id_cliente'] = $dados['id_cliente'];
            $data['status_cracha'] = 1;
            $id = $modelcracha->setCracha($data);
            
            $rescracha = $modelcracha->getCracha('cr.codigo=' . $id);
            $this->smarty->assign('registro', $rescracha[0]);
            $this->smarty->display('cracha/emissao.tpl');
        } else {

            if ($crachares) {
                $this->smarty->assign('error', 'O crachá já foi emitido!');
                   $this->smarty->assign('paginador', $this->mostraGrid());
                $this->smarty->display('cracha/index.tpl');
            } else {

                $this->smarty->assign('error', 'O cliente não participa de nenhum evento, portanto não é possível emitir o crachá!');
               
                 $this->smarty->assign('paginador', $this->mostraGrid());
                $this->smarty->display('cracha/index.tpl');
            }
        }
    }

    public function update() {
        $id = $this->getParam('id');

        $modelcracha = new crachaModel();
        $dados['codigo'] = $id;
        $dados['descricao'] = $_POST['descricao'];
        $dados['id_estado'] = $_POST['estado'];
        $modelcracha->updCracha($dados);

        header('Location: /cracha');
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
        $model_crachas = new crachaModel();
        $crachas_res = $model_crachas->getCrachaLimit(null,$inicio,$total_reg);
        //var_dump($crachas_res);die();
        //send the records to template sytem
        $this->smarty->assign('listcracha', $crachas_res);
        
           
        $query_total = $model_crachas->getCountCracha();
     
        $total_registros = $query_total[0]['total']; //pega o valor
        
        $html = $this->paginador($pc, $total_registros, 'cidade');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    
    public function add() {
        //chama cliente
        $model_cliente = new clienteModel();
        $cliente_res = $model_cliente->getCliente(); //Full table Scan :( or :)         
        //send the records to template sytem
        $this->smarty->assign('listcliente', $cliente_res);
        
        $this->smarty->assign('title', 'Nova Emissão');
        $this->smarty->display('cracha/new.tpl');
    }


}

?>
