<?php 
	$emailid=$_REQUEST["id"];
	require 'database.php';
	$obj=new database();
	$res=$obj->deleteuser($emailid);
	
	if($res==1)
	{
		header('Location:userdetails1.php');
		
	}
	else
	{
		echo"Not Deleted";
	}
?>