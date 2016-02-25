<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class statuseventoModel extends model {
    
    var $tabPadrao = 'status_evento';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['descricao'] = NULL;
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getStatusEvento($where = null) {
        $select = array('*');
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setStatusEvento($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updStatusEvento($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delStatusEvento($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
    /** Retrieve the Entity */
    public function getCountStatusEvento($where = null) {
        $select = array('count(*) as total');
    
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }
    
    /** Retrieve the Entity */
    public function getStatusEventoLimit($where = null, $inicio = null, $total_reg = null) {
        $select = array('*');
        $limit = $inicio . ','. $total_reg;
        return $this->read($this->tabPadrao, $select, $where, null, $limit, null, null);
    }
    
    

}

?>
