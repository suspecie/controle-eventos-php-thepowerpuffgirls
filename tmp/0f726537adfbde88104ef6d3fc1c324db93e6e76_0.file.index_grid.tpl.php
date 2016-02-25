<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:17:38
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produto/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf6f725e3b46_36851609',
  'file_dependency' => 
  array (
    '0f726537adfbde88104ef6d3fc1c324db93e6e76' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/produto/index_grid.tpl',
      1 => 1456433182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf6f725e3b46_36851609 ($_smarty_tpl) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Status</th>
            <th>Departamento</th>
            <th>Quantidade</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listproduto']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['produto'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['status_prod'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['departamento'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['qtd_total'];?>
</td>
                 <td><a href="/produto/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Detalhes</a> | 
                     <a href="/produto/edit/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Editar</a> | 
                     <a href="/produto/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
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
