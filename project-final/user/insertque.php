<?php	
	session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }
	
	$email=$_SESSION["email"];
	$title=$_POST["title"];
//	$desc=$_POST["desc"];
	$cat=$_POST["sub"];
	$date=date("Y-m-d");
//	$cnt=1;
//	$like=1;
	//$flag=0;
	//$str="../img/".$_FILES["photo"]["name"];
	 
//	$ext=pathinfo($str,PATHINFO_EXTENSION);
//	if($ext=="jpg" || $ext=="png" || $ext=="jpeg")
//	{
//		move_uploaded_file($_FILES["photo"]["tmp_name"],$str);
	include '../conclass.php';
	$obj= new conclass;
$id="NULL";
$res1=$obj->getdata("insert into que_tbl values('$id','$title','$date','$email','$cat','$flag')");
	
if($res1==1)
{
	header('location:que-ans.php');
	//echo "successfull";
}
else
{
	echo "nathii thayuu";
}
	//}	
?>