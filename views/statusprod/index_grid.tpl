<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Status do Produto</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$liststatusprod item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.status_prod}</td>
                 <td><a href="/statusprod/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/statusprod/edit/id/{$linha.codigo}">Editar</a> | 
                     <a href="/statusprod/delete/id/{$linha.codigo}" class="del">Deletar</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum registro encontrado!</td></tr>
        {/foreach}          
    </tbody>
</table>