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
                            <h1>Vincular Produto ao Evento</h1>
                            <p>Este cadastro irá inserir a quantidade de produto e quais produtos serão entregues no evento.s</p>                            
                            <a href="/produtoevento/add" class="btn btn-default" id="btn_novo">Nova Vinculação</a>
                            <br>
                            {include file="produtoevento/index_grid.tpl"}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}    
    
     <script src="/files/js/produtoevento/index.js"></script>

    </body>

</html>
