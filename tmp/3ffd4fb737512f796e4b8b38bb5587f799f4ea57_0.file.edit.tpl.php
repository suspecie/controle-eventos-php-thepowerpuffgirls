<?php
/* Smarty version 3.1.29, created on 2016-02-25 10:04:55
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cefbf7bed7a4_07681602',
  'file_dependency' => 
  array (
    '3ffd4fb737512f796e4b8b38bb5587f799f4ea57' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/edit.tpl',
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
function content_56cefbf7bed7a4_07681602 ($_smarty_tpl) {
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
                            <h1>Editar Cliente</h1>
                            <form role="form" action="/cliente/update/id/<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
">

                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input required="true" type="input" class="form-control" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['nome'];?>
">
                                    
                                    <label for="endereco">Endereço</label>
                                    <input required="true" type="input" class="form-control" id="endereco" name="endereco" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['endereco'];?>
">
                                    
                                    
                                    <label for="codigo_uc">Código UC</label>
                                    <input required="true" type="input" class="form-control" id="codigo_nis" name="codigo_uc" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo_uc'];?>
">
                                    
                                    <label for="codigo_nis">Código NIS</label>
                                    <input required="true" type="input" class="form-control" id="codigo_uc" name="codigo_nis" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo_nis'];?>
">
                               
                                    <label for="cpf">CPF</label>
                                    <input required="true" type="input" class="form-control" id="cpf" name="cpf" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['cpf'];?>
">
                                   
                                    <label for="rg">RG</label>
                                    <input required="true" type="input" class="form-control" id="rg" name="rg" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['rg'];?>
">
                                </div>  

                                <button type="submit" class="btn btn-default">Atualizar</button>
                            </form>
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
