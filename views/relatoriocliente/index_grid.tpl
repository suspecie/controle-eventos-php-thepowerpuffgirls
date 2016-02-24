<form role="form" action="/relatoriocliente/buscar" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu Nome">
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o seu Endereco">
    <input type="text" class="form-control" name="codigouc" id="codigo_uc" placeholder="Digite o seu Codigo UC">
    <input type="text" class="form-control" name="codigonis" id="codigo_nis" placeholder="Digite o seu Codigo NIS">
    <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o seu CPF">
    <input type="text" class="form-control" name="rg" id="rg" placeholder="Digite o seu RG">
    <br>
    <input type="submit" class="btn btn-default" value="BUSCAR" />
    <br><p>
</form>



<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Endereco</th>
            <th>Codigo Uc</th>
            <th>Codigo Nis</th>
            <th>CPF</th>
            <th>RG</th>      

        </tr>
    </thead>
    <tbody>
        {foreach from=$listcliente item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.nome}</td>
                <td>{$linha.endereco}</td>
                <td>{$linha.codigo_uc}</td>
                <td>{$linha.codigo_nis}</td>
                <td>{$linha.cpf}</td>                
                <td>{$linha.rg}</td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Sem Registros</td></tr>
        {/foreach}          
    </tbody>
</table>