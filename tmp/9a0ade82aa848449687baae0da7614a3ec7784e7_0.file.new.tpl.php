<?php
/* Smarty version 3.1.29, created on 2016-02-24 22:26:05
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/estado/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ce582dd40734_87149869',
  'file_dependency' => 
  array (
    '9a0ade82aa848449687baae0da7614a3ec7784e7' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/estado/new.tpl',
      1 => 1456230499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/sidebar.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
function content_56ce582dd40734_87149869 ($_smarty_tpl) {
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
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <h1>Novo Estado </h1>
                            <form role="form" action="/estado/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Estado</label>
                                    <input type="input" class="form-control" id="name" name="name" required>
                                </div>                                                                
                                <button type="submit" class="btn btn-default">Salvar</button>
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
