<form role="form" action="/relatorioeventocliente/buscar" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control" name="evento" id="evento" placeholder="Digite o nome do evento">
    <input type="text" class="form-control" name="participante" id="participante" placeholder="Digite o nome do participante do evento">
    <input type="text" class="form-control" name="statusevento" id="statusevento" placeholder="Digite o status do evento">
    <br>
    <input type="submit" class="btn btn-default" value="BUSCAR" />
    <br><p>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Evento</th>
            <th>Participante</th>
            <th>Status Evento</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listevento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.descricao}</td>
                <td>{$linha.nomecliente}</td>
                <td>{$linha.statusevento}</td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Sem Registros</td></tr>
        {/foreach}          
    </tbody>
</table>
{$paginador}