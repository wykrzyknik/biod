<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:37:31
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\ajaxModals\editJezyk.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabdb3be7a6d1_69682439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a69a9c94b74cf64d954796a474a4a72dff17fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\ajaxModals\\editJezyk.html.tpl',
      1 => 1546458094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../jezyk/jezykForm.html.tpl' => 1,
  ),
),false)) {
function content_5cabdb3be7a6d1_69682439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10419658365cabdb3be4f746_40175914', 'action');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8349937555cabdb3be57445_89273660', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12793316115cabdb3be5b2c3_18347698', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6269504645cabdb3be76848_46480903', 'acceptButton');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../modals/formBlock.html.tpl");
}
/* {block 'action'} */
class Block_10419658365cabdb3be4f746_40175914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_10419658365cabdb3be4f746_40175914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
jezyk/aktualizuj/<?php
}
}
/* {/block 'action'} */
/* {block 'title'} */
class Block_8349937555cabdb3be57445_89273660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8349937555cabdb3be57445_89273660',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja jezyka<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12793316115cabdb3be5b2c3_18347698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12793316115cabdb3be5b2c3_18347698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" id="id" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['id'])) {
echo $_smarty_tpl->tpl_vars['data']->value['id'];
}?>">
  <?php $_smarty_tpl->_subTemplateRender("file:../jezyk/jezykForm.html.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_6269504645cabdb3be76848_46480903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_6269504645cabdb3be76848_46480903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="submit" class="btn btn-success">Aktualizuj</button><?php
}
}
/* {/block 'acceptButton'} */
}
