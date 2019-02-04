<?php
session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }

?>

<?php 


			$u_pic=$_REQUEST["photo"];
			//echo $owner_image;
			$u_name=$_POST["u_name"];
			$u_gender=$_POST["u_gender"];
			$u_city=$_POST["u_city"];
				
		if($_FILES["txtfile"]["name"]!="")
		{
			unlink("images/".$u_pic);
			$u_pic="images/".$_FILES["txtfile"]["name"];
			$u_pic1=$_FILES["txtfile"]["name"];
			move_uploaded_file($_FILES["txtfile"]["tmp_name"],$u_pic);
		}
		else if($_FILES["txtfile"]["name"]=="")
		{
			$u_pic1=$u_pic;
			move_uploaded_file("images/".$u_pic,"images/".$u_pic);
		}
		echo $_FILES["txtfile"]["name"];	
		require 'database.php';
		$obj=new database();
		$res=$obj->editprofile($email,$u_name,$u_city,$u_gender,$u_pic1);
		if($res==1)
		{
			
			header('Location:viewprofile.php');
		}			
		else
		{
			echo"not updated your detials plz try again";
		}	
		


?>