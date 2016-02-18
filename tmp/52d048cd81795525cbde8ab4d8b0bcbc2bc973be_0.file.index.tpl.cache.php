<?php
/* Smarty version 3.1.29, created on 2016-02-16 15:05:44
  from "/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/blank/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c356e86990c1_25078187',
  'file_dependency' => 
  array (
    '52d048cd81795525cbde8ab4d8b0bcbc2bc973be' => 
    array (
      0 => '/var/www/htdocs/controle-eventos-php-thepowerpuffgirls/views/blank/index.tpl',
      1 => 1453928755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c356e86990c1_25078187 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2140479956c356e86714c7_87972291';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
