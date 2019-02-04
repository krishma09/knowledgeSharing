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
	$sid=118;
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




<p>There are two ways the browser client can send information to the web server.</p>
<ul class="list">
<li>The GET Method</li>
<li>The POST Method</li>
</ul>
<p>Before the browser sends the information, it encodes it using a scheme called URL encoding. In this scheme, name/value pairs are joined with equal signs and different pairs are separated by the ampersand.</p>
<pre class="result notranslate">name1=value1&amp;name2=value2&amp;name3=value3
</pre>
<p>Spaces are removed and replaced with the <i>+</i> character and any other nonalphanumeric characters are replaced with a hexadecimal values. After the information is encoded it is sent to the server.</p>
<h4>The GET Method</h4>
<p>The GET method sends the encoded user information appended to the page request. The page and the encoded information are separated by the <b>?</b> character.</p>
<pre class="result notranslate">http://www.test.com/index.htm?name1=value1&amp;name2=value2
</pre>
<ul class="list">
<li><p>The GET method produces a long string that appears in your server logs, in the browser's Location: box.</p></li>
<li><p>The GET method is restricted to send upto 1024 characters only.</p></li>
<li><p>Never use GET method if you have password or other sensitive information to be sent to the server.</p></li>
<li><p>GET can't be used to send binary data, like images or word documents, to the server.</p></li>
<li><p>The data sent by GET method can be accessed using QUERY_STRING environment variable.</p></li>
<li><p>The PHP provides <b>$_GET</b> associative array to access all the sent information using GET method.</p></li>
</ul>
<p>Try out following example by putting the source code in test.php script.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">"age"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      echo </span><span class="str">"Welcome "</span><span class="pun">.</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      echo </span><span class="str">"You are "</span><span class="pun">.</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'age'</span><span class="pun">].</span><span class="pln"> </span><span class="str">" years old."</span><span class="pun">;</span><span class="pln">
      
      </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      &lt;form action = "</span><span class="pun">&lt;?</span><span class="pln">php </span><b><span class="pln">$_PHP_SELF</span></b><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">" method = "GET"&gt;
         Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         Age: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"age"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/forms(1).jpg" alt="Forms">
<h4>The POST Method</h4>
<p>The POST method transfers information via HTTP headers. The information is encoded as described in case of GET method and put into a header called QUERY_STRING.</p>
<ul class="list">
<li><p>The POST method does not have any restriction on data size to be sent.</p></li>
<li><p>The POST method can be used to send ASCII as well as binary data.</p></li>
<li><p>The data sent by POST method goes through HTTP header so security depends on HTTP protocol. By using Secure HTTP you can make sure that your information is secure.</p></li>
<li><p>The PHP provides <b>$_POST</b> associative array to access all the sent information using POST method.</p></li>
</ul>
<p>Try out following example by putting the source code in test.php script.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">"age"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">"/[^A-Za-z'-]/"</span><span class="pun">,</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">die</span><span class="pln"> </span><span class="pun">(</span><span class="str">"invalid name and name should be alpha"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      echo </span><span class="str">"Welcome "</span><span class="pun">.</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      echo </span><span class="str">"You are "</span><span class="pun">.</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">'age'</span><span class="pun">].</span><span class="pln"> </span><span class="str">" years old."</span><span class="pun">;</span><span class="pln">
      
      </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      &lt;form action = "</span><span class="pun">&lt;?</span><span class="pln">php </span><b><span class="pln">$_PHP_SELF</span></b><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">" method = "POST"&gt;
         Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         Age: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"age"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/forms(1).jpg" alt="Forms">

<h4>The $_REQUEST variable</h4>
<p>The PHP $_REQUEST variable contains the contents of both $_GET, $_POST, and $_COOKIE. We will discuss $_COOKIE variable when we will explain about cookies.</p>
<p>The PHP $_REQUEST variable can be used to get the result from form data sent with both the GET and POST methods.</p>
<p>Try out following example by putting the source code in test.php script.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">"age"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      echo </span><span class="str">"Welcome "</span><span class="pun">.</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      echo </span><span class="str">"You are "</span><span class="pun">.</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">'age'</span><span class="pun">].</span><span class="pln"> </span><span class="str">" years old."</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      &lt;form action = "</span><span class="pun">&lt;?</span><span class="pln">php </span><b><span class="pln">$_PHP_SELF</span></b><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">" method = "POST"&gt;
         Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         Age: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"age"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Here $_PHP_SELF variable contains the name of self script in which it is being called.</p>
<p>It will produce the following result −</p>
<img src="images/forms(1).jpg" alt="Forms">










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="117_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="119_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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