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
                             <h1>Detalhes Participação</h1>
                            <table class="table table-striped">                        
                                <tbody>
                                    <tr><td>Código</td>  <td>{$registro.codigo}</td></tr>
                                    <tr><td>Cliente</td>  <td>{$registro.cliente}</td></tr>
                                    <tr><td>Evento</td>  <td>{$registro.evento}</td></tr>   
                                    <tr><td>Data/Hora</td>  <td>{$registro.data_hora|date_format:"%d/%m/%Y %H:%M:%S"}</td></tr>  
                                    <tr><td>Arquivo</td>  <td><img src="/{$registro.caminho_arquivo}" id="arquivo" class="arquivo"/></td></tr>  
                                    <tr><td>Foto</td>  <td><img src="/{$registro.caminho_foto}" id="fotos" class="arquivo"/></td></tr>  
                                </tbody>
                            </table>                            
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
