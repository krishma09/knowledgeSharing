<?php
session_start();
include 'database.php';
$email=$_SESSION["adminemail"];
$id=$_REQUEST["id"];
if($email=="")
 {
	 header('Location:index.php');	 
 }

$obj=new database();
$res=$obj->getquebyid($id);
while($row=mysqli_fetch_array($res))
{
	$q_title=$row["q_title"];
}
?>

<!DOCTYPE HTML>
<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Answer</title>

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
<div class="col-md-offset-1">
<h2><font size="6"><?php echo $q_title; ?></font></h2>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Answer</span>
  <textarea class="form-control" name="ans_desc" placeholder="Write your answer" aria-describedby="sizing-addon2" rows="5" cols="20" maxlength="500" required></textarea>
</div>
</div>
</div>
<br>
<br>

<div class="row">
<div class="col-md-offset-3">
<label for="focusedinput" class="col-sm-2 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add Answer</button>
</div>
</div>
</form>
<?php

if(isset($_POST["btnadd"]))
{
																
$ans_desc=$_POST["ans_desc"];
date_default_timezone_set("Asia/Kolkata");
$ans_date=date("j-n-Y h:i:s a");
$flag=1;
																	
if (!strlen(trim($_POST['ans_desc'])))
{
	$message = "Please Enter Answer";
	echo "<script type='text/javascript'>alert('$message');</script>";

}																
else{																
$obj=new database();
$res1=$obj->addanswer($ans_desc,$email,$id,$ans_date,$flag);
																
if($res1==1)
{
header('location:approvedque.php');
}
else
{
echo "error";
}
	
}

}
?>

<?php
include 'part2.php';
?>
</body>

</html>