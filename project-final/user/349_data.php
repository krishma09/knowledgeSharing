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
	$sid=349;
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
<h4>What is Unix ?</h4>
<p>The Unix operating system is a set of programs that act as a link between the computer and the user.</p>
<p>The computer programs that allocate the system resources and coordinate all the details of the computer's internals is called the <b>operating system</b> or the <b>kernel</b>.</p>
<p>Users communicate with the kernel through a program known as the <b>shell</b>. The shell is a command line interpreter; it translates commands entered by the user and converts them into a language that is understood by the kernel.</p>
<ul class="list">
<li><p>Unix was originally developed in 1969 by a group of AT&amp;T employees Ken Thompson, Dennis Ritchie, Douglas McIlroy, and Joe Ossanna at Bell Labs.</p></li>
<li><p>There are various Unix variants available in the market. Solaris Unix, AIX, HP Unix and BSD are a few examples. Linux is also a flavor of Unix which is freely available.</p></li>
<li><p>Several people can use a Unix computer at the same time; hence Unix is called a multiuser system.</p></li>
<li><p>A user can also run multiple programs at the same time; hence Unix is a multitasking environment.</p></li>
</ul>
<h4>Unix Architecture</h4>
<p>Here is a basic block diagram of a Unix system −</p>
<img src="images/unix_architecture.jpg" alt="Unix Architecture">
<p>The main concept that unites all the versions of Unix is the following four basics −</p>
<ul class="list">
<li><p><b>Kernel</b> − The kernel is the heart of the operating system. It interacts with the hardware and most of the tasks like memory management, task scheduling and file management.</p></li>
<li><p><b>Shell</b> − The shell is the utility that processes your requests. When you type in a command at your terminal, the shell interprets the command and calls the program that you want. The shell uses standard syntax for all commands. C Shell, Bourne Shell and Korn Shell are the most famous shells which are available with most of the Unix variants.</p></li>
<li><p><b>Commands and Utilities</b> − There are various commands and utilities which you can make use of in your day to day activities. <b>cp</b>, <b>mv</b>, <b>cat</b> and <b>grep</b>, etc. are few examples of commands and utilities. There are over 250 standard commands plus numerous others provided through 3<sup>rd</sup> party software. All the commands come along with various options.</p></li>
<li><p><b>Files and Directories</b> − All the data of Unix is organized into files. All files are then organized into directories. These directories are further organized into a tree-like structure called the <b>filesystem</b>.</p></li>
</ul>
<h4>System Bootup</h4>
<p>If you have a computer which has the Unix operating system installed in it, then you simply need to turn on the system to make it live.</p>
<p>As soon as you turn on the system, it starts booting up and finally it prompts you to log into the system, which is an activity to log into the system and use it for your day-to-day activities.</p>
<h4>Login Unix</h4>
<p>When you first connect to a Unix system, you usually see a prompt such as the following −</p>
<pre class="result notranslate">login:
</pre>
<h4>To log in</h4>
<ul class="list">
<li><p>Have your userid (user identification) and password ready. Contact your system administrator if you don't have these yet.</p></li>
<li><p>Type your userid at the login prompt, then press <b>ENTER</b>. Your userid is <b>case-sensitive</b>, so be sure you type it exactly as your system administrator has instructed.</p></li>
<li><p>Type your password at the password prompt, then press <b>ENTER</b>. Your password is also case-sensitive.</p></li>
<li><p>If you provide the correct userid and password, then you will be allowed to enter into the system. Read the information and messages that comes up on the screen, which is as follows.</p></li>
</ul>
<pre class="result notranslate">login : amrood
amrood's password:
Last login: Sun Jun 14 09:32:32 2009 from 62.61.164.73
$
</pre>
<p>You will be provided with a command prompt (sometime called the <b>$</b> prompt ) where you type all your commands. For example, to check calendar, you need to type the <b>cal</b> command as follows −</p>
<pre class="result notranslate">$ cal
     June 2009
Su Mo Tu We Th Fr Sa
    1  2  3  4  5  6
 7  8  9 10 11 12 13
14 15 16 17 18 19 20
21 22 23 24 25 26 27
28 29 30

