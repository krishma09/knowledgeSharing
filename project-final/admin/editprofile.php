 <?php
session_start();
include 'database.php';
$email=$_SESSION["email"];
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

<form action="editprofile1.php?photo=<?php echo $u_pic; ?>" method="post" enctype="multipart/form-data">

<div class="caption">
        <h3>
		<font size="5">
		
		<div class="row">
		<div class="col-md-5">
		
		
		<div class="form-group">
   <label for="exampleInputPassword1">Profile Pic</label><br>
   <img src="images/<?php echo $u_pic; ?>" height=220px width=220px alt="Profile Pic"><br><br>
  <input type="file" name="txtfile" value="change profile photo">
</div>

</div>
</div>

		<br>
		
		
		<div class="row">
<div class="col-md-4">
	<div class="form-group">
	
		<label for="exampleInputPassword1">Name</label>
		<input type="text" class="form-control" id="exampleInputPassword1" name="u_name" value="<?php echo $u_name; ?>">
	
	</div>
	</div>
	</div>
	
	
	<br>
 
 <div class="row">
<div class="col-md-4">
 <div class="form-group">
		<label for="exampleInputPassword1">Gender</label><br>
		<font size="4">
		<input type="radio" style="width:17px;height:17px;" name="u_gender" value="female" <?php if($u_gender=="female") echo "checked"; ?>checked>Female
		<input type="radio" style="width:17px;height:17px;" name="u_gender" value="male" <?php if($u_gender=="male") echo "checked"; ?>>Male
		</font>
	</div>
 </div>
  </div>
		<br>
		
		<div class="row">
<div class="col-md-5"> 
  <div class="form-group">
  
  <label>City</label>
  <br>
  
  <select name="u_city">
  <option value="ahmedabad" <?php if($u_city=="ahmedabad") echo"selected";?>> Ahemedabad</option>
  <option value="rajkot" <?php if($u_city=="rajkot") echo"selected";?>>Rajkot </option>
  <option value="vadodara" <?php if($u_city=="vadodara") echo"selected";?>>Vadodara </option>
  <option value="bhavnagar" <?php if($u_city=="bhavnagar") echo"selected";?>>Bhavnagar </option>
  </select>
  <br>
  <br>
    
  </div>
  </div>
</div>
		
		</font>
		</h3>

 </div>
 <br>
 <div class="row">
 <div class="col-md-offset-3">
		 	<div class="form-group">
		
			<label for="focusedinput" class="col-sm-2 control-label"><font size="3" color="black"><b></b></font></label>
			<button type="submit" class="btn btn-success" name="btnupdate" >Edit Profile</button>
			</div>
	</div>
		</div>
		
			
  </form>



<?php
include 'part2.php';
?>
</body>

</html>