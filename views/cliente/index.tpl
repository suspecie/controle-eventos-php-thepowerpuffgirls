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
                            <h1>Cliente</h1>
                            <p>Este cadastro irá inserir os clientes que irão participar do evento.</p>                            
                            <a href="/cliente/add" class="btn btn-default" id="btn_novo">Novo Cliente</a>
                            <br>
                            {include file="cliente/index_grid.tpl"}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            
            
            


        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}    
    
     <script src="/files/js/cliente/index.js"></script>

    </body>

</html>