$
</pre>
<h4>Change Password</h4>
<p>All Unix systems require passwords to help ensure that your files and data remain your own and that the system itself is secure from hackers and crackers. Following are the steps to change your password −</p>
<p><b>Step 1</b> − To start, type password at the command prompt as shown below.</p>
<p><b>Step 2</b> − Enter your old password, the one you're currently using.</p>
<p><b>Step 3</b> − Type in your new password. Always keep your password complex enough so that nobody can guess it. But make sure, you remember it.</p>
<p><b>Step 4</b> − You must verify the password by typing it again.</p>
<pre class="result notranslate">$ passwd
Changing password for amrood
(current) Unix password:******
New UNIX password:*******
Retype new UNIX password:*******
passwd: all authentication tokens updated  successfully

$
</pre>
<p><b>Note</b> − We have added asterisk (*) here just to show the location where you need to enter the current and new passwords otherwise at your system. It does not show you any character when you type.</p>
<h4>Listing Directories and Files</h4>
<p>All data in Unix is organized into files. All files are organized into directories. These directories are organized into a tree-like structure called the filesystem.</p>
<p>You can use the <b>ls</b> command to list out all the files or directories available in a directory. Following is the example of using <b>ls</b> command with <b>-l</b> option.</p>
<pre class="result notranslate">$ ls -l
total 19621
drwxrwxr-x  2 amrood amrood      4096 Dec 25 09:59 uml
-rw-rw-r--  1 amrood amrood      5341 Dec 25 08:38 uml.jpg
drwxr-xr-x  2 amrood amrood      4096 Feb 15  2006 univ
drwxr-xr-x  2 root   root        4096 Dec  9  2007 urlspedia
-rw-r--r--  1 root   root      276480 Dec  9  2007 urlspedia.tar
drwxr-xr-x  8 root   root        4096 Nov 25  2007 usr
-rwxr-xr-x  1 root   root        3192 Nov 25  2007 webthumb.php
-rw-rw-r--  1 amrood amrood     20480 Nov 25  2007 webthumb.tar
-rw-rw-r--  1 amrood amrood      5654 Aug  9  2007 yourfile.mid
-rw-rw-r--  1 amrood amrood    166255 Aug  9  2007 yourfile.swf

$
</pre>
<p>Here entries starting with <b>d.....</b> represent directories. For example, uml, univ and urlspedia are directories and rest of the entries are files.</p>
<h4>Who Are You?</h4>
<p>While you're logged into the system, you might be willing to know : <b>Who am I</b>?</p>
<p>The easiest way to find out "who you are" is to enter the <b>whoami</b> command −</p>
<pre class="result notranslate">$ whoami
 amrood

$
</pre>
<p>Try it on your system. This command lists the account name associated with the current login. You can try <b>who am i</b> command as well to get information about yourself.</p>
<h4>Who is Logged in?</h4>
<p>Sometime you might be interested to know who is logged in to the computer at the same time.</p>
<p>There are three commands available to get you this information, based on how much you wish to know about the other users: <b>users</b>, <b>who</b>, and <b>w</b>.</p>
<pre class="result notranslate">$ users
 amrood bablu qadir

$ who
amrood ttyp0 Oct 8 14:10 (limbo)
bablu  ttyp2 Oct 4 09:08 (calliope)
qadir  ttyp4 Oct 8 12:09 (dent)

$
</pre>
<p>Try the <b>w</b> command on your system to check the output. This lists down information associated with the users logged in the system.</p>
<h4>Logging Out</h4>
<p>When you finish your session, you need to log out of the system. This is to ensure that nobody else accesses your files.</p>
<p><b>To log out</b></p>
<ul class="list">
<li><p>Just type the <b>logout</b> command at the command prompt, and the system will clean up everything and break the connection.</p></li>
</ul>
<h4>System Shutdown</h4>
<p>The most consistent way to shut down a Unix system properly via the command line is to use one of the following commands −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Command &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>halt</b></p>
<p>Brings the system down immediately</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>init 0</b></p>
<p>Powers off the system using predefined scripts to synchronize and clean up the system prior to shutting down</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>init 6</b></p>
<p>Reboots the system by shutting it down completely and then restarting it</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>poweroff</b></p>
<p>Shuts down the system by powering off</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>reboot</b></p>
<p>Reboots the system</p>
</td>
</tr>
<tr>
<td class="ts">6</td>
<td>
<p><b>shutdown</b></p>
<p>Shuts down the system</p>
</td>
</tr>
</tbody></table>
<p>You typically need to be the super user or root (the most privileged account on a Unix system) to shut down the system. However, on some standalone or personally-owned Unix boxes, an administrative user and sometimes regular users can do so.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="348_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="350_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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