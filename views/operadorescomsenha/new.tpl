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
                            <h1>Novo Operador </h1>
                            <form role="form" action="/operadorescomsenha/save" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="input" class="form-control" id="name" name="nome" required>
                                    
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" required>
                                    
                                    <label for="tipo_acesso">Tipo de Acesso</label>                                    
                                    <select class="form-control" name = "tipo_acesso" id = "tipo_acesso">
                                         <option value=""></option>
                                       {foreach from=$listtipoacesso item=linha}
                                             <option value="{$linha.codigo}">{$linha.acessodescricao}</option>
                                       {/foreach}
                                    </select >
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
