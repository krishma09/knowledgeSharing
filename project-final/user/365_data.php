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
	$sid=365;
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
<p>In this chapter, we will discuss in detail about the Shell input/output redirections. Most Unix system commands take input from your terminal and send the resulting output back to your terminal. A command normally reads its input from the standard input, which happens to be your terminal by default. Similarly, a command normally writes its output to standard output, which is again your terminal by default.</p>
<h4>Output Redirection</h4>
<p>The output from a command normally intended for standard output can be easily diverted to a file instead. This capability is known as output redirection.</p>
<p>If the notation &gt; file is appended to any command that normally writes its output to standard output, the output of that command will be written to file instead of your terminal.</p>
<p>Check the following <b>who</b> command which redirects the complete output of the command in the users file.</p>
<pre class="result notranslate">$ who &gt; users
</pre>
<p>Notice that no output appears at the terminal. This is because the output has been redirected from the default standard output device (the terminal) into the specified file. You can check the users file for the complete content −</p>
<pre class="result notranslate">$ cat users
oko         tty01   Sep 12 07:30
ai          tty15   Sep 12 13:32
ruth        tty21   Sep 12 10:10
pat         tty24   Sep 12 13:07
steve       tty25   Sep 12 13:03
$
</pre>
<p>If a command has its output redirected to a file and the file already contains some data, that data will be lost. Consider the following example −</p>
<pre class="result notranslate">$ echo line 1 &gt; users
$ cat users
line 1
$
</pre>
<p>You can use &gt;&gt; operator to append the output in an existing file as follows −</p>
<pre class="result notranslate">$ echo line 2 &gt;&gt; users
$ cat users
line 1
line 2
$
</pre>
<h4>Input Redirection</h4>
<p>Just as the output of a command can be redirected to a file, so can the input of a command be redirected from a file. As the <b>greater-than character &gt;</b> is used for output redirection, the <b>less-than character &lt;</b> is used to redirect the input of a command.</p>
<p>The commands that normally take their input from the standard input can have their input redirected from a file in this manner. For example, to count the number of lines in the file <i>users</i> generated above, you can execute the command as follows −</p>
<pre class="result notranslate">$ wc -l users
2 users
$
</pre>
<pre class="result notranslate">$ wc -l users
2 users
$
</pre>
<p>Upon execution, you will receive the following output. You can count the number of lines in the file by redirecting the standard input of the <b>wc</b> command from the file <i>users</i> −</p>
<pre class="result notranslate">$ wc -l &lt; users
2
$
</pre>
<p>Note that there is a difference in the output produced by the two forms of the wc command. In the first case, the name of the file users is listed with the line count; in the second case, it is not.</p>
<p>In the first case, wc knows that it is reading its input from the file users. In the second case, it only knows that it is reading its input from standard input so it does not display file name.</p>
<h4>Here Document</h4>
<p>A <b>here document</b> is used to redirect input into an interactive shell script or program.</p>
<p>We can run an interactive program within a shell script without user action by supplying the required input for the interactive program, or interactive shell script.</p>
<p>The general form for a <b>here</b> document is −</p>
<pre class="result notranslate">command &lt;&lt; delimiter
document
delimiter
</pre>
<p>Here the shell interprets the <b>&lt;&lt;</b> operator as an instruction to read input until it finds a line containing the specified delimiter. All the input lines up to the line containing the delimiter are then fed into the standard input of the command.</p>

<p>The delimiter tells the shell that the <b>here</b> document has completed. Without it, the shell continues to read the input forever. The delimiter must be a single word that does not contain spaces or tabs.</p>
<p>Following is the input to the command <b>wc -l</b> to count the total number of lines −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$wc </span><span class="pun">-</span><span class="pln">l </span><span class="pun">&lt;&lt;</span><span class="pln"> EOF
   </span><span class="typ">This</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> a simple lookup program 
	</span><span class="kwd">for</span><span class="pln"> good </span><span class="pun">(</span><span class="kwd">and</span><span class="pln"> bad</span><span class="pun">)</span><span class="pln"> restaurants
	</span><span class="kwd">in</span><span class="pln"> </span><span class="typ">Cape</span><span class="pln"> </span><span class="typ">Town</span><span class="pun">.</span><span class="pln">
