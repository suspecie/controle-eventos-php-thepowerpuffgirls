<?php
/* Smarty version 3.1.29, created on 2016-02-25 17:18:40
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatorioeventocliente/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf61a0d65e14_86971783',
  'file_dependency' => 
  array (
    '4285ff4bbbb1dda35227689cf4d5b22d2499cf0c' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatorioeventocliente/index_grid.tpl',
      1 => 1456430227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf61a0d65e14_86971783 ($_smarty_tpl) {
?>
<form role="form" action="/relatorioeventocliente/buscar" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control" name="evento" id="evento" placeholder="Digite o nome do evento">
    <input type="text" class="form-control" name="participante" id="participante" placeholder="Digite o nome do participante do evento">
    <input type="text" class="form-control" name="statusevento" id="statusevento" placeholder="Digite o status do evento">
    <br>
    <input type="submit" class="btn btn-default" value="BUSCAR" />
    <br><p>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Evento</th>
            <th>Participante</th>
            <th>Status Evento</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['listevento']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['nomecliente'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['linha']->value['statusevento'];?>
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
</table>
<?php echo $_smarty_tpl->tpl_vars['paginador']->value;
}
}
