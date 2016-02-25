<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-02-25 15:19:27
=======
/* Smarty version 3.1.29, created on 2016-02-24 22:40:58
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produtoevento/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_56cf45af534f13_85159786',
=======
  'unifunc' => 'content_56ce5baa3e9317_31782990',
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
  'file_dependency' => 
  array (
    '2f99edc7b6b089ad174e3c918264c33a48b66d58' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produtoevento/new.tpl',
      1 => 1456334014,
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
function content_56cf45af534f13_85159786 ($_smarty_tpl) {
=======
function content_56ce5baa3e9317_31782990 ($_smarty_tpl) {
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
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
                            <h1>Novo Produto-Evento </h1>
                            <form role="form" action="/produtoevento/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                   <label for="cliente">Evento</label>
                                    <select class="form-control" name = "evento" id = "evento">
                                        <option value=""></option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['listevento']->value;
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
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>
                                    </select >
                                    <br>
                                    <label for="cliente">Produto</label>
                                    <select class="form-control" name = "produto" id = "produto">
                                        <option value=""></option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['listproduto']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_1_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_1_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['produto'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_local_item;
}
if ($__foreach_linha_1_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_item;
}
?>
                                    </select >
                                    <br>
                                    <label for="cliente">Quantidade</label>
                                    <input type="input" class="form-control" id="quantidade" name="quantidade" required>
                                    <br>
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

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html>
<?php }
}
