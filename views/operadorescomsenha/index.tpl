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
                            <h1>Operadores com Senha</h1>
                            <p>Este cadastro permite cadastrar os operadores que terão acesso ao sistema.
                                </p>                            
                            <a href="/operadorescomsenha/add" class="btn btn-default" id="btn_novo">Novo Operador</a>
                            <br>
                            {include file="operadorescomsenha/index_grid.tpl"}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            
            
            


        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}    
    
     <script src="/files/js/operadorescomsenha/index.js"></script>

    </body>

</html>
