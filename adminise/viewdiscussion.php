<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 1;
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
<title> Discussion Forum </title>

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
</head>

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

$obj=new database();
$res=$obj->searchdiscussion($term);
while($row=mysqli_fetch_array($res))
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
	
	echo '<a href="viewcomments.php?id='.$pk_d_id.'"><font color="blue" size="5"><center>'.$d_title.'</center></font></a><br>';
	echo '<font color="black"><center>'.$d_desc.'</center></font><br><br>';
	echo '<i class="fa fa-user" aria-hidden="true"></i> '.'Asked By : '.$u_name;
	echo '&nbsp;&nbsp;<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;Category : '.$cat_name.'<br><br>';
	echo '<i class="fa fa-clock-o" aria-hidden="true"></i> Date : '.$d_date.'<br><br>';
	echo '<a href="viewcomments.php?id='.$pk_d_id.'"><i class="glyphicon glyphicon-comment"></i>&nbsp;'.$cnt.' comments</a>';
//	echo '</div>';
//	echo '</div>';
	echo '<hr>';
	
	
	
	
	
}
}



?>

<?php
if(!isset($_POST["btn"]))
{
$obj=new database();

$noi=10;		
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
				
		

$res=$obj->getalldiscussion1($page1,$noi);
while($row=mysqli_fetch_array($res))
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
	echo '<font color="black"><center>'.$d_desc.'</center></font><br><br>';
	echo '<i class="fa fa-user" aria-hidden="true"></i> '.'Asked By : '.$u_name;
	echo '&nbsp;&nbsp;<i class="fa fa-folder" aria-hidden="true"></i>&nbsp;Category : '.$cat_name.'<br><br>';
	echo '<i class="fa fa-clock-o" aria-hidden="true"></i> Date : '.$d_date.'<br><br>';
	echo '<a href="viewcomments.php?id='.$pk_d_id.'"><i class="glyphicon glyphicon-comment"></i>&nbsp;'.$cnt.' comments</a>';
//	echo '</div>';
//	echo '</div>';
	echo '<hr>';
	
	
	
	
}
$res1=$obj->getalldiscussion();
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
			echo '<a href="viewdiscussion.php?page='.$first_page.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			if($prev_page==0)
			{
				
			}
			
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="viewdiscussion.php?page='.$b.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		
		if($page==$last_page)
		{
			
		}
		else if($a==0)
		{
			
		}
		else 
		{	
		echo '<a href="viewdiscussion.php?page='.$last_page.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
			}
		?>



<?php
include 'part2.php';
?>
</body>

</html>