<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:15:35
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/operadorescomsenha/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5b5e7d7dc22_34987308',
  'file_dependency' => 
  array (
    'f17420c95cb1c7235c6a828b18d17ce9e7c78b5e' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/operadorescomsenha/edit.tpl',
      1 => 1455797714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/head.tpl' => 1,
    'file:comum/sidebar.tpl' => 1,
    'file:comum/footer.tpl' => 1,
  ),
),false)) {
function content_56c5b5e7d7dc22_34987308 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '126625971956c5b5e7d23086_23598440';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <h1>Editar Operadores com Senha</h1>
                            <form role="form" action="/operadorescomsenha/update/id/<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
">

                                <div class="form-group">
                                   <label for="nome">Nome</label>
                                    <input required="true" type="input" class="form-control" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['nome'];?>
">
                               
                                     <label for="senha">Senha</label>
                                    <input required="true" type="password" class="form-control" id="senha" name="senha" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['senha'];?>
">
                                                                       
                                    
                                    <label for="tipo_acesso">Tipo de Acesso</label>
                                    <select class="form-control" name = "tipo_acesso" id = "tipo_acesso">
                                         <option value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['tipo_acesso'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['acessodescricao'];?>
</option>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['listtipoacesso']->value;
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
                                                <?php if ($_smarty_tpl->tpl_vars['linha']->value['codigo'] != $_smarty_tpl->tpl_vars['registro']->value['tipo_acesso']) {?>   
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['acessodescricao'];?>
</option>
                                                <?php }?>
                                            <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>                                                                                
                                    </select >
                                                  
                                </div> 

                                <button type="submit" class="btn btn-default">Atualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html>
<?php }
}