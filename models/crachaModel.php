<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class crachaModel extends model {
    
    var $tabPadrao = 'cracha';
    var $campo_chave = 'codigo';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['codigo'] = NULL;
        $dados[0]['id_cliente'] = NULL;
        $dados[0]['status_cracha'] = NULL;
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getCracha($where = null) {
        $select = array('cr.*','cl.codigo as codcliente','cl.nome as nomecliente','e.descricao as evento', 'f.caminho_foto as foto');
        $tables = "cracha cr";
        $tables .= " left join cliente cl on(cl.codigo = cr.id_cliente)";
        $tables .= " left join participacao p on(p.id_cliente = cr.id_cliente)";
        $tables .= " left join evento e on(e.codigo = p.id_evento)";
        $tables .= " left join foto f on(f.id_evento_cliente = p.codigo)";
        
        $return = $this->read($tables, $select, $where, null, null, null);
        //var_dump($return); die();
        
        return $return;
    }

    /** Save a new Entity  */
    public function setCracha($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updCracha($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delCracha($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
     /** Retrieve the Entity */
    public function getCountCracha($where = null) {
        $select = array('count(*) as total');       
        return $this->read($this->tabPadrao, $select, $where, null, null, null, null);
    
    }
    
    
    /** Retrieve the Entity */
    public function getCrachaLimit($where = null, $inicio = null, $total_reg = null) {
        $select = array('cr.*','cl.codigo as codcliente','cl.nome as nomecliente','e.descricao as evento', 'f.caminho_foto as foto');
        $tables = "cracha cr";
        $tables .= " left join cliente cl on(cl.codigo = cr.id_cliente)";
        $tables .= " left join participacao p on(p.id_cliente = cr.id_cliente)";
        $tables .= " left join evento e on(e.codigo = p.id_evento)";
        $tables .= " left join foto f on(f.id_evento_cliente = p.codigo)";
        $limit = $inicio . ','. $total_reg;
        return $this->read($tables, $select, $where, null, $limit, null, null);
    }
    
    

}

?>
