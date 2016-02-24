<?php

class relatoriocliente extends controller {

    public function index_action() {

        //list all records
        $model_relatoriocliente = new relatorioclienteModel();
        $retorno = $model_relatoriocliente->getRelatoriocliente();
        //send the records to template sytem
        $this->smarty->assign('listcliente', $retorno);
        $this->smarty->assign('title', 'Relatorio Cliente');
        //call the smarty
        $this->smarty->display('relatoriocliente/index.tpl');
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
            } if ($_POST['endereco'] != '') {
                $des_evento = $_POST['endereco'];
                $sql .= " AND c.endereco LIKE '%$des_evento%'";
            }if ($_POST['codigouc'] != '') {
                $des_evento = $_POST['codigouc'];
                $sql .= " AND c.codigo_uc LIKE '%$des_evento%'";
            }if ($_POST['codigonis'] != '') {
                $des_evento = $_POST['codigonis'];
                $sql .= " AND c.codigo_nis LIKE '%$des_evento%'";
            }if ($_POST['cpf'] != '') {
                $des_evento = $_POST['cpf'];
                $sql .= " AND c.cpf LIKE '%$des_evento%'";
            }
            if ($_POST['rg'] != '') {
                $des_evento = $_POST['rg'];
                $sql .= " AND c.rg LIKE '%$des_evento%'";
            }

            //list all records
            $model_relatoriocliente = new relatorioclienteModel();
            $retorno = $model_relatoriocliente->readSQL($sql);
            //send the records to template sytem
            $this->smarty->assign('listcliente', $retorno);
        }
        $this->smarty->display('relatoriocliente/index.tpl');
    }

}

?>
