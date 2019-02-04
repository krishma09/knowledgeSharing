<?php

$pk_d_id=$_REQUEST["id"];
	require 'database.php';
	
	$obj=new database();
	$res=$obj->deldiscussion($pk_d_id);
																
	if($res==1)
	{
		header('location:discussion1.php');
	}

?>