<?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 03:00:29
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreC/templates/resultView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:652045951502a81560f99a9-80210256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f4213c7ef2ed3d62e1a338fe22216bb3d4b4744' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreC/templates/resultView.tpl',
      1 => 1344963625,
      2 => 'file',
    ),
    'c86c7f6705db063b20e8156d1d7ab842a311f375' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreC/templates/base.tpl',
      1 => 1344961102,
      2 => 'file',
    ),
    'ef77d75261c045833823cd55bd811bf10711248b' => 
    array (
      0 => '/home/stud/s3287985/.HTMLinfo/winestoreC/templates/resultPanel.tpl',
      1 => 1344959669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '652045951502a81560f99a9-80210256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_502a81563df958_16991445',
  'variables' => 
  array (
    'title' => 0,
    'style_sheet_link' => 0,
    'current_view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502a81563df958_16991445')) {function content_502a81563df958_16991445($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
    <meta name="description" content="winestore result" />  
    <meta name="keywords" content="This, Is, The, Wine, Store, 	" />  
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>  
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style_sheet_link']->value;?>
" type="text/css"/>  
</head>
<body>
	<div id="wrapper">
		<div id="left-pane">
			<div id="title">
				<div id="pageTitle"> WineStore</div>
				<div id="viewTitle"> current view: <?php echo $_smarty_tpl->tpl_vars['current_view']->value;?>
</div>
			</div>
			
	<a class='button' href='search.php'> &lt; &lt; back to search view</a>

		</div>
		<div id="right-pane">
			
	<?php /*  Call merged included template "resultPanel.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("resultPanel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '652045951502a81560f99a9-80210256');
content_502a842d3c1ff9_19742833($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "resultPanel.tpl" */?>

		</div>
		<div class="clear">
		</div>
	</div>
</body><?php }} ?><?php /* Smarty version Smarty-3.1.11, created on 2012-08-15 03:00:29
         compiled from "/home/stud/s3287985/.HTMLinfo/winestoreC/templates/resultPanel.tpl" */ ?>
<?php if ($_valid && !is_callable('content_502a842d3c1ff9_19742833')) {function content_502a842d3c1ff9_19742833($_smarty_tpl) {?><table class="search_result">
	<tr>
		<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result_headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
			<th><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</th>
		<?php } ?>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<?php  $_smarty_tpl->tpl_vars['cell'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cell']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cell']->key => $_smarty_tpl->tpl_vars['cell']->value){
$_smarty_tpl->tpl_vars['cell']->_loop = true;
?>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

				</td>
			<?php } ?>
		</tr>
	<?php } ?>
</table><?php }} ?>