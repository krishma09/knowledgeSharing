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
<title>View Answer</title>

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
$like=0;
$pk_q_id=$_REQUEST["id"];
$obj=new database();
$res=$obj->getquebyid($pk_q_id);
while($row=mysqli_fetch_array($res))
{
	
	$q_title=$row["q_title"];
	echo '<center><font size="6" color="blue">'.$q_title.'</font></center><br><br><br>';
$res1=$obj->getanswersbyflagandqueid(1,$pk_q_id);
while($row=mysqli_fetch_array($res1))
{
	$ans_desc=$row["ans_desc"];
	$ans_ex=$row["ans_ex"];
	$fk_email_id=$row["u_name"];
	$ans_date=$row["ans_date"];
	$pk_ans_id=$row["pk_ans_id"];
	
	echo '<font color="	#00308F">Answer By : </font><font color="#00308F">'.$fk_email_id.'</font><br><br>';
	echo '<font color="	#3D2B1F">'.$ans_desc.'</font><br>';
	echo $ans_ex.'<br><br>';
	
//	echo '<br>';
	
	$res2=$obj->getanwerlike($pk_ans_id);
	$cnt=mysqli_num_rows($res2);
	if($cnt==1)
	{
	while($row=mysqli_fetch_array($res2))
	{
		$like=$row["ans_like"];
		echo '&nbsp; '.$like.'<i class="glyphicon glyphicon-heart" style="color:red;"></i>&nbsp;&nbsp;';
		
	}
	}
	else
	{
		$like=0; 
		echo '&nbsp;'.$like.'<i class="glyphicon glyphicon-heart" style="color:red;"></i>&nbsp;&nbsp;'; 
	}
	echo '&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i><font color="	#00308F"> </font><font color="#3D2B1F">'.$ans_date.'</font>&nbsp;&nbsp;';
	echo '<br><hr>';
}

}



?>
<center> Add Answer </center>
<form action="" method="post">
							
<div class="row">

<div class="col-md-6">
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Answer</span>
  <textarea class="form-control" name="ans_desc" placeholder="Write your answer" aria-describedby="sizing-addon2" rows="5" cols="20" maxlength="500"></textarea>

</div>
</div>
</div>
<br>
<div class="row">

<label for="focusedinput" class="col-sm-1 control-label"><font size="3" color="black"><b></b></font></label>
<button type="submit" class="btn btn-primary" name="btnadd" >Add Answer</button>

</div>

							
<?php 

if(isset($_POST["btnadd"]))
{
																
$ans_desc=$_POST["ans_desc"];
date_default_timezone_set("Asia/Kolkata");
$ans_date=date("j-n-Y h:i:s a");
$flag=1;
																	
if (!strlen(trim($_POST['ans_desc'])))
{
	$message = "Please Enter answer";
	echo "<script type='text/javascript'>alert('$message');</script>";
		
}																
else{																
$obj=new database();
$res5=$obj->addanswer($ans_desc,$email,$pk_q_id,$ans_date,$flag);
																
if($res5==1)
{
header('location:queview.php');
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