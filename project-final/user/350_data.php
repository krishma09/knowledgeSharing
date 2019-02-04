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
	$sid=350;
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
<p>In this chapter, we will discuss in detail about file management in Unix. All data in Unix is organized into files. All files are organized into directories. These directories are organized into a tree-like structure called the filesystem.</p>
<p>When you work with Unix, one way or another, you spend most of your time working with files. This tutorial will help you understand how to create and remove files, copy and rename them, create links to them, etc.</p>
<p>In Unix, there are three basic types of files −</p>
<ul class="list">
<li><p><b>Ordinary Files</b> − An ordinary file is a file on the system that contains data, text, or program instructions. In this tutorial, you look at working with ordinary files.</p></li>
<li><p><b>Directories</b> − Directories store both special and ordinary files. For users familiar with Windows or Mac OS, Unix directories are equivalent to folders.</p></li>
<li><p><b>Special Files</b> − Some special files provide access to hardware such as hard drives, CD-ROM drives, modems, and Ethernet adapters. Other special files are similar to aliases or shortcuts and enable you to access a single file using different names.</p></li>
</ul>
<h4>Listing Files</h4>
<p>To list the files and directories stored in the current directory, use the following command −</p>
<pre class="result notranslate">$ls
</pre>
<p>Here is the sample output of the above command −</p>
<pre class="result notranslate">$ls

bin        hosts  lib     res.03
ch07       hw1    pub     test_results
ch07.bak   hw2    res.01  users
docs       hw3    res.02  work
</pre>
<p>The command <b>ls</b> supports the <b>-l</b> option which would help you to get more information about the listed files −</p>
<pre class="result notranslate">$ls -l
total 1962188

drwxrwxr-x  2 amrood amrood      4096 Dec 25 09:59 uml
-rw-rw-r--  1 amrood amrood      5341 Dec 25 08:38 uml.jpg
drwxr-xr-x  2 amrood amrood      4096 Feb 15  2006 univ
drwxr-xr-x  2 root   root        4096 Dec  9  2007 urlspedia
-rw-r--r--  1 root   root      276480 Dec  9  2007 urlspedia.tar
drwxr-xr-x  8 root   root        4096 Nov 25  2007 usr
drwxr-xr-x  2    200    300      4096 Nov 25  2007 webthumb-1.01
-rwxr-xr-x  1 root   root        3192 Nov 25  2007 webthumb.php
-rw-rw-r--  1 amrood amrood     20480 Nov 25  2007 webthumb.tar
-rw-rw-r--  1 amrood amrood      5654 Aug  9  2007 yourfile.mid
-rw-rw-r--  1 amrood amrood    166255 Aug  9  2007 yourfile.swf
drwxr-xr-x 11 amrood amrood      4096 May 29  2007 zlib-1.2.3
$
</pre>
<p>Here is the information about all the listed columns −</p>
<ul class="list">
<li><p><b>First Column</b> − Represents the file type and the permission given on the file. Below is the description of all type of files.</p></li>
<li><p><b>Second Column</b> − Represents the number of memory blocks taken by the file or directory.</p></li>
<li><p><b>Third Column</b> − Represents the owner of the file. This is the Unix user who created this file.</p></li>
<li><p><b>Fourth Column</b> − Represents the group of the owner. Every Unix user will have an associated group.</p></li>
<li><p><b>Fifth Column</b> − Represents the file size in bytes.</p></li>
<li><p><b>Sixth Column</b> − Represents the date and the time when this file was created or modified for the last time.</p></li>
<li><p><b>Seventh Column</b> − Represents the file or the directory name.</p></li>
</ul>
<p>In the <b>ls -l</b> listing example, every file line begins with a <b>d</b>, <b>-</b>, or <b>l</b>. These characters indicate the type of the file that's listed.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Prefix &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>-</b></p>
<p>Regular file, such as an ASCII text file, binary executable, or hard link.</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>b</b></p>
<p>Block special file. Block input/output device file such as a physical hard drive.</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>c</b></p>
<p>Character special file. Raw input/output device file such as a physical hard drive.</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>d</b></p>
<p>Directory file that contains a listing of other files and directories.</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>l</b></p>
<p>Symbolic link file. Links on any regular file.</p>
</td>
</tr>
<tr>
<td class="ts">6</td>
<td>
<p><b>p</b></p>
<p>Named pipe. A mechanism for interprocess communications.</p>
</td>
</tr>
<tr>
<td class="ts">7</td>
<td>
<p><b>s</b></p>
<p>Socket used for interprocess communication.</p>
</td>
</tr>
</tbody></table>
<h4>Metacharacters</h4>
<p>Metacharacters have a special meaning in Unix. For example, <b>*</b> and <b>?</b> are metacharacters. We use <b>*</b> to match 0 or more characters, a question mark (<b>?</b>) matches with a single character.</p>
<p>For Example −</p>
<pre class="result notranslate">$ls ch*.doc
</pre>
<p>Displays all the files, the names of which start with <b>ch</b> and end with <b>.doc</b> −</p>
<pre class="result notranslate">ch01-1.doc   ch010.doc  ch02.doc    ch03-2.doc 
ch04-1.doc   ch040.doc  ch05.doc    ch06-2.doc
ch01-2.doc ch02-1.doc c
</pre>
<p>Here, <b>*</b> works as meta character which matches with any character. If you want to display all the files ending with just <b>.doc</b>, then you can use the following command −</p>
<pre class="result notranslate">$ls *.doc
</pre>
<h4>Hidden Files</h4>
<p>An invisible file is one, the first character of which is the dot or the period character (.). Unix programs (including the shell) use most of these files to store configuration information.</p>
<p>Some common examples of the hidden files include the files −</p>
<ul class="list">
<li><p><b>.profile</b> − The Bourne shell ( sh) initialization script</p></li>
<li><p><b>.kshrc</b> − The Korn shell ( ksh) initialization script</p></li>
<li><p><b>.cshrc</b> − The C shell ( csh) initialization script</p></li>
<li><p><b>.rhosts</b> − The remote shell configuration file</p></li>
</ul>
<p>To list the invisible files, specify the <b>-a</b> option to <b>ls</b> −</p>
<pre class="result notranslate">$ ls -a

