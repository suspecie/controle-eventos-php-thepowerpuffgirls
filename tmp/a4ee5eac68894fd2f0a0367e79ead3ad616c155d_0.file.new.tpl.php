<?php
/* Smarty version 3.1.29, created on 2016-02-25 15:09:07
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produto/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf4343b59256_40650387',
  'file_dependency' => 
  array (
    'a4ee5eac68894fd2f0a0367e79ead3ad616c155d' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produto/new.tpl',
      1 => 1456332646,
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
function content_56cf4343b59256_40650387 ($_smarty_tpl) {
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
                            <h1>Novo Produto </h1>
                            <form role="form" action="/produto/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Produto</label>
                                    <input type="input" class="form-control" id="name" name="name" required>
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value=""></option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['listastatusprod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lista_0_saved_item = isset($_smarty_tpl->tpl_vars['lista']) ? $_smarty_tpl->tpl_vars['lista'] : false;
$_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['lista']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
$__foreach_lista_0_saved_local_item = $_smarty_tpl->tpl_vars['lista'];
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['lista']->value['codigo'];?>
><?php echo $_smarty_tpl->tpl_vars['lista']->value['status_prod'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['lista'] = $__foreach_lista_0_saved_local_item;
}
if ($__foreach_lista_0_saved_item) {
$_smarty_tpl->tpl_vars['lista'] = $__foreach_lista_0_saved_item;
}
?>
                                    </select>
                                    <label for="depto">Departamento</label>
                                    <select class="form-control" id="departamento" name="departamento">
                                    <option value=""></option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['listadeptoprod']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lista_1_saved_item = isset($_smarty_tpl->tpl_vars['lista']) ? $_smarty_tpl->tpl_vars['lista'] : false;
$_smarty_tpl->tpl_vars['lista'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['lista']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lista']->value) {
$_smarty_tpl->tpl_vars['lista']->_loop = true;
$__foreach_lista_1_saved_local_item = $_smarty_tpl->tpl_vars['lista'];
?>
                                        <option value=<?php echo $_smarty_tpl->tpl_vars['lista']->value['codigo'];?>
><?php echo $_smarty_tpl->tpl_vars['lista']->value['departamento'];?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['lista'] = $__foreach_lista_1_saved_local_item;
}
if ($__foreach_lista_1_saved_item) {
$_smarty_tpl->tpl_vars['lista'] = $__foreach_lista_1_saved_item;
}
?>
                                    </select>
                                    <br>
                                    <label for="name">Quantidade</label>
                                    <input type="input" class="form-control" id="quantidade" name="quantidade" required>
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
