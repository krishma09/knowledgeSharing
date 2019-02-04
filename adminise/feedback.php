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
<title>Feedback</title>

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
                    <input type="text" name="term" placeholder="Search by category, username" />
                    <input type="submit" value="go" name="btn" />
					 
                </div>	
</form>
<?php include '2.php';	?>



<table class="table">
				<thead>
				
				<tr>
					<th><b>Profile Pic</b></th>
					<th><b>User name</b></th>
					<th><b>Category</b></th>
					<th><b>Feedback</b></th>
					<th><b>Date</b></th>
					
				</tr>
				</thead>
				
				<tbody>
				
				<?php
				$obj=new database();
				if(isset($_POST["btn"]))
				{
					
				


$term = mysql_real_escape_string($_REQUEST['term']);     

$res2=$obj->searchfeedback($term); 

while ($row = mysqli_fetch_array($res2)){  
  
   echo '<tr>';
					echo '<td><img class="img-circle" src="images/'.$row["u_pic"].'" height="100px" width="100px"></td>';
					echo '<td>'.$row["u_name"].'</td>';
					echo '<td>'.$row["f_cat"].'</td>';
					echo '<td>'.$row["f_desc"].'</td>';
					echo '<td>'.$row["f_date"].'</td>';
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
				
				
				$res=$obj->getallfeedback1($page1,$noi);
				while($row=mysqli_fetch_array($res))
				{
					echo '<tr>';
					echo '<td><img class="img-circle" src="images/'.$row["u_pic"].'" height="100px" width="100px"></td>';
					echo '<td>'.$row["u_name"].'</td>';
					echo '<td>'.$row["f_cat"].'</td>';
					echo '<td>'.$row["f_desc"].'</td>';
					echo '<td>'.$row["f_date"].'</td>';
					echo '</tr>';
				}						
				
				$res1=$obj->getallfeedback();
		$cnt=mysqli_num_rows($res1);	
		//echo $cnt.'<br>';
		
		$a=$cnt/$noi;
		
		$a=ceil($a);
		$last_page=$a;
				
				
			}
				?>
			</tbody>
			</table>

			<?php
			
			if(!isset($_POST["btn"]))
			{
			echo '<br><center>';
			if($page==1)
			{
				
			}
			else 
			{	
			echo '<a href="feedback.php?page='.$first_page.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			if($prev_page==0)
			{
				
			}
			else
			{
		echo '<a href="feedback.php?page='.$prev_page.'" style="text-decoration:none;"><button class="button">Previous</button></a>';	
			}
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="feedback.php?page='.$b.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		if($next_page==$a)
		{
			echo '<a href="feedback.php?page='.$next_page.'" style="text-decoration:none;"><button class="button">Next</button></a>';	
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
		echo '<a href="feedback.php?page='.$last_page.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
			}
		?>


<?php
include 'part2.php';
?>
</body>

</html>