.         .profile       docs     lib     test_results
..        .rhosts        hosts    pub     users
.emacs    bin            hw1      res.01  work
.exrc     ch07           hw2      res.02
.kshrc    ch07.bak       hw3      res.03
$
</pre>
<ul class="list">
<li><p><b>Single dot (.)</b> − This represents the current directory.</p></li>
<li><p><b>Double dot (..)</b> − This represents the parent directory.</p></li>
</ul>
<h4>Creating Files</h4>
<p>You can use the <b>vi</b> editor to create ordinary files on any Unix system. You simply need to give the following command −</p>
<pre class="result notranslate">$ vi filename
</pre>
<p>The above command will open a file with the given filename. Now, press the key <b>i</b> to come into the edit mode. Once you are in the edit mode, you can start writing your content in the file as in the following program −</p>
<pre class="result notranslate">This is unix file....I created it for the first time.....
I'm going to save this content in this file.
</pre>
<p>Once you are done with the program, follow these steps −</p>
<ul class="list">
<li><p>Press the key <b>esc</b> to come out of the edit mode.</p></li>
<li><p>Press two keys <b>Shift + ZZ</b> together to come out of the file completely.</p></li>
</ul>
<p>You will now have a file created with <b>filename</b> in the current directory.</p>
<pre class="result notranslate">$ vi filename
$
</pre>
<h4>Editing Files</h4>
<p>You can edit an existing file using the <b>vi</b> editor. We will discuss in short how to open an existing file −</p>
<pre class="result notranslate">$ vi filename
</pre>
<p>Once the file is opened, you can come in the edit mode by pressing the key <b>i</b> and then you can proceed by editing the file. If you want to move here and there inside a file, then first you need to come out of the edit mode by pressing the key <b>Esc</b>. After this, you can use the following keys to move inside a file −</p>
<ul class="list">
<li><p><b>l</b> key to move to the right side.</p></li>
<li><p><b>h</b> key to move to the left side.</p></li>
<li><p><b>k</b> key to move upside in the file.</p></li>
<li><p><b>j</b> key to move downside in the file.</p></li>
</ul>
<p>So using the above keys, you can position your cursor wherever you want to edit. Once you are positioned, then you can use the <b>i</b> key to come in the edit mode. Once you are done with the editing in your file, press <b>Esc</b> and finally two keys <b>Shift + ZZ</b> together to come out of the file completely.</p>
<h4>Display Content of a File</h4>
<p>You can use the <b>cat</b> command to see the content of a file. Following is a simple example to see the content of the above created file −</p>
<pre class="result notranslate">$ cat filename
This is unix file....I created it for the first time.....
I'm going to save this content in this file.
$
</pre>
<p>You can display the line numbers by using the <b>-b</b> option along with the <b>cat</b> command as follows −</p>
<pre class="result notranslate">$ cat -b filename
1   This is unix file....I created it for the first time.....
2   I'm going to save this content in this file.
$
</pre>
<h4>Counting Words in a File</h4>
<p>You can use the <b>wc</b> command to get a count of the total number of lines, words, and characters contained in a file. Following is a simple example to see the information about the file created above −</p>
<pre class="result notranslate">$ wc filename
2  19 103 filename
$
</pre>
<p>Here is the detail of all the four columns −</p>
<ul class="list">
<li><p><b>First Column</b> − Represents the total number of lines in the file.</p></li>
<li><p><b>Second Column</b> − Represents the total number of words in the file.</p></li>
<li><p><b>Third Column</b> − Represents the total number of bytes in the file. This is the actual size of the file.</p></li>
<li><p><b>Fourth Column</b> − Represents the file name.</p></li>
</ul>
<p>You can give multiple files and get information about those files at a time. Following is simple syntax −</p>
<pre class="result notranslate">$ wc filename1 filename2 filename3
</pre>
<h4>Copying Files</h4>
<p>To make a copy of a file use the <b>cp</b> command. The basic syntax of the command is −</p>
<pre class="result notranslate">$ cp source_file destination_file
</pre>
<p>Following is the example to create a copy of the existing file <b>filename</b>.</p>
<pre class="result notranslate">$ cp filename copyfile
$
</pre>
<p>You will now find one more file <b>copyfile</b> in your current directory. This file will exactly be the same as the original file <b>filename</b>.</p>
<h4>Renaming Files</h4>
<p>To change the name of a file, use the <b>mv</b> command. Following is the basic syntax −</p>
<pre class="result notranslate">$ mv old_file new_file
</pre>
<p>The following program will rename the existing file <b>filename</b> to <b>newfile</b>.</p>
<pre class="result notranslate">$ mv filename newfile
$
</pre>
<p>The <b>mv</b> command will move the existing file completely into the new file. In this case, you will find only <b>newfile</b> in your current directory.</p>
<h4>Deleting Files</h4>
<p>To delete an existing file, use the <b>rm</b> command. Following is the basic syntax −</p>
<pre class="result notranslate">$ rm filename
</pre>
<p><b>Caution</b> − A file may contain useful information. It is always recommended to be careful while using this <b>Delete</b> command. It is better to use the <b>-i</b> option along with <b>rm</b> command.</p>
<p>Following is the example which shows how to completely remove the existing file <b>filename</b>.</p>
<pre class="result notranslate">$ rm filename
$
</pre>
<p>You can remove multiple files at a time with the command given below −</p>
<pre class="result notranslate">$ rm filename1 filename2 filename3
$
</pre>
<h4>Standard Unix Streams</h4>
<p>Under normal circumstances, every Unix program has three streams (files) opened for it when it starts up −</p>
<ul class="list">
<li><p><b>stdin</b> − This is referred to as the <i>standard input</i> and the associated file descriptor is 0. This is also represented as STDIN. The Unix program will read the default input from STDIN.</p></li>
<li><p><b>stdout</b> − This is referred to as the <i>standard output</i> and the associated file descriptor is 1. This is also represented as STDOUT. The Unix program will write the default output at STDOUT</p></li>
<li><p><b>stderr</b> − This is referred to as the <i>standard error</i> and the associated file descriptor is 2. This is also represented as STDERR. The Unix program will write all the error messages at STDERR.</p></li>
</ul>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="349_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="351_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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