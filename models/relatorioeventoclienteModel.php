<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class relatorioeventoclienteModel extends model {
    
    var $tabPadrao = 'evento';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['descricao'] = NULL;  
        $dados[0]['id_cidade'] = NULL;  
        $dados[0]['id_status'] = NULL;  
        return $dados;
    }
  
    /** Retrieve the Entity */
    public function getRelatorioeventocliente($where = null) {
        $select = array('e.*', 'c.descricao as cidade', 'se.descricao as statusevento', 'cl.nome as nomecliente');
        $tables = "evento e left join cidade c on (c.codigo  = e.id_cidade)";
        $tables .= " left join status_evento se on (se.codigo  = e.id_status)";
        $tables .= " left join participacao p on(p.id_evento = e.codigo)";
        $tables .= " left join cliente cl on(cl.codigo = p.id_cliente)";
        return $this->read($tables, $select, $where, null, null, null, null);
    }
    
    /** Retrieve the Entity */
    public function getCountRelatorioeventocliente($where = null) {
        $select = array('count(*) as total');    
         $tables = "evento e left join cidade c on (c.codigo  = e.id_cidade)";
        $tables .= " left join status_evento se on (se.codigo  = e.id_status)";
        $tables .= " left join participacao p on(p.id_evento = e.codigo)";
        $tables .= " left join cliente cl on(cl.codigo = p.id_cliente)";
        return $this->read($tables, $select, $where, null, null, null, null);
    
    }
    
    
    /** Retrieve the Entity */
    public function getRelatorioeventoclienteLimit($where = null, $inicio = null, $total_reg = null) {
       $select = array('e.*', 'c.descricao as cidade', 'se.descricao as statusevento', 'cl.nome as nomecliente');
        $tables = "evento e left join cidade c on (c.codigo  = e.id_cidade)";
        $tables .= " left join status_evento se on (se.codigo  = e.id_status)";
        $tables .= " left join participacao p on(p.id_evento = e.codigo)";
        $tables .= " left join cliente cl on(cl.codigo = p.id_cliente)";
        $limit = $inicio . ','. $total_reg;
        return $this->read($tables, $select, $where, null, $limit, null, null);
    }


 }

?>