<?php
/* Smarty version 3.1.29, created on 2016-02-17 16:24:08
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c4bac87831c9_50421404',
  'file_dependency' => 
  array (
    'e40e686a5069377f4688eba0efcf0499a74c3a63' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/detail.tpl',
      1 => 1455727223,
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
function content_56c4bac87831c9_50421404 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '33339646556c4bac8749c56_93978598';
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
                             <h1>Detalhes Cidade</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
</td></tr>
                                    <tr><td>Descrição</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['descricao'];?>
</td></tr>   
                                    <tr><td>Estado</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['id_estado'];?>
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

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html>
<?php }
}
