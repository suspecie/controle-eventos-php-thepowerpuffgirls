<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listestado item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.estado}</td>
                 <td><a href="/estado/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/estado/edit/id/{$linha.codigo}">Editar</a> | 
                     <a href="/estado/delete/id/{$linha.codigo}" class="del">Deletar</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum registro encontrado!</td></tr>
        {/foreach}          
    </tbody>
</table>