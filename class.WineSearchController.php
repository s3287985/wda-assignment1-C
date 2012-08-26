<?php
class WineSearchController
{
	var $databaseConnection;
	function __construct($databaseConnection)
	{
		$this->databaseConnection = $databaseConnection;
	}
	function search($params)
	{
				// accessing the database		
		/*
	

		/* query as a regular select query*/
		$query = 
		"SELECT * from wine_detail as wd
		WHERE
		('".$_GET["wineName"]."'='' OR wd.wine_name LIKE '%".$_GET["wineName"]."%') AND
		('".$_GET["wineryName"]."'='' OR wd.winery_name LIKE '%".$_GET["wineryName"]."%') AND
		('".$_GET["region"]."'='All' OR region_name LIKE '%".$_GET["region"]."%') AND
		('".$_GET["grape"]."'='Any' OR variety LIKE '%".$_GET["grape"]."%') AND
		year>=".$_GET["minYear"]." AND year<=".$_GET["maxYear"]." AND stock>=".($_GET["stock"]!=''?$_GET["stock"]:0)." AND sold>=".($_GET["ordered"]!=''?$_GET["ordered"]:0)."
		AND cost>=".($_GET["minPrice"]!=''?$_GET["minPrice"]:0)." AND cost<=".($_GET["maxPrice"]!=''?$_GET["maxPrice"]:"9999")."
		";

		//processing query result
		$resultList=array();
		$result = mysql_query($query, $this->databaseConnection);
		$count = mysql_num_rows($result);
		if($count > 0)
		{
			 while($row = mysql_fetch_array($result,MYSQL_ASSOC))
			{
					$resultList[] = $row;
			}
		}
		return $resultList;
	}
}
?>