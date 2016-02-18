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
                            <h1>Edição de Evento</h1>
                            <form role="form" action="/evento/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">

                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input required="true" type="input" class="form-control" id="descricao" name="descricao" value="{$registro.descricao}">
                                </div>  
                                <div class="form-group">
                                    <label for="cidade">Cidade</label>                                    
                                    <select class="form-control" name = "cidade" id = "cidade">
                                         <option value="{$registro.id_cidade}">{$registro.cidade}</option>
                                            {foreach from=$listscidade item=linha}
                                                {if $linha.codigo neq $registro.id_cidade}   
                                                    <option value="{$linha.codigo}">{$linha.descricao}</option>
                                                {/if}
                                            {/foreach}                                                                                
                                    </select >
                                </div> 
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name = "status" id = "status">
                                         <option value="{$registro.id_status}">{$registro.statusevento}</option>
                                            {foreach from=$liststatusevento item=linha}
                                                {if $linha.codigo neq $registro.id_status}   
                                                <option value="{$linha.codigo}">{$linha.descricao}</option>
                                                {/if}
                                            {/foreach}                                                                                
                                    </select >
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