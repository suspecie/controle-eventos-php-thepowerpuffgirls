<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class produtoeventoModel extends model {
    
    var $tabPadrao = 'evento_produto';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['id_evento'] = NULL;
        $dados[0]['id_produto'] = NULL;
        $dados[0]['qtd'] = NULL;        
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getProdutoEvento($where = null) {
        $select = array(' ep.*', 'e.descricao as evento', 'prod.produto as produto', 'prod.qtd_total as qtdtotal');
        $tables = "evento_produto ep left join evento e on (e.codigo = ep.id_evento)";
        $tables .= "left join produtos prod on (prod.codigo = ep.id_produto)";
        return $this->read($tables, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setProdutoEvento($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updProdutoEvento($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delProdutoEvento($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }

}

?>
