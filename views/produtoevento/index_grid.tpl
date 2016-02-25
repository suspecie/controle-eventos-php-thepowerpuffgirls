<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Evento</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listprodutoevento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.evento}</td>
                <td>{$linha.produto}</td>
                <td>{$linha.qtd}</td> 
                 <td><a href="/produtoevento/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/produtoevento/edit/id/{$linha.codigo}">Editar </a> | 
                     <a href="/produtoevento/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum Registro</td></tr>
        {/foreach}          
    </tbody>
</table>
{$paginador}