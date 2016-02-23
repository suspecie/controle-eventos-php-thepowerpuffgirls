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
                            <h1>Nova Participação </h1>
                            <form role="form" action="/participacao/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>
                                    <select class="form-control" name = "cliente" id = "cliente">
                                        <option value=""></option>
                                        {foreach from=$listcliente item=linha}
                                            <option value="{$linha.codigo}">{$linha.nome}</option>
                                        {/foreach}
                                    </select >
                                    <br>
                                    <label for="cliente">Evento</label>
                                    <select class="form-control" name = "evento" id = "evento">
                                        <option value=""></option>
                                        {foreach from=$listevento item=linha}
                                            <option value="{$linha.codigo}">{$linha.descricao}</option>
                                        {/foreach}
                                    </select >
                                    <br>
                                    <label for="datahora">Data/Hora</label>
                                    <input type="datetime-local" class="form-control" id="datahora" name="datahora" required>
                                    <br>
                                    <label for="file">Selecione a imagem para upload:</label>
                                    <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
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
