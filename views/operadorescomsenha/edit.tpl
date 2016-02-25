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
                            <h1>Editar Operadores com Senha</h1>
                            <form role="form" action="/operadorescomsenha/update/id/{$registro.codigo}" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id" name="id" value="{$registro.codigo}">

                                <div class="form-group">
                                   <label for="nome">Nome</label>
                                    <input required="true" type="input" class="form-control" id="nome" name="nome" value="{$registro.nome}" required>
                               
                                     <label for="senha">Senha</label>
                                    <input required="true" type="password" class="form-control" id="senha" name="senha" value="{$registro.senha}" required>
                                                                       
                                    
                                    <label for="tipo_acesso">Tipo de Acesso</label>
                                    <select class="form-control" name = "tipo_acesso" id = "tipo_acesso" required>
                                         <option value="{$registro.tipo_acesso}">{$registro.acessodescricao}</option>
                                            {foreach from=$listtipoacesso item=linha}
                                                {if $linha.codigo neq $registro.tipo_acesso}   
                                                <option value="{$linha.codigo}">{$linha.acessodescricao}</option>
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
