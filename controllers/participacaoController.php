<?php

class participacao extends controller {

    public function index_action() {

        //list all records
        $model_participacoes = new participacaoModel();
        $participacoes_res = $model_participacoes->getParticipacao(''); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listparticipacao', $participacoes_res);
        $this->smarty->assign('title', 'Participações');
        //call the smarty
        $this->smarty->display('participacao/index.tpl');
    }

    public function add() {
        //list all records
        $model_cliente = new clienteModel();
        $cliente_res = $model_cliente->getCliente(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listcliente', $cliente_res);
        
        //list all records
        $model_evento = new eventoModel();
        $evento_res = $model_evento->getEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $evento_res);
        
        $this->smarty->assign('title', 'Nova Participação');
        $this->smarty->display('participacao/new.tpl');
    }

    public function save() {
        $modelparticipacao = new participacaoModel();
        $dados['id_cliente'] = $_POST['cliente'];
        $dados['id_evento'] = $_POST['evento'];
        $dados['data_hora'] = $_POST['datahora'];
        $modelparticipacao->setParticipacao($dados);
        
        $modelarquivo= new arquivoModel();
        $dados['id_cliente'] = $_POST['cliente'];
        $dados['id_evento'] = $_POST['evento'];
        $dados['data_hora'] = $_POST['datahora'];
        $modelparticipacao->setParticipacao($dados);

        header('Location: /participacao');
    }

    public function update() {
        $id = $this->getParam('id');
   
        $modelparticipacao = new participacaoModel();
        $dados['codigo'] = $id;
        $dados['id_cliente'] = $_POST['cliente'];
        $dados['id_evento'] = $_POST['evento'];
        $dados['data_hora'] = $_POST['datahora'];
        $modelparticipacao->updParticipacao($dados);

        header('Location: /participacao');
    }

    public function detalhes() {
        $id = $this->getParam('id');
        $modelparticipacao = new participacaoModel();
        $resparticipacao = $modelparticipacao->getParticipacao('p.codigo=' . $id);
        $this->smarty->assign('registro', $resparticipacao[0]);
        $this->smarty->assign('title', 'Detalhes dos Participações');
        //call the smarty
        $this->smarty->display('participacao/detail.tpl');
    }

    public function edit() {
       
        //die();
        $id = $this->getParam('id');
        
        //list all records
        $modelparticipacao = new participacaoModel();
        $resparticipacao = $modelparticipacao->getParticipacao('p.codigo=' . $id);
        $this->smarty->assign('registro', $resparticipacao[0]);
        
        //list all records
        $model_cliente = new clienteModel();
        $cliente_res = $model_cliente->getCliente(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listcliente', $cliente_res);
        
        //list all records
        $model_evento = new eventoModel();
        $evento_res = $model_evento->getEvento(); //Full table Scan :( or :)   
        //send the records to template sytem
        $this->smarty->assign('listevento', $evento_res);
        
        $this->smarty->assign('title', 'Detalhes dos Participações');
        //call the smarty
        $this->smarty->display('participacao/edit.tpl');
    }

    public function delete() {

        $id = $this->getParam('id');
        $modelparticipacao = new participacaoModel();
        $dados['codigo'] = $id;
        $modelparticipacao->delParticipacao($dados);

        header('Location: /participacao');
    }

    
    
}

?>