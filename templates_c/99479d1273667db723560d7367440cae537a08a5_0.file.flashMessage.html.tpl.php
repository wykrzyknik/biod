<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\flashMessage.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f6169941_97548778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99479d1273667db723560d7367440cae537a08a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\flashMessage.html.tpl',
      1 => 1544108154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cabd8f6169941_97548778 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php if (isset($_smarty_tpl->tpl_vars['success']->value) && count($_smarty_tpl->tpl_vars['success']->value) > 0) {?>
  	<div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['success']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</p>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['warning']->value) && count($_smarty_tpl->tpl_vars['warning']->value) > 0) {?>
  	<div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warning']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</p>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['error']->value) && count($_smarty_tpl->tpl_vars['error']->value) > 0) {?>
  	<div class="alert alert-wrror alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wornig']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</p>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php }?> 
<?php }
}
