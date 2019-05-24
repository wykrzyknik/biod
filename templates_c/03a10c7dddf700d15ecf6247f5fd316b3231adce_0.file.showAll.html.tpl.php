<?php
/* Smarty version 3.1.33, created on 2019-04-10 19:19:39
  from 'C:\xampp\htdocs\bezpieczenstwo\templates\schowek\showAll.html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cae25ab98a2d5_27171256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a10c7dddf700d15ecf6247f5fd316b3231adce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bezpieczenstwo\\templates\\schowek\\showAll.html.tpl',
      1 => 1554912596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cae25ab98a2d5_27171256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php if ($_smarty_tpl->tpl_vars['currentUser']->value != false) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17889964595cae25ab938248_81734622', 'title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14881894065cae25ab943dc6_77816190', 'checkableFormHeader');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11185920425cae25ab94bac4_47441192', 'thead');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16111410125cae25ab94f944_80212595', 'tfoot');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13568505525cae25ab9537d9_68442270', 'tbody');
?>


<?php } elseif ($_smarty_tpl->tpl_vars['currentUser']->value == false) {?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5888818875cae25ab97a8d0_33902905', 'body');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../tableTemplate.html.tpl");
}
/* {block 'title'} */
class Block_17889964595cae25ab938248_81734622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17889964595cae25ab938248_81734622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Schowek - Lista loginów i haseł<?php
}
}
/* {/block 'title'} */
/* {block 'groupAction'} */
class Block_403086755cae25ab947c41_13332544 extends Smarty_Internal_Block
{
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    <button type="button" class="btn btn-primary add-button"
	          data-url="schowek/formularz/"
	          data-toggle="tooltip" data-placement="top" title="Dodaj schowek">
	          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Dodaj schowek
	    </button>
	<?php
}
}
/* {/block 'groupAction'} */
/* {block 'checkableFormHeader'} */
class Block_14881894065cae25ab943dc6_77816190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkableFormHeader' => 
  array (
    0 => 'Block_14881894065cae25ab943dc6_77816190',
  ),
  'groupAction' => 
  array (
    0 => 'Block_403086755cae25ab947c41_13332544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div  style="padding-bottom: 50px"><span class="btn-group pull-right">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_403086755cae25ab947c41_13332544', 'groupAction', $this->tplIndex);
?>

</span></div>
<?php
}
}
/* {/block 'checkableFormHeader'} */
/* {block 'thead'} */
class Block_11185920425cae25ab94bac4_47441192 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'thead' => 
  array (
    0 => 'Block_11185920425cae25ab94bac4_47441192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<th>id</th>
	<th>login</th>
	<th>hasło</th>
	<th>strona www</th>
	<th class="hidden-print"></th>
<?php
}
}
/* {/block 'thead'} */
/* {block 'tfoot'} */
class Block_16111410125cae25ab94f944_80212595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tfoot' => 
  array (
    0 => 'Block_16111410125cae25ab94f944_80212595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <th class="searchable">id</th>
  <th class="searchable">login</th>
	<th class="searchable">hasło</th>
	<th class="searchable">strona www</th>
  <th></th>
<?php
}
}
/* {/block 'tfoot'} */
/* {block 'tbody'} */
class Block_13568505525cae25ab9537d9_68442270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tbody' => 
  array (
    0 => 'Block_13568505525cae25ab9537d9_68442270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['row']->value['password'];?>
</td>
  <td><?php echo $_smarty_tpl->tpl_vars['row']->value['stronawww'];?>
</td>
  <td><span class="btn-group pull-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
schowek/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" type="button" class="btn btn-primary btn-sm"
				data-toggle="tooltip" data-placement="top" title="Pokaż szczegółowe informacje">
				<span class="glyphicon glyphicon glyphicon-file" aria-hidden="true"></span>
		</a>
		<button type="button" class="btn btn-primary btn-sm edit-button"
          data-url="schowek/formularz-edycja/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/"
          data-toggle="tooltip" data-placement="top" title="Edytuj schowek">
          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    </button>
		<a href="<?php echo $_smarty_tpl->tpl_vars['protocol']->value;
echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
schowek/usun/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/" type="button" class="btn btn-danger btn-sm delete-button"
				data-toggle="tooltip" data-placement="top" title="Usuń schowek">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		</a>




  </span></td>
<?php
}
}
/* {/block 'tbody'} */
/* {block 'body'} */
class Block_5888818875cae25ab97a8d0_33902905 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5888818875cae25ab97a8d0_33902905',
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
