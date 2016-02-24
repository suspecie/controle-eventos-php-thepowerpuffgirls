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
                            </form>
                            <div class="panel panel-default">
                                <div class="panel panel-body">
                                    <div class="col-xs-12">
                                        <div class="col-md-6">
                                            <video id="video" width="640" height="480" autoplay></video>
                                        </div>
                                        <div class="col-md-5">
                                            <canvas id="canvas" width="640" height="480" ></canvas>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <br>
                                        <input type="hidden" name="id_evento_cliente" value="{$id}" id="id_evento_cliente">
                                        <button class="btn btn-default" id="snap">Tirar Foto</button>
                                        <button class="btn btn-default" id="save">Salvar Foto</button>
                                    </div>
                                </div>
                            </div>        
                            <form action="/participacao/uploadFile/id_evento_cliente/{$id}" method="POST" enctype="multipart/form-data">
                                <div class="panel panel-default">
                                    <div class="panel panel-body">
                                        <div class="col-xs-12">
                                            <div >
                                                <label class="col-md-12" for="file">Selecione a imagem para upload: </label>
                                            </div>
                                            <div class="col-md-5">
                                                <input class="col-md-12" type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                                            </div>
                                        </div>
                                    </div>
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
        <script src="/files/js/jquery-1.12.1.js" type="text/javascript"></script>
        <script src="/files/js/fotoUtils.js" type="text/javascript"></script>
    </body>

</html>
