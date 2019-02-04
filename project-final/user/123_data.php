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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=123;
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
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">



<p>An alternative way to make data accessible across the various pages of an entire website is to use a PHP Session.</p>
<p>A session creates a file in a temporary directory on the server where registered session variables and their values are stored. This data will be available to all pages on the site during that visit.</p>
<p>The location of the temporary file is determined by a setting in the <b>php.ini</b> file called <b>session.save_path</b>. Before using any session variable make sure you have setup this path.</p>
<p>When a session is started following things happen −</p>
<ul class="list">
<li><p>PHP first creates a unique identifier for that particular session which is a random string of 32 hexadecimal numbers such as 3c7foj34c3jj973hjkop2fc937e3443.</p></li>
<li><p>A cookie called <b>PHPSESSID</b> is automatically sent to the user's computer to store unique session identification string.</p></li>
<li><p>A file is automatically created on the server in the designated temporary directory and bears the name of the unique identifier prefixed by sess_ ie sess_3c7foj34c3jj973hjkop2fc937e3443.</p></li>
</ul>
<p>When a PHP script wants to retrieve the value from a session variable, PHP automatically gets the unique session identifier string from the PHPSESSID cookie and then looks in its temporary directory for the file bearing that name and a validation can be done by comparing both values.</p>
<p>A session ends when the user loses the browser or after leaving the site, the server will terminate the session after a predetermined period of time, commonly 30 minutes duration.</p>
<h4>Starting a PHP Session</h4>
<p>A PHP session is easily started by making a call to the <b>session_start()</b> function.This function first checks if a session is already started and if none is started then it starts one. It is recommended to put the call to <b>session_start()</b> at the beginning of the page.</p>
<p>Session variables are stored in associative array called <b>$_SESSION[]</b>. These variables can be accessed during lifetime of a session.</p>
<p>The following example starts a session then register a variable called <b>counter</b> that is incremented each time the page is visited during the session.</p>
<p>Make use of <b>isset()</b> function to check if session variable is already set or not.</p>
<p>Put this code in a test.php file and load this file many times to see the result −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   session_start</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> isset</span><span class="pun">(</span><span class="pln"> $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   $msg </span><span class="pun">=</span><span class="pln"> </span><span class="str">"You have visited this page "</span><span class="pun">.</span><span class="pln">  $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">];</span><span class="pln">
   $msg </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"in this session."</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">

</span><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Setting up a PHP session</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="pun">&lt;?</span><span class="pln">php  echo </span><span class="pun">(</span><span class="pln"> $msg </span><span class="pun">);</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<pre class="result notranslate">You have visited this page 1in this session.
</pre>
<h4>Destroying a PHP Session</h4>
<p>A PHP session  can be destroyed by <b>session_destroy()</b> function. This function does not need any argument and a single call can destroy all the session variables. If you want to destroy a single session variable then you can use <b>unset()</b> function to unset a session variable.</p>
<p>Here is the example to unset a single variable −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   unset</span><span class="pun">(</span><span class="pln">$_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]);</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>Here is the call which will destroy all the session variables −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   session_destroy</span><span class="pun">();</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<h4>Turning on Auto Session</h4>
<p>You don't need to call start_session() function to start a session when a user visits your site if you can set <b>session.auto_start</b> variable to 1 in <b>php.ini</b> file.</p>
<h4>Sessions without cookies</h4>

<p>There may be a case when a user does not allow to store cookies on their machine. So there is another method to send session ID to the browser.</p>
<p>Alternatively, you can use the constant SID which is defined if the session started. If the client did not send an appropriate session cookie, it has the form session_name=session_id. Otherwise, it expands to an empty string. Thus, you can embed it unconditionally into URLs.</p>
<p>The following example demonstrates how to register a variable, and how to link correctly to another page using SID.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   session_start</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">isset</span><span class="pun">(</span><span class="pln">$_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">]++;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   $msg </span><span class="pun">=</span><span class="pln"> </span><span class="str">"You have visited this page "</span><span class="pun">.</span><span class="pln">  $_SESSION</span><span class="pun">[</span><span class="str">'counter'</span><span class="pun">];</span><span class="pln">
   $msg </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"in this session."</span><span class="pun">;</span><span class="pln">
   
   echo </span><span class="pun">(</span><span class="pln"> $msg </span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">
   To continue  click following link </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   
   &lt;a  href = "nextpage.php?</span><span class="pun">&lt;?</span><span class="pln">php echo htmlspecialchars</span><span class="pun">(</span><span class="pln">SID</span><span class="pun">);</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">"&gt;
</span><span class="tag">&lt;/p&gt;</span></pre>
<p>It will produce the following result −</p>
<pre class="result notranslate">You have visited this page 1in this session.
To continue click following link 
</pre>
<p>The <b>htmlspecialchars()</b> may be used when printing the SID in order to prevent XSS related attacks.</p>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="122_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="124_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
</aside>
 
  
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