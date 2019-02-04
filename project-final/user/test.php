<?php 
session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }


$cid=$_REQUEST["id"];
$cnt=$_SESSION["num"];
$_SESSION["num"]=$_SESSION["num"]+1;
$marks=$_SESSION["mark"];
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
<title>Test | knowledge.com</title>
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
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>

<?php include 'userheader.php'; ?> 

<div class="page_content_wrap" style="padding-left:350px;">
<div class="content_wrap" style="padding-right:50px;">
 
<div class="content">
<article class="post_item post_item_single page">
			<section class="post_content">
			<div class="tab-inner-warp" style="display: block;">
			<div class="tab-inner">
			<div class="sc_section" >
			<form method="post" action="testoption.php?id=<?php echo $cid; ?>">

			<?php 
				$obj2=new conclass();

		$res1=$obj2->getdata("select * from category_tbl where pk_cat_id='$cid'");
		while($row=MYSQL_fetch_array($res1,MYSQL_ASSOC))
		{
			$sub=$row["cat_name"];
			
		}
			echo '<h3 class="Title aligncenter" >'.$sub.' TEST</h3>' ;
			?>

			
		<?php 
		
					$obj2=new conclass();
	$res1=$obj2->getdata("select * from test_tbl where fk_cat_id='$cid' ");
	$abc=mysql_num_rows($res1);
			
			if($abc>=$cnt)
			{
		$res1=$obj2->getdata("select * from test_tbl where fk_cat_id='$cid' limit $cnt");
				//$row=mysql_fetch_array($res1[$cnt],MYSQL_ASSOC);
		
		
			while($row=mysql_fetch_assoc($res1))
			{
				
			$que=$row["t_que"];
			$option1=$row["t_option1"];
			$option2=$row["t_option2"];
			$option3=$row["t_option3"];
			$option4=$row["t_option4"];
			$ans=$row["t_answer"];
			$tid=$row["pk_t_id"];

		
			
			}
			}
			else
			{
				header("location:testans.php?id=$cid");
			}
		?>	
			
			<h5 class="question alignleft" data-animation="animated fadeInUp normal"><?php echo $que; ?>
			</h5><h5 class="option alignleft" data-animation="animated fadeInUp normal" style="padding-left:60px">
			<input type="radio" name="option" value="<?php echo $option1; ?>"><?php echo $option1; ?><br>
			<input type="radio" name="option" value="<?php echo $option2; ?>"><?php echo $option2; ?><br>
			<input type="radio" name="option" value="<?php echo $option3; ?>"><?php echo $option3; ?><br>
			<input type="radio" name="option" value="<?php echo $option4; ?>"><?php echo $option4; ?>
			<br></h5>
			<br><br>
			
			<h6 class="button aligncenter"  >
			 <input type="submit" name="next" value="Next Question" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_midum aligncenter sc_buttons_st1 sc_buttons_st5"></h6>
	
			</form>
			</div>
			</div>
			</div>
			<article class="question question-type-normal">
			</article>
			</section>
			</article>
			<br><br>

			
			
			




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