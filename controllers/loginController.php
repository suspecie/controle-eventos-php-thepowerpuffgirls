<?php

class login extends controller {

    public function check() {
        if (isset($_POST['nome'])) {
            $usuario = $_POST['nome'];
        } else {
            $usuario = null;
        }

        if (isset($_POST['senha'])) {
           $senha = $_POST['senha'];
        } else {
            $senha = null;
        }

//list all records
        $model_login = new loginModel();
        $login_res = $model_login->getLogin("nome='" . $usuario . "' and senha='" . $senha . "'"); //Full table Scan :( or :)

        if (sizeof($login_res) > 0) {
            $usuario_res = $login_res[0]['nome'];
            $senha_res = $login_res[0]['senha'];

            if ($usuario == $usuario_res) {
                if ($senha == $senha_res) {
                    $this->sessao_grava($usuario_res);
                    $this->smarty->display('home/home.tpl');
                } else {
                    $msg_login = 'Usuario ou senha inválido!';
                    $this->smarty->display('index/index.tpl');
                }
            } else {
                $msg_login = 'Usuario ou senha inválido!';
                $this->smarty->display('index/index.tpl');
            }
        } else {
            $msg_login = 'Usuario ou senha inválido!';
            $this->smarty->display('index/index.tpl');
        }
    }

    public function sessao_grava($usuario_res) {
        $_SESSION['nome'] = $usuario_res;
    }

    public function sessao_valida() {
        $retorno = false;
        if (isset($_SESSION['nome']) && ($_SESSION['nome'] != null)) {
            $retorno = true;
        } else {
             
            $this->smarty->display('index/index.tpl');
            die();
        }
        return $retorno;
    }

    public function sessao_limpa() {
        unset($_SESSION['nome']);
    }

//
}

?>
