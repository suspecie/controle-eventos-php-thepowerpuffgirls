<?php
/* Smarty version 3.1.29, created on 2016-02-25 09:25:18
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produtoevento/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cef2ae268f17_28639561',
  'file_dependency' => 
  array (
    '79c00b5c6a14f43dae15808beff62a55ca94a8f0' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produtoevento/index.tpl',
      1 => 1456364734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/sidebar.tpl' => 1,
    'file:produtoevento/index_grid.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
function content_56cef2ae268f17_28639561 ($_smarty_tpl) {
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
                            <h1>Vincular Produto ao Evento</h1>
                            <p>Este cadastro irá inserir a quantidade de produto e quais produtos serão entregues no evento.s</p>                            
                            <a href="/produtoevento/add" class="btn btn-default" id="btn_novo">Novo</a>
                            <br>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:produtoevento/index_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
     <?php echo '<script'; ?>
 src="/files/js/produtoevento/index.js"><?php echo '</script'; ?>
>

    </body>

</html>
<?php }
}
