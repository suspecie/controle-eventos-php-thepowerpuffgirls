<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:37:50
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cracha/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf742e203803_07816086',
  'file_dependency' => 
  array (
    'f9cecc88aaf5c905d373aa563ed8583a7b64538e' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cracha/index_grid.tpl',
      1 => 1456433097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf742e203803_07816086 ($_smarty_tpl) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listcracha']->value;
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
            <tr>                                                                
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['nomecliente'];?>
</td>
                <?php if (!isset($_smarty_tpl->tpl_vars['linha']) || !is_array($_smarty_tpl->tpl_vars['linha']->value)) $_smarty_tpl->smarty->ext->_var->createLocalArrayVariable($_smarty_tpl, 'linha');
if ($_smarty_tpl->tpl_vars['linha']->value['statuscracha'] = 1) {?>
                    <td>Emitido</td> 
                <?php } else { ?>
                    <td>Não Emitido</td> 
                <?php }?>
                
            </tr>
        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
            <tr><td colspan="100%">Nenhum Registro</td></tr>
        <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>          
    </tbody>
</table>
<div class="row">
    <div class="col-md-4">
        <h4><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></h4>
    </div>  

</div>
<?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>


<?php }
}
