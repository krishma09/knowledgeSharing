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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=299;
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

<p>Events are basically a user action like key press, clicks, mouse movements, etc., or some occurrence like system generated notifications. Applications need to respond to events when they occur.</p>
<p>Clicking on a button, or entering some text in a text box, or clicking on a menu item, all are examples of events. An event is an action that calls a function or may cause another event. </p>
<p>Event handlers are functions that tell how to respond to an event.</p>
<p>VB.Net is an event-driven language. There are mainly two types of events:</p>
<ul class="list">
<li><p>Mouse events </p></li>
<li><p>Keyboard events</p></li>
</ul>
<h4>Handling Mouse Events</h4>
<p>Mouse events occur with mouse movements in forms and controls. Following are the various mouse events related with a Control class:</p>
<ul class="list">
<li><p><b>MouseDown</b> - it occurs when a mouse button is pressed</p></li>
<li><p><b>MouseEnter</b> - it occurs when the mouse pointer enters the control</p></li>
<li><p><b>MouseHover</b> - it occurs when the mouse pointer hovers over the control</p></li>
<li><p><b>MouseLeave</b> - it occurs when the mouse pointer leaves the control</p></li>
<li><p><b>MouseMove</b> - it occurs when the mouse pointer moves over the control</p></li>
<li><p><b>MouseUp</b> - it occurs when the mouse pointer is over the control and the mouse button is released </p></li>
<li><p><b>MouseWheel</b> - it occurs when the mouse wheel moves and the control has focus</p></li>
</ul>
<p>The event handlers of the mouse events get an argument of type <b>MouseEventArgs</b>. The MouseEventArgs object is used for handling mouse events. It has the following properties:</p>
<ul class="list">
<li><p><b>Buttons</b> - indicates the mouse button pressed</p></li>
<li><p><b>Clicks</b> - indicates the number of clicks</p></li>
<li><p><b>Delta</b> - indicates the number of detents the mouse wheel rotated</p></li>
<li><p><b>X</b> - indicates the x-coordinate of mouse click</p></li>
<li><p><b>Y</b> - indicates the y-coordinate of mouse click</p></li>
</ul>
<h4>Example</h4>
<p>Following is an example, which shows how to handle mouse events. Take the following steps:</p>
<ul class="list">
<li><p>Add three labels, three text boxes and a button control in the form.</p></li>
<li><p>Change the text properties of the labels to - Customer ID, Name and Address, respectively. </p></li>
<li><p>Change the name properties of the text boxes to txtID, txtName and txtAddress, respectively. </p></li>
<li><p>Change the text property of the button to 'Submit'.</p></li>
<li><p>Add the following code in the code editor window:</p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Form1</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Form1_Load</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> </span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">MyBase</span><span class="pun">.</span><span class="typ">Load</span><span class="pln">
      </span><span class="str">' Set the caption bar text of the form.   
      Me.Text = "tutorialspont.com"
   End Sub

   Private Sub txtID_MouseEnter(sender As Object, e As EventArgs)_
        Handles txtID.MouseEnter
      '</span><span class="pln">code </span><span class="kwd">for</span><span class="pln"> handling mouse enter on ID textbox
      txtID</span><span class="pun">.</span><span class="typ">BackColor</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Color</span><span class="pun">.</span><span class="typ">CornflowerBlue</span><span class="pln">
      txtID</span><span class="pun">.</span><span class="typ">ForeColor</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Color</span><span class="pun">.</span><span class="typ">White</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> txtID_MouseLeave</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> _
        </span><span class="typ">Handles</span><span class="pln"> txtID</span><span class="pun">.</span><span class="typ">MouseLeave</span><span class="pln">
      </span><span class="str">'code for handling mouse leave on ID textbox
      txtID.BackColor = Color.White
      txtID.ForeColor = Color.Blue
   End Sub
   Private Sub txtName_MouseEnter(sender As Object, e As EventArgs) _
       Handles txtName.MouseEnter
      '</span><span class="pln">code </span><span class="kwd">for</span><span class="pln"> handling mouse enter on </span><span class="typ">Name</span><span class="pln"> textbox
      txtName</span><span class="pun">.</span><span class="typ">BackColor</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Color</span><span class="pun">.</span><span class="typ">CornflowerBlue</span><span class="pln">
      txtName</span><span class="pun">.</span><span class="typ">ForeColor</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Color</span><span class="pun">.</span><span class="typ">White</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> txtName_MouseLeave</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> _
      </span><span class="typ">Handles</span><span class="pln"> txtName</span><span class="pun">.</span><span class="typ">MouseLeave</span><span class="pln">
      </span><span class="str">'code for handling mouse leave on Name textbox
      txtName.BackColor = Color.White
      txtName.ForeColor = Color.Blue
   End Sub
   Private Sub txtAddress_MouseEnter(sender As Object, e As EventArgs) _
      Handles txtAddress.MouseEnter
      '</span><span class="pln">code </span><span class="kwd">for</span><span class="pln"> handling mouse enter on </span><span class="typ">Address</span><span class="pln"> textbox
      txtAddress</span><span class="pun">.</span><span class="typ">BackColor</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Color</span><span class="pun">.</span><span class="typ">CornflowerBlue</span><span class="pln">
      txtAddress</span><span class="pun">.</span><span class="typ">ForeColor</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Color</span><span class="pun">.</span><span class="typ">White</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> txtAddress_MouseLeave</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> _
        </span><span class="typ">Handles</span><span class="pln"> txtAddress</span><span class="pun">.</span><span class="typ">MouseLeave</span><span class="pln">
      </span><span class="str">'code for handling mouse leave on Address textbox
      txtAddress.BackColor = Color.White
      txtAddress.ForeColor = Color.Blue
   End Sub

   Private Sub Button1_Click(sender As Object, e As EventArgs) _
       Handles Button1.Click
      MsgBox("Thank you " &amp; txtName.Text &amp; ", for your kind cooperation")
   End Sub
