<?php
class database
{
	private static $host='localhost';
	private static $uname='root';
	private static $pwd='';
	private static $con=NULL;
	
	
	
	public static function connect()
	{
		self::$con=mysqli_connect(self::$host,self::$uname,self::$pwd,"knowledge1");
		
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
		$res=mysqli_query($con,"select q.*,u.*,c.* from que_tbl as q,user_tbl as u,category_tbl as c where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag' order by q.q_date desc");
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
		$res=mysqli_query($con,"select q.q_title,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag' order by a.ans_date desc");
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
			$res=mysqli_query($con,"select f.*,u.* from feedback_tbl as f,user_tbl as u where u.pk_email_id=f.fk_email_id order by f_date desc");
			return $res;
			database::disconnect();
	}
	
	public function getanswersbyflag1($flag,$page,$noi)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag' order by a.ans_date desc LIMIT {$page}, {$noi} ");
		return $res;
		database::disconnect();
	}
	
	public function getquestionsbyflag1($flag,$page,$noi)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,c.* from que_tbl as q,user_tbl as u,category_tbl as c where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag' order by q.q_date desc LIMIT {$page}, {$noi}");
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
			$res=mysqli_query($con,"select f.*,u.* from feedback_tbl as f,user_tbl as u where u.pk_email_id=f.fk_email_id order by f_date desc LIMIT {$page}, {$noi}");
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
			$res=mysqli_query($con,"select DISTINCT q.*,u.*,c.* from que_tbl as q,user_tbl as u,category_tbl as c where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag' and (q_title LIKE '%".$term."%' or cat_name LIKE '%".$term."%' or u_name LIKE '%".$term."%') order by q.q_date desc");
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
		$res=mysqli_query($con,"select DISTINCT q.q_title,u.*,a.* from que_tbl as q,user_tbl as u,ans_tbl as a where a.fk_email_id=u.pk_email_id and q.pk_q_id=a.fk_q_id and a.flag='$flag' and (q_title LIKE '%".$term."%' or ans_desc LIKE '%".$term."%' or u_name LIKE '%".$term."%') order by a.ans_date desc");
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
			$res=mysqli_query($con,"select DISTINCT f.*,u.* from feedback_tbl as f,user_tbl as u where u.pk_email_id=f.fk_email_id and (u_name LIKE '%".$term."%' or f_cat LIKE '%".$term."%') order by f_date desc");
			return $res;
			database::disconnect();
	}
	
	public function getalldiscussion()
	{
		$con=database::connect();
		$res=mysqli_query($con,"select d.*,c.*,u.* from discussion_tbl as d,user_tbl as u,category_tbl as c where d.fk_cat_id=c.pk_cat_id and d.fk_email_id=u.pk_email_id order by d_date desc");
		return $res;
		database::disconnect();
	}
	
	public function getalldiscussion1($page,$noi)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select d.*,c.*,u.* from discussion_tbl as d,user_tbl as u,category_tbl as c where d.fk_cat_id=c.pk_cat_id and d.fk_email_id=u.pk_email_id order by d_date desc LIMIT {$page}, {$noi}");
		return $res;
		database::disconnect();
	}
	
	public function searchdiscussion($term)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select DISTINCT d.*,c.*,u.* from discussion_tbl as d,user_tbl as u,category_tbl as c where d.fk_cat_id=c.pk_cat_id and d.fk_email_id=u.pk_email_id and (d_title LIKE '%".$term."%' or cat_name LIKE '%".$term."%') order by d_date desc");
		return $res;
		database::disconnect();
	}
	
	public function deldiscussion($pk_d_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"delete from discussion_tbl where pk_d_id='$pk_d_id'");
		return $res;
		database::disconnect();
	}
	
	public function getalltest()
	{
		$con=database::connect();
		$res=mysqli_query($con,"select t.*,c.* from test_tbl as t,category_tbl as c where t.fk_cat_id=c.pk_cat_id");
		return $res;
		database::disconnect();
	}
	
	public function deletetest($pk_t_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"delete from test_tbl where pk_t_id='$pk_t_id'");
		return $res;
		database::disconnect();
	}
	
	public function addtestquestion($t_que,$t_option1,$t_option2,$t_option3,$t_option4,$t_answer,$fk_cat_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"insert into test_tbl values('$t_que','$t_option1','$t_option2','$t_option3','$t_option4','$t_answer','$fk_cat_id',NULL)");
		return $res;
		database::disconnect();
	}
	
	public function getcommentcountbydisid($pk_d_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select count(pk_c_id)'cnt' from comment_tbl where fk_d_id='$pk_d_id'");
		return $res;
		database::disconnect();
	}
	
	public function getdisbyid($id)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select * from discussion_tbl where pk_d_id='$id'");
			return $res;
			database::disconnect();
	}
	
	public function getcommentbydisid($id)
	{
		$con=database::connect();
			$res=mysqli_query($con,"select d.*,u.*,c.* from discussion_tbl as d,user_tbl as u,comment_tbl as c where c.fk_email_id=u.pk_email_id and d.pk_d_id=c.fk_d_id and fk_d_id='$id' order by date");
			return $res;
			database::disconnect();
	}
	
	public function addcomment($pk_d_id,$email,$comment,$date)
	{
		$con=database::connect();
		$res=mysqli_query($con,"insert into comment_tbl values('$pk_d_id','$email','$comment','$date',NULL)");
		return $res;
		database::disconnect();
	}
	
	public function gettopque($flag)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select q.*,u.*,c.*,qv.* from que_tbl as q,user_tbl as u,category_tbl as c,que_view_tbl as qv where q.fk_email_id=u.pk_email_id and q.fk_cat_id=c.pk_cat_id and q.flag='$flag' and q.pk_q_id=qv.fk_que_id order by view desc limit 5");
		return $res;
		database::disconnect();
	}
	
	public function getnewdiscussion()
	{
		$con=database::connect();
		$res=mysqli_query($con,"select d.*,c.*,u.* from discussion_tbl as d,user_tbl as u,category_tbl as c where d.fk_cat_id=c.pk_cat_id and d.fk_email_id=u.pk_email_id order by d_date desc limit 3");
		return $res;
		database::disconnect();
	}
	
	public function addadmin($newadmin)
	{
		$con=database::connect();
		$res=mysqli_query($con,"update user_tbl set u_type='admin' where pk_email_id='$newadmin'");
		return $res;
		database::disconnect();
	}
	
	public function checkadmin($newadmin)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select u_type from user_tbl where pk_email_id='$newadmin'");
		return $res;
		database::disconnect();
	}
	
	public function checkpassword($email,$oldpassword)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from user_tbl where pk_email_id='$email' and u_pwd='$oldpassword'");
		return $res;
		database::disconnect();
	}
	
	public function changepassword($email,$newpassword)
	{
		$con=database::connect();
		$res=mysqli_query($con,"update user_tbl set u_pwd='$newpassword' where pk_email_id='$email'");
		return $res;
		database::disconnect();
	}
	
	public function getvideobycatid($fk_cat_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from video_tbl where fk_cat_id='$fk_cat_id'");
		return $res;
		database::disconnect();
	}
	
	public function getcatnamebyid($fk_cat_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select * from category_tbl where pk_cat_id='$fk_cat_id'");
		return $res;
		database::disconnect();
	}
	
	public function videodel($pk_v_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"delete from video_tbl where pk_v_id='$pk_v_id'");
		return $res;
		database::disconnect();
	}
	
	public function addvideo($v_img,$v_video,$v_desc,$fk_cat_id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"insert into video_tbl values(NULL,'$v_img','$v_video','$v_desc','$fk_cat_id')");
		return $res;
		database::disconnect();
	}
	
	public function gettoprest($flag)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select DISTINCT r.* from restaurant_tbl as r,fav_tbl as f where r.rest_id=f.fk_rest_id and r.flag='$flag' order by (select DISTINCT count(fav_id)'cnt'from fav_tbl where flag='$flag' and fk_rest_id=r.rest_id) desc limit 5");
		return $res;
		database::disconnect();

	}
	
	
	public function gettopuser()
	{
		$con=database::connect();
		$res=mysqli_query($con,"select distinct u.* from user_tbl as u,ans_tbl as a where u.pk_email_id=a.fk_email_id order by (select distinct count(pk_ans_id)'cnt' from ans_tbl as a where flag='1' and fk_email_id='u.pk_email_id') desc limit 5");
		return $res;
		database::disconnect();

	}
	
	
	
	public function getanscnt($id)
	{
		$con=database::connect();
		$res=mysqli_query($con,"select count(pk_ans_id)'cnt',a.* from ans_tbl as a where flag='1' and fk_email_id='$id'");
		return $res;
		database::disconnect();

	}
}

?>