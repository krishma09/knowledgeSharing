<?php
session_start();
//$page=$_GET['page'];

$page = isset($_GET['page']) ? $_GET['page'] : 1;
include 'database.php';
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }
 
?>

<!DOCTYPE HTML>
<html>

<!-- Mirrored from www.extracoding.com/demo/html/adminise/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Mar 2017 09:18:03 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tutorial</title>
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
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
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
                    <input type="text" name="term" placeholder="Search categories" />
                    <input type="submit" value="go" name="btn" />
					 
                </div>	
</form>
<?php include '2.php';	?>			
							<br><br>				
												
				<center>														
				<table class="table">
				<thead>
				
				<tr>
				 
					<th><font size="3" color="blue"><b>Subject</b></font>
					<th><font size="3" color="blue"><b>View Subtopics</b></font>
					<th><font size="3" color="blue"><b>Delete</b></font>
				</tr>
				</thead>
				
				<tbody>
				<?php
				$obj=new database();
				if(isset($_POST["btn"]))
				{
					
				


$term = mysql_real_escape_string($_REQUEST['term']);     

$res1=$obj->searchcat($term); 

while ($row = mysqli_fetch_array($res1)){  
  
   echo '<tr>';
					echo '<td><font size="4" color="black">'.$row["cat_name"].'</font></td>';
					echo '<td><a href="subcat.php?id='.$row["pk_cat_id"].'"><button type="submit" class="btn btn-primary"> Subtopics</button></a></td>';
					echo '<td><a href="catdel.php?id='.$row["pk_cat_id"].'"><button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
					echo '</tr>';
}  


				}
?>

				<?php
							

			if(!isset($_POST["btn"]))
			{

$noi=7;

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
		
				$res=$obj->getallcategories1($page1,$noi);
				while($row=mysqli_fetch_array($res))
				{
					echo '<tr>';
					echo '<td><font size="4" color="black">'.$row["cat_name"].'</font></td>';
					echo '<td><a href="subcat.php?id='.$row["pk_cat_id"].'"><button type="submit" class="btn btn-primary"> Subtopics</button></a></td>';
					echo '<td><a href="catdel.php?id='.$row["pk_cat_id"].'"><button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
					echo '</tr>';
				}						
				
				$res1=$obj->getallcategories();
		$cnt=mysqli_num_rows($res1);	
		//echo $cnt.'<br>';
		
		$a=$cnt/$noi;
		
		$a=ceil($a);
		$last_page=$a;
			}
				
        ?>  
				
				
			</tbody>
			</table> 
			</center>
			<?php
			if(!isset($_POST["btn"]))
			{
			echo '<br><center>';
			if($page==1)
			{
				
			}
			else 
			{	
			echo '<a href="categories.php?page='.$first_page.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			if($prev_page==0)
			{
				
			}
			else
			{
		echo '<a href="categories.php?page='.$prev_page.'" style="text-decoration:none;"><button class="button">Previous</button></a>';	
			}
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="categories.php?page='.$b.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		if($next_page==$a)
		{
			echo '<a href="categories.php?page='.$next_page.'" style="text-decoration:none;"><button class="button">Next</button></a>';	
		}
		else
		{	
		
		}
		if($page==$last_page)
		{
			
		}
		else if($a==0)
		{
			
		}
		else 
		{	
		echo '<a href="categories.php?page='.$last_page.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
			}
		?>


<?php
include 'part2.php';
?>
</body>

</html>