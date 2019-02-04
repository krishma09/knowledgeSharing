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
	$sid=355;
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

<p>A <b>Shell</b> provides you with an interface to the Unix system. It gathers input from you and executes programs based on that input. When a program finishes executing, it displays that program's output.</p>
<p>Shell is an environment in which we can run our commands, programs, and shell scripts. There are different flavors of a shell, just as there are different flavors of operating systems. Each flavor of shell has its own set of recognized commands and functions.</p>
<h4>Shell Prompt</h4>
<p>The prompt, <b>$</b>, which is called the <b>command prompt</b>, is issued by the shell. While the prompt is displayed, you can type a command.</p>
<p>Shell reads your input after you press <b>Enter</b>. It determines the command you want executed by looking at the first word of your input. A word is an unbroken set of characters. Spaces and tabs separate words.</p>
<p>Following is a simple example of the <b>date</b> command, which displays the current date and time −</p>
<pre class="result notranslate">$date
Thu Jun 25 08:30:19 MST 2009
</pre>
<p>You can customize your command prompt using the environment variable PS1 explained in the Environment tutorial.</p>
<h4>Shell Types</h4>
<p>In Unix, there are two major types of shells −</p>
<ul class="list">
<li><p><b>Bourne shell</b> − If you are using a Bourne-type shell, the <b>$</b> character is the default prompt.</p></li>
<li><p><b>C shell</b> − If you are using a C-type shell, the % character is the default prompt.</p></li>
</ul>
<p>The Bourne Shell has the following subcategories −</p>
<ul class="list">
<li>Bourne shell (sh)</li>
<li>Korn shell (ksh)</li>
<li>Bourne Again shell (bash)</li>
<li>POSIX shell (sh)</li>
</ul>
<li>Bourne shell (sh)</li>
<li>Korn shell (ksh)</li>
<li>Bourne Again shell (bash)</li>
<li>POSIX shell (sh)</li>
<ul class="list">
<li>Bourne shell (sh)</li>
<li>Korn shell (ksh)</li>
<li>Bourne Again shell (bash)</li>
<li>POSIX shell (sh)</li>
</ul>
<p>The different C-type shells follow −</p>
<ul class="list">
<li>C shell (csh)</li>
<li>TENEX/TOPS C shell (tcsh)</li>
</ul>
<p>The original Unix shell was written in the mid-1970s by Stephen R. Bourne while he was at the AT&amp;T Bell Labs in New Jersey.</p>
<p>Bourne shell was the first shell to appear on Unix systems, thus it is referred to as "the shell".</p>
<p>Bourne shell is usually installed as <b>/bin/sh</b> on most versions of Unix. For this reason, it is the shell of choice for writing scripts that can be used on different versions of Unix.</p>
<p>In this chapter, we are going to cover most of the Shell concepts that are based on the Borne Shell.</p>
<h4>Shell Scripts</h4>
<p>The basic concept of a shell script is a list of commands, which are listed in the order of execution. A good shell script will have comments, preceded by <b>#</b> sign, describing the steps.</p>
<p>There are conditional tests, such as value A is greater than value B, loops allowing us to go through massive amounts of data, files to read and store data, and variables to read and store data, and the script may include functions.</p>
<p>We are going to write many scripts in the next sections. It would be a simple text file in which we would put all our commands and several other required constructs that tell the shell environment what to do and when to do it.</p>
<p>Shell scripts and functions are both interpreted. This means they are not compiled.</p>
<h4>Example Script</h4>
<p>Assume we create a <b>test.sh</b> script. Note all the scripts would have the <b>.sh</b> extension. Before you add anything else to your script, you need to alert the system that a shell script is being started. This is done using the <b>shebang</b> construct. For example −</p>
<pre class="result notranslate">#!/bin/sh
</pre>
<p>This tells the system that the commands that follow are to be executed by the Bourne shell. <i>It's called a shebang because the <b>#</b> symbol is called a hash, and the ! symbol is called a bang</i>.</p>
<p>To create a script containing these commands, you put the shebang line first and then add the commands −</p>
<pre class="result notranslate">#!/bin/bash
pwd
ls
</pre>
<h4>Shell Comments</h4>
<p>You can put your comments in your script as follows −</p>
<pre class="result notranslate">#!/bin/bash

# Author : Zara Ali
# Copyright (c) Tutorialspoint.com
# Script follows here:
pwd
ls
</pre>
<p>Save the above content and make the script executable −</p>
<pre class="result notranslate">$chmod +x test.sh
</pre>
<p>The shell script is now ready to be executed −</p>
<pre class="result notranslate">$./test.sh
</pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">/home/amrood
index.htm  unix-basic_utilities.htm  unix-directories.htm  
test.sh    unix-communication.htm    unix-environment.htm
</pre>
<p><b>Note</b> − To execute a program available in the current directory, use <b>./program_name</b></p>
<h4>Extended Shell Scripts</h4>
<p>Shell scripts have several required constructs that tell the shell environment what to do and when to do it. Of course, most scripts are more complex than the above one.</p>
<p>The shell is, after all, a real programming language, complete with variables, control structures, and so forth. No matter how complicated a script gets, it is still just a list of commands executed sequentially.</p>
<p>The following script uses the <b>read</b> command which takes the input from the keyboard and assigns it as the value of the variable PERSON and finally prints it on STDOUT.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

</span><span class="com"># Author : Zara Ali</span><span class="pln">
</span><span class="com"># Copyright (c) Tutorialspoint.com</span><span class="pln">
</span><span class="com"># Script follows here:</span><span class="pln">

echo </span><span class="str">"What is your name?"</span><span class="pln">
read PERSON
echo </span><span class="str">"Hello, $PERSON"</span></pre>
<p>Here is a sample run of the script −</p>
<pre class="result notranslate">$./test.sh
What is your name?
Zara Ali
Hello, Zara Ali
$
</pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="354_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="356_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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