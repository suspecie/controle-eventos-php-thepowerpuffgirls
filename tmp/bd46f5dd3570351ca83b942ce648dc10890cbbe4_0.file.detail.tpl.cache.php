<?php
/* Smarty version 3.1.29, created on 2016-02-18 09:45:21
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/operadorescomsenha/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5aed134c096_59832266',
  'file_dependency' => 
  array (
    'bd46f5dd3570351ca83b942ce648dc10890cbbe4' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/operadorescomsenha/detail.tpl',
      1 => 1455795684,
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
function content_56c5aed134c096_59832266 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '208213964956c5aed1317634_74097501';
?>
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
                             <h1>Operadores Details</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
</td></tr>
                                    <tr><td>Nome</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['nome'];?>
</td></tr>                                    
                                    <tr><td>Tipo de Acesso</td><td><?php echo $_smarty_tpl->tpl_vars['registro']->value['acessodescricao'];?>
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

</html><?php }
}
