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
	$sid=175;
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




<p>jQuery provides a trivially simple interface for doing various kind of amazing effects. jQuery methods allow us to quickly apply commonly used effects with a minimum configuration.</p>
<p>This tutorial covers all the important jQuery methods to create visual effects.</p>
<h4>Showing and Hiding elements</h4>
<p>The commands for showing and hiding elements are pretty much what we would expect − <b>show()</b> to show the elements in a wrapped set and <b>hide()</b> to hide them.</p>
<h5>Syntax</h5>
<p>Here is the simple syntax for <b>show()</b> method −</p>
<pre class="result notranslate"><b>[selector].</b>show( speed, [callback] );
</pre>
<p>Here is the description of all the parameters −</p>
<ul class="list">
<li><p><b>speed</b> − A string representing one of the three predefined speeds ("slow", "normal", or "fast") or the number of milliseconds to run the animation (e.g. 1000).</p></li>
<li><p><b>callback</b> − This optional parameter represents a function to be executed whenever the animation completes; executes once for each element animated against.</p></li>
</ul>
<ul class="list">
<li><p><b>speed</b> − A string representing one of the three predefined speeds ("slow", "normal", or "fast") or the number of milliseconds to run the animation (e.g. 1000).</p></li>
<li><p><b>callback</b> − This optional parameter represents a function to be executed whenever the animation completes; executes once for each element animated against.</p></li>
</ul>
<pre class="result notranslate"><b>[selector].</b>hide( speed, [callback] );
</pre>
<p>Here is the description of all the parameters −</p>
<ul class="list">
<li><p><b>speed</b> − A string representing one of the three predefined speeds ("slow", "normal", or "fast") or the number of milliseconds to run the animation (e.g. 1000).</p></li>
<li><p><b>callback</b> − This optional parameter represents a function to be executed whenever the animation completes; executes once for each element animated against.</p></li>
</ul>
<h5>Example</h5>
<p>Consider the following HTML file with a small JQuery coding −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

            $</span><span class="pun">(</span><span class="str">"#show"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $</span><span class="pun">(</span><span class="str">".mydiv"</span><span class="pun">).</span><span class="pln">show</span><span class="pun">(</span><span class="pln"> </span><span class="lit">1000</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">

            $</span><span class="pun">(</span><span class="str">"#hide"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $</span><span class="pun">(</span><span class="str">".mydiv"</span><span class="pun">).</span><span class="pln">hide</span><span class="pun">(</span><span class="pln"> </span><span class="lit">1000</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
				
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">mydiv</span><span class="pun">{</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">12px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">2px</span><span class="pln"> solid </span><span class="com">#666; width:100px; height:100px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mydiv"</span><span class="tag">&gt;</span><span class="pln">
         This is a SQUARE
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">

      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"hide"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Hide"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">   
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"show"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Show"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">   

   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>

<h4>Toggling the elements</h4>
<p>jQuery provides methods to toggle the display state of elements between revealed or hidden. If the element is initially displayed, it will be hidden; if hidden, it will be shown.</p>
<h5>Syntax</h5>
<p>Here is the simple syntax for one of the <b>toggle()</b> methods −</p>
<pre class="result notranslate"><b>[selector].</b>.toggle([speed][, callback]);
</pre>
<p>Here is the description of all the parameters −</p>
<ul class="list">
<li><p><b>speed</b> − A string representing one of the three predefined speeds ("slow", "normal", or "fast") or the number of milliseconds to run the animation (e.g. 1000).</p></li>
<li><p><b>callback</b> − This optional parameter represents a function to be executed whenever the animation completes; executes once for each element animated against.</p></li>
</ul>
<h5>Example</h5>
<p>We can animate any element, such as a simple &lt;div&gt; containing an image −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">

         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">".clickme"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">event</span><span class="pun">){</span><span class="pln">
               $</span><span class="pun">(</span><span class="str">".target"</span><span class="pun">).</span><span class="pln">toggle</span><span class="pun">(</span><span class="str">'slow'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){</span><span class="pln">
                  $</span><span class="pun">(</span><span class="str">".log"</span><span class="pun">).</span><span class="pln">text</span><span class="pun">(</span><span class="str">'Transition Complete'</span><span class="pun">);</span><span class="pln">
               </span><span class="pun">});</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
			
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">clickme</span><span class="pun">{</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">12px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">2px</span><span class="pln"> solid </span><span class="com">#666; width:100px; height:50px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"content"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"clickme"</span><span class="tag">&gt;</span><span class="pln">Click Me</span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"target"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"./images/jquery.jpg"</span><span class="pln"> </span><span class="atn">alt</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"jQuery"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"log"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>JQuery Effect Methods</h4>
<p>You have seen basic concept of jQuery Effects. Following table lists down all the important methods to create different kind of effects −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Methods &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/effect-animate.htm">animate( params, [duration, easing, callback] )</a>
<p>A function for making custom animations.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/effect-fadein.htm">fadeIn( speed, [callback] )</a>
<p>Fade in all matched elements by adjusting their opacity and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/effect-fadeout.htm">fadeOut( speed, [callback] )</a>
<p>Fade out all matched elements by adjusting their opacity to 0, then setting display to "none" and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/effect-fadeto.htm">fadeTo( speed, opacity, callback )</a>
<p>Fade the opacity of all matched elements to a specified opacity and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/effect-hide.htm">hide( )</a>
<p>Hides each of the set of matched elements if they are shown.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/effect-hide-speed.htm">hide( speed, [callback] )</a>
<p>Hide all matched elements using a graceful animation and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/effect-show.htm">show( )</a>
<p>Displays each of the set of matched elements if they are hidden.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/effect-show-speed.htm">show( speed, [callback] )</a>
<p>Show all matched elements using a graceful animation and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/effect-slidedown.htm">slideDown( speed, [callback] )</a>
<p>Reveal all matched elements by adjusting their height and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>10</td>
<td><a href="/jquery/effect-slidetoggle.htm">slideToggle( speed, [callback] )</a>
<p>Toggle the visibility of all matched elements by adjusting their height and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>11</td>
<td><a href="/jquery/effect-slideup.htm">slideUp( speed, [callback] )</a>
<p>Hide all matched elements by adjusting their height and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>12</td>
<td><a href="/jquery/effect-stop.htm">stop( [clearQueue, gotoEnd ])</a>
<p>Stops all the currently running animations on all the specified elements.</p></td>
</tr>
<tr>
<td>13</td>
<td><a href="/jquery/effect-toggle.htm">toggle( )</a>
<p>Toggle displaying each of the set of matched elements.</p></td>
</tr>
<tr>
<td>14</td>
<td><a href="/jquery/effect-toggle-speed.htm">toggle( speed, [callback] )</a>
<p>Toggle displaying each of the set of matched elements using a graceful animation and firing an optional callback after completion.</p></td>
</tr>
<tr>
<td>15</td>
<td><a href="/jquery/effect-toggle-switch.htm">toggle( switch )</a>
<p>Toggle displaying each of the set of matched elements based upon the switch (true shows all elements, false hides all elements).</p></td>
</tr>
<tr>
<td>16</td>
<td><a href="/jquery/effect-jquery-fx.htm">jQuery.fx.off</a>
<p>Globally disable all animations.</p></td>
</tr>
</tbody></table>
<h4>UI Library Based Effects</h4>
<p>To use these effects you can either download latest jQuery UI Library <b>jquery-ui-1.11.4.custom.zip</b> from <a rel="nofollow" href="https://jqueryui.com/download" target="_blank">jQuery UI Library</a> or use Google CDN to use it in the similar way as we have done for jQuery.</p>
<p>We have used Google CDN for jQuery UI using following code snippet in the HTML page so we can use jQuery UI −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span></pre>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Methods &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/effect-blind.htm">Blind</a>
<p>Blinds the element away or shows it by blinding it in.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/effect-bounce.htm">Bounce</a>
<p>Bounces the element vertically or horizontally n-times.</p></td>
</tr>
<tr>
<td>3</td>
<td>
<a href="/jquery/effect-clip.htm">Clip</a>
<p>Clips the element on or off, vertically or horizontally.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/effect-drop.htm">Drop</a>
<p>Drops the element away or shows it by dropping it in.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/effect-explode.htm">Explode</a>
<p>Explodes the element into multiple pieces.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/effect-fold.htm">Fold</a>
<p>Folds the element like a piece of paper.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/effect-highlight.htm">Highlight</a>
<p>Highlights the background with a defined color.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/effect-puff.htm">Puff</a>
<p>Scale and fade out animations create the puff effect.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/effect-pulsate.htm">Pulsate</a>
<p>Pulsates the opacity of the element multiple times.</p></td>
</tr>
<tr>
<td>10</td>
<td><a href="/jquery/effect-scale.htm">Scale</a>
<p>Shrink or grow an element by a percentage factor.</p></td>
</tr>
<tr>
<td>11</td>
<td><a href="/jquery/effect-shake.htm">Shake</a>
<p>Shakes the element vertically or horizontally n-times.</p></td>
</tr>
<tr>
<td>12</td>
<td><a href="/jquery/effect-size.htm">Size</a>
<p>Resize an element to a specified width and height.</p></td>
</tr>
<tr>
<td>13</td>
<td><a href="/jquery/effect-slide.htm">Slide</a>
<p>Slides the element out of the viewport.</p></td>
</tr>
<tr>
<td>14</td>
<td><a href="/jquery/effect-transfer.htm">Transfer</a>
<p>Transfers the outline of an element to another.</p></td>
</tr>
</tbody></table>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="174_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

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
</html>