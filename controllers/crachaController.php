<?php

class cracha extends controller {

    public function __construct() {
        parent::__construct();
        include 'controllers/loginController.php';
        $valida = new login();
        $valida->sessao_valida();
    }

    public function index_action() {

        //list all records
        $model_crachas = new crachaModel();
        $crachas_res = $model_crachas->getCracha();
        //var_dump($crachas_res);die();
        //send the records to template sytem
        $this->smarty->assign('listcracha', $crachas_res);
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
                  $crachas_res = $modelcracha->getCracha();
                 $this->smarty->assign('listcracha', $crachas_res);
                $this->smarty->display('cracha/index.tpl');
            } else {

                $this->smarty->assign('error', 'O cliente não participa de nenhum evento, portanto não é possível emitir o crachá!');
               
                $crachas_res = $modelcracha->getCracha();
                 $this->smarty->assign('listcracha', $crachas_res);
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

}

?>
