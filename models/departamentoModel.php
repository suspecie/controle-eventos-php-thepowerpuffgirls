<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class departamentoModel extends model {
    
    var $tabPadrao = 'departamentos';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['departamento'] = NULL;       
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getDepartamento($where = null) {
        $select = array('*');
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setDepartamento($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updDepartamento($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delDepartamento($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        //$array2['active'] = 0; // Muda status para zero excluido!
        //var_dump (array2);
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }

}

?>
