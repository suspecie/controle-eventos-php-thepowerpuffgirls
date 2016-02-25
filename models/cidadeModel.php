<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class cidadeModel extends model {
    
    var $tabPadrao = 'cidade';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['descricao'] = NULL;
        $dados[0]['id_estado'] = NULL;
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getCidade($where = null) {
        $select = array('c.*','e.estado as estado');
        $tables = "cidade c left join estado e on (c.id_estado = e.codigo)";
        $return = $this->read($tables, $select, $where, null, null, null);
        //var_dump($return); die();
        
        return $return;
    }

    /** Save a new Entity  */
    public function setCidade($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updCidade($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delCidade($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }

}

?>
