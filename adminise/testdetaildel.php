<?php 
	$id=$_REQUEST["id"];
	require 'database.php';
	$obj=new database();
	$res=$obj->deletetestdetail($id);
	
	if($res==1)
	{
		header('Location:testdetails.php');
		
	}
	else
	{
		echo"Not Deleted";
	}
?>