EOF
</span><span class="lit">3</span><span class="pln">
$</span></pre>
<p>You can use the <b>here document</b> to print multiple lines using your script as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

cat </span><span class="pun">&lt;&lt;</span><span class="pln"> EOF
</span><span class="typ">This</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> a simple lookup program 
</span><span class="kwd">for</span><span class="pln"> good </span><span class="pun">(</span><span class="kwd">and</span><span class="pln"> bad</span><span class="pun">)</span><span class="pln"> restaurants
</span><span class="kwd">in</span><span class="pln"> </span><span class="typ">Cape</span><span class="pln"> </span><span class="typ">Town</span><span class="pun">.</span><span class="pln">
EOF	</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">This is a simple lookup program
for good (and bad) restaurants
in Cape Town.
</pre>
<p>The following script runs a session with the <b>vi</b> text editor and saves the input in the file <b>test.txt</b>.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

filename</span><span class="pun">=</span><span class="pln">test</span><span class="pun">.</span><span class="pln">txt
vi $filename </span><span class="pun">&lt;&lt;</span><span class="typ">EndOfCommands</span><span class="pln">
i
</span><span class="typ">This</span><span class="pln"> file was created automatically </span><span class="kwd">from</span><span class="pln">
a shell script
</span><span class="pun">^[</span><span class="pln">
ZZ
</span><span class="typ">EndOfCommands</span></pre>
<p>If you run this script with vim acting as vi, then you will likely see output like the following −</p>
<pre class="result notranslate">$ sh test.sh
Vim: Warning: Input is not from a terminal
$
</pre>
<p>After running the script, you should see the following added to the file <b>test.txt</b> −</p>
<pre class="result notranslate">$ cat test.txt
This file was created automatically from
a shell script
$
</pre>

<h4>Discard the output</h4>
<p>Sometimes you will need to execute a command, but you don't want the output displayed on the screen. In such cases, you can discard the output by redirecting it to the file <b>/dev/null</b> −</p>
<pre class="result notranslate">$ command &gt; /dev/null
</pre>
<p>Here command is the name of the command you want to execute. The file <b>/dev/null</b> is a special file that automatically discards all its input.</p>
<p>To discard both output of a command and its error output, use standard redirection to redirect <b>STDERR</b> to <b>STDOUT</b> −</p>
<pre class="result notranslate">$ command &gt; /dev/null 2&gt;&amp;1
</pre>
<p>Here <b>2</b> represents <b>STDERR</b> and <b>1</b> represents <b>STDOUT</b>. You can display a message on to STDERR by redirecting STDOUT into STDERR as follows −</p>
<pre class="result notranslate">$ echo message 1&gt;&amp;2
</pre>
<h4>Redirection Commands</h4>
<p>Following is a complete list of commands which you can use for redirection −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Command &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>pgm &gt; file</b></p>
<p>Output of pgm is redirected to file</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>pgm &lt; file</b></p>
<p>Program pgm reads its input from file</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>pgm &gt;&gt; file</b></p>
<p>Output of pgm is appended to file</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>n &gt; file</b></p>
<p>Output from stream with descriptor <b>n</b> redirected to file</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>n &gt;&gt; file</b></p>
<p>Output from stream with descriptor <b>n</b> appended to file</p>
</td>
</tr>
<tr>
<td class="ts">6</td>
<td>
<p><b>n &gt;&amp; m</b></p>
<p>Merges output from stream <b>n</b> with stream <b>m</b></p>
</td>
</tr>
<tr>
<td class="ts">7</td>
<td>
<p><b>n &lt;&amp; m</b></p>
<p>Merges input from stream <b>n</b> with stream <b>m</b></p>
</td>
</tr>
<tr>
<td class="ts">8</td>
<td>
<p><b>&lt;&lt; tag</b></p>
<p>Standard input comes from here through next tag at the start of line</p>
</td>
</tr>
<tr>
<td class="ts">9</td>
<td>
<p><b>|</b></p>
<p>Takes output from one program, or process, and sends it to another</p>
</td>
</tr>
</tbody></table>
<p>Note that the file descriptor <b>0</b> is normally standard input (STDIN), <b>1</b> is standard output (STDOUT), and <b>2</b> is standard error output (STDERR).</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="364_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="366_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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