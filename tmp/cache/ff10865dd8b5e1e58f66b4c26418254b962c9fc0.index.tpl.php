<?php
<<<<<<< HEAD
/* Smarty version 3.1.29, created on 2016-02-18 10:41:17
=======
/* Smarty version 3.1.29, created on 2016-02-17 07:48:19
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
<<<<<<< HEAD
  'unifunc' => 'content_56c5bbed5e4a48_33071982',
=======
  'unifunc' => 'content_56c441e3f287c0_80486742',
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
  'file_dependency' => 
  array (
    'ff10865dd8b5e1e58f66b4c26418254b962c9fc0' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index.tpl',
<<<<<<< HEAD
      1 => 1455703808,
=======
      1 => 1453928755,
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
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
<<<<<<< HEAD
      1 => 1455643087,
=======
      1 => 1455642567,
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
      2 => 'file',
    ),
    '9ac2f8e8b574deb776273b346fc02f47870c9994' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/color/index_grid.tpl',
<<<<<<< HEAD
      1 => 1453928755,
=======
      1 => 1455643341,
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
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
<<<<<<< HEAD
function content_56c5bbed5e4a48_33071982 ($_smarty_tpl) {
?>

=======
function content_56c441e3f287c0_80486742 ($_smarty_tpl) {
?>
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
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
<<<<<<< HEAD
                     <li>
                        <a href="/operadorescomsenha">Operadores</a>
                    </li>
                     <li>
                        <a href="/cliente">Cliente</a>
=======
                    <li>
                        <a href="/evento">Evento</a>
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
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
                            <h1>Color</h1>
                            <p>This example access the database. use the script chayotedb.sql and configure the config.php to use.
                                </p>                            
                            <a href="/color/add" class="btn btn-default" id="btn_novo">New Color</a>
                            <br>
                            <table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Created</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
                    <tr>                                                                
<<<<<<< HEAD
=======
                <td>1</td>
                <td>BLUE</td>
                <td></td>
                <td> Enabled</td>  
                 <td><a href="/color/detalhes/id/1">Details</a> | 
                     <a href="/color/edit/id/1">Edit</a> | 
                     <a href="/color/delete/id/1" class="del">Delete</a></td>
            </tr>
                    <tr>                                                                
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
                <td>2</td>
                <td>GREEN</td>
                <td></td>
                <td> Enabled</td>  
                 <td><a href="/color/detalhes/id/2">Details</a> | 
                     <a href="/color/edit/id/2">Edit</a> | 
                     <a href="/color/delete/id/2" class="del">Delete</a></td>
            </tr>
                    <tr>                                                                
<<<<<<< HEAD
                <td>5</td>
                <td>oiii</td>
                <td>2016-02-16 16:25:10</td>
                <td> Enabled</td>  
                 <td><a href="/color/detalhes/id/5">Details</a> | 
                     <a href="/color/edit/id/5">Edit</a> | 
                     <a href="/color/delete/id/5" class="del">Delete</a></td>
=======
                <td>3</td>
                <td>WHITE</td>
                <td></td>
                <td> Enabled</td>  
                 <td><a href="/color/detalhes/id/3">Details</a> | 
                     <a href="/color/edit/id/3">Edit</a> | 
                     <a href="/color/delete/id/3" class="del">Delete</a></td>
            </tr>
                    <tr>                                                                
                <td>4</td>
                <td>ooo</td>
                <td>2016-02-16 14:21:25</td>
                <td> Enabled</td>  
                 <td><a href="/color/detalhes/id/4">Details</a> | 
                     <a href="/color/edit/id/4">Edit</a> | 
                     <a href="/color/delete/id/4" class="del">Delete</a></td>
>>>>>>> 639288d9e5c15f5bef2690fdaa65839ae43926c5
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
        
        
            
    
     <script src="/files/js/color/index.js"></script>

    </body>

</html>
<?php }
}
