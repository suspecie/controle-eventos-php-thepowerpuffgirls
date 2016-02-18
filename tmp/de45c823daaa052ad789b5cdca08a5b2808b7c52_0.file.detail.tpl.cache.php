<?php
/* Smarty version 3.1.29, created on 2016-02-17 14:42:15
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c4a2e7a0adb5_40991254',
  'file_dependency' => 
  array (
    'de45c823daaa052ad789b5cdca08a5b2808b7c52' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/detail.tpl',
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
function content_56c4a2e7a0adb5_40991254 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '22565945056c4a2e79c3df8_21560718';
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
                             <h1>Color Details</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>id</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
</td></tr>
                                    <tr><td>name</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['name'];?>
</td></tr>
                                    <tr><td>created</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['created'];?>
</td></tr>
                                    <tr><td>active</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['active'];?>
</td>  </tr>                                
                                </tbody>
                            </table>                            


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
