<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:15:27
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cidade/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf6eef9a2374_67114542',
  'file_dependency' => 
  array (
    '18de7013ec5a08d4420a00d80abb650b337b3185' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cidade/edit.tpl',
      1 => 1456434118,
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
function content_56cf6eef9a2374_67114542 ($_smarty_tpl) {
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
                            <h1>Edição Cidade</h1>
                            <form role="form" action="/cidade/update/id/<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
">

                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input required="true" type="input" class="form-control" id="descricao" name="descricao" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['descricao'];?>
" required>
                                    <br>
                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                        <select class="form-control" name = "estado" id = "estado" required>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_estado'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['estado'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['listestado']->value;
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
                                                <?php if ($_smarty_tpl->tpl_vars['linha']->value['codigo'] != $_smarty_tpl->tpl_vars['registro']->value['id_estado']) {?>   
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['estado'];?>
</option>
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>  
                                        </select>  
                                        </select>
                                        <br>
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

</html><?php }
}
