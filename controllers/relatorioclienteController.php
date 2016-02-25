<?php

class relatoriocliente extends controller {

    public function index_action($pagina = 1) {
        
        //list all records

        $_SESSION['pagina'] = $pagina;
        $this->smarty->assign('paginador', $this->mostraGrid());

       
        $this->smarty->assign('title', 'Relatorio Cliente');
        //call the smarty
        $this->smarty->display('relatoriocliente/index.tpl');
    }


     public function buscar($pagina = 1) {
         
         //list all records
        $_SESSION['pagina'] = $pagina;
       
        $model = new model();

        $this->smarty->assign('title', 'Participantes');
        $this->smarty->assign('listcliente', null);

        if (isset($_POST['nome'])) {

            
            $sql = 'c.codigo>0 ';
            
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
            
            
            //send the records to template sytem
             $this->smarty->assign('paginador', $this->mostraGrid($sql));
        }
        $this->smarty->display('relatoriocliente/index.tpl');
    }
    
    public function mostraGrid($where = null){
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
        $model_relatoriocliente = new relatorioclienteModel();
        $retorno = $model_relatoriocliente->getRelatorioclienteLimit($where,$inicio,$total_reg);
        //send the records to template sytem
        $this->smarty->assign('listcliente', $retorno);
        
        
            
        $query_total = $model_relatoriocliente->getCountRelatoriocliente($where);
     
        $total_registros = $query_total[0]['total']; //pega o valor
        
        $html = $this->paginador($pc, $total_registros, 'relatoriocliente');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }


}

?>