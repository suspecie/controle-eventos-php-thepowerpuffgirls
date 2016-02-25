<?php
/* Smarty version 3.1.29, created on 2016-02-25 14:32:13
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf3a9d205fa0_45475668',
  'file_dependency' => 
  array (
    'f7a8107bcd89c823cb3408702f581cb3126dae58' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/index_grid.tpl',
      1 => 1456415976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf3a9d205fa0_45475668 ($_smarty_tpl) {
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
            <th>Ação</th>
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
                <td><a href="/cliente/detalhes/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Detalhes</a> | 
                    <a href="/cliente/edit/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
">Editar</a> | 
                    <a href="/cliente/delete/id/<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
" class="del">Excluir</a></td>
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
</table>
<div class="row">
    <div class="col-md-4">
        <h4><?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?></h4>
    </div>  
</div> 
<?php echo $_smarty_tpl->tpl_vars['paginador']->value;
}
}
