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
                            <h1>Novo Cliente</h1>
                            <form role="form" action="/cliente/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="input" class="form-control" id="nome" name="nome" required>
                                
                                     
                                    <label for="endereco">Endereço</label>
                                    <input type="input" class="form-control" id="endereco" name="endereco" required>
                                          
                                    
                                    <label for="codigo_uc">Codigo UC</label>
                                    <input type="input" class="form-control" id="codigo_uc" name="codigo_uc" required>
                                                        
                                    
                                    <label for="codigo_nis">Codigo NIS</label>
                                    <input type="input" class="form-control" id="codigo_uc" name="codigo_nis" required>
                                
                                                           
                                    <label for="cpf">CPF</label>
                                    <input type="input" class="form-control" id="cpf" name="cpf" required>
                                                              
                               
                                    <label for="rg">RG</label>
                                    <input type="input" class="form-control" id="rg" name="rg" required>
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
