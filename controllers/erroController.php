<<<<<<< HEAD
<?php

class erro extends controller {

    public function index_action() {
        $msg = isset($_SESSION['erro']['msg']) ? $_SESSION['erro']['msg'] : null;
        $this->smarty->assign('title', 'Oops!');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('erros/index.tpl');
    }

}

?>
=======
<<<<<<< HEAD
<?php

class erro extends controller {

    public function index_action() {
        $msg = isset($_SESSION['erro']['msg']) ? $_SESSION['erro']['msg'] : null;
        $this->smarty->assign('title', 'Oops!');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('erros/index.tpl');
    }

}

?>
=======
<?php

class erro extends controller {

    public function index_action() {
        $msg = isset($_SESSION['erro']['msg']) ? $_SESSION['erro']['msg'] : null;
        $this->smarty->assign('title', 'Oops!');
        $this->smarty->assign('msg', $msg);
        $this->smarty->display('erros/index.tpl');
    }

}

?>
>>>>>>> 8521b93384d5547801628c6cf4d9f0edfb17fb57
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
