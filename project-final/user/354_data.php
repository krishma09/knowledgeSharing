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
	$sid=354;
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
<p>In this chapter, we will discuss in detail about the Unix environment. An important Unix concept is the <b>environment</b>, which is defined by environment variables. Some are set by the system, others by you, yet others by the shell, or any program that loads another program.</p>
<p>A variable is a character string to which we assign a value. The value assigned could be a number, text, filename, device, or any other type of data.</p>
<p>For example, first we set a variable TEST and then we access its value using the <b>echo</b> command −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="pln">$TEST</span><span class="pun">=</span><span class="str">"Unix Programming"</span><span class="pln">
$echo $TEST</span></pre>
<p>It produces the following result.</p>
<pre class="result notranslate">Unix Programming
</pre>
<p>Note that the environment variables are set without using the <b>$</b> sign but while accessing them we use the $ sign as prefix. These variables retain their values until we come out of the shell.</p>
<p>When you log in to the system, the shell undergoes a phase called <b>initialization</b> to set up the environment. This is usually a two-step process that involves the shell reading the following files −</p>

<ul class="list">
<li>/etc/profile</li>
<li>profile</li>
</ul>
<p>The process is as follows −</p>
<ul class="list">
<li><p>The shell checks to see whether the file <b>/etc/profile</b> exists.</p></li>
<li><p>If it exists, the shell reads it. Otherwise, this file is skipped. No error message is displayed.</p></li>
<li><p>The shell checks to see whether the file <b>.profile</b> exists in your home directory. Your home directory is the directory that you start out in after you log in.</p></li>
<li><p>If it exists, the shell reads it; otherwise, the shell skips it. No error message is displayed.</p></li>
</ul>
<p>As soon as both of these files have been read, the shell displays a prompt −</p>
<pre class="result notranslate">$
</pre>
<p>This is the prompt where you can enter commands in order to have them executed.</p>
<p><b>Note</b> − The shell initialization process detailed here applies to all <b>Bourne</b> type shells, but some additional files are used by <b>bash</b> and <b>ksh</b>.</p>
<h4>The .profile File</h4>
<p>The file <b>/etc/profile</b> is maintained by the system administrator of your Unix machine and contains shell initialization information required by all users on a system.</p>
<p>The file <b>.profile</b> is under your control. You can add as much shell customization information as you want to this file. The minimum set of information that you need to configure includes −</p>
<ul class="list">
<li>The type of terminal you are using.</li>
<li>A list of directories in which to locate the commands.</li>
<li>A list of variables affecting the look and feel of your terminal.</li>
</ul>
<p>You can check your <b>.profile</b> available in your home directory. Open it using the vi editor and check all the variables set for your environment.</p>
<h4>Setting the Terminal Type</h4>
<p>Usually, the type of terminal you are using is automatically configured by either the <b>login</b> or <b>getty</b> programs. Sometimes, the auto configuration process guesses your terminal incorrectly.</p>
<p>If your terminal is set incorrectly, the output of the commands might look strange, or you might not be able to interact with the shell properly.</p>
<p>To make sure that this is not the case, most users set their terminal to the lowest common denominator in the following way −</p>
<pre class="result notranslate">$TERM=vt100
$
</pre>
<h4>Setting the PATH</h4>
<p>When you type any command on the command prompt, the shell has to locate the command before it can be executed.</p>
<p>The PATH variable specifies the locations in which the shell should look for commands. Usually the Path variable is set as follows −</p>
<pre class="result notranslate">$PATH=/bin:/usr/bin
$
</pre>
<p>Here, each of the individual entries separated by the colon character <b>(:)</b> are directories. If you request the shell to execute a command and it cannot find it in any of the directories given in the PATH variable, a message similar to the following appears −</p>
<pre class="result notranslate">$hello
hello: not found
$
</pre>
<p>There are variables like PS1 and PS2 which are discussed in the next section.</p>
<h4>PS1 and PS2 Variables</h4>
<p>The characters that the shell displays as your command prompt are stored in the variable PS1. You can change this variable to be anything you want. As soon as you change it, it'll be used by the shell from that point on.</p>
<p>For example, if you issued the command −</p>

