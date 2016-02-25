<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>            
            <th>Tipo de Acesso</th>                 
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listoperadorescomsenha item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.nome}</td>                             
                <td>{$linha.acessodescricao}</td> 
                 <td><a href="/operadorescomsenha/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                     <a href="/operadorescomsenha/edit/id/{$linha.codigo}">Editar</a> | 
                     <a href="/operadorescomsenha/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Sem Registros</td></tr>
        {/foreach}          
    </tbody>
</table>