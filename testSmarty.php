<?php
	define("USER_HOME_DIR", "/home/stud/s3287985/");
	require(USER_HOME_DIR."php/Smarty-3.1.11/libs/Smarty.class.php");
	$smarty = new Smarty();
	$smarty->template_dir = USER_HOME_DIR."php/Smarty-Work-Dir/templates";
	$smarty->compile_dir = USER_HOME_DIR."php/Smarty-Work-Dir/templates_c";
	$smarty->compile_dir = USER_HOME_DIR."php/Smarty-Work-Dir/cache";
	$smarty->config_dir = USER_HOME_DIR."php/Smarty-Work-Dir/configs";
	$smarty->assign('title','Smarty Rocks!...mmmm maybe:-)');
	$smarty->display('home.tpl');
?>
