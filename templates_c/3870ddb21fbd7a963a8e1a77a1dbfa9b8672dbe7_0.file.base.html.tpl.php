<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\modals\base.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f619c5d1_52958316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3870ddb21fbd7a963a8e1a77a1dbfa9b8672dbe7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\modals\\base.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cabd8f619c5d1_52958316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- BEGIN OF MODAL WINDOW -->
<div class="modal fade" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2269226835cabd8f618cbd6_86184617', 'id');
?>
"
     tabindex="-1" role="dialog"
     aria-labelledby="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11283056295cabd8f6190a52_14731267', 'id');
?>
-title" aria-hidden="true">
     <div class="modal-dialog <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17848881575cabd8f61948d3_01575003', 'size');
?>
">
        <div class="modal-content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10540601615cabd8f6198758_13529142', 'content');
?>

        </div>
     </div>
</div><!-- END OF MODAL WINDOW -->
<?php }
/* {block 'id'} */
class Block_2269226835cabd8f618cbd6_86184617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_2269226835cabd8f618cbd6_86184617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'id'} */
class Block_11283056295cabd8f6190a52_14731267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_11283056295cabd8f6190a52_14731267',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'size'} */
class Block_17848881575cabd8f61948d3_01575003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'size' => 
  array (
    0 => 'Block_17848881575cabd8f61948d3_01575003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'size'} */
/* {block 'content'} */
class Block_10540601615cabd8f6198758_13529142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10540601615cabd8f6198758_13529142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
}
}
/* {/block 'content'} */
}
