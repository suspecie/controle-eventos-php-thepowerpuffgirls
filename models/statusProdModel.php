<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class statusProdModel extends model {
    
    var $tabPadrao = 'status_produto';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['status_prod'] = NULL;   
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getStatus($where = null) {
        $select = array('*');
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setStatus($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updStatus($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delStatus($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        //$array2['active'] = 0; // Muda status para zero excluido!
        //var_dump (array2);
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
    /** Retrieve the Entity */
    public function getCountStatus($where = null) {
        $select = array('count(*) as total');
    
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }
    
    /** Retrieve the Entity */
    public function getStatusLimit($where = null, $inicio = null, $total_reg = null) {
        $select = array('*');
        $limit = $inicio . ','. $total_reg;
        return $this->read($this->tabPadrao, $select, $where, null, $limit, null, null);
    }

}

?>
