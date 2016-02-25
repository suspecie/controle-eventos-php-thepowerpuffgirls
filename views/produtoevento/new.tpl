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
                            <h1>Novo Produto-Evento </h1>
                            <form role="form" action="/produtoevento/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                   <label for="cliente">Evento</label>
                                    <select class="form-control" name = "evento" id = "evento" required>
                                        <option value=""></option>
                                        {foreach from=$listevento item=linha}
                                            <option value="{$linha.codigo}">{$linha.descricao}</option>
                                        {/foreach}
                                    </select >
                                    <br>
                                    <label for="cliente">Produto</label>
                                    <select class="form-control" name = "produto" id = "produto" required>
                                        <option value=""></option>
                                        {foreach from=$listproduto item=linha}
                                            <option value="{$linha.codigo}">{$linha.produto}</option>
                                        {/foreach}
                                    </select >
                                    <br>
                                    <label for="cliente">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
                                    <br>
                                </div>                                                                
                                <button type="submit" class="btn btn-default">Salvar</button>
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
