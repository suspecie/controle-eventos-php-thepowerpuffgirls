<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:16:26
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/evento/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf6f2ac330d3_19112785',
  'file_dependency' => 
  array (
    '57e952b3e8838d7aab5092adfc5f0415c95ee492' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/evento/edit.tpl',
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
function content_56cf6f2ac330d3_19112785 ($_smarty_tpl) {
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
                            <h1>Edição de Evento</h1>
                            <form role="form" action="/evento/update/id/<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
">

                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input required="true" type="input" class="form-control" id="descricao" name="descricao" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['descricao'];?>
">
                                </div>  
                                <div class="form-group">
                                    <label for="cidade">Cidade</label>                                    
                                    <select class="form-control" name = "cidade" id = "cidade">
                                         <option value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_cidade'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['cidade'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['listscidade']->value;
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
                                                <?php if ($_smarty_tpl->tpl_vars['linha']->value['codigo'] != $_smarty_tpl->tpl_vars['registro']->value['id_cidade']) {?>   
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</option>
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>                                                                                
                                    </select >
                                </div> 
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name = "status" id = "status">
                                         <option value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_status'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['statusevento'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['liststatusevento']->value;
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
                                                <?php if ($_smarty_tpl->tpl_vars['linha']->value['codigo'] != $_smarty_tpl->tpl_vars['registro']->value['id_status']) {?>   
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</option>
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_local_item;
}
if ($__foreach_linha_1_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_item;
}
?>                                                                                
                                    </select >
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
