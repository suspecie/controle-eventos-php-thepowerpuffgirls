<form role="form" action="/relatorioeventocliente/buscar" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o seu Nome">
    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite a Descrição do Evento">
    <br>
    <input type="submit" class="btn btn-default" value="BUSCAR" />
    <br><p>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Descrição do Evento</th>
            <th>Nome do Participante</th>
            <th>Status Evento</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listevento item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.descricao}</td>
                <td>{$linha.nome}</td>
                <td>{$linha.statusevento}</td>
            </tr>
        {foreachelse}
            <tr><td colspan="100%">Sem Registros</td></tr>
        {/foreach}          
    </tbody>
</table>