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
                            <h1>Editar Produto</h1>
                            <form role="form" action="/produto/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">
                                <div class="form-group">
                                    <label for="name">Produto</label>
                                    <input required="true" type="input" class="form-control" id="name" name="name" value="{$registro.produto}">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="{$registro.id_status}">{$registro.status_prod}</option>
                                        {foreach from=$listastatusprod item=lista}
                                            {if $lista.codigo neq $registro.id_status}
                                        <option value="{$lista.codigo}">{$lista.status_prod}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                    <br>
                                    <label for="depto">Departamento</label>
                                    <select class="form-control" id="departamento" name="departamento">
                                        <option value="{$registro.codigo_departamento}">{$registro.departamento}</option>
                                        {foreach from=$listadeptoprod item=lista}
                                            {if $lista.codigo neq $registro.codigo_departamento}
                                        <option value={$lista.codigo}>{$lista.departamento}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                    <br>
                                    <label for="depto">Quantidade</label>
                                    <input type="text" class="form-control" id="quantidade" name="quantidade" value="{$registro.qtd_total}">
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
