<?php

$pk_t_id=$_REQUEST["id"];
	require 'database.php';
	
	$obj=new database();
	$res=$obj->deletetest($pk_t_id);
																
	if($res==1)
	{
		header('location:test.php');
	}

?>