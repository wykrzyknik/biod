<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\modals\formBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f62406f9_27812573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '185878ff97f8149f7b5f4984408ae9868c184dbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\modals\\formBlock.html.tpl',
      1 => 1544112388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cabd8f62406f9_27812573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

  <form id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11532881205cabd8f6228ff2_17484965', 'id');
?>
-form"
        action="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4775797055cabd8f622ce72_89332589', 'action');
?>
" method="POST">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12609439425cabd8f6230cf5_29438067', 'id');
?>
-title"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6053208625cabd8f6234b70_14587209', 'title');
?>
</h4>
    </div>
    <div class="modal-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5833388325cabd8f62389f4_90492245', 'body');
?>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_348744295cabd8f623c870_16709412', 'acceptButton');
?>

    </div>
  </form>
<?php }
/* {block 'id'} */
class Block_11532881205cabd8f6228ff2_17484965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_11532881205cabd8f6228ff2_17484965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal<?php
}
}
/* {/block 'id'} */
/* {block 'action'} */
class Block_4775797055cabd8f622ce72_89332589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'action' => 
  array (
    0 => 'Block_4775797055cabd8f622ce72_89332589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'action'} */
/* {block 'id'} */
class Block_12609439425cabd8f6230cf5_29438067 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'id' => 
  array (
    0 => 'Block_12609439425cabd8f6230cf5_29438067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
modal-id<?php
}
}
/* {/block 'id'} */
/* {block 'title'} */
class Block_6053208625cabd8f6234b70_14587209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6053208625cabd8f6234b70_14587209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Tytuł<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_5833388325cabd8f62389f4_90492245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5833388325cabd8f62389f4_90492245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'acceptButton'} */
class Block_348744295cabd8f623c870_16709412 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'acceptButton' => 
  array (
    0 => 'Block_348744295cabd8f623c870_16709412',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'acceptButton'} */
}
