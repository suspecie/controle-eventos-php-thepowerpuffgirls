<?php

class relatoriocliente extends controller {

    public function index_action() {

        //list all records
        $model_relatoriocliente = new relatorioclienteModel();
        $retorno=$model_relatoriocliente->getRelatoriocliente();
        //send the records to template sytem
        $this->smarty->assign('listcliente',$retorno);
        $this->smarty->assign('title', 'Relatorio Cliente');
        //call the smarty
        $this->smarty->display('relatoriocliente/index.tpl');
    }
}

?>
