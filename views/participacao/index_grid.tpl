<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>Evento</th>
            <th>Data/Hora</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listparticipacao item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.cliente}</td>
                <td>{$linha.evento}</td>
                <td>{$linha.data_hora|date_format:"%d/%m/%Y %H:%M:%S"}</td>
                <td><a href="/participacao/detalhes/id/{$linha.codigo}">Detalhes</a> | 
                    <a href="/participacao/delete/id/{$linha.codigo}" class="del">Excluir</a></td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Nenhum Registro</td></tr>
        {/foreach}          
    </tbody>
</table>
<div class="row">
    <div class="col-md-4">
        <h4>{if isset($error)}{$error}{/if}</h4>
    </div>  
</div> 