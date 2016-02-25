<table class="table table-striped">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$listcracha item="linha"}
            <tr>                                                                
                <td>{$linha.codigo}</td>
                <td>{$linha.nomecliente}</td>
                {if $linha.statuscracha = 1}
                    <td>Emitido</td> 
                {else}
                    <td>Não Emitido</td> 
                {/if}
                
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
{$paginador}

