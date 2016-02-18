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
                            <h1>Novo Evento </h1>
                            <form role="form" action="/evento/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input type="input" class="form-control" id="descricao" name="descricao" required>
                                    <br>
                                    <label for="cidade">Cidade</label>
                                     <select class="form-control" name = "cidade" id = "cidade">
                                         <option value=""></option>
                                       {foreach from=$listscidade item=linha}
                                             <option value="{$linha.codigo}">{$linha.descricao}</option>
                                       {/foreach}
                                    </select >
                                    <br>
                                    <label for="status">Status</label>
                                    <select class="form-control" name = "status" id = "status">
                                         <option value=""></option>
                                       {foreach from=$liststatusevento item=linha}
                                             <option value="{$linha.codigo}">{$linha.descricao}</option>
                                       {/foreach}
                                    </select >
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
