<!DOCTYPE html>
<html lang="en">

    <head>

        {include file="comum/head.tpl"}

    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
{*      {include file="comum/sidebar.tpl"}*}
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 align="center">Realize seu login para acesso ao Controle de Evento</h1>
                            <form name="login" action="/login/check" method="POST" enctype="multipart/form-data">
                                <div>
                                Nome<input type="input" class="form-control" name="nome" id="nome">
                                Senha<input type="password" class="form-control" name="senha" id="senha">
                                </div>
                                <button type="submit" class="btn btn-default">Entrar</button>
                            </form>                        
                        </div>
{*                        <img src="/files/images/cartman - 100px x 100px.jpg"> *}
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

    {include file="comum/footer.tpl"}

    </body>

</html>
