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
                            <h1>Edição Cidade</h1>
                            <form role="form" action="/cidade/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">

                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input required="true" type="input" class="form-control" id="descricao" name="descricao" value="{$registro.descricao}">
                                    <br>
                                    <label for="estado">Estado</label>
                                    <input required="true" type="input" class="form-control" id="estado" name="estado" value="{$registro.id_estado}">
                                    <br>
                                </div>  
                                <button type="submit" class="btn btn-default">Atualizar</button>
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