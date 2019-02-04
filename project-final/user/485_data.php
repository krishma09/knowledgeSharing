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
<title>JAVA Tutorials | knowledge.com</title>
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
	$sid=485;
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
<h4>Introduction</h4>
<p>The <b>Java.io.StreamTokenizer</b> class takes an input stream and parses it into "tokens", allowing the tokens to be read one at a time. The stream tokenizer can recognize identifiers, numbers, quoted strings, and various comment styles.</p>
<h4>Class declaration</h4>
<p>Following is the declaration for <b>Java.io.StreamTokenizer</b> class −</p>
<pre class="result notranslate">public class StreamTokenizer
   extends Object
</pre>
<h4>Field</h4>
<p>Following are the fields for <b>Java.io.StreamTokenizer</b> class −</p>
<ul class="list">
<li><p><b>double nval</b> − If the current token is a number, this field contains the value of that number.</p></li>
<li><p><b>String sval</b> − If the current token is a word token, this field contains a string giving the characters of the word token.</p></li>
<li><p><b>static int TT_EOF</b> − A constant indicating that the end of the stream has been read.</p></li>
<li><p><b>static int TT_EOL</b> − A constant indicating that the end of the line has been read.</p></li>
<li><p><b>static int TT_NUMBER</b> − A constant indicating that a number token has been read.</p></li>
<li><p><b>static int TT_WORD</b> − A constant indicating that a word token has been read.</p></li>
<li><p><b>int ttype</b> − After a call to the nextToken method, this field contains the type of the token just read.</p></li>
</ul>
<h4>Class constructors</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Constructor &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>StreamTokenizer(Reader r)</b></p>
<p>This creates a tokenizer that parses the given character stream.</p></td>
</tr>
</tbody></table>
<h4>Class methods</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Method &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>void commentChar(int ch)</a>
<p>Specified that the character argument starts a single-line comment.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td>void eolIsSignificant(boolean flag)</a>
<p>This method determines whether or not ends of line are treated as tokens.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td>int lineno()</a>
<p>This method returns the current line number.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td>void lowerCaseMode(boolean fl) </a>
<p>This method determines whether or not word token are automatically lowercased.</p></td>
</tr>
<tr>
<td class="ts">5</td>
<td>int nextToken()</a>
<p>This method parses the next token from the input stream of this tokenizer.</p></td>
</tr>
<tr>
<td class="ts">6</td>
<td>void ordinaryChar(int ch)</a>
<p>This method specifies that the character argument is "ordinary" in this tokenizer.</p></td>
</tr>
<tr>
<td class="ts">7</td>
<td>void ordinaryChars(int low, int hi) </a>
<p>This method specifies that all characters c in the range low &lt;= c &lt;= high are "ordinary" in this tokenizer.</p></td>
</tr>
<tr>
<td class="ts">8</td>
<td>void parseNumbers()</a>
<p>This method specifies that numbers should be parsed by this tokenizer.</p></td>
</tr>
<tr>
<td class="ts">9</td>
<td>void pushBack()</a>
<p>This method causes the next call to the nextToken method of this tokenizer to return the current value in the ttype field, and not to modify the value in the nval or sval field.</p></td>
</tr>
<tr>
<td class="ts">10</td>
<td>void quoteChar(int ch)</a>
<p>This method specifies that matching pairs of this character delimit string constants in this tokenizer.</p></td>
</tr>
<tr>
<td class="ts">11</td>
<td>void resetSyntax()</a>
<p>This method resets this tokenizer's syntax table so that all characters are "ordinary." See the ordinaryChar method for more information on a character being ordinary.</p></td>
</tr>
<tr>
<td class="ts">12</td>
<td>oid slashSlashComments(boolean flag)</a>
<p>This method determines whether or not the tokenizer recognizes C++ style comments.</p></td>
</tr>
<tr>
<td class="ts">13</td>
<td>void slashStarComments(boolean flag)</a>
<p>This method determines whether or not the tokenizer recognizes C style comments.</p></td>
</tr>
<tr>
<td class="ts">14</td>
<td>String toString()</a>
<p>This method returns the string representation of the current stream token and the line number it occurs on.</p></td>
</tr>
<tr>
<td class="ts">15</td>
<td>void whitespaceChars(int low, int hi)</a>
<p>This method specifies that all characters c in the range low &lt;= c &lt;= high are white space characters.</p></td>
</tr>
<tr>
<td class="ts">16</td>
<td>void wordChars(int low, int hi)</a>
<p>This method specifies that all characters c in the range low &lt;= c &gt;= high are word constituents.</p></td>
</tr>
</tbody></table>
<h4>Methods inherited</h4>
<p>This class inherits methods from the following classes −</p>
<ul class="list">
<li>Java.io.Object</li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="484_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="486_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'java_header.php'; ?></aside>
 
  
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