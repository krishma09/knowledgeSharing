<?php 
session_start();
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
<title>OS Tutorials | knowledge.com</title>
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
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
 
<?php include 'userheader.php'; ?>  
 
<div class="page_content_wrap">
<div class="content_wrap">
 
<div class="content">


<article class="post_item post_item_single page">
<section class="post_content">
<?php 
	$sid=345;
	$obj=new conclass();
	$res=$obj->getdata("select * from subcat_tbl where pk_s_id='$sid'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			$sname=$row["s_name"];
			$desc1=$row["s_desc1"];
			$desc2=$row["s_desc2"];
			$desc3=$row["s_desc3"];
		}
?>



<h3 class="widget_title" style="text-align:center"><?php echo $sname;?></h3>
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4>File</h4>
<p>A file is a named collection of related information that is recorded on secondary storage such as magnetic disks, magnetic tapes and optical disks. In general, a file is a sequence of bits, bytes, lines or records whose meaning is defined by the files creator and user.</p>
<h4>File Structure</h4>
<p>A File Structure should be according to a required format that the operating system can understand.</p>
<ul class="list">
<li><p>A file has a certain defined structure according to its type.</p></li>
<li><p>A text file is a sequence of characters organized into lines.</p></li>
<li><p>A source file is a sequence of procedures and functions.</p></li>
<li><p>An object file is a sequence of bytes organized into blocks that are understandable by the machine.</p></li>
<li><p>When operating system defines different file structures, it also contains the code to support these file structure. Unix, MS-DOS support minimum number of file structure.</p></li>
</ul>
<h4>File Type</h4>
<p>File type refers to the ability of the operating system to distinguish different types of file such as text files source files and binary files etc. Many operating systems support many types of files. Operating system like MS-DOS and UNIX have the following types of files −</p>

<h5>Ordinary files</h5>
<ul class="list">
<li>These are the files that contain user information.</li>
<li>These may have text, databases or executable program.</li>
<li>The user can apply various operations on such files like add, modify, delete or even remove the entire file.</li>
</ul>
<h5>Directory files</h5>
<ul class="list">
<li>These files contain list of file names and other information related to these files.</li>
</ul>
<h5>Special files</h5>
<ul class="list">
<li>These files are also known as device files.</li>
<li>These files represent physical device like disks, terminals, printers, networks, tape drive etc.</li>
</ul>
<p>These files are of two types −</p>
<ul class="list">
<li><p><b>Character special files</b> − data is handled character by character as in case of terminals or printers.</p></li>
<li><p><b>Block special files</b> − data is handled in blocks as in the  case of disks and tapes.</p></li>
</ul>
<h4>File Access Mechanisms</h4>
<p>File access mechanism refers to the manner in which the records of a file may be accessed. There are several ways to access files −</p>
<ul class="list">
<li>Sequential access</li>
<li>Direct/Random access</li>
<li>Indexed sequential access</li>
</ul>
<h5>Sequential access</h5>
<p>A sequential access is that in which the records are accessed in some sequence, i.e., the information in the file is processed in order, one record after the other. This access method is the most primitive one. Example: Compilers usually access files in this fashion.</p>
<h5>Direct/Random access</h5>
<ul class="list">
<li><p>Random access file organization provides, accessing the records directly.</p></li>
<li><p>Each record has its own address on the file with by the help of which it can be directly accessed for reading or writing.</p></li>
<li><p>The records need not be in any sequence within the file and they need not be in adjacent locations on the storage medium.</p></li>
</ul>
<h5>Indexed sequential access</h5>
<ul class="list">
<li>This mechanism is built up on base of sequential access.</li>
<li>An index is created for each file which contains pointers to various blocks.</li>
<li>Index is searched sequentially and its pointer is used to access the file directly.</li>
</ul>
<h4>Space Allocation</h4>
<p>Files are allocated disk spaces by operating system. Operating systems deploy following three main ways to allocate disk space to files.</p>
<ul class="list">
<li>Contiguous Allocation</li>
<li>Linked Allocation</li>
<li>Indexed Allocation</li>
</ul>
<h5>Contiguous Allocation</h5>
<ul class="list">
<li>Each file occupies a contiguous address space on disk.</li>
<li>Assigned disk address is in linear order.</li>
<li>Easy to implement.</li>
<li>External fragmentation is a major issue with this type of allocation technique.</li>
</ul>
<h5>Linked Allocation</h5>
<ul class="list">
<li>Each file carries a list of links to disk blocks.</li>
<li>Directory contains link / pointer to first block of a file.</li>
<li>No external fragmentation</li>
<li>Effectively used in sequential access file.</li>
<li>Inefficient in case of  direct access file.</li>
</ul>
<h5>Indexed Allocation</h5>
<ul class="list">
<li>Provides solutions to problems of contigous and linked allocation.</li>
<li>A index block is created having all pointers to files.</li>
<li>Each file has its own index block which stores the addresses of disk space occupied by the file.</li>
<li>Directory contains the addresses of index blocks of files.</li>
</ul>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="344_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="346_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'os_header.php'; ?></aside>
 
  
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