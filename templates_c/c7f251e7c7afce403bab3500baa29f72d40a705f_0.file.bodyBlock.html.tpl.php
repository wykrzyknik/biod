<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f610fbb6_31651169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7f251e7c7afce403bab3500baa29f72d40a705f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\bodyBlock.html.tpl',
      1 => 1546540565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./flashMessage.html.tpl' => 1,
    'file:./modals/base.html.tpl' => 1,
  ),
),false)) {
function content_5cabd8f610fbb6_31651169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="page-header">
    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7145467965cabd8f6107eb3_35952785', 'title');
?>
</h1>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11798079085cabd8f610bd34_33492770', 'body');
?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:./modals/base.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'title'} */
class Block_7145467965cabd8f6107eb3_35952785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7145467965cabd8f6107eb3_35952785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowy tytuł strony<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_11798079085cabd8f610bd34_33492770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_11798079085cabd8f610bd34_33492770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'body'} */
}
