<?php 
session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }

?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>View Answer | knowledge.com</title>
<link href="../content/bootstrap.css" rel="stylesheet" />
<script src="../scripts/jquery-1.9.1.js"></script>
<script src="../scripts/bootstrap.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all"/>
<link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/rs-plugin/settings.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-layout.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.animation.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/tribe-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.portfolio.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/mediaelementplayer.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/wp-mediaelement.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.customizer/front.customizer.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.messages/core.messages.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/swiper/idangerous.swiper.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/custom-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin-responsive.css" type="text/css" media="all"/>
</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>

<?php include 'userheader.php'; ?> 
 
<div class="page_content_wrap">
<div class="content_wrap" style=" padding-right:150px;">
<div class="content" style=" padding-left:150px;">


<?php 
//$qid=$_SESSION["q_id"];

/*if($_REQUEST["id"]!=NULL)
{
$_SESSION["id"]=$_REQUEST["id"];

}
else
{
	$qid=$_SESSION["id"];
}*/

$qid=$_REQUEST["id"];
$obj=new conclass();

		$res1=$obj->getdata("select * from que_view_tbl where fk_que_id='$qid'");
		$no=mysql_num_rows($res1);
		if($no>0)
		{
		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
				$cnt=$row["view"];
		}
		$cnt1=$cnt+1;
		$obj1=new conclass();
		$res=$obj1->getdata("update que_view_tbl set view='$cnt1' where fk_que_id='$qid'");
		}
		else{
			$view=1;
		$obj1=new conclass();
		$res=$obj1->getdata("insert into que_view_tbl values('$qid','$view')");
			
		}
?>

<?php 

		$obj2=new conclass();

		$res1=$obj2->getdata("select * from que_tbl where pk_q_id='$qid'");

		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$title=$row["q_title"];
	//		$desc=$row["q_desc"];
	
		}
?>
		<article class="post_item post_item_single page">
			<section class="post_content">
			<div class="tab-inner-warp" style="display: block;">
			<div class="tab-inner">
			<div class="sc_section" data-animation="animated fadeInUp normal">
			<center>	<h3><?php echo $title; ?>
				</h3></center>
			</div>
			</div>
			</div>
			<article class="question question-type-normal">
			</article>
			</section>
			</article>
			<br><br>
		

<?php 
$flag=1;
		$obj2=new conclass();

		$res1=$obj2->getdata("select * from ans_tbl where fk_q_id='$qid' and flag='$flag'");

		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$id=$row["pk_ans_id"];
			$a_desc=$row["ans_desc"];
			$exm=$row["ans_ex"];
			$e_id=$row["fk_email_id"];
			$date=$row["ans_date"];
			//$img=$row["ans_img"];
			
			$obj=new conclass();
			$res3=mysql_query("select * from user_tbl where pk_email_id='$e_id'");
			while($row=MYSQL_fetch_array($res3,MYSQL_ASSOC))
			{
				$photo=$row["u_pic"];
				$name=$row["u_name"];
			}
			
			$obj=new conclass();
			$res2=mysql_query("select * from ans_like_tbl where fk_ans_id='$id'");
			$no1=mysql_num_rows($res2);
		if($no1>0)
		{
		
			while($row=MYSQL_fetch_array($res2,MYSQL_ASSOC))
			{
				$like=$row["ans_like"];
			}
		}
		else{
			$like=0;
		}
			echo '<article class="post_item post_item_single page">';
			echo '<section class="post_content">';
			echo '<div class="tab-inner-warp" style="display: block;">';
			echo '<div class="tab-inner">';
	//		echo '<div class="sc_section" data-animation="animated fadeInUp normal">';

			echo '<article class="question question-type-normal">';
			echo '<a original-title="ahmed" class="question-author-img tooltip-n"><span></span>';
			
			echo '<figure class="sc_image alignleft sc_image_shape_round ">';
			
				echo '<img alt="" height="70px" width="50px" src="../user_images/'.$photo.'"> ';
			//	echo $email;
	
			echo '</figure>';
			echo '<h6>';
			echo '<a>'.$e_id.'</a><br>';
			
			echo '<span class="post_info_item post_info_counters"><span class="glyphicon glyphicon-time"></span>';
			echo '<a class="post_info_date">'.$date.'</a>';
		//	echo '<a href="single_question.html" style="font-size:20px">'.$desc.'</a>';
			echo '</h6><br>';
			echo '<div class="question-author"></div>';
			echo '<div class="question-inner">';
			echo '<div class="clearfix"></div>';
			echo '<p class="question-desc" >'.$a_desc.'</p>';
			echo '<p class="question-example">'.$exm.'</p>';
			echo '<div class="post_info" style="font-size:20px; text-align:right">';
			echo '<a href="anslike.php?id='.$id.'&qid='.$qid.'"><span class="post_info_item post_info_counters"><span class="glyphicon glyphicon-thumbs-up">'.$like.'</span>';
			echo '</a>';
			echo '</div>';
			echo '</article>';
			echo '</section>';
			echo '</article>';
			echo '<br><br>';

		}

?>
<!-- Button trigger modal -->
<button type="button" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_large aligncenter sc_buttons_st1 sc_buttons_st5" data-toggle="modal" style="down-padding:150px;" data-target="#myModal">
  Add Answer
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Answer</h4>
      </div>
      <div class="modal-body">
			
			Description of Answer:	<textarea rows="5" cols="50" name="descoftopic" required></textarea><br><br>
			
	  
	  <br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Add" class="btn btn-primary">
		<?php 
			if(isset($_POST["submit"]))
			{
				
				$descoftopic=$_POST["descoftopic"];
				$flag=0;
				$date=date("Y-m-d");
				$email=$_SESSION["email"];
				$obj=new conclass();
			$res2=mysql_query("insert into ans_tbl values(NULL,'$descoftopic','$email','$qid','$date',NULL,'$flag')");
			if($res2==1)
			{
				header("location:ans.php?id=$qid");
			}
			}
		
		?>
      </div>
    </div>
	</form>
  </div>
</div>
<br><br><br>

</div>
</div>
</div> 
 
<?php include 'userfooter.php'; ?>  
 
</div>
</div>
 
<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect-fade.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.cookie.min.js"></script>
<script type="text/javascript" src="js/global.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/shortcodes/shortcodes.min.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.slidemenu.min.js"></script>
<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/mediaelement/wp-mediaelement.min.js"></script>
<script type="text/javascript" src="js/core.messages/core.messages.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper-2.7.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper.scrollbar-2.4.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:44 GMT -->
</html>