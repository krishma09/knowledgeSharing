<?php

$pk_q_id=$_REQUEST["id"];
	require 'database.php';
	
	$obj=new database();
	$res=$obj->questionapprove($pk_q_id);
																
	if($res==1)
	{
		header('location:quetoapp.php');
	}

?>