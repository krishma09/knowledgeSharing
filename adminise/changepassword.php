 <?php
session_start();
include 'database.php';
$email=$_SESSION["adminemail"];
if($email=="")
 {
	 header('Location:index.php');	 
 }
?>

<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password </title>

<link href="assets/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.accordion.js"></script>
<script type="text/javascript" src="assets/js/jquery.custom-scrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<script type="text/javascript">
function passid_validation(passid,mx,my)
{
	var pl=passid.value.length;
	if(pl==0 || pl>=my || pl<mx)
	{
		alert("password should not be empty/length must be between "+mx+" to "+my);
		passid.focus();
		return false;
	}
	return true;
}
</script>
</head>

<body>


<?php
include 'part1.php';
?>





<form method="post" action="#" name="form1">

<div class="row">
<div class="col-md-offset-4">
<div class="col-md-5">
<div class="form-group">
<center><h1><font color="blue" size="5"> Change Password </font></h1></center>
<br><br>
 <input type="password" id="inputname" class="form-control" name="txtold" placeholder="Enter Old Password" required autofocus>

 </div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-offset-4">
<div class="col-md-5">
<div class="form-group">

 <input type="password" id="inputname" class="form-control" name="txtnew" placeholder="Enter New Password" onblur="return passid_validation(document.form1.txtnew,5,12);" required autofocus>

 </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-offset-4">
<div class="col-md-5">
<div class="form-group">

 <input type="password" id="inputname" class="form-control" name="txtnewcnf" placeholder="Re-enter New Password" required autofocus>

 </div>
</div>
</div>
</div>


<br>
<br>
<div class="row">
<div class="col-md-offset-4">	
<label for="focusedinput" class="col-sm-2 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add </button>
</div>
</div>
</form>

<?php

if(isset($_POST["btnadd"]))
{
		
		
		$oldpassword=$_POST["txtold"];
		$newpassword=$_POST["txtnew"];
		$cnfnewpassword=$_POST["txtnewcnf"];

		
	//	$pwd=$_POST["txtoldpwd"];
	//	$email=$_SESSION["email"];
		
		
		$obj=new database();
		$res=$obj->checkpassword($email,$oldpassword);
		$cnt=mysqli_num_rows($res);
		if($cnt==1)
		{
			
		if($newpassword==$cnfnewpassword)
		{
			
		//$obj=new database();
		$res1=$obj->changepassword($email,$newpassword);
		if($res1==1)
		{
			$message = "Password changed successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
		
		}
		else
		{
			$message = "Something went wrong";
			echo "<script type='text/javascript'>alert('$message');</script>";
		
		}

			
		}
		else
		{
			$message = "Please re-confirm your password";
			echo "<script type='text/javascript'>alert('$message');</script>";
		
		}
		}
		else
		{
			$message = "Old Password Incorrect";
			echo "<script type='text/javascript'>alert('$message');</script>";
		
		}
	
}
	




?>


<?php
include 'part2.php';
?>
</body>

</html>