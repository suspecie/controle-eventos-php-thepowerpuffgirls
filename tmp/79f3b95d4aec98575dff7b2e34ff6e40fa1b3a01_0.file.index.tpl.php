<?php
/* Smarty version 3.1.29, created on 2016-02-24 22:26:32
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cidade/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ce584842d8e7_73899507',
  'file_dependency' => 
  array (
    '79f3b95d4aec98575dff7b2e34ff6e40fa1b3a01' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cidade/index.tpl',
      1 => 1456359038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/sidebar.tpl' => 1,
    'file:cidade/index_grid.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
function content_56ce584842d8e7_73899507 ($_smarty_tpl) {
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
                            <h1>Cidade</h1>
                            <p>Este cadastro irá inserir a cidade onde ocorrerá o evento.</p>                            
                            <a href="/cidade/add" class="btn btn-default" id="btn_novo">Novo</a>
                            <br>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:cidade/index_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
 src="/files/js/cidade/index.js"><?php echo '</script'; ?>
>

    </body>

</html>
<?php }
}
