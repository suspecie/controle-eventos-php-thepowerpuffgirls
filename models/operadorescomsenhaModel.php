<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class operadorescomsenhaModel extends model {
    
    var $tabPadrao = 'operadorescomsenha';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['nome'] = NULL;
        $dados[0]['endereco'] = NULL;
        $dados[0]['codigo_uc'] = NULL;   
        $dados[0]['codigo_nis'] = NULL;   
        $dados[0]['cpf'] = NULL;           
        $dados[0]['rg'] = NULL;   
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getoperadorescomsenha($where = null) {
        $select = array('o.*','t.acessodescricao');
        $tables = 'operadorescomsenha o LEFT JOIN tipodeacesso t on(o.tipo_acesso = t.codigo)';
        return $this->read($tables, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setoperadorescomsenha($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
       }

    /** Update the Entity */
    public function updoperadorescomsenha($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function deloperadorescomsenha($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
    /** Retrieve the Entity */
    public function getoperadorescomsenhaLimit($where = null, $inicio = null, $total_reg = null) {
        $select = array('o.*','t.acessodescricao');
        $tables = 'operadorescomsenha o LEFT JOIN tipodeacesso t on(o.tipo_acesso = t.codigo)';
        $limit = $inicio . ','. $total_reg;
        return $this->read($tables , $select, $where, null, $limit, null, null);
    }
    
    /** Retrieve the Entity */
    public function getCountoperadorcomsenha($where = null) {
        $select = array('count(*) as total');
    
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }

}

?>
