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

<!-- Mirrored from www.extracoding.com/demo/html/adminise/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2017 09:18:03 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Dashboard</title>
<!--// Stylesheets //-->
<link href="assets/css/style.css" rel="stylesheet" media="screen" />
<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--// Javascript //-->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.accordion.js"></script>
<script type="text/javascript" src="assets/js/jquery.custom-scrollbar.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<script>
		var blink_speed = 500; var t = setInterval(function () { var ele = document.getElementById('blinker'); ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); }, blink_speed);
		</script>
</head>

<body>
<?php

$ref=$_SERVER['PHP_SELF'];
$sec="60";
header("Refresh: $sec; url=dashboard.php");
?>


<?php
include 'part1.php';
?>
<div class="row">
 <div class="col-md-4">
 
 
<a href="userdetails1.php">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:#666981;">
							
                                <div class="row">
								
								<div font size="20px" class="col-md-offset-8">
								<font size="8">
									<?php  
											
											$res=$obj->getalluser();
											$cnt=mysqli_num_rows($res);
											//$cnt=mysqli_num_rows($res);
											echo $cnt;
											
										?>
										</font>
								</div>
								</div>
                                    <!--<div class="col-xs-3">-->
                                        <i class="fa fa-user-o fa-3x"></i>
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
										 Users!
								</div>		
								
								
                    </div>
					</a>
                        </div>
						
<div class="col-md-4">
<a href="categories.php">
 <div class="panel panel-success">
                            <div class="panel-heading" style="background-color:	#FA6E79;">
							
                                <div class="row">
								
								<div font size="20px" class="col-md-offset-9">
								<font size="8" color="white">
									<?php  
											
											$res1=$obj->getallcategories();
											
											$cnt=mysqli_num_rows($res1);
											echo $cnt;
										?>
								
								</font>
								</div>
								</div>
                                    <!--<div class="col-xs-3">-->
                                      <font color="white">  <i class="fa fa-graduation-cap fa-3x"></i></font>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
										<font color="white">Tutorials!</font>
								</div>		
                    </div>
					</a>
                        </div>
						
<div class="col-md-4">
<a href="queview.php">
 <div class="panel panel-success">
 
                            <div class="panel-heading" style="background-color:#e17695;">
							
                                <div class="row">
								
								<div font size="20px" class="col-md-offset-8">
								<font size="8" color="white">
								
								
									<?php  
											
											$res3=$obj->getquestionsbyflag(1);
											
											$cnt=mysqli_num_rows($res3);
											echo $cnt;
										?>
								
								
								
								</font>
									
								</div>
								</div>
                                    <!--<div class="col-xs-3">-->
                                      <font color="white">  <i class="fa fa-question fa-3x"></i></font>
										&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;
										<font color="white">Questions!</font>
								</div>		
                    </div>
					</a>
                        </div>


</div>

<div class="col-md-offset-2">

<div class="col-md-5">
 
 
<a href="viewdiscussion.php">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:#a285c5;">
							
                                <div class="row">
								
								<div font size="20px" class="col-md-offset-8">
								<font size="8">
									<?php  
											
											$res=$obj->getalldiscussion();
											$cnt=mysqli_num_rows($res);
											//$cnt=mysqli_num_rows($res);
											echo $cnt;
										?>
										</font>
								</div>
								</div>
                                    <!--<div class="col-xs-3">-->
                                        <i class="fa fa-users fa-3x"></i>
										&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
										 Discussion Forums!
								</div>		
								
								
                    </div>
					</a>
                        </div>
						
<div class="col-md-5">
<a href="feedback1.php">
 <div class="panel panel-success">
                            <div class="panel-heading" style="background-color:#fbb168;">
							
                                <div class="row">
								
								<div font size="20px" class="col-md-offset-9">
								<font size="8" color="white">
									<?php  
											
											$res1=$obj->getallfeedback();
											
											$cnt=mysqli_num_rows($res1);
											echo $cnt;
										?>
								
								</font>
								</div>
								</div>
                                    <!--<div class="col-xs-3">-->
                                      <font color="white">  <i class="fa fa-commenting-o fa-3x"></i></font>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
										<font color="white">Feedback!</font>
								</div>		
                    </div>
					</a>
                        </div>


<br>
<br>
</div>
</div>
<br>
<h3 style="border-bottom: solid;solid;border-top: solid"><center><font color="red" size="6" face="Franklin Gothic"><b>TOP 5 QUESTIONS</b></font></center> 
</h3>
<h3>
<br>


<?php

