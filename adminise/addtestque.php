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
<title>Add Test Question </title>

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

<h2><font size="5"><center>Add Test Question</center></font></h2>

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
  <span class="input-group-addon" id="sizing-addon2">Question</span>
  <input type="text" class="form-control" name="t_que" placeholder="Write Question" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Option 1</span>
  <input type="text" class="form-control" name="t_option1" placeholder="Write Option 1" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>


<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Option 2</span>
  <input type="text" class="form-control" name="t_option2" placeholder="Write Option 2" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Option 3</span>
  <input type="text" class="form-control" name="t_option3" placeholder="Write Option 3" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Option 4</span>
  <input type="text" class="form-control" name="t_option4" placeholder="Write Option 4" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Answer</span>
  <input type="text" class="form-control" name="t_answer" placeholder="Write correct answer" aria-describedby="sizing-addon2" required>
</div>
</div>
</div>

<br>
<br>

<div class="row">
<div class="col-md-offset-3">	
<label for="focusedinput" class="col-sm-2 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add Question</button>
</div>
</div>
</form>
<?php

if(isset($_POST["btnadd"]))
{
	
$fk_cat_id=$_POST["fk_cat_id"];
$t_option1=$_POST["t_option1"];
$t_option2=$_POST["t_option2"];
$t_option3=$_POST["t_option3"];
$t_option4=$_POST["t_option4"];
$t_que=$_POST["t_que"];
$t_answer=$_POST["t_answer"];
	
$obj=new database();
$res1=$obj->addtestquestion($t_que,$t_option1,$t_option2,$t_option3,$t_option4,$t_answer,$fk_cat_id);
																
if($res1==1)
{
header('location:test.php');
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