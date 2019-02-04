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
<title>Add Quqestion</title>

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
<form action="#" method="post" name="form1" enctype="multipart/form-data">
<center><font size="6" color="tomato">Add Question  </font>
<div class="row">
<div class="col-md-8">

<div class="panel panel-default">

  
  <div class="panel-body">

<div class="row">
<div class="col-md-6">
<div class="input-group">
<span class="input-group-addon" id="basic-addon1" style="background-color:#FFF8DC;"><font color="#0000CD">Category</font></span>
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
<div class="col-md-10">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2" style="background-color:#FFF8DC;"><font color="#0000CD">Quqestion Title</font></span>
  <input type="text" name="q_title" class="form-control" placeholder="Quqestion Title" maxlength="50" aria-describedby="sizing-addon2">
</div>
</div>
</div>


<div class="row">
<div class="col-md-10">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2" style="background-color:#FFF8DC;"><font color="#0000CD">Quqestion Description</font></span>
  <textarea class="form-control" name="q_desc" placeholder="Quqestion Description" aria-describedby="sizing-addon2" rows="3" cols="20" maxlength="100"></textarea>
</div>
</div>
</div>


<div class="row">
<div class="col-md-10">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1" style="background-color:#FFF8DC;"><font color="#0000CD">Question Image</font></span>
  <input type="file" name="q_img">
</div>
</div>
</div>


<div class="row">
<div class="col-md-offset-9">
<label for="focusedinput" class="col-sm-2 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add Question</button>
</div>
</div>


</div>
</div>

</div>
</div>
</center>
</form>
<?php 
/*
if(isset($_POST["btnadd"]))
{
																
$q_title=$_POST["q_title"];
$q_desc=$_POST["q_desc"];
$q_img=$_POST["q_img"];
$fk_cat_id=$_POST["fk_cat_id"];
$q_date=date("j-n-Y h:i:s a");
$flag=1;
echo $q_date;																	
																
																
$obj=new Database();
$res=$obj->addquestion($q_title,$q_desc,$q_img,$q_date,$email,$fk_cat_id,$flag);
																
if($res==1)
{
header('location:approvedque.php');
}
else
{
echo "error";
}
	
}
*/

if(isset($_POST["btnadd"]))
{
$q_title=$_POST["q_title"];
$q_desc=$_POST["q_desc"];
$fk_cat_id=$_POST["fk_cat_id"];
$q_date=date("j-n-Y h:i:s a");
$flag=1;
echo $q_date;

$q_img="images/".$_FILES["q_img"]["name"];
$ext=pathinfo($q_img,PATHINFO_EXTENSION);
if($ext=="jpg" || $ext=="jpeg" || $ext=="png")
{
if(move_uploaded_file($_FILES["q_img"]["tmp_name"],$q_img))
{
$q_img=$_FILES["q_img"]["name"];
$obj=new database();
$res=$obj->addquestion($q_title,$q_desc,$q_img,$q_date,$email,$fk_cat_id,$flag);
																	
if($res==1)
{
header('location:approvedque.php');
}
else
{
echo "error";
}
}
}
}	
												
?>
<?php
include 'part2.php';
?>
</body>

</html>