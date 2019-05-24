<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:35:41
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\navbarBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabdacde65c15_66535737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5773805fe5b7fc6f4ee44afac1438e6bc1c5df10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\navbarBlock.html.tpl',
      1 => 1554766531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cabdacde65c15_66535737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
localhost">Strona Główna</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4316205425cabdacde32f84_18779493', 'leftNavbar');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14568628655cabdacde3ac85_98015941', 'rightNavbar');
?>

    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- Bootstrap core JavaScript
	 ================================================== -->
	 <!-- Placed at the end of the document so the pages load faster -->
	 <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/external/jquery.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/external/validator.min.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/external/bootstrap.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/external/datatables.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/external/dataTables.checkboxes.min.js"><?php echo '</script'; ?>
>
<?php }
/* {block 'leftNavbar'} */
class Block_4316205425cabdacde32f84_18779493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftNavbar' => 
  array (
    0 => 'Block_4316205425cabdacde32f84_18779493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
schowek/">Schowek</a></li>
      </ul>

      <?php
}
}
/* {/block 'leftNavbar'} */
/* {block 'rightNavbar'} */
class Block_14568628655cabdacde3ac85_98015941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightNavbar' => 
  array (
    0 => 'Block_14568628655cabdacde3ac85_98015941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="nav navbar-nav navbar-right">
              <?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>
        <li class="dropdown">
          <a href="#">Zalogowany/a</a></li>
          <li><a id="edit-password" data-url="formularz-zmiany-hasla/">Zmień hasło</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
wyloguj/">Wyloguj się</a></li>
          </ul>

                <?php } else { ?>
        </li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-logowania/">Zaloguj się</a></li>
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-rejestracji/">Rejestracja</a></li>
        <?php }?>
      </ul>
      <?php
}
}
/* {/block 'rightNavbar'} */
}
