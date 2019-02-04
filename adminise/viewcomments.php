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
<title> View comments </title>

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

$pk_d_id=$_REQUEST["id"];
$obj=new database();
$res=$obj->getdisbyid($pk_d_id);
while($row=mysqli_fetch_array($res))
{
	
	$d_title=$row["d_title"];
	$d_desc=$row["d_desc"];
	echo '<center><font size="6" color="blue">'.$d_title.'</font></center><br>';
	echo '<center><font size="4" color="black">'.$d_desc.'</font></center><br><br><br>';
$res1=$obj->getcommentbydisid($pk_d_id);
while($row=mysqli_fetch_array($res1))
{
	$comment=$row["comment"];
	$u_name=$row["u_name"];
	$date=$row["date"];
	$pk_c_id=$row["pk_c_id"];
	
	echo '<font color="	#00308F">Comment By : </font><font color="#00308F">'.$u_name.'</font><br><br>';
	echo '<font color="	#3D2B1F">'.$comment.'</font><br>';
	echo '<br><br>';
	
//	echo '<br>';
	
	echo '&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i><font color="	#00308F"> </font><font color="#3D2B1F">'.$date.'</font>&nbsp;&nbsp;';
	echo '<br><hr>';
}

}



?>
<center> Add Comment </center>
<form action="" method="post">
							
<div class="row">

<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Comment</span>
  <textarea class="form-control" name="comment" placeholder="Write your Comment" aria-describedby="sizing-addon2" rows="5" cols="20" maxlength="500"></textarea>

</div>
</div>
</div>
<br>
<div class="row">

<label for="focusedinput" class="col-sm-1 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add Comment</button>

</div>

							
<?php 

if(isset($_POST["btnadd"]))
{
																
$comment=$_POST["comment"];
date_default_timezone_set("Asia/Kolkata");
$date=date("j-n-Y h:i:s a");

																	
if (!strlen(trim($_POST['comment'])))
{
	$message = "Please Enter Comment";
	echo "<script type='text/javascript'>alert('$message');</script>";
}																
else{																
$obj=new database();
$res5=$obj->addcomment($pk_d_id,$email,$comment,$date);
																
if($res5==1)
{
header('location:viewdiscussion.php');
}
else
{
echo "error";
}
	
}

}


?>							
							
							
</form>


<?php
include 'part2.php';
?>
</body>

</html>