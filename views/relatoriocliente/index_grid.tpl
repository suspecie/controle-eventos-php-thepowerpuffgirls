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