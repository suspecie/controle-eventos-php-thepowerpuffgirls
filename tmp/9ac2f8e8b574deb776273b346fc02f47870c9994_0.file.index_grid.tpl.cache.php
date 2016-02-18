<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:41:17
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5bbed5db5b3_17164991',
  'file_dependency' => 
  array (
    '9ac2f8e8b574deb776273b346fc02f47870c9994' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index_grid.tpl',
      1 => 1453928755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c5bbed5db5b3_17164991 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32136355456c5bbed5b6f86_32771281';
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Created</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listcolor']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['created'];?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['linha']->value['active'] == 1) {?> Enabled<?php }
if ($_smarty_tpl->tpl_vars['linha']->value['active'] == 0) {?> Disabled<?php }?></td>  
                 <td><a href="/color/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['id'];?>
">Details</a> | 
                     <a href="/color/edit/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['id'];?>
">Edit</a> | 
                     <a href="/color/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['id'];?>
" class="del">Delete</a></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
            <tr><td colspan="100%">Empty Table</td></tr>
        <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>          
    </tbody>
</table><?php }
}
