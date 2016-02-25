<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:15:17
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cidade/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf6ee54fe398_06304135',
  'file_dependency' => 
  array (
    'd1da4ab503267dee57149e7fb2a3c17bbede59ff' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cidade/index_grid.tpl',
      1 => 1456433042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf6ee54fe398_06304135 ($_smarty_tpl) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listcidade']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['estado'];?>
</td>    
                 <td><a href="/cidade/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Detalhes</a> | 
                     <a href="/cidade/edit/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Editar </a> | 
                     <a href="/cidade/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
" class="del">Excluir</a></td>
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

<?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>


<?php }
}
