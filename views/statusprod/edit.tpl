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
                            <h1>Editar Status do Produto</h1>
                            <form role="form" action="/statusprod/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">

                                <div class="form-group">
                                    <label for="name">Status</label>
                                    <input required="true" type="input" class="form-control" id="name" name="name" value="{$registro.statusprod}">
                                </div>  
                                
                                <button type="submit" class="btn btn-default">Alterar</button>
                            </form>
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
