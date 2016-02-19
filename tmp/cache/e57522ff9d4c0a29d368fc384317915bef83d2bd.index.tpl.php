<?php
/* Smarty version 3.1.29, created on 2016-02-18 10:33:02
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/evento/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c5b9feacf523_29253002',
  'file_dependency' => 
  array (
    'e57522ff9d4c0a29d368fc384317915bef83d2bd' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/evento/index.tpl',
      1 => 1455798494,
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
    '0be58d38390be362a6cb014f4f4c9da110a14957' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/evento/index_grid.tpl',
      1 => 1455735272,
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
function content_56c5b9feacf523_29253002 ($_smarty_tpl) {
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
                            <h1>Evento</h1>
                            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>                            
                            <a href="/evento/add" class="btn btn-default" id="btn_novo">Novo</a>
                            <br>
                            <table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Cidade</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
                    <tr>                                                                
                <td>14</td>
                <td>dfa</td>
                <td>Cabreuva</td>
                <td>Em Andamento</td> 
                 <td><a href="/evento/detalhes/id/14">Detalhes</a> | 
                     <a href="/evento/edit/id/14">Editar </a> | 
                     <a href="/evento/delete/id/14" class="del">Excluir</a></td>
            </tr>
                    <tr>                                                                
                <td>15</td>
                <td>oie</td>
                <td>Cabreuva</td>
                <td>Cancelado</td> 
                 <td><a href="/evento/detalhes/id/15">Detalhes</a> | 
                     <a href="/evento/edit/id/15">Editar </a> | 
                     <a href="/evento/delete/id/15" class="del">Excluir</a></td>
            </tr>
                    <tr>                                                                
                <td>18</td>
                <td>oie1</td>
                <td>Cabreuva</td>
                <td>Concluído</td> 
                 <td><a href="/evento/detalhes/id/18">Detalhes</a> | 
                     <a href="/evento/edit/id/18">Editar </a> | 
                     <a href="/evento/delete/id/18" class="del">Excluir</a></td>
            </tr>
                    <tr>                                                                
                <td>20</td>
                <td>fgasdfga</td>
                <td>Salto</td>
                <td>Concluído</td> 
                 <td><a href="/evento/detalhes/id/20">Detalhes</a> | 
                     <a href="/evento/edit/id/20">Editar </a> | 
                     <a href="/evento/delete/id/20" class="del">Excluir</a></td>
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
        
        
            
    
     <script src="/files/js/evento/index.js"></script>

    </body>

</html>
<?php }
}
