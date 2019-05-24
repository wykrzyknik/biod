<?php
/* Smarty version 3.1.33, created on 2019-04-09 01:27:49
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\jezyk\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cabd8f5f02062_25911133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e2f8fc9cefcac130dbbf6abb79272a298b30dfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\jezyk\\showAll.html.tpl',
      1 => 1548095574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cabd8f5f02062_25911133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17979430155cabd8f5e9c750_10974136', 'title');
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_871859455cabd8f5ebf9d9_31404238', 'checkableFormHeader');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10315844105cabd8f5ecb550_98417734', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16782545965cabd8f5ecf3d5_32621772', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16071614825cabd8f5ed3253_47977056', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14780773065cabd8f5efa369_58677225', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_17979430155cabd8f5e9c750_10974136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17979430155cabd8f5e9c750_10974136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista Jezyk<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_16825342805cabd8f5ec76d5_67582597 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="jezyk/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj jezyk">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj jezyk
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_871859455cabd8f5ebf9d9_31404238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_871859455cabd8f5ebf9d9_31404238',
  ),
  'groupAction' => 
  array (
    0 => 'Block_16825342805cabd8f5ec76d5_67582597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16825342805cabd8f5ec76d5_67582597', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_10315844105cabd8f5ecb550_98417734 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_10315844105cabd8f5ecb550_98417734',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>id</th>
	<th>NazwaJezyka</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_16782545965cabd8f5ecf3d5_32621772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_16782545965cabd8f5ecf3d5_32621772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <th class="searchable">id</th>
  <th class="searchable">NazwaJezyka</th>
  <th></th>
<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_16071614825cabd8f5ed3253_47977056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_16071614825cabd8f5ed3253_47977056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['NazwaJezyka'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true"></span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="jezyk/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj jezyk">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
jezyk/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń jezyk">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>




  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_14780773065cabd8f5efa369_58677225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14780773065cabd8f5efa369_58677225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h4><span style="color:red">Błąd podczas wejścia na podaną strone:  </span></h4></br>
<h5><span style="color:green">Nie jesteś zalogowany/a na strone. Musisz być zalogowany ,aby uzyskać dostęp do tej strony  </span></h5></br></br>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-logowania/" type="button">Zaloguj się</a></br>
  <a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
formularz-rejestracji/" type="button">Rejestracja</a></br>
	<?php
}
}
/* {/block 'body'} */
}
