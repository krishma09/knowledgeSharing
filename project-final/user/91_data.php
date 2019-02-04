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
<title>PL/SQL Tutorials | knowledge.com</title>
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
	$sid=91;
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



<p>In this chapter, we will discuss Loops in PL/SQL. There may be a situation when you need to execute a block of code several number of times. In general, statements are executed sequentially: The first statement in a function is executed first, followed by the second, and so on.</p>
<p>Programming languages provide various control structures that allow for more complicated execution paths.</p>
<p>A loop statement allows us to execute a statement or group of statements multiple times and following is the general form of a loop statement in most of the programming languages −</p>
<img src="images/loop_architecture.jpg" alt="Loop Architecture">

<p>PL/SQL provides the following types of loop to handle the looping requirements. Click the following links to check their detail.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Loop Type &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><a href="/plsql/plsql_basic_loop.htm" title="Basic loop in PL/SQL">PL/SQL Basic LOOP</a>
<p>In this loop structure, sequence of statements is enclosed between the LOOP and the END LOOP statements. At each iteration, the sequence of statements is executed and then control resumes at the top of the loop.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><a href="/plsql/plsql_while_loop.htm" title="While loop in Pl/SQL">PL/SQL WHILE LOOP</a>
<p>Repeats a statement or group of statements while a given condition is true. It tests the condition before executing the loop body.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><a href="/plsql/plsql_for_loop.htm" title="For loop in PL/SQL">PL/SQL FOR LOOP</a>
<p>Execute a sequence of statements multiple times and abbreviates the code that manages the loop variable.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><a href="/plsql/plsql_nested_loops.htm" title="Nested loops in PL/SQL">Nested loops in PL/SQL</a>
<p>You can use one or more loop inside any another basic loop, while, or for loop.</p></td>
</tr>
</tbody></table>
<h4>Labeling a PL/SQL Loop</h4>
<p>PL/SQL loops can be labeled. The label should be enclosed by double angle brackets (&lt;&lt; and &gt;&gt;) and appear at the beginning of the LOOP statement. The label name can also appear at the end of the LOOP statement. You may use the label in the EXIT statement to exit from the loop.</p>
<p>The following program illustrates the concept −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   i number</span><span class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln"> 
   j number</span><span class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   </span><span class="pun">&lt;&lt;</span><span class="pln"> outer_loop </span><span class="pun">&gt;&gt;</span><span class="pln"> 
   FOR i IN </span><span class="lit">1.</span><span class="pun">.</span><span class="lit">3</span><span class="pln"> LOOP 
      </span><span class="pun">&lt;&lt;</span><span class="pln"> inner_loop </span><span class="pun">&gt;&gt;</span><span class="pln"> 
      FOR j IN </span><span class="lit">1.</span><span class="pun">.</span><span class="lit">3</span><span class="pln"> LOOP 
         dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'i is: '</span><span class="pun">||</span><span class="pln"> i </span><span class="pun">||</span><span class="pln"> </span><span class="str">' and j is: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> j</span><span class="pun">);</span><span class="pln"> 
      </span><span class="kwd">END</span><span class="pln"> loop inner_loop</span><span class="pun">;</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pln"> loop outer_loop</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">i is: 1 and j is: 1 
i is: 1 and j is: 2 
i is: 1 and j is: 3 
i is: 2 and j is: 1 
i is: 2 and j is: 2 
i is: 2 and j is: 3 
i is: 3 and j is: 1 
i is: 3 and j is: 2 
i is: 3 and j is: 3  

PL/SQL procedure successfully completed. 
</pre>
<h4>The Loop Control Statements</h4>x-icon
<p>Loop control statements change execution from its normal sequence. When execution leaves a scope, all automatic objects that were created in that scope are destroyed.</p>
<p>PL/SQL supports the following control statements. Labeling loops also help in taking the control outside a loop. Click the following links to check their details.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Control Statement &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><a href="/plsql/plsql_exit_statement.htm" title="Exit statement in PL/SQL">EXIT statement</a>
<p>The Exit statement completes the loop and control passes to the statement immediately after the END LOOP.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><a href="/plsql/plsql_continue_statement.htm" title="Continue statement in PL/SQL">CONTINUE statement</a>
<p>Causes the loop to skip the remainder of its body and immediately retest its condition prior to reiterating.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><a href="/plsql/plsql_goto_statement.htm" title="GOTO statement in PL/SQL">GOTO statement</a>
<p>Transfers control to the labeled statement. Though it is not advised to use the GOTO statement in your program.</p></td>
</tr>
</tbody></table>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="90_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="92_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'plsql_header.php'; ?>
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