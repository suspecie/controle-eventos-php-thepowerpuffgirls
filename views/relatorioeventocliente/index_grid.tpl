<table class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Cidade</th>
            <th>Status Evento</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listevento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.descricao}</td>
                <td>{$linha.cidade}</td>
                <td>{$linha.statusevento}</td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Sem Registros</td></tr>
        {/foreach}          
    </tbody>
</table>