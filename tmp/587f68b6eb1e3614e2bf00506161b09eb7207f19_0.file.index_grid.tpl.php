<?php
/* Smarty version 3.1.29, created on 2016-02-24 22:28:31
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/departamento/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ce58bfb827d8_03175222',
  'file_dependency' => 
  array (
    '587f68b6eb1e3614e2bf00506161b09eb7207f19' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/departamento/index_grid.tpl',
      1 => 1456360388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ce58bfb827d8_03175222 ($_smarty_tpl) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Departamento</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listdepartamento']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['departamento'];?>
</td>
                 <td><a href="/departamento/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Detalhes</a> | 
                     <a href="/departamento/edit/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Editar</a> | 
                     <a href="/departamento/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
" class="del">Excluir</a></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
            <tr><td colspan="100%">Nenhum registro encontrado!</td></tr>
        <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>          
    </tbody>
</table><?php }
}
