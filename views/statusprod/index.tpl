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
                            <h1>Status</h1>
                            <p>Este cadstro irá conter o status do produto referente ao estoque.</p>                            
                            <a href="/statusprod/add" class="btn btn-default" id="btn_novo">Novo Status</a>
                            <br>
                            {include file="statusprod/index_grid.tpl"}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
            
            
            


        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}    
    
     <script src="/files/js/color/index.js"></script>

    </body>

</html>
