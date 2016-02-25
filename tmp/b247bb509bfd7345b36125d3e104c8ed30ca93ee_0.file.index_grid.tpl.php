<?php
/* Smarty version 3.1.29, created on 2016-02-25 09:46:56
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/participacao/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cef7c0e42288_59853265',
  'file_dependency' => 
  array (
    'b247bb509bfd7345b36125d3e104c8ed30ca93ee' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/participacao/index_grid.tpl',
      1 => 1456398044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cef7c0e42288_59853265 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/controle-eventos-php-thepowerpuffgirls/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>Evento</th>
            <th>Data/Hora</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listparticipacao']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['cliente'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['evento'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['linha']->value['data_hora'],"%d/%m/%Y %H:%M:%S");?>
</td>
                <td><a href="/participacao/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Detalhes</a> | 
                    <a href="/participacao/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
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
<div class="row">
    <div class="col-md-4">
        <h4><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></h4>
    </div>  
</div> <?php }
}
