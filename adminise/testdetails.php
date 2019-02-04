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
<title>Test Details</title>

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
include 'part1.php';
?>


<table class="table">
				<thead>
				
				<tr>
				 
					<th><b>User name</b></th>
					<th><b>Category</b></th>
					<th><b>Marks Obtained</b></th>
					<th><b>Date</b></th>
					<th><b>Delete</b></th>
				</tr>
				</thead>
				
				<tbody>
				<?php
							

				$obj=new database();
				
 if($page=="" || $page=="1")
{
	$page1=0;
}
else
{
	$page1=($page*5)-5;
}

$next_page=$page+1;
$prev_page=$page-1;
$first_page=1;				
				$res=$obj->getalltestdetails1($page1);
				while($row=mysqli_fetch_array($res))
				{
					echo '<tr>';
					echo '<td>'.$row["u_name"].'</td>';
					echo '<td>'.$row["cat_name"].'</td>';
					echo '<td>'.$row["t_marks"].'</td>';
					echo '<td>'.$row["t_date"].'</td>';
					echo '<td><a href="testdetaildel.php?id='.$row["pk_test_details_id"].'"><button type="submit" class="btn btn-danger">
<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td>';
					echo '</tr>';
				}						
				
				$res1=$obj->getalltestdetails();
				$cnt=mysqli_num_rows($res1);
				
				$a=$cnt/5;
		
		$a=ceil($a);
		$last_page=$a;
				
				?>
			</tbody>
			</table>

<?php
			echo '<br><center>';
			if($page==1)
			{
				
			}
			else 
			{	
			echo '<a href="testdetails.php?page='.$first_page.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			if($prev_page==0)
			{
				
			}
			else
			{
		echo '<a href="testdetails.php?page='.$prev_page.'" style="text-decoration:none;"><button class="button">Previous</button></a>';	
			}
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="testdetails.php?page='.$b.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		if($next_page==$a)
		{
			echo '<a href="testdetails.php?page='.$next_page.'" style="text-decoration:none;"><button class="button">Next</button></a>';	
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
		echo '<a href="testdetails.php?page='.$last_page.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
		?>

<?php
include 'part2.php';
?>
</body>

</html>