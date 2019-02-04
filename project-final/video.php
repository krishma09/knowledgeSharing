<?php 
include 'conclass.php';
$obj2=new conclass();

		$res1=$obj2->getdata("select * from video_tbl");
		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$vid=$row["pk_v_id"];
			$img=$row["v_img"];
			$path=$row["v_video"];
			$link="https://www.youtube.com/watch?v=$path";
			echo '<a href="'.$link.'">';
			echo '<img height="100px" width="100px" src="'.$img.'"></a> ';
			
			
			
		}

?>