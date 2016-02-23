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
                            <h1>Nova Cidade </h1>
                            <form role="form" action="/cidade/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input type="input" class="form-control" id="descricao" name="descricao" required>
                                    <br>
                                    <label for="estado">Estado</label>
                                     <select class="form-control" name = "estado" id = "id_estado">
                                         <option value=""></option>
                                       {foreach from=$listestado item=linha}
                                             <option value="{$linha.codigo}">{$linha.estado}</option>
                                       {/foreach}  
                                     </select>
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
