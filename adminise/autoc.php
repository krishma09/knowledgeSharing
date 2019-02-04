<?php 
$term=$_GET['term'];

/*$con=mysqli_connect('localhost','root','','demo'); 
$res=mysqli_query($con,"select * from student_tbl where name like '$x1%' ");
while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row['name'];
    }
     echo json_encode($data);*/
	 
	 include 'database.php';
	 $obj=new database();
	 $res=$obj->searchcat($term);
	 while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row['cat_name'];
    }
     echo json_encode($data);


?>