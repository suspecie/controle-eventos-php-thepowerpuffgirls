<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class clienteModel extends model {
    
    var $tabPadrao = 'cliente';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['nome'] = NULL;
        $dados[0]['senha'] = NULL;
        $dados[0]['acesso'] = NULL;        
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getCliente($where = null) {
        $select = array('*');
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setCliente($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updCliente($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delCliente($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        return $this->delete($this->tabPadrao, $where);
    }

}

?>
