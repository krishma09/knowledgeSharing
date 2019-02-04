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
<title>Sub Categories</title>
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
                    <input type="text" name="term" placeholder="Search subtopics" />
                    <input type="submit" value="go" name="btn" />
					 
                </div>	
</form>
<?php include '2.php';	?>
<ul>

<?php
				$fk_cat_id=$_REQUEST['id'];
	$obj=new database();
				if(isset($_POST["btn"]))
				{
					
				


$term = mysql_real_escape_string($_REQUEST['term']);     

$res1=$obj->searchsubcat($fk_cat_id,$term); 

while ($row = mysqli_fetch_array($res1)){  
  
echo '<li><td><input type="submit" class="button button1" style="font-size:20px; font-family:cooper;" value="'.$row['s_name'].'"></td></li><br>';
}  


				}
?>
<?php
if(!isset($_POST["btn"]))
			{

	$res=$obj->getsubcatbycatid($fk_cat_id);
	
	while($row=mysqli_fetch_array($res))
	{
		//  echo ' <center> <a href="'.$row['pk_s_id'].'data.php">';
		//echo '<div class="col-sm-3 col-md-4">';
		echo '<li><td><input type="submit" class="button button1" style="font-size:20px; font-family:cooper;" value="'.$row['s_name'].'"></td></li><br>';
		//echo '</div>';
		
		
		
		
		
			}
	 
			}

?>

</ul>

<?php
include 'part2.php';
?>
</body>

</html>