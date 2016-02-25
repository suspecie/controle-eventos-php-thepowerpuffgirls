<?php
/* Smarty version 3.1.29, created on 2016-02-24 19:44:43
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatorioeventocliente/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ce325bd4fd22_31759286',
  'file_dependency' => 
  array (
    'ccd95313a3c99639bbe8799c34aca5beea8c3c70' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatorioeventocliente/index.tpl',
      1 => 1456230499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/sidebar.tpl' => 1,
    'file:relatorioeventocliente/index_grid.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
function content_56ce325bd4fd22_31759286 ($_smarty_tpl) {
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
                      <h1>Relatorio de Eventos</h1>
                            <p>Eventos Cadastrados - (Participantes)</p>          
                                </p>                            
                            <br>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:relatorioeventocliente/index_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
 src="/files/js/relatorioeventocliente/index.js"><?php echo '</script'; ?>
>

    </body>

</html>
<?php }
}
