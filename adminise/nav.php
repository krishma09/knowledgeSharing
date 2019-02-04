<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="pg/simplePagination.css" />
<script src="pg/jquery.simplePagination.js"></script>

</head>
<body>
<?php

include 'database.php';
$obj=new database();



//mysql_connect("localhost","root","");
//mysql_select_db("knowledge");

 $page=$_GET['page'];

if($page=="" || $page=="1")
{
	$page1=0;
}
else
{
	$page1=($page*4)-4;
}	
$res=$obj->getallcategories1($page1);
//$res=mysql_query("select * from category_tbl limit $page1,4");
        while($row=mysqli_fetch_array($res))
				{
					
					echo '<font size="4" color="black">'.$row["cat_name"].'</font><br><br>';
					
				}  
				
		$res1=$obj->getallcategories();
		$cnt=mysqli_num_rows($res1);	
		//echo $cnt.'<br>';
		
		$a=$cnt/4;
		
		$a=ceil($a);
		
		for($b=1;$b<=$a;$b++)
		{
			
			?> <a href="nav.php?page=<?php echo $b; ?>" style="text-decoration:none;"><?php echo $b.' '; ?> </a> <?php
		}
				
        ?>  
      
          
       
</body>
</html>