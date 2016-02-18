<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:15:51
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cliente/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5b5f72f3940_44503323',
  'file_dependency' => 
  array (
    'af88f7603aa4863cfbc0c5b816a4a10ba7f7174b' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cliente/new.tpl',
      1 => 1455725201,
      2 => 'file',
    ),
    '708d5a7404cc3b15139cfff315dc9bc4832d7d47' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/comum/head.tpl',
      1 => 1453928755,
      2 => 'file',
    ),
    '9606bee89157dcc402789e9ff996945ae3b56c9e' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/comum/sidebar.tpl',
      1 => 1455643087,
      2 => 'file',
    ),
    'f0425bc0a7100f60177aaf42c2c7b262f46a07f9' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/comum/footer.tpl',
      1 => 1453928755,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_56c5b5f72f3940_44503323 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

    <head>

            <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chayote Framework PHP - Example</title>

    <!-- Bootstrap Core CSS -->
    <link href="/files/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/files/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
                  <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="/">
                            Chayote PHP
                        </a>
                    </li>
                    <li>
                        <a href="/">Dashboard</a>
                    </li>
                    <li>
                        <a href="/color">Color</a>
                    </li>
                     <li>
                        <a href="/operadorescomsenha">Operadores</a>
                    </li>
                     <li>
                        <a href="/cliente">Cliente</a>
                    </li>
                    <li>
                        <a href="/bob">Bob Erro test</a>
                    </li>
                    <li>
                        <a href="/blank">Blank</a>
                    </li>
                    <li>
                        <a href="#">Link #2</a>
                    </li>
                    <li>
                        <a href="#">Link #3</a>
                    </li>
                    <li>
                        <a href="#">Link #4</a>
                    </li>
                </ul>
            </div>

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

                <!-- jQuery -->
        <script src="/files/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="/files/js/bootstrap.min.js"></script>
        
        
        

    </body>

</html>
<?php }
}