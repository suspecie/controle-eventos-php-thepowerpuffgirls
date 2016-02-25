<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Cidade</th>
            <th>Status</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listevento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.descricao}</td>
                <td>{$linha.cidade}</td>
                <td>{$linha.statusevento}</td> 
                 <td><a href="/evento/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/evento/edit/id/{$linha.codigo}">Editar </a> | 
                     <a href="/evento/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum Registro</td></tr>
        {/foreach}          
    </tbody>
</table>
    {$paginador}