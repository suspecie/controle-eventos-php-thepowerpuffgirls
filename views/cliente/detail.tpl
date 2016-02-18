<!DOCTYPE html>
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
                             <h1>Detalhe dos Clientes</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td>{$registro.codigo}</td></tr>
                                    <tr><td>Nome</td>  <td>{$registro.nome}</td></tr>
                                    <tr><td>Endereco</td>  <td>{$registro.endereco}</td></tr>
                                    <tr><td>Código UC</td>  <td>{$registro.codigo_uc}</td></tr>
                                    <tr><td>Código NIS</td>  <td>{$registro.codigo_nis}</td></tr>
                                    <tr><td>CPF</td>  <td>{$registro.cpf}</td></tr>
                                    <tr><td>RG</td>  <td>{$registro.rg}</td></tr>
                                </body>
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
