<?php /* Smarty version Smarty-3.1.15, created on 2013-10-07 18:32:42
         compiled from "templates/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10193481575252fd76112ef5-94697087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b96d23b4ff1b9d4424f5ed9aa537e0805cb8b3a' => 
    array (
      0 => 'templates/messages.tpl',
      1 => 1381170760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10193481575252fd76112ef5-94697087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5252fd76134892_41084349',
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'success' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5252fd76134892_41084349')) {function content_5252fd76134892_41084349($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
	<div class="error">
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	</div>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['success']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
	<div class="success">
		<?php echo $_smarty_tpl->tpl_vars['s']->value;?>

	</div>
<?php } ?><?php }} ?>
