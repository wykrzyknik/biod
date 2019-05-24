<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:25:11
  from 'C:\xampp\htdocs\safe\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab9207328575_91196629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b6cc4c5536c39edefd77384898cc8b0951ad8c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\tableTemplate.html.tpl',
      1 => 1546540586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5cab9207328575_91196629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14870867475cab92072f9773_42370400', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10580678335cab9207320871_12381172', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'checkableFormHeader'} */
class Block_14887392165cab92072fd5f9_67461463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_635156535cab9207301478_01637648 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_13952638115cab92073052f0_16688074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				  <th></th>
    					<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_12449462245cab9207318b79_02245652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'tbody'} */
/* {block 'checkableFormFooter'} */
class Block_15070888995cab920731c9f5_97298032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormFooter'} */
/* {block 'body'} */
class Block_14870867475cab92072f9773_42370400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14870867475cab92072f9773_42370400',
  ),
  'checkableFormHeader' => 
  array (
    0 => 'Block_14887392165cab92072fd5f9_67461463',
  ),
  'thead' => 
  array (
    0 => 'Block_635156535cab9207301478_01637648',
  ),
  'tfoot' => 
  array (
    0 => 'Block_13952638115cab92073052f0_16688074',
  ),
  'tbody' => 
  array (
    0 => 'Block_12449462245cab9207318b79_02245652',
  ),
  'checkableFormFooter' => 
  array (
    0 => 'Block_15070888995cab920731c9f5_97298032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14887392165cab92072fd5f9_67461463', 'checkableFormHeader', $this->tplIndex);
?>

    <!-- BEGIN TABLE WITH DATA -->
    <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
        <thead><tr>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_635156535cab9207301478_01637648', 'thead', $this->tplIndex);
?>

        </tr></thead>
    		<tfoot><tr>
    					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13952638115cab92073052f0_16688074', 'tfoot', $this->tplIndex);
?>

    	  </tr></tfoot>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
    			<tr <?php if (isset($_smarty_tpl->tpl_vars['row']->value['noSelectable']) && $_smarty_tpl->tpl_vars['row']->value['noSelectable'] === true) {?>class="noSelectable"<?php }?>>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12449462245cab9207318b79_02245652', 'tbody', $this->tplIndex);
?>

    			</tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table><!-- END TABLE WITH DATA -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15070888995cab920731c9f5_97298032', 'checkableFormFooter', $this->tplIndex);
?>

  <?php }
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_10580678335cab9207320871_12381172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10580678335cab9207320871_12381172',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:./modals/deleteConfirmBlock.html.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
