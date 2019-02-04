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
</head>

<body>
<?php

$ref=$_SERVER['PHP_SELF'];
$sec="60";
header("Refresh: $sec; url=trydash.php");
?>


<?php
include 'part1.php';
?>

 <div class="col-xs-2">
 
 
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
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
										 Users!
								</div>		
								
								
                    </div>
					</a>
                        </div>
						
<div class="col-xs-2">
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
						
<div class="col-xs-2">
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




<div class="col-md-offset-2">

<div class="col-md-5">
 
 
<a href="viewdiscussion.php">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:#a285c5;">
							
                                <div class="row">
								
								<div font size="20px" class="col-md-offset-9">
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
<h3><center><font color="red" size="5">Top 5 questions</font></center> 
<br>
<table class="table" border="1">
<thead>
<tr>
<th><center><font size="4" color="blue">Category</font></center></th>
<th><center><font size="4" color="blue">Questions</font></center></th>
<th><center><font size="4" color="blue">Views</font></center></th>
</tr>
</thead>
<tbody>

<?php 
$res11=$obj->gettopque(1);

while($row=mysqli_fetch_array($res11))
{
	
		$q_title=$row["q_title"];
		$view=$row["view"];
		echo '<tr>';
	echo '<td>'.$row["cat_name"].'</td>';
	echo '<td><a href="viewans.php?id='.$row["pk_q_id"].'">'.$q_title.'</a></td>';
	echo '<td>'.$view.'</td>';
	echo '</tr>';
	
}
	


 ?> 


</tbody>
</table>
	</h3>	


<br><br>

<br>
<h3><center><font color="red" size="5">New Discussion Forums</font></center> 
<br>
<table class="table" border="1">
<thead>
<tr>
<th><center><font size="4" color="blue">Category</font></center></th>
<th><center><font size="4" color="blue">Title</font></center></th>
<th><center><font size="4" color="blue">Comments</font></center></th>
</tr>
</thead>
<tbody>

<?php 
$res11=$obj->getnewdiscussion();

while($row=mysqli_fetch_array($res11))
{
	
		$d_title=$row["d_title"];
		
	echo '<tr>';
	echo '<td>'.$row["cat_name"].'</td>';
	echo '<td><a href="viewcomments.php?id='.$row["pk_d_id"].'">'.$d_title.'</a></td>';
	$res10=$obj->getcommentcountbydisid($row["pk_d_id"]);
	while($row=mysqli_fetch_array($res10))
	{
		$cnt=$row["cnt"];
	}
	echo '<td>'.$cnt.'</td>';
	echo '</tr>';
	
}
	


 ?> 


</tbody>
</table>
	</h3>	
	
	
<?php
include 'part2.php';



?>
</body>

</html>