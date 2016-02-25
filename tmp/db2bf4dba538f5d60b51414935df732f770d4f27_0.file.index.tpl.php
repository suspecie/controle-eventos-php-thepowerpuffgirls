<?php
/* Smarty version 3.1.29, created on 2016-02-25 11:26:41
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/index/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf0f21f3a2f6_56727798',
  'file_dependency' => 
  array (
    'db2bf4dba538f5d60b51414935df732f770d4f27' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/index/index.tpl',
      1 => 1456230499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
function content_56cf0f21f3a2f6_56727798 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 align="center">Realize seu login para acesso ao Controle de Evento</h1>
                            <form name="login" action="/login/check" method="POST" enctype="multipart/form-data">
                                <div>
                                Nome<input type="input" class="form-control" name="nome" id="nome">
                                Senha<input type="password" class="form-control" name="senha" id="senha">
                                </div>
                                <button type="submit" class="btn btn-default">Entrar</button>
                            </form>                        
                        </div>

                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html>
<?php }
}
