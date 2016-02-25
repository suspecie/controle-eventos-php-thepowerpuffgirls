<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class produtoModel extends model {
    
    var $tabPadrao = 'produtos';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['produto'] = NULL;
        $dados[0]['id_status'] = NULL;
        $dados[0]['codigo_departamento'] = NULL;
        $dados[0]['qtd_total'] = NULL;
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getProduto($where = null) {
        $select = array('p.*', 'd.departamento', 's.status_prod');
        $tables = 'produtos p left join departamentos d on (p.codigo_departamento = d.codigo)';
        $tables .= 'left join status_produto s on (p.id_status = s.codigo)';
        return $this->read($tables, $select, $where, null, null, null, null);
        
        
    }

    /** Save a new Entity  */
    public function setProduto($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updProduto($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delProduto($array) {
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
    public function getCountProduto($where = null) {
        $select = array('count(*) as total');
    
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    }
    
    /** Retrieve the Entity */
    public function getProdutoLimit($where = null, $inicio = null, $total_reg = null) {
        $select = array('p.*', 'd.departamento', 's.status_prod');
        $tables = 'produtos p left join departamentos d on (p.codigo_departamento = d.codigo)';
        $tables .= 'left join status_produto s on (p.id_status = s.codigo)';
        $limit = $inicio . ','. $total_reg;
        return $this->read($tables, $select, $where, null, $limit, null, null);
    }

}

?>
