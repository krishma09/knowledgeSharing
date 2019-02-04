 <?php
session_start();
include 'database.php';
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }
?>

<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> </title>

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


<?php
include 'part1.php';
?>

<?php

$obj=new database();
$res=$obj->getadmindetails($email);
while($row=mysqli_fetch_array($res))
{
	$u_name=$row["u_name"];
	$u_gender=$row["u_gender"];
	$u_city=$row["u_city"];
	$u_pic=$row["u_pic"];
}

?>


<!--<div class="row">-->

 <!-- <div class="col-sm-6 col-md-offset-4">-->
   <center>
	
      <img src="images/<?php echo $u_pic;?>" " alt="Profile Pic" height="200px" width="200px">
      
    </center>
	<br>
	<br>
	<div class="caption">
        <h3>
		<font size="5">
		
	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;	 Name : <?php echo $u_name; ?>
		<br>
		<br>
		<span class="fa fa-envelope" style="font-size:30px"></span>&nbsp;&nbsp;Email : <?php echo $email; ?>
		<br>
		<br>
		<i style="font-size:30px" class="fa">&#xf228;</i>&nbsp;Gender : <?php echo $u_gender; ?>
		<br>
		<br>
		
		<span class="fa fa-home" style="font-size:30px"></span>&nbsp;&nbsp;City : <?php echo $u_city; ?>
		
		</font>
		
		</h3>
        
</div>
  
  



<?php
include 'part2.php';
?>
</body>

</html>