<?php

class relatorioeventocliente extends controller {

    public function index_action() {

        //list all records
        $model_relatorioeventocliente = new relatorioeventoclienteModel();
        $retorno=$model_relatorioeventocliente->getRelatorioeventocliente();
        //send the records to template sytem
        $this->smarty->assign('listevento',$retorno);
        $this->smarty->assign('title', 'Relatorio Evento Cliente');
        //call the smarty
        $this->smarty->display('relatorioeventocliente/index.tpl');
    }
}

?>
