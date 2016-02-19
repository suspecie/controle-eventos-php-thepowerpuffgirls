<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class participacaoModel extends model {
    
    var $tabPadrao = 'participacao';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['id_cliente'] = NULL;
        $dados[0]['id_evento'] = NULL;
        $dados[0]['data_hora'] = NULL;        
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getParticipacao($where = null) {
        $select = array('p.*', 'c.nome as cliente', 'e.descricao as evento');
        $tables = "participacao p left join cliente c on (c.codigo  = p.id_cliente)";
        $tables .= " left join evento e on (e.codigo  = p.id_evento)";
        return $this->read($tables, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setParticipacao($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updParticipacao($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delParticipacao($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
 
}

?>
