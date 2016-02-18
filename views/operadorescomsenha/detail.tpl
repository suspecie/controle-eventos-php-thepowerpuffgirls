<html lang="en">

    <head>

        {include file="comum/head.tpl"}

    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            {include file="comum/sidebar.tpl"}
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                             <h1>Operadores Details</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td>{$registro.codigo}</td></tr>
                                    <tr><td>Nome</td>  <td>{$registro.nome}</td></tr>                                    
                                    <tr><td>Tipo de Acesso</td><td>{$registro.acessodescricao}</td></tr>
                                </tbody>
                            </table>                            


                        </div>


                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        {include file="comum/footer.tpl"}

    </body>

</html>