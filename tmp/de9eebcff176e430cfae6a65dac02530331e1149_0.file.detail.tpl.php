<?php
/* Smarty version 3.1.29, created on 2016-02-25 10:04:52
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cefbf4c8deb7_88235365',
  'file_dependency' => 
  array (
    'de9eebcff176e430cfae6a65dac02530331e1149' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/detail.tpl',
      1 => 1456230499,
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
function content_56cefbf4c8deb7_88235365 ($_smarty_tpl) {
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
                             <h1>Detalhe dos Clientes</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
</td></tr>
                                    <tr><td>Nome</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['nome'];?>
</td></tr>
                                    <tr><td>Endereco</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['endereco'];?>
</td></tr>
                                    <tr><td>Código UC</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo_uc'];?>
</td></tr>
                                    <tr><td>Código NIS</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo_nis'];?>
</td></tr>
                                    <tr><td>CPF</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['cpf'];?>
</td></tr>
                                    <tr><td>RG</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['rg'];?>
</td></tr>
                                </body>
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