<pre class="prettyprint notranslate prettyprinted"><span class="pln">$PS1</span><span class="pun">=</span><span class="str">'=&gt;'</span><span class="pln">
</span><span class="pun">=&gt;</span><span class="pln">
</span><span class="pun">=&gt;</span><span class="pln">
</span><span class="pun">=&gt;</span></pre>
<p>Your prompt will become =&gt;. To set the value of <b>PS1</b> so that it shows the working directory, issue the command −</p>
<pre class="result notranslate">=&gt;PS1="[\u@\h \w]\$"
[root@ip-72-167-112-17 /var/www/tutorialspoint/unix]$
[root@ip-72-167-112-17 /var/www/tutorialspoint/unix]$
</pre>
<p>The result of this command is that the prompt displays the user's username, the machine's name (hostname), and the working directory.</p>
<p>There are quite a few <b>escape sequences</b> that can be used as value arguments for PS1; try to limit yourself to the most critical so that the prompt does not overwhelm you with information.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Escape Sequence &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>\t</b></p>
<p>Current time, expressed as HH:MM:SS</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>\d</b></p>
<p>Current date, expressed as Weekday Month Date</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>\n</b></p>
<p>Newline</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>\s</b></p>
<p>Current shell environment</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>\W</b></p>
<p>Working directory</p>
</td>
</tr>
<tr>
<td class="ts">6</td>
<td>
<p><b>\w</b></p>
<p>Full path of the working directory</p>
</td>
</tr>
<tr>
<td class="ts">7</td>
<td>
<p><b>\u</b></p>
<p>Current user’s username</p>
</td>
</tr>
<tr>
<td class="ts">8</td>
<td>
<p><b>\h</b></p>
<p>Hostname of the current machine</p>
</td>
</tr>
<tr>
<td class="ts">9</td>
<td>
<p><b>\#</b></p>
<p>Command number of the current command. Increases when a new command is entered</p>
</td>
</tr>
<tr>
<td class="ts">10</td>
<td>
<p><b>\$</b></p>
<p>If the effective UID is 0 (that is, if you are logged in as root), end the prompt with the # character; otherwise, use the $ sign</p>
</td>
</tr>
</tbody></table>
<p>You can make the change yourself every time you log in, or you can have the change made automatically in PS1 by adding it to your <b>.profile</b> file.</p>
<p>When you issue a command that is incomplete, the shell will display a secondary prompt and wait for you to complete the command and hit <b>Enter</b> again.</p>
<p>The default secondary prompt is <b>&gt;</b> (the greater than sign), but can be changed by re-defining the <b>PS2</b> shell variable −</p>
<p>Following is the example which uses the default secondary prompt −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$ echo </span><span class="str">"this is a
&gt; test"</span><span class="pln">
</span><span class="kwd">this</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> a
test
$</span></pre>
<p>The example given below re-defines PS2 with a customized prompt −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$ PS2</span><span class="pun">=</span><span class="str">"secondary prompt-&gt;"</span><span class="pln">
$ echo </span><span class="str">"this is a
secondary prompt-&gt;test"</span><span class="pln">
</span><span class="kwd">this</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> a
test
$</span></pre>
<h4>Environment Variables</h4>
<p>Following is the partial list of important environment variables. These variables are set and accessed as mentioned below −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Variable &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>DISPLAY</b></p>
<p>Contains the identifier for the display that <b>X11</b> programs should use by default.</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>HOME</b></p>
<p>Indicates the home directory of the current user: the default argument for the cd <b>built-in</b> command.</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>IFS</b></p>
<p>Indicates the <b>Internal Field Separator</b> that is used by the parser for word splitting after expansion.</p>
</td>
</tr>
<tr>
<td class="ts">4</td>
<td>
<p><b>LANG</b></p>
<p>LANG expands to the default system locale; LC_ALL can be used to override this. For example, if its value is <b>pt_BR</b>, then the language is set to (Brazilian) Portuguese and the locale to Brazil.</p>
</td>
</tr>
<tr>
<td class="ts">5</td>
<td>
<p><b>LD_LIBRARY_PATH</b></p>
<p>A Unix system with a dynamic linker, contains a colonseparated list of directories that the dynamic linker should search for shared objects when building a process image after exec, before searching in any other directories.</p>
</td>
</tr>
<tr>
<td class="ts">6</td>
<td>
<p><b>PATH</b></p>
<p>Indicates the search path for commands. It is a colon-separated list of directories in which the shell looks for commands.</p>
</td>
</tr>
<tr>
<td class="ts">7</td>
<td>
<p><b>PWD</b></p>
<p>Indicates the current working directory as set by the cd command.</p>
</td>
</tr>
<tr>
<td class="ts">8</td>
<td>
<p><b>RANDOM</b></p>
<p>Generates a random integer between 0 and 32,767 each time it is referenced.</p>
</td>
</tr>
<tr>
<td class="ts">9</td>
<td>
<p><b>SHLVL</b></p>
<p>Increments by one each time an instance of bash is started. This variable is useful for determining whether the built-in exit command ends the current session.</p>
</td>
</tr>
<tr>
<td class="ts">10</td>
<td>
<p><b>TERM</b></p>
<p>Refers to the display type.</p>
</td>
</tr>
<tr>
<td class="ts">11</td>
<td>
<p><b>TZ</b></p>
<p>Refers to Time zone. It can take values like GMT, AST, etc.</p>
</td>
</tr>
<tr>
<td class="ts">12</td>
<td>
<p><b>UID</b></p>
<p>Expands to the numeric user ID of the current user, initialized at the shell startup.</p>
</td>
</tr>
</tbody></table>
<p>Following is the sample example showing few environment variables −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$ echo $HOME
</span><span class="pun">/</span><span class="pln">root
</span><span class="pun">]</span><span class="pln">$ echo $DISPLAY

$ echo $TERM
xterm
$ echo $PATH
</span><span class="pun">/</span><span class="pln">usr</span><span class="pun">/</span><span class="kwd">local</span><span class="pun">/</span><span class="pln">bin</span><span class="pun">:</span><span class="str">/bin:/</span><span class="pln">usr</span><span class="pun">/</span><span class="pln">bin</span><span class="pun">:</span><span class="str">/home/</span><span class="pln">amrood</span><span class="pun">/</span><span class="pln">bin</span><span class="pun">:</span><span class="str">/usr/</span><span class="kwd">local</span><span class="pun">/</span><span class="pln">bin
$</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="353_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="355_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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