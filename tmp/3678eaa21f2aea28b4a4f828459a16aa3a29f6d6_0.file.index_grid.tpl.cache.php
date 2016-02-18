<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:33:04
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5ba00a93315_83201074',
  'file_dependency' => 
  array (
    '3678eaa21f2aea28b4a4f828459a16aa3a29f6d6' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/index_grid.tpl',
      1 => 1455727268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c5ba00a93315_83201074 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '196542001456c5ba00a781a2_71495797';
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['id_estado'];?>
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
</table><?php }
}
