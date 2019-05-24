<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:37:38
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\ajaxModals\addJezyk.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabdb425a6240_51842514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1ead66ecfe5941b3b325e5a459be761d2d5e3e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\ajaxModals\\addJezyk.html.tpl',
      1 => 1546457999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../jezyk/jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5cabdb425a6240_51842514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7575959915cabdb425929c4_39509684', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13365049245cabdb42596844_71330593', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17990627145cabdb4259a6c0_55394593', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18324211795cabdb425a23c5_01089964', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_7575959915cabdb425929c4_39509684 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_7575959915cabdb425929c4_39509684',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
jezyk/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_13365049245cabdb42596844_71330593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13365049245cabdb42596844_71330593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17990627145cabdb4259a6c0_55394593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17990627145cabdb4259a6c0_55394593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../jezyk/jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_18324211795cabdb425a23c5_01089964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_18324211795cabdb425a23c5_01089964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
