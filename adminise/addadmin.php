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
<title>Add Admin</title>

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

</head>

<body>


<?php
include 'part1.php';
?>
<br>

<form method="post" action="#">
<div class="row">
<div class="col-md-offset-4">
<div class="col-md-5">
<div class="form-group">
<center> <font size="6">ADD ADMIN </font></center>
<br>
<br>
<br>
 <input type="email" id="inputname" class="form-control" name="txtemail" placeholder="Enter Email Id" required autofocus><br>

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
	$newadmin=$_POST["txtemail"];
	$obj=new database();
	$res1=$obj->checkadmin($newadmin);
	while($row=mysqli_fetch_array($res1))
	{
		$u_type=$row["u_type"];
	}	
	
	if($u_type=="admin")
	{
		$message = "already an admin";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
	}
	else if($u_type=="user")
	{
	$res=$obj->addadmin($newadmin);
	if($res==1)
	{
		
		$message = "added";
		echo "<script type='text/javascript'>alert('$message');</script>";
		
	}
	else
	{
		$message = "something went wrong";
		echo "<script type='text/javascript'>alert('$message');</script>";
	
	}
	}
	else
	{
		$message = "something went wrong";
		echo "<script type='text/javascript'>alert('$message');</script>";
	
	}
		
}

?>				
               


<?php
include 'part2.php';
?>
</body>

</html>