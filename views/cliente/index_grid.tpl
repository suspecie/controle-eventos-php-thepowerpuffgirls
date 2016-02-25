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
            <th>Ação</th>
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
                <td><a href="/cliente/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                    <a href="/cliente/edit/id/{$linha.codigo}">Editar</a> | 
                    <a href="/cliente/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Sem Registros</td></tr>
        {/foreach}          
    </tbody>
</table>
<div class="row">
    <div class="col-md-4">
        <h4>{if isset($error)}{$error}{/if}</h4>
    </div>  
</div> 
{$paginador}