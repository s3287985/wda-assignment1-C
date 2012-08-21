<?php
require_once('smartySetup.php');
require_once('db.php');
require_once('connect.php');
require_once('validate.php');
$smarty->assign('title','searchView');
$smarty->assign('current_view','search');
$smarty->assign('style_sheet_link','connect-style.css');
$wineSearchValidators = new ValidatorGroup();
$yearRangeValidator = new ComparisonValidator("minYear","<=","maxYear");
$stockValidator = new NumberValidator("stock");
$orderedValidator = new NumberValidator("ordered");
$minPriceValidator = new NumberValidator("minPrice");
$maxPriceValidator = new NumberValidator("maxPrice");
$priceRangeValidator = new ComparisonValidator("minPrice","<=","maxPrice");

$wineSearchValidators->addValidator($yearRangeValidator);
$wineSearchValidators->addValidator($stockValidator);
$wineSearchValidators->addValidator($orderedValidator);
$wineSearchValidators->addValidator($minPriceValidator);
$wineSearchValidators->addValidator($maxPriceValidator);
$wineSearchValidators->addValidator($priceRangeValidator);
if($_GET['submit']=='search')
{
	if(!$wineSearchValidators->validate())
	{
		$smarty->assign('result_headers', array("Input Error: "));
		$smarty->assign('results', $wineSearchValidators->messages);
	}
	else
	{
		$url = 'http://yallara.cs.rmit.edu.au/~s3287985/winestoreC/result.php?';
		$variables = $_GET;
		foreach($_GET as $key=>$value)
		{
			$url =$url.'&'.$key.'='.$value;
		}
		header( 'Location: '.$url) ;
	}
}

$result = mysql_query ("Select * from region", $dbconn);
$regions = array();
while($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
	$regions[$row["region_name"]] = $row["region_name"];
}
$smarty->assign('regions',$regions);

$result = mysql_query ("Select * from grape_variety", $dbconn);
$grapes = array('Any','Any');
while($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
	$grapes[$row["variety"]] = $row["variety"];
}
$smarty->assign('varieties',$grapes);
$result = mysql_query("Select min(year) as min,max(year) as max from wine", $dbconn);
$years = array();
$row = mysql_fetch_array($result,MYSQL_ASSOC);
$smarty->assign('minYear',$row["min"]);
$smarty->assign('maxYear',$row['max']);
$smarty->display('searchView.tpl');
?>