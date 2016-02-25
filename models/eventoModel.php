<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class eventoModel extends model {
    
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
    public function getEvento($where = null) {
        $select = array('e.*', 'c.descricao as cidade', 'se.descricao as statusevento');
        $tables = "evento e left join cidade c on (c.codigo  = e.id_cidade)";
        $tables .= " left join status_evento se on (se.codigo  = e.id_status)";
        return $this->read($tables, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setEvento($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updEvento($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delEvento($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
    /** Retrieve the Entity */
    public function getCountEvento($where = null) {
        $select = array('count(*) as total');
    
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }
    
    /** Retrieve the Entity */
    public function getEventoLimit($where = null, $inicio = null, $total_reg = null) {
        $select = array('e.*', 'c.descricao as cidade', 'se.descricao as statusevento');
        $tables = "evento e left join cidade c on (c.codigo  = e.id_cidade)";
        $tables .= " left join status_evento se on (se.codigo  = e.id_status)";
        $limit = $inicio . ','. $total_reg;
        return $this->read($tables, $select, $where, null, $limit, null, null);
    }

}

?>
