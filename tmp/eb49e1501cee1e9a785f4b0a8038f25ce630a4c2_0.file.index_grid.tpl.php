<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:37:54
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatoriocliente/index_grid.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf7432bd8d43_81752195',
  'file_dependency' => 
  array (
    'eb49e1501cee1e9a785f4b0a8038f25ce630a4c2' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/relatoriocliente/index_grid.tpl',
      1 => 1456431872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf7432bd8d43_81752195 ($_smarty_tpl) {
?>
<form role="form" action="/relatoriocliente/buscar" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu Nome">
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o seu Endereco">
    <input type="text" class="form-control" name="codigouc" id="codigo_uc" placeholder="Digite o seu Codigo UC">
    <input type="text" class="form-control" name="codigonis" id="codigo_nis" placeholder="Digite o seu Codigo NIS">
    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o seu CPF">
    <input type="text" class="form-control" name="rg" id="rg" placeholder="Digite o seu RG">
    <br>
    <input type="submit" class="btn btn-default" value="BUSCAR" />
    <br><p>
</form>



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
</table>
<?php echo $_smarty_tpl->tpl_vars['paginador']->value;
}
}
