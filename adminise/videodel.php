 <?php

$pk_v_id=$_REQUEST["id"];
	require 'database.php';
	
	$obj=new database();
	$res=$obj->videodel($pk_v_id);
																
	if($res==1)
	{
		header('location:video.php');
	}

?>