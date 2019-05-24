<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:50
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\footerBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f61cf269_68649363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16535821f83f070cb998a777d0c20dd051e0a2fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\footerBlock.html.tpl',
      1 => 1548276476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cabd8f61cf269_68649363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <!-- FOOTER -->
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8956485025cabd8f61b3cd4_52453810', 'footer');
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16590166765cabd8f61c7565_36613466', 'javascript');
?>

</body>
</html>
<?php }
/* {block 'footer'} */
class Block_8956485025cabd8f61b3cd4_52453810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_8956485025cabd8f61b3cd4_52453810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container">
      <footer class="footer">
        <p>Zaawansowane programowanie aplikacji internetowych</p>

      <?php echo '<?php
        ';?>\Tools\FlashMessage::printDate();
        Dzisiaj jest  printDate();
         <?php echo '?>';?>
      </footer>
  </div>
  <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript'} */
class Block_16590166765cabd8f61c7565_36613466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript' => 
  array (
    0 => 'Block_16590166765cabd8f61c7565_36613466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if (isset($_smarty_tpl->tpl_vars['jsFile']->value)) {?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jsFile']->value, 'script');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
?>
          <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"><?php echo '</script'; ?>
>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }?>
  <?php
}
}
/* {/block 'javascript'} */
}
