<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class loginModel extends model {
    
    var $tabPadrao = 'operadorescomsenha';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['nome'] = NULL;
        $dados[0]['senha'] = NULL;
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getLogin($where = null) {
        $select = array('*');
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

//    /** Save a new Entity  */
//    public function setEstado($array) {
//
//        $this->startTransaction();
//
//        $id = $this->transaction(
//                $this->insert($this->tabPadrao, $array, false)
//        );
//
//        $this->commit();
//
//        return $id;
//    }
//
//    /** Update the Entity */
//    public function updEstado($array) {
//        //Chave    
//        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
//        $this->startTransaction();
//        $this->transaction($this->update($this->tabPadrao, $array, $where));
//        $this->commit();
//        return true;
//    }
//
//     /** Remove the Entity */
//    public function delEstado($array) {
//        //Key 
//        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
//        //$array2['active'] = 0; // Muda status para zero excluido!
//        //var_dump (array2);
//        $this->startTransaction();
//        $this->transaction($this->delete($this->tabPadrao, $where));
//        $this->commit();
//        return true;
//    }
//
}

?>
