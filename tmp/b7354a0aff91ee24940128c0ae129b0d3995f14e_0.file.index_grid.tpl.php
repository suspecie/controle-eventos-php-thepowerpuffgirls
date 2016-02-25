<?php
/* Smarty version 3.1.29, created on 2016-02-25 17:51:47
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/estado/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf6963569ba3_99367757',
  'file_dependency' => 
  array (
    'b7354a0aff91ee24940128c0ae129b0d3995f14e' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/estado/index_grid.tpl',
      1 => 1456433131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf6963569ba3_99367757 ($_smarty_tpl) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
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
            <tr>                                                                
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['estado'];?>
</td>
                 <td><a href="/estado/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Detalhes</a> | 
                     <a href="/estado/edit/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Editar</a> | 
                     <a href="/estado/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
" class="del">Deletar</a></td>
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

</table>
<?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>


<?php }
}
