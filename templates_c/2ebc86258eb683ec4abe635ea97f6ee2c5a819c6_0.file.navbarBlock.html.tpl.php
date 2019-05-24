<?php
/* Smarty version 3.1.33, created on 2019-04-08 20:25:11
  from 'C:\xampp\htdocs\safe\templates\navbarBlock.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cab92073ad296_86245133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ebc86258eb683ec4abe635ea97f6ee2c5a819c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\safe\\templates\\navbarBlock.html.tpl',
      1 => 1548280637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cab92073ad296_86245133 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19007888305cab9207391d17_54616182', 'leftNavbar');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3039639865cab92073a1717_31175486', 'rightNavbar');
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
class Block_19007888305cab9207391d17_54616182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leftNavbar' => 
  array (
    0 => 'Block_19007888305cab9207391d17_54616182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
uczestnik/">Uczestnik</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
lektor/">Lektor</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kurs/">Kurs</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kursoferta/">KursOferta</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
kursuczestnik/">KursUczestnik</a></li>
      </ul>
      <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/">Jezyk</a></li>
      </ul>
      <?php
}
}
/* {/block 'leftNavbar'} */
/* {block 'rightNavbar'} */
class Block_3039639865cab92073a1717_31175486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rightNavbar' => 
  array (
    0 => 'Block_3039639865cab92073a1717_31175486',
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
