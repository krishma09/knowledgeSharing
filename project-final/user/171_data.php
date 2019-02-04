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
<title>JQuery Tutorials | knowledge.com</title>
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
	$sid=171;
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



<p>The jQuery library supports nearly all of the selectors included in Cascading Style Sheet (CSS) specifications 1 through 3, as outlined on the World Wide Web Consortium's site.</p>
<p>Using JQuery library developers can enhance their websites without worrying about browsers and their versions as long as the browsers have JavaScript enabled.</p>
<p>Most of the JQuery CSS Methods do not modify the content of the jQuery object and they are used to apply CSS properties on DOM elements.</p>
<h4>Apply CSS Properties</h4>
<p>This is very simple to apply any CSS property using JQuery method <b>css( PropertyName, PropertyValue )</b>.</p>
<p>Here is the syntax for the method −</p>
<pre class="result notranslate"><b>selector</b>.css( PropertyName, PropertyValue );
</pre>
<p>Here you can pass <i>PropertyName</i> as a javascript string and based on its value, <i>PropertyValue</i> could be string or integer.</p>
<h5>Example</h5>
<p>Following is an example which adds font color to the second list item.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"li"</span><span class="pun">).</span><span class="pln">eq</span><span class="pun">(</span><span class="lit">2</span><span class="pun">).</span><span class="pln">css</span><span class="pun">(</span><span class="str">"color"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"red"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;ul&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 5</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 6</span><span class="tag">&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Apply Multiple CSS Properties</h4>
<p>You can apply multiple CSS properties using a single JQuery  method <b>CSS( {key1:val1, key2:val2....)</b>. You can apply as many properties as you like in a single call.</p>
<p>Here is the syntax for the method −</p>
<pre class="result notranslate"><b>selector</b>.css( {key1:val1, key2:val2....keyN:valN})
</pre>
<p>Here you can pass key as property and val as its value as described above.</p>
<h5>Example</h5>
<p>Following is an example which adds font color as well as background color to the second list item.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"li"</span><span class="pun">).</span><span class="pln">eq</span><span class="pun">(</span><span class="lit">2</span><span class="pun">).</span><span class="pln">css</span><span class="pun">({</span><span class="str">"color"</span><span class="pun">:</span><span class="str">"red"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"background-color"</span><span class="pun">:</span><span class="str">"green"</span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;ul&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 5</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 6</span><span class="tag">&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Setting Element Width &amp; Height</h4>
<p>The <b>width( val )</b> and <b>height( val )</b> method can be used to set the width and height respectively of any element.</p>
<h5>Example</h5>
<p>Following is a simple example which  sets the width of first division element where as rest of the elements have width set by style sheet</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"div:first"</span><span class="pun">).</span><span class="pln">width</span><span class="pun">(</span><span class="lit">100</span><span class="pun">);</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"div:first"</span><span class="pun">).</span><span class="pln">css</span><span class="pun">(</span><span class="str">"background-color"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"blue"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         div</span><span class="pun">{</span><span class="pln"> width</span><span class="pun">:</span><span class="lit">70px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="lit">50px</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">float</span><span class="pun">:</span><span class="pln">left</span><span class="pun">;</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="pln"> background</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="pln"> cursor</span><span class="pun">:</span><span class="pln">pointer</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">d</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">d</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">d</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">d</span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>JQuery CSS Methods</h4>
<p>Following table lists down all the methods which you can use to play with CSS properties −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/css-name.htm">css( name )</a>
<p>Return a style property on the first matched element.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/css-name-value.htm">css( name, value )</a>
<p>Set a single style property to a value on all matched elements.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/css-properties.htm">css( properties )</a>
<p>Set a key/value object as style properties to all matched elements.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/css-height-val.htm">height( val )</a>
<p>Set the CSS height of every matched element.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/css-height.htm">height( )</a>
<p>Get the current computed, pixel, height of the first matched element.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/css-innerheight.htm">innerHeight( )</a>
<p>Gets the inner height (excludes the border and includes the padding) for the first matched element.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/css-innerwidth.htm">innerWidth( )</a>
<p>Gets the inner width (excludes the border and includes the padding) for the first matched element.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/css-offset.htm">offset( )</a>
<p>Get the current offset of the first matched element, in pixels, relative to the document.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/css-offsetparent.htm">offsetParent( )</a>
<p>Returns a jQuery collection with the positioned parent of the first matched element.</p></td>
</tr>
<tr>
<td>10</td>
<td><a href="/jquery/css-outerheight.htm">outerHeight( [margin] )</a>
<p>Gets the outer height (includes the border and padding by default) for the first matched element.</p></td>
</tr>
<tr>
<td>11</td>
<td><a href="/jquery/css-outerwidth.htm">outerWidth( [margin] )</a>
<p>Get the outer width (includes the border and padding by default) for the first matched element.</p></td>
</tr>
<tr>
<td>12</td>
<td><a href="/jquery/css-position.htm">position( )</a>
<p>Gets the top and left position of an element relative to its offset parent.</p></td>
</tr>
<tr>
<td>13</td>
<td><a href="/jquery/css-scrollleft-val.htm">scrollLeft( val )</a>
<p>When a value is passed in, the scroll left offset is set to that value on all matched elements.</p></td>
</tr>
<tr>
<td>14</td>
<td><a href="/jquery/css-scrollleft.htm">scrollLeft( )</a>
<p>Gets the scroll left offset of the first matched element.</p></td>
</tr>
<tr>
<td>15</td>
<td><a href="/jquery/css-scrolltop-val.htm">scrollTop( val )</a>
<p>When a value is passed in, the scroll top offset is set to that value on all matched elements.</p></td>
</tr>
<tr>
<td>16</td>
<td><a href="/jquery/css-scrolltop.htm">scrollTop( )</a>
<p>Gets the scroll top offset of the first matched element.</p></td>
</tr>
<tr>
<td>17</td>
<td><a href="/jquery/css-width-val.htm">width( val )</a>
<p>Set the CSS width of every matched element.</p></td>
</tr>
<tr>
<td>18</td>
<td><a href="/jquery/css-width.htm">width( )</a>
<p>Get the current computed, pixel, width of the first matched element.</p></td>
</tr>
</tbody></table>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="170_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="172_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'jquery_header.php'; ?>
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