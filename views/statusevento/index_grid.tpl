<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$liststatusevento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.descricao}</td>
                 <td><a href="/statusevento/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/statusevento/edit/id/{$linha.codigo}">Editar </a> | 
                     <a href="/statusevento/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum Registro</td></tr>
        {/foreach}          
    </tbody>
</table>