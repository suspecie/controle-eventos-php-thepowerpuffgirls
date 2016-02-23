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
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

 }

?>
