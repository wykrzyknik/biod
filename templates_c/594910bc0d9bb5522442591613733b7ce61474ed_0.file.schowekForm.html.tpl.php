<?php
/* Smarty version 3.1.33, created on 2019-04-10 19:19:43
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\schowek\schowekForm.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae25afd34a03_61902944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '594910bc0d9bb5522442591613733b7ce61474ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\schowek\\schowekForm.html.tpl',
      1 => 1554912188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cae25afd34a03_61902944 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group has-feedback">
  <label for="NazwaJezyka">Login</label>
  <input class="form-control" id="login" name="login" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['login'])) {
echo $_smarty_tpl->tpl_vars['data']->value['login'];
}?>"
    type="text"
    data-minlength="2"
    maxlength="16"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 2 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="password">Hasło</label>
  <input class="form-control" id="password" name="password" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['password'])) {
echo $_smarty_tpl->tpl_vars['data']->value['password'];
}?>"
    type="text"
    data-minlength="8"
    maxlength="30"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 8 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<div class="form-group has-feedback">
  <label for="stronawww">Strona Internetowa</label>
  <input class="form-control" id="stronawww" name="stronawww" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['stronawww'])) {
echo $_smarty_tpl->tpl_vars['data']->value['stronawww'];
}?>"
    type="text"
    data-minlength="4"
    maxlength="100"
    data-required-error="Pole wymagane"
    data-minlength-error="Minimalna długość to 4 znaki"
    required>
  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
  <div class="help-block with-errors"></div>
</div>
<?php }
}
