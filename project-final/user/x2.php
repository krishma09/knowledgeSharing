<?php 
$x1=$_GET['term'];

include '../conclass.php';
$obj=new conclass();
$res=$obj->getdata("select * from discussion_tbl where d_title like '$x1%' ");
while($row=MYSQL_fetch_array($res,MYSQL_ASSOC)) {
        $data[] = $row['d_title'];
    }
     echo json_encode($data);


?>