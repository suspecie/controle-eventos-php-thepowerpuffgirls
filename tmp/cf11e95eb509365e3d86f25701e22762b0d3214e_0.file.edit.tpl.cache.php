<?php
/* Smarty version 3.1.29, created on 2016-02-17 10:18:21
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c4650d2a5ba1_14316367',
  'file_dependency' => 
  array (
    'cf11e95eb509365e3d86f25701e22762b0d3214e' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/edit.tpl',
      1 => 1455640993,
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
function content_56c4650d2a5ba1_14316367 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '47191818056c4650d2658e3_32565467';
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
                            <h1>Color Edit</h1>
                            <form role="form" action="/color/update/id/<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input required="true" type="input" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['name'];?>
">
                                </div>  
                                <div class="form-group">
                                    <label for="name">Created</label>
                                    <input disabled type="input" class="form-control" id="created" name="created" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['created'];?>
">
                                    <input  type="hidden" class="form-control" id="created" name="created" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['created'];?>
">
                                </div> 
                                <div class="form-group">
                                    <label for="active">Active</label>                                    
                                    <select class="form-control" name = "active" id = "active">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['registro']->value['active'] == 0) {?> selected<?php }?>>Disabled</option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['registro']->value['active'] == 1) {?> selected<?php }?>>Enabled</option>                                        
                                    </select >
                                </div> 

                                <button type="submit" class="btn btn-default">Update</button>
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
