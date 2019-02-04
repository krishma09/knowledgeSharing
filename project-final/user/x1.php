<?php 
$x1=$_GET['term'];

include '../conclass.php';
$obj=new conclass();
$res=$obj->getdata("select * from que_tbl where q_title like '$x1%' ");
while($row=MYSQL_fetch_array($res,MYSQL_ASSOC)) {
        $data[] = $row['q_title'];
    }
     echo json_encode($data);


?>