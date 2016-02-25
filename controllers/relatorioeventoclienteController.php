<?php

class relatorioeventocliente extends controller {

    public function index_action() {

        //list all records
        $model_relatorioeventocliente = new relatorioeventoclienteModel();
        $retorno = $model_relatorioeventocliente->getRelatorioeventocliente();
        //send the records to template sytem
        $this->smarty->assign('listevento', $retorno);
        $this->smarty->assign('title', 'Relatorio Evento Cliente');
        //call the smarty
        $this->smarty->display('relatorioeventocliente/index.tpl');
    }
    
     public function buscar() {
        $model = new model();

        $this->smarty->assign('title', 'Participantes');
        $this->smarty->assign('listcliente', null);

        if (isset($_POST['nome'])) {
            $sql = ""
                    . " SELECT "
                    . " * "
                    . " FROM cliente c "
                    . " WHERE c.codigo>0 ";
            if ($_POST['nome'] != '') {
                $nome_cliente = $_POST['nome'];
                $sql .= " AND c.nome LIKE '%$nome_cliente%'";
                
            }
            
            //list all records
            $model_relatorioeventocliente = new relatorioeventoclienteModel();
            $retorno = $model_relatorioeventocliente->readSQL($sql);
            //send the records to template sytem
            $this->smarty->assign('listcliente', $retorno);
        }
        $this->smarty->display('relatorioeventocliente/index.tpl');
    }
}

?>
