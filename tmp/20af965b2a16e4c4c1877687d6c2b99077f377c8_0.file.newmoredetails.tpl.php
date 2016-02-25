<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-02-25 15:26:56
=======
/* Smarty version 3.1.29, created on 2016-02-25 09:43:44
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/participacao/newmoredetails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_56cf477088d720_89088376',
=======
  'unifunc' => 'content_56cef700aaedf2_23752459',
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
  'file_dependency' => 
  array (
    '20af965b2a16e4c4c1877687d6c2b99077f377c8' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/participacao/newmoredetails.tpl',
      1 => 1456398000,
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
<<<<<<< HEAD
function content_56cf477088d720_89088376 ($_smarty_tpl) {
=======
function content_56cef700aaedf2_23752459 ($_smarty_tpl) {
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/controle-eventos-php-thepowerpuffgirls/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <h1>Edição Participação</h1>
                            <form role="form" action="/participacao/update/id/<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
">
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>                                    
                                    <select class="form-control" name = "cliente" id = "cliente">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_cliente'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['cliente'];?>
</option>
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
                                            <?php if ($_smarty_tpl->tpl_vars['linha']->value['codigo'] != $_smarty_tpl->tpl_vars['registro']->value['id_cliente']) {?>   
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['nome'];?>
</option>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_local_item;
}
if ($__foreach_linha_0_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_0_saved_item;
}
?>                                                                                
                                    </select>
                                    <br>
                                    <label for="evento">Evento</label>                                    
                                    <select class="form-control" name = "evento" id = "evento">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['registro']->value['id_evento'];?>
"><?php echo $_smarty_tpl->tpl_vars['registro']->value['evento'];?>
</option>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['listevento']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_linha_1_saved_item = isset($_smarty_tpl->tpl_vars['linha']) ? $_smarty_tpl->tpl_vars['linha'] : false;
$_smarty_tpl->tpl_vars['linha'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['linha']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['linha']->value) {
$_smarty_tpl->tpl_vars['linha']->_loop = true;
$__foreach_linha_1_saved_local_item = $_smarty_tpl->tpl_vars['linha'];
?>
                                            <?php if ($_smarty_tpl->tpl_vars['linha']->value['codigo'] != $_smarty_tpl->tpl_vars['registro']->value['id_evento']) {?>   
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['linha']->value['codigo'];?>
"><?php echo $_smarty_tpl->tpl_vars['linha']->value['descricao'];?>
</option>
                                            <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_local_item;
}
if ($__foreach_linha_1_saved_item) {
$_smarty_tpl->tpl_vars['linha'] = $__foreach_linha_1_saved_item;
}
?>                                                                                
                                    </select>
                                    <br>
                                    <label for="datahora">Data/Hora</label>
                                    <input type="input" class="form-control" id="datahora" name="datahora" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['registro']->value['data_hora'],"%d/%m/%Y %H:%M:%S");?>
">
                                    <br>
                                </div>  
                            </form>
                            <div class="panel panel-default">
                                <div class="panel panel-body">
                                    <div class="col-xs-12">
                                        <div class="col-md-6">
                                            <video id="video" width="640" height="480" autoplay></video>
                                        </div>
                                        <div class="col-md-5">
                                            <canvas id="canvas" width="640" height="480" ></canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <br>
                                        <input type="hidden" name="id_evento_cliente" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="id_evento_cliente">
                                        <button class="btn btn-default" id="snap">Tirar Foto</button>
                                        <button class="btn btn-default" id="save">Salvar Foto</button>
                                    </div>
                                </div>
                            </div>        
                            <form action="/participacao/uploadFile/id_evento_cliente/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST" enctype="multipart/form-data">
                                <div class="panel panel-default">
                                    <div class="panel panel-body">
                                        <div class="col-xs-12">
                                            <div >
                                                <label class="col-md-12" for="file">Selecione a imagem para upload: </label>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="col-md-12" type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-default">Salvar</button>
                            </form>       
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>

        <!-- /#wrapper -->

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo '<script'; ?>
 src="/files/js/jquery-1.12.1.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/files/js/fotoUtils.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>

</html>
<?php }
}
