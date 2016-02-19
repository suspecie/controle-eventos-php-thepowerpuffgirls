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
                            <h1>Edição Participação</h1>
                            <form role="form" action="/participacao/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>                                    
                                    <select class="form-control" name = "cliente" id = "cliente">
                                        <option value="{$registro.id_cliente}">{$registro.cliente}</option>
                                        {foreach from=$listcliente item=linha}
                                            {if $linha.codigo neq $registro.id_cliente}   
                                                <option value="{$linha.codigo}">{$linha.nome}</option>
                                            {/if}
                                        {/foreach}                                                                                
                                    </select>
                                    <br>
                                    <label for="evento">Evento</label>                                    
                                    <select class="form-control" name = "evento" id = "evento">
                                        <option value="{$registro.id_evento}">{$registro.evento}</option>
                                        {foreach from=$listevento item=linha}
                                            {if $linha.codigo neq $registro.id_evento}   
                                                <option value="{$linha.codigo}">{$linha.descricao}</option>
                                            {/if}
                                        {/foreach}                                                                                
                                    </select>
                                    <br>
                                    <label for="datahora">Data/Hora</label>
                                    <input type="input" class="form-control" id="datahora" name="datahora" value="{$registro.data_hora}">
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