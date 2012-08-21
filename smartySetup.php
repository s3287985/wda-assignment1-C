<?php
define("USER_HOME_DIR", "/home/stud/s3287985"); // CHANGE HERE
require(USER_HOME_DIR . "/.HTMLinfo/winestoreC/Smarty-3.1.11/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreC/templates";
$smarty->compile_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreC/templates_c";
$smarty->cache_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreC/cache";
$smarty->config_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreC/configs";
?>



