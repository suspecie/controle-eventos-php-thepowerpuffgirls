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
                            <h1>Editar Cliente</h1>
                            <form role="form" action="/cliente/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">

                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input required="true" type="input" class="form-control" id="nome" name="nome" value="{$registro.nome}">
                                    
                                    <label for="endereco">Endereço</label>
                                    <input required="true" type="input" class="form-control" id="endereco" name="endereco" value="{$registro.endereco}">
                                    
                                    
                                    <label for="codigo_uc">Código UC</label>
                                    <input required="true" type="input" class="form-control" id="codigo_nis" name="codigo_uc" value="{$registro.codigo_uc}">
                                    
                                    <label for="codigo_nis">Código NIS</label>
                                    <input required="true" type="input" class="form-control" id="codigo_uc" name="codigo_nis" value="{$registro.codigo_nis}">
                               
                                    <label for="cpf">CPF</label>
                                    <input required="true" type="input" class="form-control" id="cpf" name="cpf" value="{$registro.cpf}">
                                   
                                    <label for="rg">RG</label>
                                    <input required="true" type="input" class="form-control" id="rg" name="rg" value="{$registro.rg}">
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
