<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class relatorioclienteModel extends model {
    
    var $tabPadrao = 'cliente';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['nomecliente'] = NULL;  
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getRelatoriocliente($where = null) {
        $select = array('*');
        $tables = "cliente c";
        return $this->read($tables, $select, $where, null, null, null, null);
    }
    
    /** Retrieve the Entity */
    public function getCountRelatoriocliente($where = null) {
        $select = array('count(*) as total');    
        $tables = "cliente c";
        return $this->read($tables, $select, $where, null, null, null, null);
    
    }
    
    
    /** Retrieve the Entity */
    public function getRelatorioclienteLimit($where = null, $inicio = null, $total_reg = null) {
       $select = array('*');
       $tables = "cliente c";
        $limit = $inicio . ','. $total_reg;
        return $this->read($tables, $select, $where, null, $limit, null, null);
    }

 }

?>