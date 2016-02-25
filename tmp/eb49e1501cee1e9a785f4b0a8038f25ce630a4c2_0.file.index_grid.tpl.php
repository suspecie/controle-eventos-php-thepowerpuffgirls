<?php
/* Smarty version 3.1.29, created on 2016-02-24 19:44:42
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatoriocliente/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ce325a1d3fe4_97694270',
  'file_dependency' => 
  array (
    'eb49e1501cee1e9a785f4b0a8038f25ce630a4c2' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatoriocliente/index_grid.tpl',
      1 => 1456230499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ce325a1d3fe4_97694270 ($_smarty_tpl) {
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Endereco</th>
            <th>Codigo Uc</th>
            <th>Codigo Nis</th>
            <th>CPF</th>
            <th>RG</th>      
          
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listcliente']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['endereco'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo_uc'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo_nis'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['cpf'];?>
</td>                
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['rg'];?>
</td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['linha']->_loop) {
?>
            <tr><td colspan="100%">Sem Registros</td></tr>
        <?php
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>          
    </tbody>
</table><?php }
}
