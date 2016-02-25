<?php
/* Smarty version 3.1.29, created on 2016-02-25 09:44:25
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cracha/emissao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cef72932e2b6_71395302',
  'file_dependency' => 
  array (
    'aff71ab009bea93e23863d4c1f373480dd38b688' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cracha/emissao.tpl',
      1 => 1456404194,
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
function content_56cef72932e2b6_71395302 ($_smarty_tpl) {
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

            <table border="3" class="table table-striped" style="width: 40%">
                <tbody>
                    <tr>
                        <td colspan="2" align="center"> <h3><?php echo $_smarty_tpl->tpl_vars['registro']->value['evento'];?>
</h3> </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> 
                            <?php if ($_smarty_tpl->tpl_vars['registro']->value['foto'] != null) {?>
                                <img src="/<?php echo $_smarty_tpl->tpl_vars['registro']->value['foto'];?>
" class="fotocracha">
                            <?php } else { ?>
                                <img src="/files/images/logo.jpg"  class="fotocracha">
                            <?php }?>
                        </td>

                    </tr>
                    <tr>
                        <td style="width: 20%"><b>Nome: </b><?php echo $_smarty_tpl->tpl_vars['registro']->value['nomecliente'];?>
</td>
                        <td style="width: 20%"><b>Codigo: </b><?php echo $_smarty_tpl->tpl_vars['registro']->value['codcliente'];?>
</td>
                    </tr>
                </tbody>
            </table>


        </div>
        <!-- /#wrapper -->

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    

        <?php echo '<script'; ?>
 src="/files/js/cracha/index.js"><?php echo '</script'; ?>
>

    </body>

</html><?php }
}
