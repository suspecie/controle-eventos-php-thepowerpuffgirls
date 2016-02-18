<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:31:40
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cliente/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5b9ac62d986_66845491',
  'file_dependency' => 
  array (
    'cbdb0cb6a142c53cbf8980a8b5d7ce4153dc5f12' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cliente/index.tpl',
      1 => 1455641489,
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
    '0be73180b0b49b66bffd97ef731f7ecdede92342' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cliente/index_grid.tpl',
      1 => 1455730366,
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
function content_56c5b9ac62d986_66845491 ($_smarty_tpl) {
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
                            <h1>Cliente</h1>
                            <p>This example access the database. use the script chayotedb.sql and configure the config.php to use.
                                </p>                            
                            <a href="/cliente/add" class="btn btn-default" id="btn_novo">Novo Ciente</a>
                            <br>
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
                    <tr>                                                                
                <td>14</td>
                <td>k</td>
                <td>k</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>                
                <td>k</td>
                <td><a href="/cliente/detalhes/id/14">Details</a> | 
                    <a href="/cliente/edit/id/14">Edit</a> | 
                    <a href="/cliente/delete/id/14" class="del">Delete</a></td>
            </tr>
                  
    </tbody>
</table>
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
        
        
            
    
     <script src="/files/js/cliente/index.js"></script>

    </body>

</html>
<?php }
}
