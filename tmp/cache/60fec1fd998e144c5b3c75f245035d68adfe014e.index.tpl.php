<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:33:04
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5ba00a9c2c6_40293309',
  'file_dependency' => 
  array (
    '60fec1fd998e144c5b3c75f245035d68adfe014e' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/index.tpl',
      1 => 1455798509,
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
      1 => 1455798770,
      2 => 'file',
    ),
    '3678eaa21f2aea28b4a4f828459a16aa3a29f6d6' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/cidade/index_grid.tpl',
      1 => 1455727268,
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
function content_56c5ba00a9c2c6_40293309 ($_smarty_tpl) {
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
                        <a href="/evento">Evento</a>
                    </li>
                     <li>
                        <a href="/statusevento">Status do Evento</a>
                    </li>
                    <li>
                        <a href="/cidade">Cidade</a>
                    </li>
                </ul>
            </div>

            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Cidade</h1>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>                            
                            <a href="/cidade/add" class="btn btn-default" id="btn_novo">Novo</a>
                            <br>
                            <table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
                    <tr>                                                                
                <td>1</td>
                <td>Cabreuva</td>
                <td>1</td>
                 <td><a href="/cidade/detalhes/id/1">Detalhes</a> | 
                     <a href="/cidade/edit/id/1">Editar </a> | 
                     <a href="/cidade/delete/id/1" class="del">Excluir</a></td>
            </tr>
                    <tr>                                                                
                <td>2</td>
                <td>Jundiai</td>
                <td>1</td>
                 <td><a href="/cidade/detalhes/id/2">Detalhes</a> | 
                     <a href="/cidade/edit/id/2">Editar </a> | 
                     <a href="/cidade/delete/id/2" class="del">Excluir</a></td>
            </tr>
                    <tr>                                                                
                <td>4</td>
                <td>Salto</td>
                <td>1</td>
                 <td><a href="/cidade/detalhes/id/4">Detalhes</a> | 
                     <a href="/cidade/edit/id/4">Editar </a> | 
                     <a href="/cidade/delete/id/4" class="del">Excluir</a></td>
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
        
        
            
    
     <script src="/files/js/cidade/index.js"></script>

    </body>

</html>
<?php }
}
