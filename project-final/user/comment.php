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
<link href="../content/bootstrap.css" rel="stylesheet" />
<script src="../scripts/jquery-1.9.1.js"></script>
<script src="../scripts/bootstrap.js"></script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>Comments | knowledge.com</title>
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
<div class="content_wrap" style=" padding-right:100px;">
<div class="content" style=" padding-left:100px;">

<?php 
$did=$_REQUEST["id"];
		$obj2=new conclass();

		$res1=$obj2->getdata("select * from discussion_tbl where pk_d_id='$did'");

		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$title=$row["d_title"];
			$desc=$row["d_desc"];
	
		}
?>

<article class="post_item post_item_single page">
			<section class="post_content">
			<div class="tab-inner-warp" style="display: block;">
			<div class="tab-inner">
			<div class="sc_section" data-animation="animated fadeInUp normal">
			<center>	<h3><?php echo $title; ?>
				</h3><h6><?php echo $desc; ?></h6></center>
			</div>
			</div>
			</div>
			<article class="question question-type-normal">
			</article>
			</section>
			</article>
			<br><br>
		



<article class="post_item post_item_single page">
			<section class="post_content">
			<div class="tab-inner-warp" style="display: block;">
			<div class="tab-inner">
			<div class="sc_section" data-animation="animated fadeInUp normal">

<?php 

	$obj=new conclass();
	$res1=$obj1->getdata("select * from comment_tbl where fk_d_id='$did'");
	
		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$date=$row["date"];
			$comment=$row["comment"];
	//		$_SESSION["id"]=$id;
	//	$_SESSION["id"]=$id;
			$email1=$row["fk_email_id"];
			$obj=new conclass();
			$res2=mysql_query("select * from user_tbl where pk_email_id='$email1'");
			while($row=MYSQL_fetch_array($res2,MYSQL_ASSOC))
			{
				$photo=$row["u_pic"];
				$name=$row["u_name"];
			}

			echo '<article class="question question-type-normal">';
			echo '<a original-title="ahmed" class="question-author-img tooltip-n"><span></span>';
			
			echo '<figure class="sc_image alignleft sc_image_shape_round ">';
			
				echo '<img alt="" src="../user_images/'.$photo.'" height="50px" width="50px"> ';
				echo '</figure>';
			echo '<h5>';
			echo '<a class="question_title alignleft ">'.$name.'</a><br></h5>';
			
			
			echo '<h6 class="question_title alignleft "><span class="glyphicon glyphicon-time">'.$date.'</span></h6>';
			echo '<br>';
			echo '<br>';
			echo '<div class="question-author"></div>';
			echo '<div class="question-inner">';
			echo '<div class="clearfix"></div>';
		//	echo '<h5 class="question-desc" >'.$title.'</h5>';
			echo '<p class="question-desc" >'.$comment.'</p>';
			echo '</article>';
			
		}


?>

 </div>
			</div>
			</div>
			<article class="question question-type-normal">
			<center>
			
			<!-- Button trigger modal -->
<button type="button" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_midum aligncenter sc_buttons_st1 sc_buttons_st5" data-toggle="modal" data-target="#myModal">
  Add Comment
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<form method="post" action="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Comment</h4>
      </div>
      <div class="modal-body">
			<!--	<input type="text" name="comm" maxlength="300" required>-->
				Your Comment : <textarea rows="5" cols="50" name="comm" required></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" value="Add" class="btn btn-primary">
		<?php 
			if(isset($_POST["submit"]))
			{
				$com=$_POST["comm"];
				date_default_timezone_set("Asia/Kolkata");
				$date=date("Y-m-d g:i A");
				$email=$_SESSION["email"];
				$obj=new conclass();
			$res2=mysql_query("insert into comment_tbl values('$did','$email','$com','$date',NULL)");
			if($res2==1)
			{
				header("location:comment.php?id=$did");
			}
			}
		
		?>
      </div>
    </div>
	</form>
  </div>
</div>
			
			
			
			
			</center>
			</article>
			</section>
			</article>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/core.googlemap.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/shortcodes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
</html>