$res=$obj->gettopque(1);
while($row=mysqli_fetch_array($res))
{
	$pk_q_id=$row["pk_q_id"];
	$q_title=$row["q_title"];
	$q_date=$row["q_date"];
	$u_name=$row["u_name"];
	$u_pic=$row["u_pic"];
	$cat_name=$row["cat_name"];
	
	$res1=$obj->getanscountbyqueid(1,$pk_q_id);
	while($row=mysqli_fetch_array($res1))
	{
		$cnt=$row["cnt"];
	}
	$res2=$obj->getqueview($pk_q_id);
	$view=0;
	while($row=mysqli_fetch_array($res2))
	{
		$view=$row["view"];
	}
	
	
	
	echo '<div class="row">';
	echo '<div class="col-md-2">';
	
	                     
								
								
								
									 
											
								echo '<img src="../project-final/user_images/'.$u_pic.'" height="120px" width="120px" class="img-circle">';		
										
									
								
								echo ' 
								</div>
								
   <div class="col-md-8">';                 

	echo '<a href="viewans.php?id='.$pk_q_id.'"><font color="blue">'.$q_title.'</font></a><br><br>';
	echo '<i class="fa fa-user" aria-hidden="true"></i> '.'Asked By : '.$u_name;
	echo '&nbsp;&nbsp;<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;Category : '.$cat_name.'<br><br>';
	echo '<a href="viewans.php?id='.$pk_q_id.'"><i class="fa fa-pencil" aria-hidden="true"></i> Answer : '.$cnt.'</a>&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;View : '.$view;
	echo '</div>';
	echo '</div>';
	echo '<hr>';
	
	
	
	
}



?>

</tbody>
</table>
	</h3>	



<h3 style="border-bottom: solid;border-top: solid"><center><font color="red" size="6" face="Franklin Gothic"><b>New Discussion Forum</b></font></center> </h3>
<h3>


<?php 
$res11=$obj->getnewdiscussion();
while($row=mysqli_fetch_array($res11))
{
$pk_d_id=$row["pk_d_id"];
	$d_title=$row["d_title"];
	$d_desc=$row["d_desc"];
	$d_date=$row["d_date"];
	$u_name=$row["u_name"];
	$cat_name=$row["cat_name"];
	
	$res1=$obj->getcommentcountbydisid($pk_d_id);
	while($row=mysqli_fetch_array($res1))
	{
		$cnt=$row["cnt"];
	}
	
	
	
	
//	echo '<div class="row">';
//	echo '<div font size="20px" class="col-md-2">';
/*	echo '<a href="viewcomments.php?id='.$pk_d_id.'">';
	echo '<div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:blue;">
							
                               
								
								
								<font size="5" color="white">';
									 
											
								echo '<font size="4" color="white">'.$cnt.' comments</font>';		
										
									echo '</font>';
								
								echo '</div>
                                   		
								</div> </a>
								*/
								
                    

	echo '<a href="viewcomments.php?id='.$pk_d_id.'"><font color="blue" size="5"><center>'.$d_title.'</center></font></a><br>';
	
	echo '<i class="fa fa-user" aria-hidden="true"></i> '.'Asked By : '.$u_name;
	echo '&nbsp;&nbsp;<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;Category : '.$cat_name.'<br><br>';
	echo '<i class="fa fa-clock-o" aria-hidden="true"></i> Date : '.$d_date.'<br><br> ';
	echo '<a href="viewcomments.php?id='.$pk_d_id.'"><i class="glyphicon glyphicon-comment"></i>&nbsp;'.$cnt.' comments</a>';
//	echo '</div>';
//	echo '</div>';
	echo '<hr>';
	
	
	
	
}
 ?> 


<!--


<br>
<h3><center><font color="red" size="5">Top user</font></center> 
<br>
<table class="table" border="1">
<thead>
<tr>
<th><center><font size="4" color="blue">username</font></center></th>
</tr>
</thead>
<tbody>
<?php 
/*$res3=$obj->getalluser();

while($row=mysqli_fetch_array($res3))
{
	
		$u_name=$row["pk_email_id"];
		$res5=$obj->getanscnt($u_name);
		while($row=mysqli_fetch_array($res5))
		{
			$u_name=$row["fk_email_id"];
			$cnt=$row["cnt"];
	//echo '<tr>';
	//echo '<td>'.$row["fk_email_id"].'</td>';
	//echo '<td>'.$row["cnt"].'</td>';
	//echo '</tr>';
		}
		echo '<tr>';
		echo '<td>'.$u_name.'</td>';
		echo '<td>'.$cnt.'</td>';
		echo '</tr>';
		

}*/

 ?> 


</tbody>
</table>
-->
	</h3>	
	
	
<?php
include 'part2.php';



?>
</body>

</html>