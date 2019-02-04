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
<title> Add Video</title>

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


<form action="#" method="post">
<div class="row">

<h2><font size="5"><center>Add Video</center></font></h2>

</div>

<div class="row">
<div class="col-md-6">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1">Category</span>
<select class="form-control" name="fk_cat_id">
  <?php 
  $obj=new database();
  $res=$obj->getallcategories();
  while($row=mysqli_fetch_array($res))
  {
	  echo '<option value="'.$row["pk_cat_id"].'">'.$row["cat_name"].'</option>';
  }
?>
	  </select>
	

</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Image Path</span>
  <input type="text" class="form-control" name="v_img" placeholder="Image Path" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Video Path</span>
  <input type="text" class="form-control" name="v_video" placeholder="Video Path" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Video Title</span>
  <input type="text" class="form-control" name="v_desc" placeholder="Video Title" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>


<br>
<br>

<div class="row">
<div class="col-md-offset-3">	
<label for="focusedinput" class="col-sm-2 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add Video</button>
</div>
</div>
</form>
<?php

if(isset($_POST["btnadd"]))
{
	
$fk_cat_id=$_POST["fk_cat_id"];
$v_img=$_POST["v_img"];
$v_video=$_POST["v_video"];
$v_desc=$_POST["v_desc"];

$obj=new database();
$res1=$obj->addvideo($v_img,$v_video,$v_desc,$fk_cat_id);
																
if($res1==1)
{
header('location:video.php');
}
else
{
echo "error";
}
	
}


?>




<?php
include 'part2.php';
?>
</body>

</html>