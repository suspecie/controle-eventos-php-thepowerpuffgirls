<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Departamento</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listdepartamento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.departamento}</td>
                <td><a href="/departamento/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                    <a href="/departamento/edit/id/{$linha.codigo}">Editar</a> | 
                    <a href="/departamento/delete/id/{$linha.codigo}" class="del">Deletar</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum registro encontrado!</td></tr>
        {/foreach}          
    </tbody>
</table>
{$paginador}