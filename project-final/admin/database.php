<?php
class database
{
	private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
	private static $con=NULL;
	
	
	
	public static function connect()
	{
		self::$con=mysqli_connect(self::$host,self::$uname,self::$pwd,"knowledge");
		
		return self::$con;
	}
	
	public function getallcategories()
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from category_tbl");
		return $res;
		database::disconnect();
	}
	
	public function getsubcatbycatid($fk_cat_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from subcat_tbl where fk_cat_id='$fk_cat_id'");
		return $res;
		database::disconnect();
	}
	
	public function getuserbyid($email)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from user_tbl where pk_email_id='$email'");
		return $res;
		database::disconnect();
	}
	
	public function deletecategory($catid)
	{
		$con=database::connect();
		$res=mysqli_query($con,"delete from category_tbl where pk_cat_id='$catid'");
		return $res;
		database::disconnect();
	}
	
	public function getquestionsbyflag($flag)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,c.* from que_tbl as q,user_tbl as u,category_tbl as c where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag'");
		return $res;
		database::disconnect();
	}
	
	public function questionapprove($id)
	{		$con=database::connect();
			$res=mysqli_query($con,"update que_tbl set flag='1' where pk_q_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function questiondisapprove($id)
	{		$con=database::connect();
			$res=mysqli_query($con,"update que_tbl set flag='2' where pk_q_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function quedel($id)
	{
		$con=database::connect();
			$res=mysqli_query($con,"delete from que_tbl where pk_q_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function addquestion($q_title,$q_desc,$q_img,$q_date,$email,$fk_cat_id,$flag)
	{
		$con=database::connect();
			$res=mysqli_query($con,"insert into que_tbl values(NULL,'$q_title','$q_desc','$q_img','$q_date','$email','$fk_cat_id','$flag')");
			return $res;
			database::disconnect();
	}
	
	public function getquecount($flag)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select count(pk_q_id)'cnt'from que_tbl where flag='$flag'");
		return $res;
		database::disconnect();

	}
	
	public function getanscount($flag)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select count(pk_ans_id)'cnt'from ans_tbl where flag='$flag'");
		return $res;
		database::disconnect();
	}
	
	public function getanswersbyflag($flag)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.q_title,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag'");
		return $res;
		database::disconnect();
	}
	
	public function ansapprove($id)
	{		$con=database::connect();
			$res=mysqli_query($con,"update ans_tbl set flag='1' where pk_ans_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function answerdisapprove($id)
	{		$con=database::connect();
			$res=mysqli_query($con,"update ans_tbl set flag='2' where pk_ans_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function ansdel($id)
	{
		$con=database::connect();
			$res=mysqli_query($con,"delete from ans_tbl where pk_ans_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function addanswer($ans_desc,$email,$id,$ans_date,$flag)
	{
		$con=database::connect();
			$res=mysqli_query($con,"insert into ans_tbl(pk_ans_id,ans_desc,fk_email_id,fk_q_id,ans_date,flag) values(NULL,'$ans_desc','$email','$id','$ans_date','$flag')");
			return $res;
			database::disconnect();
	}
	
	public function getquebyid($id)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select * from que_tbl where pk_q_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function getalluser()
	{
		$con=database::connect();
			$res=mysqli_query($con,"select * from user_tbl");
			return $res;
			database::disconnect();
	}
	
	public function deleteuser($emailid)
	{
		$con=database::connect();
			$res=mysqli_query($con,"delete from user_tbl where pk_email_id='$emailid'");
			return $res;
			database::disconnect();
	}
	
	public function getalltestdetails()
	{
		$con=database::connect();
			$res=mysqli_query($con,"select t.*,c.*,u.* from test_details_tbl as t,category_tbl as c,user_tbl as u where c.pk_cat_id=t.fk_cat_id and u.pk_email_id=t.fk_email_id");
			return $res;
			database::disconnect();
	}
	
	public function deletetestdetail($id)
	{
		$con=database::connect();
			$res=mysqli_query($con,"delete from test_details_tbl where pk_test_details_id='$id'");
			return $res;
			database::disconnect();
	}
	
	
	
	public function getallcategories1($page,$noi)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select * from category_tbl LIMIT {$page}, {$noi}");
			return $res;
			database::disconnect();
	}
	
	public function getallfeedback()
	{
		$con=database::connect();
			$res=mysqli_query($con,"select f.*,u.* from feedback_tbl as f,user_tbl as u where u.pk_email_id=f.fk_email_id");
			return $res;
			database::disconnect();
	}
	
	public function getanswersbyflag1($flag,$page,$noi)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag' LIMIT {$page}, {$noi}");
		return $res;
		database::disconnect();
	}
	
	public function getquestionsbyflag1($flag,$page,$noi)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,c.* from que_tbl as q,user_tbl as u,category_tbl as c where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag' LIMIT {$page}, {$noi}");
		return $res;
		database::disconnect();
	}
	
	public function getalltestdetails1($page)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select t.*,c.*,u.* from test_details_tbl as t,category_tbl as c,user_tbl as u where c.pk_cat_id=t.fk_cat_id and u.pk_email_id=t.fk_email_id LIMIT {$page}, 5");
			return $res;
			database::disconnect();
	}
	
	public function getalluser1($page,$noi)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select * from user_tbl LIMIT {$page}, {$noi}");
			return $res;
			database::disconnect();
	}
	
	public function getallfeedback1($page,$noi)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select f.*,u.* from feedback_tbl as f,user_tbl as u where u.pk_email_id=f.fk_email_id LIMIT {$page}, {$noi}");
			return $res;
			database::disconnect();
	}
	
	public function searchcat($term)
	{
		$con=database::connect();
			$res=mysqli_query($con,"SELECT * FROM category_tbl WHERE cat_name LIKE '%".$term."%'");
			return $res;
			database::disconnect();
	}
	
	public function searchquestion($flag,$term)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select DISTINCT q.*,u.*,c.* from que_tbl as q,user_tbl as u,category_tbl as c where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag' and (q_title LIKE '%".$term."%' or cat_name LIKE '%".$term."%' or u_name LIKE '%".$term."%')");
			return $res;
			database::disconnect();
	}
	
	public function getadmindetails($email)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select * from user_tbl where pk_email_id='$email'");
			return $res;
			database::disconnect();
	}
	
	public function editprofile($email,$u_name,$u_city,$u_gender,$u_pic1)
	{
		$con=database::connect();
			$res=mysqli_query($con,"update user_tbl set u_name='$u_name', u_city='$u_city', u_gender='$u_gender', u_pic='$u_pic1' where pk_email_id='$email'");
			return $res;
			database::disconnect();
	}
	
	public function getanscountbyqueid($flag,$id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select count(pk_ans_id)'cnt' from ans_tbl where flag='$flag' and fk_q_id='$id'");
		return $res;
		database::disconnect();
	}
	
	public function getqueview($id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from que_view_tbl where fk_que_id='$id'");
		return $res;
		database::disconnect();
	}
	
	public function getanswersbyflagandqueid($flag,$id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag' and fk_q_id='$id'");
		return $res;
		database::disconnect();
	}
	
	public function getanwerlike($id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from ans_like_tbl where fk_ans_id='$id'");
		return $res;
		database::disconnect();
	}
	
	public function searchsubcat($id,$term)
	{
		$con=database::connect();
			$res=mysqli_query($con,"SELECT * FROM subcat_tbl WHERE fk_cat_id='$id' and s_name LIKE '%".$term."%'");
			return $res;
			database::disconnect();
	}
	
	public function searchanswer($flag,$term)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select DISTINCT q.q_title,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag' and (q_title LIKE '%".$term."%' or ans_desc LIKE '%".$term."%' or u_name LIKE '%".$term."%')");
		return $res;
		database::disconnect();
	}
	
	public function searchuser($term)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select DISTINCT * from user_tbl where (u_name LIKE '%".$term."%' or u_city LIKE '%".$term."%')");
		return $res;
		database::disconnect();
	}
	
	public function searchfeedback($term)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select f.*,u.* from feedback_tbl as f,user_tbl as u where u.pk_email_id=f.fk_email_id and (u_name LIKE '%".$term."%' or f_cat LIKE '%".$term."%')");
			return $res;
			database::disconnect();
	}
	
}

?>