
<?php 
include '../conclass.php';
	$aid=$_REQUEST["id"];
	$qid=$_REQUEST["qid"];
$obj=new conclass();

		$res1=$obj->getdata("select * from ans_like_tbl where fk_ans_id='$aid'");
		$no=mysql_num_rows($res1);
		if($no>0)
		{
		
		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
				$like=$row["ans_like"];
		}
		}
		else
		{
			$like=0;
			$obj1=new conclass();
		$res1=$obj1->getdata("insert into ans_like_tbl values('$aid','$like')");
		}
		$like1=$like+1;
		$obj1=new conclass();
		$res=$obj1->getdata("update ans_like_tbl set ans_like='$like1' where fk_ans_id='$aid'");
		
		if($res==1)
		{
			header("location:ans.php?id=$qid");
		}
?>