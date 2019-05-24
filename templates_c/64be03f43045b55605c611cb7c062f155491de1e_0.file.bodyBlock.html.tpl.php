<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:25:11
  from 'C:\xampp\htdocs\safe\templates\bodyBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab92073cc6a6_78801923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64be03f43045b55605c611cb7c062f155491de1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\bodyBlock.html.tpl',
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
function content_5cab92073cc6a6_78801923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="page-header">
    <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2487638355cab92073c49a7_70853293', 'title');
?>
</h1>
  </div>
  <?php $_smarty_tpl->_subTemplateRender('file:./flashMessage.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1908533685cab92073c8823_09979691', 'body');
?>

</div>
<?php $_smarty_tpl->_subTemplateRender('file:./modals/base.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'title'} */
class Block_2487638355cab92073c49a7_70853293 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2487638355cab92073c49a7_70853293',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowy tytuł strony<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1908533685cab92073c8823_09979691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1908533685cab92073c8823_09979691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'body'} */
}
