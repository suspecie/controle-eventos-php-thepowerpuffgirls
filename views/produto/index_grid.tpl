<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Status</th>
            <th>Codigo Departamento</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listproduto item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.produto}</td>
                <td>{$linha.status_prod}</td>
                <td>{$linha.departamento}</td>
                 <td><a href="/produto/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/produto/edit/id/{$linha.codigo}">Editar</a> | 
                     <a href="/produto/delete/id/{$linha.codigo}" class="del">Deletar</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum registro encontrado!</td></tr>
        {/foreach}          
    </tbody>
</table>