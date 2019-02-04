<?php 
	$catid=$_REQUEST["id"];
	require 'database.php';
	$obj=new database();
	$res=$obj->deletecategory($catid);
	
	if($res==1)
	{
		header('Location:categories.php');
		
	}
	else
	{
		echo"NOt deleted";
	}
?>