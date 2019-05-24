<?php
/* Smarty version 3.1.33, created on 2019-04-10 19:19:43
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\ajaxModals\addSchowek.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae25afcc3567_36986757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af53f7b028a1787675485e6a8e2d32e438cf8562' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\ajaxModals\\addSchowek.html.tpl',
      1 => 1554912840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../schowek/schowekForm.html.tpl' => 1,
  ),
),false)) {
function content_5cae25afcc3567_36986757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385847555cae25afca4167_83990307', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2081104605cae25afca7fe6_53356067', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14055031145cae25afcabe61_87453412', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11933743715cae25afcbf6e4_46444454', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_1385847555cae25afca4167_83990307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_1385847555cae25afca4167_83990307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
schowek/dodaj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_2081104605cae25afca7fe6_53356067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2081104605cae25afca7fe6_53356067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Nowy schowek<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14055031145cae25afcabe61_87453412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14055031145cae25afcabe61_87453412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../schowek/schowekForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_11933743715cae25afcbf6e4_46444454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_11933743715cae25afcbf6e4_46444454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Dodaj</button><?php
}
}
/* {/block 'acceptButton'} */
}
