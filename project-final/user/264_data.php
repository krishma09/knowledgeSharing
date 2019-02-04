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
<title>NODE.JS Tutorials | knowledge.com</title>
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
	$sid=264;
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

<p>Many objects in a Node emit events, for example, a net.Server emits an event each time a peer connects to it, an fs.readStream emits an event when the file is opened. All objects which emit events are the instances of events.EventEmitter.</p>
<h4>EventEmitter Class</h4>
<p>As we have seen in the previous section, EventEmitter class lies in the events module. It is accessible via the following code −</p>
<pre class="result notranslate">// Import events module
var events = require('events');

// Create an eventEmitter object
var eventEmitter = new events.EventEmitter();
</pre>
<p>When an EventEmitter instance faces any error, it emits an 'error' event. When a new listener is added, 'newListener' event is fired and when a listener is removed, 'removeListener' event is fired.</p>
<p>EventEmitter provides multiple properties like <b>on</b> and <b>emit</b>. <b>on</b> property is used to bind a function with the event and <b>emit</b> is used to fire an event.</p>
<h4>Methods</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center">S.No.</th>
<th style="text-align:center">Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>addListener(event, listener)</b></p>
<p>Adds a listener at the end of the listeners array for the specified event. No checks are made to see if the listener has already been added. Multiple calls passing the same combination of event and listener will result in the listener being added multiple times. Returns emitter, so calls can be chained.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>on(event, listener)</b></p>
<p>Adds a listener at the end of the listeners array for the specified event. No checks are made to see if the listener has already been added. Multiple calls passing the same combination of event and listener will result in the listener being added multiple times. Returns emitter, so calls can be chained.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>once(event, listener)</b></p>
<p>Adds a one time listener to the event. This listener is invoked only the next time the event is fired, after which it is removed. Returns emitter, so calls can be chained.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>removeListener(event, listener)</b></p>
<p>Removes a listener from the listener array for the specified event. <b>Caution −</b> It changes the array indices in the listener array behind the listener. removeListener will remove, at most, one instance of a listener from the listener array. If any single listener has been added multiple times to the listener array for the specified event, then removeListener must be called multiple times to remove each instance. Returns emitter, so calls can be chained.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>removeAllListeners([event])</b></p>
<p>Removes all listeners, or those of the specified event. It's not a good idea to remove listeners that were added elsewhere in the code, especially when it's on an emitter that you didn't create (e.g. sockets or file streams). Returns emitter, so calls can be chained.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>setMaxListeners(n)</b></p>
<p>By default, EventEmitters will print a warning if more than 10 listeners are added for a particular event. This is a useful default which helps finding memory leaks. Obviously not all Emitters should be limited to 10. This function allows that to be increased. Set to zero for unlimited.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>listeners(event)</b></p>
<p>Returns an array of listeners for the specified event.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>emit(event, [arg1], [arg2], [...])</b></p>
<p>Execute each of the listeners in order with the supplied arguments. Returns true if the event had listeners, false otherwise.</p>
</td>
</tr>
</tbody></table>
<h4>Class Methods</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center">S.No.</th>
<th style="text-align:center">Method &amp; Description</th>
</tr>
<tr>
<td style="vertical-align:middle;">1</td>
<td>
<p><b>listenerCount(emitter, event)</b></p>
<p>Returns the number of listeners for a given event.</p>
</td>
</tr>
</tbody></table>
<h4>Events</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center">S.No.</th>
<th style="text-align:center">Events &amp; Description</th>
</tr>
<tr>
<td style="vertical-align:middle;">1</td>
<td><p><b>newListener</b></p>
<ul>
<li><p><b>event</b> − String: the event name</p></li>
<li><p><b>listener</b> − Function: the event handler function</p></li>
</ul>
<p>This event is emitted any time a listener is added. When this event is triggered, the listener may not yet have been added to the array of listeners for the event.</p>
</td>
</tr>
<tr>
<td style="vertical-align:middle;">2</td>
<td>
<p><b>removeListener</b></p>
<ul>
<li><p><b>event</b> − String The event name</p></li>
<li><p><b>listener</b> − Function The event handler function</p></li>
</ul>
<p>This event is emitted any time someone removes a listener. When this event is triggered, the listener may not yet have been removed from the array of listeners for the event.</p>
</td>
</tr>
</tbody></table>
<h4>Example</h4>
<p>Create a js file named main.js with the following Node.js code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">var</span><span class="pln"> events </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'events'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> eventEmitter </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> events</span><span class="pun">.</span><span class="typ">EventEmitter</span><span class="pun">();</span><span class="pln">

</span><span class="com">// listener #1</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> listner1 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> listner1</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">'listner1 executed.'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com">// listener #2</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> listner2 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> listner2</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">'listner2 executed.'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com">// Bind the connection event with the listner1 function</span><span class="pln">
eventEmitter</span><span class="pun">.</span><span class="pln">addListener</span><span class="pun">(</span><span class="str">'connection'</span><span class="pun">,</span><span class="pln"> listner1</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Bind the connection event with the listner2 function</span><span class="pln">
eventEmitter</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'connection'</span><span class="pun">,</span><span class="pln"> listner2</span><span class="pun">);</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> eventListeners </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'events'</span><span class="pun">).</span><span class="typ">EventEmitter</span><span class="pun">.</span><span class="pln">listenerCount
   </span><span class="pun">(</span><span class="pln">eventEmitter</span><span class="pun">,</span><span class="str">'connection'</span><span class="pun">);</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">eventListeners </span><span class="pun">+</span><span class="pln"> </span><span class="str">" Listner(s) listening to connection event"</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Fire the connection event </span><span class="pln">
eventEmitter</span><span class="pun">.</span><span class="pln">emit</span><span class="pun">(</span><span class="str">'connection'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Remove the binding of listner1 function</span><span class="pln">
eventEmitter</span><span class="pun">.</span><span class="pln">removeListener</span><span class="pun">(</span><span class="str">'connection'</span><span class="pun">,</span><span class="pln"> listner1</span><span class="pun">);</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Listner1 will not listen now."</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Fire the connection event </span><span class="pln">
eventEmitter</span><span class="pun">.</span><span class="pln">emit</span><span class="pun">(</span><span class="str">'connection'</span><span class="pun">);</span><span class="pln">

eventListeners </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'events'</span><span class="pun">).</span><span class="typ">EventEmitter</span><span class="pun">.</span><span class="pln">listenerCount</span><span class="pun">(</span><span class="pln">eventEmitter</span><span class="pun">,</span><span class="str">'connection'</span><span class="pun">);</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">eventListeners </span><span class="pun">+</span><span class="pln"> </span><span class="str">" Listner(s) listening to connection event"</span><span class="pun">);</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Program Ended."</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">2 Listner(s) listening to connection event
listner1 executed.
listner2 executed.
Listner1 will not listen now.
listner2 executed.
1 Listner(s) listening to connection event
Program Ended.
</pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="263_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="265_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'nodejs_header.php'; ?></aside>
 
  
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