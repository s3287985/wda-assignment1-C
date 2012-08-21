<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 01:31:33
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreC/templates/controlPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1482447211502a6f559a7314-36527584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59d717090a031e49f937d057a0e238bed32457f7' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreC/templates/controlPanel.tpl',
      1 => 1344958133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1482447211502a6f559a7314-36527584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'current_view' => 0,
    'WEB_ROOT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502a6f55a3c1f1_87147438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502a6f55a3c1f1_87147438')) {function content_502a6f55a3c1f1_87147438($_smarty_tpl) {?><div id="controlPanel">
	<?php if ($_smarty_tpl->tpl_vars['current_view']->value!="search"){?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php">Search</a>
	<?php }?>
	<?php if ($_SESSION['session']==true){?>
		<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/result.php?submit=history">History</a>
		<a class="button" href="?session=end">Logout</a>
	<?php }else{ ?>
		<a class="button" href="?session=start">Login</a>
	<?php }?>
</div><?php }} ?>