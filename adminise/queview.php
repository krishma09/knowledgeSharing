<?php
session_start();
include 'database.php';
$page = isset($_GET['page']) ? $_GET['page'] : 1;
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
<title> Question Answer </title>

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
<style>
.button {
    background-color: #F5F3F2; 
    border: none;
    color: #555555;
    padding: 5px 10px;
    
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 1px;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    cursor: pointer;
}
</style>

<body>


<?php
include '1.php';
?>


<form action="" method="post">
 <div class="search-box">
                    <input type="text" name="term" placeholder="Search by title, category, username" id="demo1" />
                    <input type="submit" value="go" name="btn" />
					 
                </div>	
</form>
<?php include '2.php';	?>			

<?php
$obj=new database();

if(isset($_POST["btn"]))
{
$term = mysql_real_escape_string($_REQUEST['term']);     

$res3=$obj->searchquestion(1,$term);
while($row=mysqli_fetch_array($res3))
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
	
	                     
								
								
								
									 
											
								echo '<img src="images/'.$u_pic.'" height="120px" width="120px" class="img-circle">';		
										
									
								
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

}
?>

<?php
if(!isset($_POST["btn"]))
{
$obj=new database();
$noi=20;		
 if($page=="" || $page=="1")
{
	$page1=0;
}
else
{
	$page1=($page*$noi)-$noi;
}

$next_page=$page+1;
$prev_page=$page-1;
$first_page=1;				
		
$res=$obj->getquestionsbyflag1(1,$page1,$noi);
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

$res1=$obj->getquestionsbyflag(1);
				$cnt1=mysqli_num_rows($res1);
				
					$a=$cnt1/$noi;
		
		$a=ceil($a);
		$last_page=$a;

}

?>

<?php
if(!isset($_POST["btn"]))
			{
			echo '<br><center>';
			if($page==1)
			{
				
			}
			else 
			{	
			echo '<a href="queview.php?page='.$first_page.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="queview.php?page='.$b.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		
		if($page==$last_page)
		{
			
		}
		else if($a==0)
		{
			
		}
		else 
		{	
		echo '<a href="queview.php?page='.$last_page.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
			}
		?>



<?php
include 'part2.php';
?>
</body>

</html>