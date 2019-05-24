<?php
/* Smarty version 3.1.33, created on 2019-04-10 19:20:04
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\ajaxModals\editSchowek.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae25c44387f5_32270695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2335a3303c839256e9b35d47b7ce3369e647d8bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\ajaxModals\\editSchowek.html.tpl',
      1 => 1554913672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../schowek/schowekForm.html.tpl' => 1,
  ),
),false)) {
function content_5cae25c44387f5_32270695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6336050265cae25c4415574_05424561', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10154421075cae25c44193f6_57268706', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3189405065cae25c441d275_35037777', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5290915305cae25c4434973_13383675', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_6336050265cae25c4415574_05424561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_6336050265cae25c4415574_05424561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
schowek/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_10154421075cae25c44193f6_57268706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10154421075cae25c44193f6_57268706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja schowek<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_3189405065cae25c441d275_35037777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_3189405065cae25c441d275_35037777',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../schowek/schowekForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_5290915305cae25c4434973_13383675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_5290915305cae25c4434973_13383675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
