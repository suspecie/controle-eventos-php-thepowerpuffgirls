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

            <table border="3" class="table table-striped" style="width: 40%">
                <tbody>
                    <tr>
                        <td colspan="2" align="center"> <h3>{$registro.evento}</h3> </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> 
                            {if $registro.foto != null }
                                <img src="/{$registro.foto}" class="fotocracha">
                            {else}
                                <img src="/files/images/logo.jpg"  class="fotocracha">
                            {/if}
                        </td>

                    </tr>
                    <tr>
                        <td style="width: 20%"><b>Nome: </b>{$registro.nomecliente}</td>
                        <td style="width: 20%"><b>Codigo: </b>{$registro.codcliente}</td>
                    </tr>
                </tbody>
            </table>


        </div>
        <!-- /#wrapper -->

        {include file="comum/footer.tpl"}    

        <script src="/files/js/cracha/index.js"></script>

    </body>

</html>