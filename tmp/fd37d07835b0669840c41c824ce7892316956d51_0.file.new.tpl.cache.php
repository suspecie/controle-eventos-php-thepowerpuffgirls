<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-02-18 07:52:08
=======
/* Smarty version 3.1.29, created on 2016-02-16 14:21:22
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_56c59448e7a154_78268017',
=======
  'unifunc' => 'content_56c34c825b80f2_04497368',
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
  'file_dependency' => 
  array (
    'fd37d07835b0669840c41c824ce7892316956d51' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/new.tpl',
      1 => 1453928755,
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
<<<<<<< HEAD
function content_56c59448e7a154_78268017 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '36274794556c59448df4898_48677781';
=======
function content_56c34c825b80f2_04497368 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '204004036956c34c82583f96_15401921';
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
?>
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
                            <h1>New Color </h1>
                            <form role="form" action="/color/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="input" class="form-control" id="name" name="name" required>
                                </div>                                                                
                                <button type="submit" class="btn btn-default">Save</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html>
<?php }
}
