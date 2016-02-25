<?php
/* Smarty version 3.1.29, created on 2016-02-24 22:38:08
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produto/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ce5b00cfce83_43317399',
  'file_dependency' => 
  array (
    '8fa5acb220e6e912ee43d22a4379536e25e1d5ba' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produto/detail.tpl',
      1 => 1456333560,
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
function content_56ce5b00cfce83_43317399 ($_smarty_tpl) {
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
                             <h1>Detalhes do Produto</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>ID</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
</td></tr>
                                    <tr><td>Produto</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['produto'];?>
</td></tr>
                                    <tr><td>Status</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['status_prod'];?>
</td></tr>
                                    <tr><td>Departamento</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['departamento'];?>
</td></tr>
                                    <tr><td>Quantidade</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['qtd_total'];?>
</td></tr>
                                </tbody>
                            </table>                            


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
