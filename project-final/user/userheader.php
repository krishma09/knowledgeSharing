<?php 

$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }

?>

<header class="top_panel_wrap bg_tint_dark">
 
<div class="menu_user_wrap">
<div class="content_wrap clearfix">
<div class="menu_user_area menu_user_right menu_user_nav_area">
<ul id="menu_user" class="menu_user_nav">

<li class="menu_user_controls">
<a href="#">
<?php 
		
		
require '../conclass.php';
$obj=new conclass();
$res=$obj->getdata("select * from user_tbl where pk_email_id='$email'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
{
	$uname=$row["u_name"];
	$pic=$row["u_pic"];
}

?>

</span>
<span class="user_name"><?php echo $uname;?></span></a>
<ul>
<li><a href="viewprofile.php" class="icon icon-doc-inv">view profile</a></li>
<li><a href="editprofil.php" class="icon icon-cog-1">edit profile</a></li>
<li><a href="changepwd.php" class="icon icon-cog-1">change password</a></li>
</ul>
</li>
<li class="menu_user_logout">
<a href="../logout.php" class="icon icon-logout">Logout</a>
</li>
</ul>
</div>

</div>
</div>
 
 
<div class="menu_main_wrap logo_left">
<div class="content_wrap clearfix">
 
<div class="logo">
<a href="index-2.php">
<h3 class="logo_main" alt="">knowledge.com</h3>

<h3 class="logo_fixed" alt="">knowledge.com</h3>
</a>

</div>
 
 

 
 
<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
<nav class="menu_main_nav_area">
<ul id="menu_main" class="menu_main_nav">
<li class="menu-item menu-item-has-children"><a href="index-2.php">Homepage</a>
</li><li class="menu-item menu-item-has-children"><a href="#">Tutorial</a>
<ul class="sub-menu">
<li class="menu-item menu-item-has-children"><a href="">Tutorial</a>
<ul class="sub-menu">
<li class="menu-item"><a href="2_data.php">HTML</a></li>
<li class="menu-item"><a href="35_data.php">CSS</a></li>
<li class="menu-item"><a href="55_data.php">JAVASCRIPT</a></li>
<li class="menu-item"><a href="83_data.php">PL/SQL</a></li>
<li class="menu-item"><a href="106_data.php">PHP</a></li>
<li class="menu-item"><a href="136_data.php">BOOTSTRAP</a></li>
<li class="menu-item"><a href="165_data.php">JQUERY</a></li>
<li class="menu-item"><a href="176_data.php">ANGULARJS</a></li>
<li class="menu-item"><a href="196_data.php">C</a></li>
<li class="menu-item"><a href="226_data.php">C++</a></li>
<li class="menu-item"><a href="257_data.php">NODE.JS</a></li>
<li class="menu-item"><a href="275_data.php">VB.NET</a></li>
<li class="menu-item"><a href="300_data.php">ASP.NET</a></li>
<li class="menu-item"><a href="348_data.php">UNIX</a></li>
<li class="menu-item"><a href="368_data.php">DCN</a></li>
<li class="menu-item"><a href="490_data.php">ANGULAR2</a></li>
<li class="menu-item"><a href="368_data.php">AJAX</a></li>
<li class="menu-item"><a href="396_data.php">WORDPRESS</a></li>
<li class="menu-item"><a href="423_data.php">JOOMLA</a></li>
<li class="menu-item"><a href="438_data.php">JAVA</a></li>
<li class="menu-item"><a href="332_data.php">OS</a></li>
</ul>

</li>
<li class="menu-item"><a href="videotutorial.php">Video Tutorials</a></li>
</ul>
</li>
<li class="menu-item menu-item-has-children"><a href="">Question-Answer</a>
<ul class="sub-menu">
<li class="menu-item"><a href="addque.php">Ask Question</a></li>
<li class="menu-item"><a href="que-ans.php">View Questions-Answers</a></li>
<li class="menu-item"><a href="myque.php">View MyQuestions</a></li>
<li class="menu-item"><a href="myans.php">View MyAnswers</a></li>
</ul>

</li>
<li class="menu-item menu-item-has-children"><a href="disforum.php">Discussion forum</a>

</li>
<li class="menu-item menu-item-has-children"><a href="">Test</a>
<ul class="sub-menu">
<?php //include 'conclass.php';
$obj=new conclass();

		$res=$obj->getdata("select * from category_tbl");
		$obj1=new conclass();

		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<li class="menu-item"><a href="test.php?id='.$row["pk_cat_id"].'">'.$row["cat_name"];
			echo '</a>
				<li>';

		}
?>

</ul>

</li>

<li class="menu-item menu-item-has-children"><a href="feedback.php">Feedback</a>

</li>
</ul>
</nav>

 
</div>
</div>
 
</header>
