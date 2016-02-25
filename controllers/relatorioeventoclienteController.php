 <?php

class relatorioeventocliente extends controller {

    public function index_action($pagina = 1) {
        
        //list all records
        $_SESSION['pagina'] = $pagina;
        $this->smarty->assign('paginador', $this->mostraGrid());

        
        $this->smarty->assign('title', 'Relatorio Evento Cliente');
        //call the smarty
        $this->smarty->display('relatorioeventocliente/index.tpl');
    }
    
     public function buscar($pagina = 1) {
         
        //list all records
        $_SESSION['pagina'] = $pagina;
         
        $model = new model();

        $this->smarty->assign('title', 'Participantes');
        $this->smarty->assign('listevento', null);

        if (isset($_POST['evento'])) {
            
            $sql='cl.codigo>0 ';
            
            if ($_POST['evento'] != '') {
                $nome_evento= $_POST['evento'];
                $sql .= " AND e.descricao LIKE '%$nome_evento%'";                
            }if ($_POST['participante'] != '') {
                $nome_participante= $_POST['participante'];
                $sql .= " AND cl.nome LIKE '%$nome_participante%'";
            }if ($_POST['statusevento'] != '') {
                $status_evento= $_POST['statusevento'];
                $sql .= " AND se.descricao LIKE '%$status_evento%'";
            }
            
            
             //list all records
            $model_relatorioeventocliente = new relatorioeventoclienteModel();
            
            //send the records to template sytem
             $this->smarty->assign('paginador', $this->mostraGrid($sql));
            
        }
        $this->smarty->display('relatorioeventocliente/index.tpl');
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
        $model_relatorioeventocliente = new relatorioeventoclienteModel();
        $retorno = $model_relatorioeventocliente->getRelatorioeventoclienteLimit($where,$inicio,$total_reg);
        //send the records to template sytem
        $this->smarty->assign('listevento', $retorno);
        
        
        
        
            
        $query_total = $model_relatorioeventocliente->getCountRelatorioeventocliente($where);
     
        $total_registros = $query_total[0]['total']; //pega o valor
        
        $html = $this->paginador($pc, $total_registros, 'relatorioeventocliente');
        return $html;
    }
    
    public function paginacao() {
        $this->index_action($this->getParam('pagina'));
    }
    
    
    
    
    
}

?>