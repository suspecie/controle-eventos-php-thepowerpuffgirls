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
                            <h1>Emissão de Crachá</h1>
                            <p>Este cadastro irá emitir o crachá do cliente que participará do evento.</p>                            
                            <a href="/cracha/add" class="btn btn-default" id="btn_novo">Nova Emissão</a>
                            <br>
                            {include file="cracha/index_grid.tpl"}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            
            
            


        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}    
    
     <script src="/files/js/cracha/index.js"></script>

    </body>

</html>
