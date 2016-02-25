<!DOCTYPE html>
<html lang="en">

    <head>

        {include file="comum/head.tpl"}
        <!-- Custom CSS -->
        <link href="/files/css/estilo.css" rel="stylesheet">

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
                                    <input type="input" class="form-control" id="datahora" name="datahora" value="{$registro.data_hora | date_format: '%d/%m/%Y %H:%M:$S'}">
                                    <br>
                                    <label for="datahora">Arquivo (não é possível alterar o arquivo)</label>
                                    <br>
                                    <img src="/{$registro.caminho_arquivo}" id="arquivo" class="arquivo"/>
                                    <br>
                                    <br>
                                    <label for="datahora">Foto(não é possível alterar a foto)</label>
                                    <br>
                                    <img src="/{$registro.caminho_foto}" id="arquivo" class="arquivo"/>
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