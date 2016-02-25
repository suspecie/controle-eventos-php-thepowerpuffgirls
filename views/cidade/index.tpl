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
                            <h1>Cidade</h1>
                            <p>Este cadastro irá inserir a cidade onde ocorrerá o evento.</p>                            
                            <a href="/cidade/add" class="btn btn-default" id="btn_novo">Nova Cidade</a>
                            <br>
                            {include file="cidade/index_grid.tpl"}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            
            
            


        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}    
    
     <script src="/files/js/cidade/index.js"></script>

    </body>

</html>
