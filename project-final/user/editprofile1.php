<?php
session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }

?>

<?php 


			$u_pic=$_REQUEST["photo"];
			//echo $owner_image;
			$u_name=$_POST["u_name"];
			$u_gender=$_POST["u_gender"];
			$u_city=$_POST["u_city"];
//			$pic=$_POST["txtfile"];
		if($_FILES["txtfile"]["name"]!="")
		{
		//	unlink("images/".$u_pic);
			$u_pic="../user_images/".$_FILES["txtfile"]["name"];
			$u_pic1=$_FILES["txtfile"]["name"];
			move_uploaded_file($_FILES["txtfile"]["tmp_name"],$u_pic);
		}
		else if($_FILES["txtfile"]["name"]=="")
		{
			$u_pic1=$u_pic;
			//move_uploaded_file("images/".$u_pic,"images/".$u_pic);
		}
		echo $_FILES["txtfile"]["name"];	
		
require '../conclass.php';
		$obj=new conclass();
		$res=$obj->getdata("update user_tbl set u_name='$u_name', u_city='$u_city', u_gender='$u_gender', u_pic='$u_pic1' where pk_email_id='$email'");
		if($res==1)
		{
			
			header('Location:viewprofile.php');
		}			
		else
		{
			echo"not updated your detials plz try again";
		}	
		


?>