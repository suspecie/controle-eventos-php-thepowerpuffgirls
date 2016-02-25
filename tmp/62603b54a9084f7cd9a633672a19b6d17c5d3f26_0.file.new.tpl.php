<?php
/* Smarty version 3.1.29, created on 2016-02-25 10:04:34
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cefbe2bed590_54635615',
  'file_dependency' => 
  array (
    '62603b54a9084f7cd9a633672a19b6d17c5d3f26' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/cliente/new.tpl',
      1 => 1456230499,
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
function content_56cefbe2bed590_54635615 ($_smarty_tpl) {
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
                            <h1>Novo Cliente</h1>
                            <form role="form" action="/cliente/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="input" class="form-control" id="nome" name="nome" required>
                                
                                     
                                    <label for="endereco">Endereço</label>
                                    <input type="input" class="form-control" id="endereco" name="endereco" required>
                                          
                                    
                                    <label for="codigo_uc">Codigo UC</label>
                                    <input type="input" class="form-control" id="codigo_uc" name="codigo_uc" required>
                                                        
                                    
                                    <label for="codigo_nis">Codigo NIS</label>
                                    <input type="input" class="form-control" id="codigo_uc" name="codigo_nis" required>
                                
                                                           
                                    <label for="cpf">CPF</label>
                                    <input type="input" class="form-control" id="cpf" name="cpf" required>
                                                              
                               
                                    <label for="rg">RG</label>
                                    <input type="input" class="form-control" id="rg" name="rg" required>
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


    </body>

</html>
<?php }
}
