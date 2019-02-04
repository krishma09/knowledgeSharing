<?php

$pk_ans_id=$_REQUEST["id"];
	require 'database.php';
	
	$obj=new database();
	$res=$obj->ansapprove($pk_ans_id);
																
	if($res==1)
	{
		header('location:anstoapp.php');
	}

?>