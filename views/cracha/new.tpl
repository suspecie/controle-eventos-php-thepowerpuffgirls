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
                            <h1>Nova Emissão </h1>
                            <form role="form" action="/cracha/buscar" method="POST" enctype="multipart/form-data">
                                <div class="form-group">

                                    <label for="cliente">Cliente</label>
                                    <select class="form-control" name = "cliente" id = "cliente" required>
                                        <option value=""></option>
                                        {foreach from=$listcliente item=linha}
                                            <option value="{$linha.codigo}">{$linha.nome}</option>
                                        {/foreach}
                                    </select >
                                    <br>
                                </div>                                                                
                                <button type="submit" class="btn btn-default">Emitir Cracha</button>
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
