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
                            <h1>Edição de Produto-Evento</h1>
                            <form role="form" action="/produtoevento/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">

                                <div class="form-group">
                                   <label for="cliente">Evento</label>
                                    <select class="form-control" name = "evento" id = "evento" required>
                                       <option value="{$registro.id_evento}">{$registro.evento}</option>
                                        {foreach from=$listevento item=linha}
                                            {if $linha.codigo neq $registro.id_evento}   
                                                <option value="{$linha.codigo}">{$linha.descricao}</option>
                                            {/if}
                                        {/foreach}
                                    </select >
                                    <br>
                                    <label for="cliente">Produto</label>
                                    <select class="form-control" name = "produto" id = "produto" required>
                                         <option value="{$registro.id_produto}">{$registro.produto}</option>
                                        {foreach from=$listproduto item=linha}
                                            {if $linha.codigo neq $registro.id_produto}   
                                                <option value="{$linha.codigo}">{$linha.produto}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                    <br>
                                    <label for="quantidade">Quantidade</label>
                                    <input type="number" class="form-control" id="quantidade" name="quantidade" value="{$registro.qtd}" required>
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