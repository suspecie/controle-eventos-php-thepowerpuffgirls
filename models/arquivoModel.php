<?php
/** 
 * Data that needs to be copied in news Model Entitys
 */


class arquivoModel extends model {
    
    var $tabPadrao = 'arquivo';
    var $campo_chave = 'id_evento_cliente';

    // An empty structure to create news Entitys 
    public function estrutura_vazia() {
        $dados = null;
        $dados[0]['id_evento_cliente'] = NULL;
        $dados[0]['caminho_arquivo'] = NULL;
     
        return $dados;
    }

    
    /** Retrieve the Entity */
    public function getArquivo($where = null) {
        $select = array('e.*', 'c.descricao as cidade', 'se.descricao as statusarquivo');
        $tables = "arquivo e left join cidade c on (c.codigo  = e.id_cidade)";
        $tables .= " left join status_arquivo se on (se.codigo  = e.id_status)";
        return $this->read($tables, $select, $where, null, null, null, null);
    }

    /** Save a new Entity  */
    public function setArquivo($array) {

        $this->startTransaction();

        $id = $this->transaction(
                $this->insert($this->tabPadrao, $array, false)
        );

        $this->commit();

        return $id;
    }

    /** Update the Entity */
    public function updArquivo($array) {
        //Chave    
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->update($this->tabPadrao, $array, $where));
        $this->commit();
        return true;
    }

     /** Remove the Entity */
    public function delArquivo($array) {
        //Key 
        $where = $this->campo_chave . " = " . $array[$this->campo_chave];
        $this->startTransaction();
        $this->transaction($this->delete($this->tabPadrao, $where));
        $this->commit();
        return true;
    }
    
    public function uploadArquivo($arquivo){
        
        $target_dir = "arquivos/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        // Check if image file is a actual image or fake image
        
        if (isset($_POST['$arquivo'])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
    }

}

?>
