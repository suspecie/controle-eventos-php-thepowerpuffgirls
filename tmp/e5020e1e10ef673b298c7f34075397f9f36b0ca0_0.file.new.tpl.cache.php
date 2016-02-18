<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:01:29
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/operadorescomsenha/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5b299e0d9b7_84214647',
  'file_dependency' => 
  array (
    'e5020e1e10ef673b298c7f34075397f9f36b0ca0' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/operadorescomsenha/new.tpl',
      1 => 1455795767,
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
function content_56c5b299e0d9b7_84214647 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '89274855456c5b299dc4055_73085179';
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
                            <h1>Novo Operador </h1>
                            <form role="form" action="/operadorescomsenha/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="input" class="form-control" id="name" name="nome" required>
                                    
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" required>
                                    
                                    <label for="tipo_acesso">Tipo de Acesso</label>                                    
                                    <select class="form-control" name = "tipo_acesso" id = "tipo_acesso">
                                         <option value=""></option>
                                       <?php
$_from = $_smarty_tpl->tpl_vars['listtipoacesso']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_0_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_0_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
                                             <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['acessodescricao'];?>
</option>
                                       <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>
                                    </select >
                                </div>                                                                
                                <button type="submit" class="btn btn-default">Salvar</button>
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
