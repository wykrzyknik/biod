<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\modals\deleteConfirmBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f6201ef6_51366856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0becf59a02e11befbd218ed16bac54f7b637f3d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\modals\\deleteConfirmBlock.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./formBlock.html.tpl' => 1,
  ),
),false)) {
function content_5cabd8f6201ef6_51366856 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18460180025cabd8f61f24e3_06394875', 'id');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18278973225cabd8f61f6363_55336995', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19570785465cabd8f61fa1e7_98916757', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10802806555cabd8f61fe061_35138863', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./base.html.tpl");
}
/* {block 'id'} */
class Block_18460180025cabd8f61f24e3_06394875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_18460180025cabd8f61f24e3_06394875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
delete-confirm-modal<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_18278973225cabd8f61f6363_55336995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18278973225cabd8f61f6363_55336995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Usuwanie danych<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_19570785465cabd8f61fa1e7_98916757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19570785465cabd8f61fa1e7_98916757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:./formBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'content'} */
/* {block 'acceptButton'} */
class Block_10802806555cabd8f61fe061_35138863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_10802806555cabd8f61fe061_35138863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button type="submit" class="btn btn-danger">Usuń</button>
<?php
}
}
/* {/block 'acceptButton'} */
}
