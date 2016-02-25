<?php
/* Smarty version 3.1.29, created on 2016-02-25 11:31:22
  from "/var/www/html/controle-eventos-php-thepowerpuffgirls/views/comum/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf103a13dff2_43844517',
  'file_dependency' => 
  array (
    '40f301030772cb1c830cd19569d86a2b34a7caaf' => 
    array (
      0 => '/var/www/html/controle-eventos-php-thepowerpuffgirls/views/comum/sidebar.tpl',
      1 => 1456367773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf103a13dff2_43844517 ($_smarty_tpl) {
?>
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="/home">
                Controle de Eventos
            </a>   
        </li>
        <ul>
            <h3> Cadastros </h3>
            <li>
                <a href="/operadorescomsenha">Operadores</a>
            </li>
            <li>
                <a href="/estado">Estado</a>
            </li>
            <li>
                <a href="/cidade">Cidade</a>
            </li>
            <li>
                <a href="/cliente">Cliente</a>
            </li>
            <li>
                <a href="/departamento">Departamento</a>
            </li>
            <li>
                <a href="/statusevento">Status do Evento</a>
            </li>
            <li>
                <a href="/evento">Evento</a>
            </li>
            <li>
                <a href="/statusprod">Status do Produto</a>
            </li>
            <li>
                <a href="/produto">Produto</a>
            </li>
            <li>
                <a href="/produtoevento">Vincular Produto ao Evento</a>
            </li>
        </ul>
        <ul>
            <h3> Evento </h3>
            
            <li>
                <a href="/participacao">Participação</a>
            </li>
            <li>
                <a href="/cracha">Emitir Crachá</a>
            </li>
        </ul>
        <ul>
            <h3> Relatórios </h3>
            
            <li>
                <a href="/relatoriocliente">Clientes</a>
            </li>
            <li>
                <a href="/relatorioeventocliente">Eventos e Clientes</a>
            </li>
        </ul>        
    </ul>
</div>
<?php }
}
