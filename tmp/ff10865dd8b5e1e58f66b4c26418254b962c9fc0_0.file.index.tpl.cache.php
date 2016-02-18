<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-02-18 10:41:17
=======
/* Smarty version 3.1.29, created on 2016-02-17 07:48:19
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_56c5bbed5a30f1_16616046',
=======
  'unifunc' => 'content_56c441e3c86a29_96934053',
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
  'file_dependency' => 
  array (
    'ff10865dd8b5e1e58f66b4c26418254b962c9fc0' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index.tpl',
<<<<<<< HEAD
      1 => 1455703808,
=======
      1 => 1453928755,
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/sidebar.tpl' => 1,
    'file:color/index_grid.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_56c5bbed5a30f1_16616046 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '49652472256c5bbed56c924_70285237';
?>

=======
function content_56c441e3c86a29_96934053 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '175941428956c441e3c202a0_07199539';
?>
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Color</h1>
                            <p>This example access the database. use the script chayotedb.sql and configure the config.php to use.
                                </p>                            
                            <a href="/color/add" class="btn btn-default" id="btn_novo">New Color</a>
                            <br>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:color/index_grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            
            
            


        </div>
        <!-- /#wrapper -->

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
     <?php echo '<script'; ?>
 src="/files/js/color/index.js"><?php echo '</script'; ?>
>

    </body>

</html>
<?php }
}
