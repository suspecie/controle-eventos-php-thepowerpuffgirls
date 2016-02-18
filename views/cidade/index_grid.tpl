<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Estado</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listcidade item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.descricao}</td>
                <td>{$linha.id_estado}</td>
                 <td><a href="/cidade/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/cidade/edit/id/{$linha.codigo}">Editar </a> | 
                     <a href="/cidade/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum Registro</td></tr>
        {/foreach}          
    </tbody>
</table>