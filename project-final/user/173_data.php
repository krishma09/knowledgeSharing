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
	$sid=173;
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




<p>We have the ability to create dynamic web pages by using events. Events are actions that can be detected by your Web Application.</p>
<p>Following are the examples events −</p>
<ul class="list">
<li>A mouse click</li>
<li>A web page loading</li>
<li>Taking mouse over an element</li>
<li>Submitting an HTML form</li>
<li>A keystroke on your keyboard</li>
<li>etc.</li>
</ul>
<p>When these events are triggered you can then use a custom function to do pretty much whatever you want with the event. These custom functions call Event Handlers.</p>
<h4>Binding event handlers</h4>
<p>Using the jQuery Event Model, we can establish event handlers on DOM elements with the <b>bind()</b> method as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">'div'</span><span class="pun">).</span><span class="pln">bind</span><span class="pun">(</span><span class="str">'click'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln"> event </span><span class="pun">){</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">'Hi there!'</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">div</span><span class="pun">{</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">12px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">2px</span><span class="pln"> solid </span><span class="com">#666; width:60px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on any square below to see the result:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">blue</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">ONE</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">TWO</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">THREE</span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This code will cause the division element to respond to the click event; when a user clicks inside this division thereafter, the alert will be shown.</p>

<p>The full syntax of the bind() command is as follows −</p>
<pre class="result notranslate"><i>selector</i>.bind( eventType[, eventData], handler)
</pre>
<p>Following is the description of the parameters −</p> 
<ul class="list">
<li><p><b>eventType</b> − A string containing a JavaScript event type, such as click or submit. Refer to the next section for a complete list of event types.</p></li>
<li><p><b>eventData</b> − This is optional parameter is a map of data that will be passed to the event handler.</p></li>
<li><p><b>handler</b> − A function to execute each time the event is triggered.</p></li>
</ul>
<h4>Removing event handlers</h4>
<p>Typically, once an event handler is established, it remains in effect for the remainder of the life of the page. There may be a need when you would like to remove event handler.</p>
<p>jQuery provides the <b>unbind()</b> command to remove an exiting event handler. The syntax of unbind() is as follows −</p>
<pre class="result notranslate"><i>selector</i>.unbind(eventType, handler)

or 

<i>selector</i>.unbind(eventType)
</pre>
<p>Following is the description of the parameters −</p>
<ul class="list">
<li><p><b>eventType</b> − A string containing a JavaScript event type, such as click or submit. Refer to the next section for a complete list of event types.</p></li>
<li><p><b>handler</b> − If provided, identifies the specific listener that's to be removed.</p></li>
</ul>
<h4>Event Types</h4>
<section class="toggle">
<label><i class="icon icon-minus"></i><i class="icon icon-plus"></i>The following are cross platform and recommended event types which you can bind using JQuery −</label>
<div class="toggle-content">
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th> 
<th>Event Type &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>blur</b>
<p>Occurs when the element loses focus.</p></td>
</tr>
<tr>
<td>2</td>
<td><b>change</b>
<p>Occurs when the element changes.</p></td>
</tr>
<tr>
<td>3</td>
<td><b>click</b>
<p>Occurs when a mouse click.</p></td>
</tr>
<tr>
<td>4</td>
<td><b>dblclick</b>
<p>Occurs when a mouse double-click.</p></td>
</tr>
<tr>
<td>5</td>
<td><b>error</b>
<p>Occurs when there is an error in loading or unloading etc.</p></td>
</tr>
<tr>
<td>6</td>
<td><b>focus</b>
<p>Occurs when the element gets focus.</p></td>
</tr>
<tr>
<td>7</td>
<td><b>keydown</b>
<p>Occurs when key is pressed.</p></td>
</tr>
<tr>
<td>8</td>
<td><b>keypress</b>
<p>Occurs when key is pressed and released.</p></td>
</tr>
<tr>
<td>9</td>
<td><b>keyup</b>
<p>Occurs when key is released.</p></td>
</tr>
<tr>
<td>10</td>
<td><b>load</b>
<p>Occurs when document is loaded.</p></td>
</tr>
<tr>
<td>11</td>
<td><b>mousedown</b>
<p>Occurs when mouse button is pressed.</p></td>
</tr>
<tr>
<td>12</td>
<td><b>mouseenter</b>
<p>Occurs when mouse enters in an element region.</p></td>
</tr>
<tr>
<td>13</td>
<td><b>mouseleave</b>
<p>Occurs when mouse leaves an element region.</p></td>
</tr>
<tr>
<td>14</td>
<td><b>mousemove</b>
<p>Occurs when mouse pointer moves.</p></td>
</tr>
<tr>
<td>15</td>
<td><b>mouseout</b>
<p>Occurs when mouse pointer moves out of an element.</p></td>
</tr>
<tr>
<td>16</td>
<td><b>mouseover</b>
<p>Occurs when mouse pointer moves over an element.</p></td>
</tr>
<tr>
<td>17</td>
<td><b>mouseup</b>
<p>Occurs when mouse button is released.</p></td>
</tr>
<tr>
<td>18</td>
<td><b>resize</b>
<p>Occurs when window is resized.</p></td>
</tr>
<tr>
<td>19</td>
<td><b>scroll</b>
<p>Occurs when window is scrolled.</p></td>
</tr>
<tr>
<td>20</td>
<td><b>select</b>
<p>Occurs when a text is selected.</p></td>
</tr>
<tr>
<td>21</td>
<td><b>submit</b>
<p>Occurs when form is submitted.</p></td>
</tr>
<tr>
<td>22</td>
<td><b>unload</b>
<p>Occurs when documents is unloaded.</p></td>
</tr>
</tbody></table>
</div>
</section>
<h4>The Event Object</h4>
<p>The callback function takes a single parameter; when the handler is called the JavaScript event object will be passed through it.</p>
<p>The event object is often unnecessary and the parameter is omitted, as sufficient context is usually available when the handler is bound to know exactly what needs to be done when the handler is triggered, however there are certain attributes which you would need to be accessed.</p>x
<h4>The Event Attributes</h4>
<section class="toggle">
<label><i class="icon icon-minus"></i><i class="icon icon-plus"></i>The following event properties/attributes are available and safe to access in a platform independent manner −</label>
<div class="toggle-content">
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Property &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>altKey</b>
<p>Set to true if the Alt key was pressed when the event was triggered, false if not. The Alt key is labeled Option on most Mac keyboards.</p></td>
</tr>
<tr>
<td>2</td>
<td><b>ctrlKey</b>
<p>Set to true if the Ctrl key was pressed when the event was triggered, false if not.</p></td>
</tr>
<tr>
<td>3</td>
<td><b>data</b>
<p>The value, if any, passed as the second parameter to the bind() command when the handler was established.</p></td>
</tr>
<tr>
<td>4</td>
<td><b>keyCode</b>
<p>For keyup and keydown events, this returns the key that was pressed.</p></td>
</tr>
<tr>
<td>5</td>
<td><b>metaKey</b>
<p>Set to true if the Meta key was pressed when the event was triggered, false if not. The Meta key is the Ctrl key on PCs and the Command key on Macs.</p></td>
</tr>
<tr>
<td>6</td>
<td><b>pageX</b>
<p>For mouse events, specifies the horizontal coordinate of the event relative from the page origin.</p></td>
</tr>
<tr>
<td>7</td>
<td><b>pageY</b>
<p>For mouse events, specifies the vertical coordinate of the event relative from the page origin.</p></td>
</tr>
<tr>
<td>8</td>
<td><b>relatedTarget</b>
<p>For some mouse events, identifies the element that the cursor left or entered when the event was triggered.</p></td>
</tr>
<tr>
<td>9</td>
<td><b>screenX</b>
<p>For mouse events, specifies the horizontal coordinate of the event relative from the screen origin.</p></td>
</tr>
<tr>
<td>10</td>
<td><b>screenY</b>
<p>For mouse events, specifies the vertical coordinate of the event relative from the screen origin.</p></td>
</tr>
<tr>
<td>11</td>
<td><b>shiftKey</b>
<p>Set to true if the Shift key was pressed when the event was triggered, false if not.</p></td>
</tr>
<tr>
<td>12</td>
<td><b>target</b>
<p>Identifies the element for which the event was triggered.</p></td>
</tr>
<tr>
<td>13</td>
<td><b>timeStamp</b>
<p>The timestamp (in milliseconds) when the event was created.</p></td>
</tr>
<tr>
<td>14</td>
<td><b>type</b>
<p>For all events, specifies the type of event that was triggered (for example, click).</p></td>
</tr>
<tr>
<td>15</td>
<td><b>which</b>
<p>For keyboard events, specifies the numeric code for the key that caused the event, and for mouse events, specifies which button was pressed (1 for left, 2 for middle, 3 for right).</p></td>
</tr>
</tbody></table>
</div>
</section>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">'div'</span><span class="pun">).</span><span class="pln">bind</span><span class="pun">(</span><span class="str">'click'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln"> event </span><span class="pun">){</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">'Event type is '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> event</span><span class="pun">.</span><span class="pln">type</span><span class="pun">);</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">'pageX : '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> event</span><span class="pun">.</span><span class="pln">pageX</span><span class="pun">);</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">'pageY : '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> event</span><span class="pun">.</span><span class="pln">pageY</span><span class="pun">);</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">'Target : '</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> event</span><span class="pun">.</span><span class="pln">target</span><span class="pun">.</span><span class="pln">innerHTML</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">div</span><span class="pun">{</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">12px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">2px</span><span class="pln"> solid </span><span class="com">#666; width:60px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on any square below to see the result:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">blue</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">ONE</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">TWO</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">THREE</span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>The Event Methods</h4>
<p>There is a list of methods which can be called on an Event Object −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/events-preventdefault.htm">preventDefault()</a>
<p>Prevents the browser from executing the default action.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/events-isdefaultprevented.htm">isDefaultPrevented()</a>
<p>Returns whether event.preventDefault() was ever called on this event object.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/events-stoppropagation.htm">stopPropagation()</a>
<p>Stops the bubbling of an event to parent elements, preventing any parent handlers from being notified of the event.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/events-ispropagationstopped.htm">isPropagationStopped()</a>
<p>Returns whether event.stopPropagation() was ever called on this event object.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/events-stopimmediatepropagation.htm">stopImmediatePropagation()</a>
<p>Stops the rest of the handlers from being executed.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/events-isimmediatepropagationstopped.htm">isImmediatePropagationStopped()</a>
<p>Returns whether event.stopImmediatePropagation() was ever called on this event object.</p></td>
</tr>
</tbody></table>
<h4>Event Manipulation Methods</h4>
<p>Following table lists down important event-related methods −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/events-bind.htm">bind( type, [data], fn )</a>
<p>Binds a handler to one or more events (like click) for each matched element. Can also bind custom events.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/events-off.htm">off( events [, selector ] [, handler(eventObject) ]  )</a>
<p>This does the opposite of live, it removes a bound live event.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/events-hover.htm">hover( over, out )</a>
<p>Simulates hovering for example moving the mouse on, and off, an object.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/events-on.htm">on( events [, selector ] [, data ], handler  )</a>
<p>Binds a handler to an event (like click) for all current − and future − matched element. Can also bind custom events.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/events-one.htm">one( type, [data], fn )</a>
<p>Binds a handler to one or more events to be executed once for each matched element.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/events-ready.htm">ready( fn )</a>
<p>Binds a function to be executed whenever the DOM is ready to be traversed and manipulated.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/events-trigger.htm">trigger( event, [data] )</a>
<p>Trigger an event on every matched element.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/events-triggerhandler.htm">triggerHandler( event, [data] )</a>
<p>Triggers all bound event handlers on an element.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/events-unbind.htm">unbind( [type], [fn] )</a>
<p>This does the opposite of bind, it removes bound events from each of the matched elements.</p></td>
</tr>
</tbody></table>
<h4>Event Helper Methods</h4>
<p>jQuery also provides a set of event helper functions which can be used either to trigger an event to bind any event types mentioned above.</p>
<h4>Trigger Methods</h4>
<p>Following is an example which would triggers the blur event on all paragraphs −</p>
<pre class="result notranslate">$("p").blur();
</pre>
<h4>Binding Methods</h4>
<p>Following is an example which would bind a <b>click</b> event on all the &lt;div&gt; −</p>
<pre class="result notranslate">$("div").click( function () { 
   // do something here
});
</pre>
<section class="toggle">
<label><i class="icon icon-minus"></i><i class="icon icon-plus"></i>Here is a complete list of all the support methods provided by jQuery −</label>
<div class="toggle-content">
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>blur( )</b>
<p>Triggers the blur event of each matched element.</p></td>
</tr>
<tr>
<td>2</td>
<td><b>blur( fn )</b>
<p>Bind a function to the blur event of each matched element.</p></td>
</tr>
<tr>
<td>3</td>
<td><b>change( )</b>
<p>Triggers the change event of each matched element.</p></td>
</tr>
<tr>
<td>4</td>
<td><b>change( fn )</b>
<p>Binds a function to the change event of each matched element.</p></td>
</tr>
<tr>
<td>5</td>
<td><b>click( )</b>
<p>Triggers the click event of each matched element.</p></td>
</tr>
<tr>
<td>6</td>
<td><b>click( fn )</b>
<p>Binds a function to the click event of each matched element.</p></td>
</tr>
<tr>
<td>7</td>
<td><b>dblclick( )</b>
<p>Triggers the dblclick event of each matched element.</p></td>
</tr>
<tr>
<td>8</td>
<td><b>dblclick( fn )</b>
<p>Binds a function to the dblclick event of each matched element.</p></td>
</tr>
<tr>
<td>9</td>
<td><b>error( )</b>
<p>Triggers the error event of each matched element.</p></td>
</tr>
<tr>
<td>10</td>
<td><b>error( fn )</b>
<p>Binds a function to the error event of each matched element.</p></td>
</tr>
<tr>
<td>11</td>
<td><b>focus( )</b>
<p>Triggers the focus event of each matched element.</p></td>
</tr>
<tr>
<td>12</td>
<td><b>focus( fn )</b>
<p>Binds a function to the focus event of each matched element.</p></td>
</tr>
<tr>
<td>13</td>
<td><b>keydown( )</b>
<p>Triggers the keydown event of each matched element.</p></td>
</tr>
<tr>
<td>14</td>
<td><b>keydown( fn )</b>
<p>Bind a function to the keydown event of each matched element.</p></td>
</tr>
<tr>
<td>15</td>
<td><b>keypress( )</b>
<p>Triggers the keypress event of each matched element.</p></td>
</tr>
<tr>
<td>16</td>
<td><b>keypress( fn )</b>
<p>Binds a function to the keypress event of each matched element.</p></td>
</tr>
<tr>
<td>17</td>
<td><b>keyup( )</b>
<p>Triggers the keyup event of each matched element.</p></td>
</tr>
<tr>
<td>18</td>
<td><b>keyup( fn )</b>
<p>Bind a function to the keyup event of each matched element.</p></td>
</tr>
<tr>
<td>20</td>
<td><b>load( fn )</b>
<p>Binds a function to the load event of each matched element.</p></td>
</tr>
<tr>
<td>21</td>
<td><b>mousedown( fn )</b>
<p>Binds a function to the mousedown event of each matched element.</p></td>
</tr>
<tr>
<td>22</td>
<td><b>mouseenter( fn )</b>
<p>Bind a function to the mouseenter event of each matched element.</p></td>
</tr>
<tr>
<td>23</td>
<td><b>mouseleave( fn )</b>
<p>Bind a function to the mouseleave event of each matched element.</p></td>
</tr>
<tr>
<td>24</td>
<td><b>mousemove( fn )</b>
<p>Bind a function to the mousemove event of each matched element.</p></td>
</tr>
<tr>
<td>25</td>
<td><b>mouseout( fn )</b>
<p>Bind a function to the mouseout event of each matched element.</p></td>
</tr>
<tr>
<td>26</td>
<td><b>mouseover( fn )</b>
<p>Bind a function to the mouseover event of each matched element.</p></td>
</tr>
<tr>
<td>27</td>
<td><b>mouseup( fn )</b>
<p>Bind a function to the mouseup event of each matched element.</p></td>
</tr>
<tr>
<td>28</td>
<td><b>resize( fn )</b>
<p>Bind a function to the resize event of each matched element.</p></td>
</tr>
<tr>
<td>29</td>
<td><b>scroll( fn )</b>
<p>Bind a function to the scroll event of each matched element.</p></td>
</tr>
<tr>
<td>30</td>
<td><b>select( )</b>
<p>Trigger the select event of each matched element.</p></td>
</tr>
<tr>
<td>31</td>
<td><b>select( fn )</b>
<p>Bind a function to the select event of each matched element.</p></td>
</tr>
<tr>
<td>32</td>
<td><b>submit( )</b>
<p>Trigger the submit event of each matched element.</p></td>
</tr>
<tr>
<td>33</td>
<td><b>submit( fn )</b>
<p>Bind a function to the submit event of each matched element.</p></td>
</tr>
<tr>
<td>34</td>
<td><b>unload( fn )</b>
<p>Binds a function to the unload event of each matched element.</p></td>
</tr>
</tbody></table>
</div>
</section>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="172_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="174_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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