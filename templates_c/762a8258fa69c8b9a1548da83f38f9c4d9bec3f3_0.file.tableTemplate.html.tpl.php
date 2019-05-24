<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\tableTemplate.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f6044980_25183142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '762a8258fa69c8b9a1548da83f38f9c4d9bec3f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\tableTemplate.html.tpl',
      1 => 1546540586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./modals/deleteConfirmBlock.html.tpl' => 1,
  ),
),false)) {
function content_5cabd8f6044980_25183142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8968200715cabd8f60022f5_04124640', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8634603115cabd8f6038e06_28488742', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./baseTemplate.html.tpl");
}
/* {block 'checkableFormHeader'} */
class Block_21114454985cabd8f6006171_96790940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_852824495cabd8f6009ff5_29543733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_4060945825cabd8f600de73_36677306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				  <th></th>
    					<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_5095465805cabd8f6031108_15471095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    				<th></th>
    				<?php
}
}
/* {/block 'tbody'} */
/* {block 'checkableFormFooter'} */
class Block_89526695cabd8f6034f87_02135693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'checkableFormFooter'} */
/* {block 'body'} */
class Block_8968200715cabd8f60022f5_04124640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8968200715cabd8f60022f5_04124640',
  ),
  'checkableFormHeader' => 
  array (
    0 => 'Block_21114454985cabd8f6006171_96790940',
  ),
  'thead' => 
  array (
    0 => 'Block_852824495cabd8f6009ff5_29543733',
  ),
  'tfoot' => 
  array (
    0 => 'Block_4060945825cabd8f600de73_36677306',
  ),
  'tbody' => 
  array (
    0 => 'Block_5095465805cabd8f6031108_15471095',
  ),
  'checkableFormFooter' => 
  array (
    0 => 'Block_89526695cabd8f6034f87_02135693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21114454985cabd8f6006171_96790940', 'checkableFormHeader', $this->tplIndex);
?>

    <!-- BEGIN TABLE WITH DATA -->
    <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
        <thead><tr>
    				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_852824495cabd8f6009ff5_29543733', 'thead', $this->tplIndex);
?>

        </tr></thead>
    		<tfoot><tr>
    					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4060945825cabd8f600de73_36677306', 'tfoot', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5095465805cabd8f6031108_15471095', 'tbody', $this->tplIndex);
?>

    			</tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table><!-- END TABLE WITH DATA -->
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89526695cabd8f6034f87_02135693', 'checkableFormFooter', $this->tplIndex);
?>

  <?php }
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_8634603115cabd8f6038e06_28488742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8634603115cabd8f6038e06_28488742',
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