End Class</span></pre>
<p>When the above code is executed and run using <b>Start</b> button available at the Microsoft Visual Studio tool bar, it will show the following window:</p>
<img src="images/vb.net_event_handling1.jpg" alt="Event Handling Example1">
<p>Try to enter text in the text boxes and check the mouse events:</p>
<img src="images/vb.net_event_handling2.jpg" alt="Event Handling Result Form">
<h4>Handling Keyboard Events</h4>
<p>Following are the various keyboard events related with a Control class:</p>
<ul class="list">
<li><p><b>KeyDown</b> - occurs when a key is pressed down and the control has focus</p></li>
<li><p><b>KeyPress</b> - occurs when a key is pressed and the control has focus</p></li>
<li><p><b>KeyUp</b> - occurs when a key is released while the control has focus</p></li>
</ul>
<p>The event handlers of the KeyDown and KeyUp events get an argument of type <b>KeyEventArgs</b>. This object has the following properties:</p>
<ul class="list">
<li><p><b>Alt</b> - it indicates whether the ALT key is pressed/p&gt;</p></li>
<li><p><b>Control</b> - it indicates whether the CTRL key is pressed</p></li>
<li><p><b>Handled</b> - it indicates whether the event is handled </p></li>
<li><p><b>KeyCode</b> - stores the keyboard code for the event</p></li>
<li><p><b>KeyData</b> - stores the keyboard data for the event</p></li>
<li><p><b>KeyValue</b> - stores the keyboard value for the event</p></li>
<li><p><b>Modifiers</b> - it indicates which modifier keys (Ctrl, Shift, and/or Alt) are pressed</p></li>
<li><p><b>Shift</b> - it indicates if the Shift key is pressed</p></li>
</ul>
<p>The event handlers of the KeyDown and KeyUp events get an argument of type <b>KeyEventArgs</b>. This object has the following properties:</p>
<ul class="list">
<li><p><b>Handled</b> - indicates if the KeyPress event is handled</p></li>
<li><p><b>KeyChar</b> - stores the character corresponding to the key pressed</p></li>
</ul>
<h4>Example</h4>
<p>Let us continue with the previous example to show how to handle keyboard events. The code will verify that the user enters some numbers for his customer ID and age. </p>
<ul class="list">
<li><p>Add a label with text Property as 'Age' and add a corresponding text box named txtAge. </p></li>
<li><p>Add the following codes for handling the KeyUP events of the text box txtID.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> txtID_KeyUP</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">KeyEventArgs</span><span class="pun">)</span><span class="pln"> _
   </span><span class="typ">Handles</span><span class="pln"> txtID</span><span class="pun">.</span><span class="typ">KeyUp</span><span class="pln">
   </span><span class="typ">If</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Not</span><span class="pln"> </span><span class="typ">Char</span><span class="pun">.</span><span class="typ">IsNumber</span><span class="pun">(</span><span class="typ">ChrW</span><span class="pun">(</span><span class="pln">e</span><span class="pun">.</span><span class="typ">KeyCode</span><span class="pun">)))</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
      </span><span class="typ">MessageBox</span><span class="pun">.</span><span class="typ">Show</span><span class="pun">(</span><span class="str">"Enter numbers for your Customer ID"</span><span class="pun">)</span><span class="pln">
      txtID</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">" "</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
</li>
<li><p>Add the following codes for handling the KeyUP events of the text box txtID. </p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> txtAge_KeyUP</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">KeyEventArgs</span><span class="pun">)</span><span class="pln"> _
   </span><span class="typ">Handles</span><span class="pln"> txtAge</span><span class="pun">.</span><span class="typ">KeyUp</span><span class="pln">
   </span><span class="typ">If</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Not</span><span class="pln"> </span><span class="typ">Char</span><span class="pun">.</span><span class="typ">IsNumber</span><span class="pun">(</span><span class="typ">ChrW</span><span class="pun">(</span><span class="pln">e</span><span class="pun">.</span><span class="pln">keyCode</span><span class="pun">)))</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
      </span><span class="typ">MessageBox</span><span class="pun">.</span><span class="typ">Show</span><span class="pun">(</span><span class="str">"Enter numbers for age"</span><span class="pun">)</span><span class="pln">
      txtAge</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">" "</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
</li>
</ul>
<p>When the above code is executed and run using <b>Start</b> button available at the Microsoft Visual Studio tool bar, it will show the following window:</p>
<img src="images/vb.net_event_handling3.jpg" alt="VB.Net Event Example">
<p>If you leave the text for age or ID as blank or enter some non-numeric data, it gives a warning message box and clears the respective text:</p>
<img src="images/vb.net_event_handling4.jpg" alt="VB.Net Event Example">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="298_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<!--<a href="2_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>-->
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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