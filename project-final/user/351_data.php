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
<title>UNIX Tutorials | knowledge.com</title>
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
	$sid=351;
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
<p>In this chapter, we will discuss in detail about directory management in Unix.</p>
<p>A directory is a file the solo job of which is to store the file names and the related information. All the files, whether ordinary, special, or directory, are contained in directories.</p>
<p>Unix uses a hierarchical structure for organizing files and directories. This structure is often referred to as a directory tree. The tree has a single root node, the slash character (<b>/</b>), and all other directories are contained below it.</p>
<h4>Home Directory</h4>
<p>The directory in which you find yourself when you first login is called your home directory.</p>
<p>You will be doing much of your work in your home directory and subdirectories that you'll be creating to organize your files.</p>
<p>You can go in your home directory anytime using the following command −</p>
<pre class="result notranslate">$cd ~
$
</pre>
<p>Here <b>~</b> indicates the home directory. Suppose you have to go in any other user's home directory, use the following command −</p>
<pre class="result notranslate">$cd ~username
$
</pre>
<p>To go in your last directory, you can use the following command −</p>
<pre class="result notranslate">$cd -
$
</pre>
<h4>Absolute/Relative Pathnames</h4>
<p>Directories are arranged in a hierarchy with root (/) at the top. The position of any file within the hierarchy is described by its pathname.</p>
<p>Elements of a pathname are separated by a /. A pathname is absolute, if it is described in relation to root, thus absolute pathnames always begin with a /.</p>
<p>Following are some examples of absolute filenames.</p>
<pre class="result notranslate">/etc/passwd
/users/sjones/chem/notes
/dev/rdsk/Os3
</pre>
<p>A pathname can also be relative to your current working directory. Relative pathnames never begin with /. Relative to user amrood's home directory, some pathnames might look like this −</p>
<pre class="result notranslate">chem/notes
personal/res
</pre>
<p>To determine where you are within the filesystem hierarchy at any time, enter the command <b>pwd</b> to print the current working directory −</p>
<pre class="result notranslate">$pwd
/user0/home/amrood

$
</pre>
<h4>Listing Directories</h4>
<p>To list the files in a directory, you can use the following syntax −</p>
<pre class="result notranslate">$ls dirname
</pre>
<p>Following is the example to list all the files contained in <b>/usr/local</b> directory −</p>
<pre class="result notranslate">$ls /usr/local

X11       bin          gimp       jikes       sbin
ace       doc          include    lib         share
atalk     etc          info       man         ami
</pre>
<h4>Creating Directories</h4>
<p>We will now understand how to create directories. Directories are created by the following command −</p>
<pre class="result notranslate">$mkdir dirname
</pre>
<p>Here, directory is the absolute or relative pathname of the directory you want to create. For example, the command −</p>
<pre class="result notranslate">$mkdir mydir
$
</pre>
<p>Creates the directory <b>mydir</b> in the current directory. Here is another example −</p>
<pre class="result notranslate">$mkdir /tmp/test-dir
$
</pre>
<p>This command creates the directory <b>test-dir</b> in the <b>/tmp</b> directory. The <b>mkdir</b> command produces no output if it successfully creates the requested directory.</p>
<p>If you give more than one directory on the command line, <b>mkdir</b> creates each of the directories. For example, −</p>
<pre class="result notranslate">$mkdir docs pub
$
</pre>
<p>Creates the directories docs and pub under the current directory.</p>
<h4>Creating Parent Directories</h4>
<p>We will now understand how to create parent directories. Sometimes when you want to create a directory, its parent directory or directories might not exist. In this case, <b>mkdir</b> issues an error message as follows −</p>
<pre class="result notranslate">$mkdir /tmp/amrood/test
mkdir: Failed to make directory "/tmp/amrood/test"; 
No such file or directory
$
</pre>
<p>In such cases, you can specify the <b>-p</b> option to the <b>mkdir</b> command. It creates all the necessary directories for you. For example −</p>
<pre class="result notranslate">$mkdir -p /tmp/amrood/test
$
</pre>
<p>The above command creates all the required parent directories.</p>
<h4>Removing Directories</h4>
<p>Directories can be deleted using the <b>rmdir</b> command as follows −</p>
<pre class="result notranslate">$rmdir dirname
$
</pre>
<p><b>Note</b> − To remove a directory, make sure it is empty which means there should not be any file or sub-directory inside this directory.</p>
<p>You can remove multiple directories at a time as follows −</p>
<pre class="result notranslate">$rmdir dirname1 dirname2 dirname3
$
</pre>
<p>The above command removes the directories dirname1, dirname2, and dirname3, if they are empty. The <b>rmdir</b> command produces no output if it is successful.</p>
<h4>Changing Directories</h4>
<p>You can use the <b>cd</b> command to do more than just change to a home directory. You can use it to change to any directory by specifying a valid absolute or relative path. The syntax is as given below −</p>
<pre class="result notranslate">$cd dirname
$
</pre>
<p>Here, <b>dirname</b> is the name of the directory that you want to change to. For example, the command −</p>
<pre class="result notranslate">$cd /usr/local/bin
$
</pre>
<p>Changes to the directory <b>/usr/local/bin</b>. From this directory, you can <b>cd</b> to the directory <b>/usr/home/amrood</b> using the following relative path −</p>
<pre class="result notranslate">$cd ../../home/amrood
$
</pre>
<h4>Renaming Directories</h4>
<p>The <b>mv (move)</b> command can also be used to rename a directory. The syntax is as follows −</p>
<pre class="result notranslate">$mv olddir newdir
$
</pre>
<p>You can rename a directory <b>mydir</b> to <b>yourdir</b> as follows −</p>
<pre class="result notranslate">$mv mydir yourdir
$
</pre>
<h4>The directories . (dot) and .. (dot dot)</h4>
<p>The <b>filename .</b> (dot) represents the current working directory; and the <b>filename ..</b> (dot dot) represents the directory one level above the current working directory, often referred to as the parent directory.</p>
<p>If we enter the command to show a listing of the current working directories/files and use the <b>-a option</b> to list all the files and the <b>-l option</b> to provide the long listing, we will receive the following result.</p>
<pre class="result notranslate">$ls -la
drwxrwxr-x    4    teacher   class   2048  Jul 16 17.56 .
drwxr-xr-x    60   root              1536  Jul 13 14:18 ..
----------    1    teacher   class   4210  May 1 08:27 .profile
-rwxr-xr-x    1    teacher   class   1948  May 12 13:42 memo
$
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="350_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="353_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'unix_header.php'; ?></aside>
 
  
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