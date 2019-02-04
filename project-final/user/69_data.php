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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=69;
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




<h4>What is an Event ?</h4>
<p>JavaScript's interaction with HTML is handled through events that occur when the user or the browser manipulates a page.</p>
<p>When the page loads, it is called an event. When the user clicks a button, that click too is an event. Other examples include events like pressing any key, closing a window, resizing a window, etc.</p>
<p>Developers can use these events to execute JavaScript coded responses, which cause buttons to close windows, messages to be displayed to users, data to be validated, and virtually any other type of response imaginable.</p>
<p>Events are a part of the Document Object Model (DOM) Level 3 and every HTML element contains a set of events which can trigger JavaScript Code.</p>
<p>Please go through this small tutorial for a better understanding HTML Event Reference. Here we will see a few examples to understand a relation between Event and JavaScript −</p>
<h4>onclick Event Type</h4>
<p>This is the most frequently used event type which occurs when a user clicks the left button of his mouse. You can put your validation, warning etc., against this event type.</p>
<h5>Example</h5>
<p>Try the following example.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> sayHello</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">"Hello World"</span><span class="pun">)</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click the following button and see result</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">sayHello</span><span class="pun">()</span><span class="atv">"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Say Hello"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>

<h4>onsubmit Event type</h4>
<p><b>onsubmit</b> is an event that occurs when you try to submit a form. You can put your form validation against this event type.</p>
<h5>Example</h5>
<p>The following example shows how to use onsubmit. Here we are calling a <b>validate()</b> function before submitting a form data to the webserver. If <b>validate()</b> function returns true, the form will be submitted, otherwise it will not submit the data.</p>
<p>Try the following example.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> validation</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               all validation goes here
               </span><span class="pun">.........</span><span class="pln">
               </span><span class="kwd">return</span><span class="pln"> either </span><span class="kwd">true</span><span class="pln"> or </span><span class="kwd">false</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">method</span><span class="pun">=</span><span class="atv">"POST"</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">"t.cgi"</span><span class="pln"> </span><span class="atn">onsubmit</span><span class="pun">=</span><span class="atv">"</span><span class="kwd">return</span><span class="pln"> validate</span><span class="pun">()</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         .......
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>onmouseover and onmouseout</h4>
<p>These two event types will help you create nice effects with images or even with text as well. The <b>onmouseover</b> event triggers when you bring your mouse over any element and the <b>onmouseout</b> triggers when you move your mouse out from that element. Try the following example.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> over</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Mouse Over"</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">function</span><span class="pln"> out</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Mouse Out"</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Bring your mouse inside the division to see the result:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">onmouseover</span><span class="pun">=</span><span class="atv">"</span><span class="pln">over</span><span class="pun">()</span><span class="atv">"</span><span class="pln"> </span><span class="atn">onmouseout</span><span class="pun">=</span><span class="atv">"</span><span class="pln">out</span><span class="pun">()</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;h4&gt;</span><span class="pln"> This is inside the division </span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>HTML 5 Standard Events</h4>
<p>The standard HTML 5 events are listed here for your reference. Here script indicates a Javascript function to be executed against that event.</p>
<table class="table table-bordered">
<tbody><tr>
<th>Attribute</th>
<th>Value</th>
<th>Description</th>
</tr>
<tr>
<td>Offline</td>
<td>script</td>
<td>Triggers when the document goes offline</td>
</tr>
<tr>
<td>Onabort</td>
<td>script</td>
<td>Triggers on an abort event</td>
</tr>
<tr>
<td>onafterprint</td>
<td>script</td>
<td>Triggers after the document is printed</td>
</tr>
<tr>
<td>onbeforeonload</td>
<td>script</td>
<td>Triggers before the document loads</td>
</tr>
<tr>
<td>onbeforeprint</td>
<td>script</td>
<td>Triggers before the document is printed</td>
</tr>
<tr>
<td>onblur</td>
<td>script</td>
<td>Triggers when the window loses focus</td>
</tr>
<tr>
<td>oncanplay</td>
<td>script</td>
<td>Triggers when media can start play, but might has to stop for buffering</td>
</tr>
<tr>
<td>oncanplaythrough</td>
<td>script</td>
<td>Triggers when media can be played to the end, without stopping for buffering</td>
</tr>
<tr>
<td>onchange</td>
<td>script</td>
<td>Triggers when an element changes</td>
</tr>
<tr>
<td>onclick</td>
<td>script</td>
<td>Triggers on a mouse click</td>
</tr>
<tr>
<td>oncontextmenu</td>
<td>script</td>
<td>Triggers when a context menu is triggered</td>
</tr>
<tr>
<td>ondblclick</td>
<td>script</td>
<td>Triggers on a mouse double-click</td>
</tr>
<tr>
<td>ondrag</td>
<td>script</td>
<td>Triggers when an element is dragged</td>
</tr>
<tr>
<td>ondragend</td>
<td>script</td>
<td>Triggers at the end of a drag operation</td>
</tr>
<tr>
<td>ondragenter</td>
<td>script</td>
<td>Triggers when an element has been dragged to a valid drop target</td>
</tr>
<tr>
<td>ondragleave</td>
<td>script</td>
<td>Triggers when an element is being dragged over a valid drop target</td>
</tr>
<tr>
<td>ondragover</td>
<td>script</td>
<td>Triggers at the start of a drag operation</td>
</tr>
<tr>
<td>ondragstart</td>
<td>script</td>
<td>Triggers at the start of a drag operation</td>
</tr>
<tr>
<td>ondrop</td>
<td>script</td>
<td>Triggers when dragged element is being dropped</td>
</tr>
<tr>
<td>ondurationchange</td>
<td>script</td>
<td>Triggers when the length of the media is changed</td>
</tr>
<tr>
<td>onemptied</td>
<td>script</td>
<td>Triggers when a media resource element suddenly becomes empty.</td>
</tr>
<tr>
<td>onended</td>
<td>script</td>
<td>Triggers when media has reach the end</td>
</tr>
<tr>
<td>onerror</td>
<td>script</td>
<td>Triggers when an error occur</td>
</tr>
<tr>
<td>onfocus</td>
<td>script</td>
<td>Triggers when the window gets focus</td>
</tr>
<tr>
<td>onformchange</td>
<td>script</td>
<td>Triggers when a form changes</td>
</tr>
<tr>
<td>onforminput</td>
<td>script</td>
<td>Triggers when a form gets user input</td>
</tr>
<tr>
<td>onhaschange</td>
<td>script</td>
<td>Triggers when the document has change</td>
</tr>
<tr>
<td>oninput</td>
<td>script</td>
<td>Triggers when an element gets user input</td>
</tr>
<tr>
<td>oninvalid</td>
<td>script</td>
<td>Triggers when an element is invalid</td>
</tr>
<tr>
<td>onkeydown</td>
<td>script</td>
<td>Triggers when a key is pressed</td>
</tr>
<tr>
<td>onkeypress</td>
<td>script</td>
<td>Triggers when a key is pressed and released</td>
</tr>
<tr>
<td>onkeyup</td>
<td>script</td>
<td>Triggers when a key is released</td>
</tr>
<tr>
<td>onload</td>
<td>script</td>
<td>Triggers when the document loads</td>
</tr>
<tr>
<td>onloadeddata</td>
<td>script</td>
<td>Triggers when media data is loaded</td>
</tr>
<tr>
<td>onloadedmetadata</td>
<td>script</td>
<td>Triggers when the duration and other media data of a media element is loaded</td>
</tr>
<tr>
<td>onloadstart</td>
<td>script</td>
<td>Triggers when the browser starts to load the media data</td>
</tr>
<tr>
<td>onmessage</td>
<td>script</td>
<td>Triggers when the message is triggered</td>
</tr>
<tr>
<td>onmousedown</td>
<td>script</td>
<td>Triggers when a mouse button is pressed</td>
</tr>
<tr>
<td>onmousemove</td>
<td>script</td>
<td>Triggers when the mouse pointer moves</td>
</tr>
<tr>
<td>onmouseout</td>
<td>script</td>
<td>Triggers when the mouse pointer moves out of an element</td>
</tr>
<tr>
<td>onmouseover</td>
<td>script</td>
<td>Triggers when the mouse pointer moves over an element</td>
</tr>
<tr>
<td>onmouseup</td>
<td>script</td>
<td>Triggers when a mouse button is released</td>
</tr>
<tr>
<td>onmousewheel</td>
<td>script</td>
<td>Triggers when the mouse wheel is being rotated</td>
</tr>
<tr>
<td>onoffline</td>
<td>script</td>
<td>Triggers when the document goes offline</td>
</tr>
<tr>
<td>onoine</td>
<td>script</td>
<td>Triggers when the document comes online</td>
</tr>
<tr>
<td>ononline</td>
<td>script</td>
<td>Triggers when the document comes online</td>
</tr>
<tr>
<td>onpagehide</td>
<td>script</td>
<td>Triggers when the window is hidden</td>
</tr>
<tr>
<td>onpageshow</td>
<td>script</td>
<td>Triggers when the window becomes visible</td>
</tr>
<tr>
<td>onpause</td>
<td>script</td>
<td>Triggers when media data is paused</td>
</tr>
<tr>
<td>onplay</td>
<td>script</td>
<td>Triggers when media data is going to start playing</td>
</tr>
<tr>
<td>onplaying</td>
<td>script</td>
<td>Triggers when media data has start playing</td>
</tr>
<tr>
<td>onpopstate</td>
<td>script</td>
<td>Triggers when the window's history changes</td>
</tr>
<tr>
<td>onprogress</td>
<td>script</td>
<td>Triggers when the browser is fetching the media data</td>
</tr>
<tr>
<td>onratechange</td>
<td>script</td>
<td>Triggers when the media data's playing rate has changed</td>
</tr>
<tr>
<td>onreadystatechange</td>
<td>script</td>
<td>Triggers when the ready-state changes</td>
</tr>
<tr>
<td>onredo</td>
<td>script</td>
<td>Triggers when the document performs a redo</td>
</tr>
<tr>
<td>onresize</td>
<td>script</td>
<td>Triggers when the window is resized</td>
</tr>
<tr>
<td>onscroll</td>
<td>script</td>
<td>Triggers when an element's scrollbar is being scrolled</td>
</tr>
<tr>
<td>onseeked</td>
<td>script</td>
<td>Triggers when a media element's seeking attribute is no longer true, and the seeking has ended</td>
</tr>
<tr>
<td>onseeking</td>
<td>script</td>
<td>Triggers when a media element's seeking attribute is true, and the seeking has begun</td>
</tr>
<tr>
<td>onselect</td>
<td>script</td>
<td>Triggers when an element is selected</td>
</tr>
<tr>
<td>onstalled</td>
<td>script</td>
<td>Triggers when there is an error in fetching media data</td>
</tr>
<tr>
<td>onstorage</td>
<td>script</td>
<td>Triggers when a document loads</td>
</tr>
<tr>
<td>onsubmit</td>
<td>script</td>
<td>Triggers when a form is submitted</td>
</tr>
<tr>
<td>onsuspend</td>
<td>script</td>
<td>Triggers when the browser has been fetching media data, but stopped before the entire media file was fetched</td>
</tr>
<tr>
<td>ontimeupdate</td>
<td>script</td>
<td>Triggers when media changes its playing position</td>
</tr>
<tr>
<td>onundo</td>
<td>script</td>
<td>Triggers when a document performs an undo</td>
</tr>
<tr>
<td>onunload</td>
<td>script</td>
<td>Triggers when the user leaves the document</td>
</tr>
<tr>
<td>onvolumechange</td>
<td>script</td>
<td>Triggers when media changes the volume, also when volume is set to "mute"</td>
</tr>
<tr>
<td>onwaiting</td>
<td>script</td>
<td>Triggers when media has stopped playing, but is expected to resume</td>
</tr>
</tbody></table>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="68_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="70_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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