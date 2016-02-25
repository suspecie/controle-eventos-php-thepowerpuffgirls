<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-02-25 15:27:20
=======
/* Smarty version 3.1.29, created on 2016-02-25 08:01:22
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/participacao/detail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_56cf4788f04ec9_47637892',
=======
  'unifunc' => 'content_56cedf022991b7_88591535',
>>>>>>> de42b654468e019ff46ea6ad1f56c87074b995c1
  'file_dependency' => 
  array (
    'c7f83762807963661e516ca5e2859d7b075be944' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/participacao/detail.tpl',
      1 => 1456397959,
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
function content_56cf4788f04ec9_47637892 ($_smarty_tpl) {
=======
function content_56cedf022991b7_88591535 ($_smarty_tpl) {
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
                             <h1>Detalhes Participação</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];?>
</td></tr>
                                    <tr><td>Cliente</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['cliente'];?>
</td></tr>
                                    <tr><td>Evento</td>  <td><?php echo $_smarty_tpl->tpl_vars['registro']->value['evento'];?>
</td></tr>   
                                    <tr><td>Data/Hora</td>  <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['registro']->value['data_hora'],"%d/%m/%Y %H:%M:%S");?>
</td></tr>  
                                    <tr><td>Arquivo</td>  <td><img src="/<?php echo $_smarty_tpl->tpl_vars['registro']->value['caminho_arquivo'];?>
" id="arquivo" class="arquivo"/></td></tr>  
                                    <tr><td>Foto</td>  <td><img src="/<?php echo $_smarty_tpl->tpl_vars['registro']->value['caminho_foto'];?>
" id="fotos" class="arquivo"/></td></tr>  
                                </tbody>
                            </table>                            
                        </div>


                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>

</html>
<?php }
}
