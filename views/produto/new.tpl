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
                            <h1>Novo Produto </h1>
                            <form role="form" action="/produto/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Produto</label>
                                    <input type="input" class="form-control" id="name" name="name" required>
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value=""></option>
                                        {foreach from=$listastatusprod item=lista}
                                        <option value={$lista.codigo}>{$lista.status_prod}</option>
                                        {/foreach}
                                    </select>
                                    <label for="depto">Departamento</label>
                                    <select class="form-control" id="departamento" name="departamento" required>
                                    <option value=""></option>
                                        {foreach from=$listadeptoprod item=lista}
                                        <option value={$lista.codigo}>{$lista.departamento}</option>
                                        {/foreach}
                                    </select>
                                    <br>
                                    <label for="name">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade" required>
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
