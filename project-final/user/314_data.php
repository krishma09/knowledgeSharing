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
<title>ASP.NET Tutorials | knowledge.com</title>
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
	$sid=314;
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
<p>ASP.NET has two controls that allow users to upload files to the web server. Once the server receives the posted file data, the application can save it, check it, or ignore it. The following controls allow the file uploading:</p>
<ul class="list">
<li><p><b>HtmlInputFile</b> - an HTML server control</p></li>
<li><p><b>FileUpload</b> - and ASP.NET web control</p></li>
</ul>
<p>Both controls allow file uploading, but the FileUpload control automatically sets the encoding of the form, whereas the HtmlInputFile does not do so.</p>
<p>In this tutorial, we use the FileUpload control. The FileUpload control allows the user to browse for and select the file to be uploaded, providing a browse button and a text box for entering the filename.</p>
<p>Once, the user has entered the filename in the text box by typing the name or browsing, the SaveAs method of the FileUpload control can be called to save the file to the disk.</p>
<p>The basic syntax of FileUpload is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:FileUpload</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Uploader"</span><span class="pln"> </span><span class="atn">runat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<p>The FileUpload class is derived from the WebControl class, and inherits all its members. Apart from those, the FileUpload class has the following read-only properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>FileBytes</td>
<td>Returns an array of the bytes in a file to be uploaded.</td>
</tr>
<tr>
<td>FileContent</td>
<td>Returns the stream object pointing to the file to be uploaded.</td>
</tr>
<tr>
<td>FileName</td>
<td>Returns the name of the file to be uploaded.</td>
</tr>
<tr>
<td>HasFile</td>
<td>Specifies whether the control has a file to upload.</td>
</tr>
<tr>
<td>PostedFile</td>
<td>Returns a reference to the uploaded file.</td>
</tr>
</tbody></table>
<p>The posted file is encapsulated in an object of type HttpPostedFile, which could be accessed through the PostedFile property of the FileUpload class.</p>
<p>The HttpPostedFile class has the following frequently used properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>ContentLength</td>
<td>Returns the size of the uploaded file in bytes.</td>
</tr>
<tr>
<td>ContentType</td>
<td>Returns the MIME type of the uploaded file.</td>
</tr>
<tr>
<td>FileName</td>
<td>Returns the full filename.</td>
</tr>
<tr>
<td>InputStream</td>
<td>Returns a stream object pointing to the uploaded file.</td>
</tr>
</tbody></table>
<h4>Example</h4>
<p>The following example demonstrates the FileUpload control and its properties. The form has a FileUpload control along with a save button and a label control for displaying the file name, file type, and file length.</p>
<p>In the design view, the form looks as follows:</p>
<img src="images/asp.net_fileupload.jpg" alt="File Upload">
<p>The content file code is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;h5&gt;</span><span class="pln"> File Upload:</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:FileUpload</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"FileUpload1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnsave"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnsave_Click</span><span class="atv">"</span><span class="pln">  </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Save"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">85px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblmessage"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span></pre>
<p>The code behind the save button is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnsave_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">StringBuilder</span><span class="pln"> sb </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">StringBuilder</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">HasFile</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">try</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">AppendFormat</span><span class="pun">(</span><span class="str">" Uploading file: {0}"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">FileName</span><span class="pun">);</span><span class="pln">
         
         </span><span class="com">//saving the file</span><span class="pln">
         </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">SaveAs</span><span class="pun">(</span><span class="str">"&lt;c:\\SaveDirectory&gt;"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">FileName</span><span class="pun">);</span><span class="pln">
      
         </span><span class="com">//Showing the file information</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">AppendFormat</span><span class="pun">(</span><span class="str">"&lt;br/&gt; Save As: {0}"</span><span class="pun">,</span><span class="pln">  </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">PostedFile</span><span class="pun">.</span><span class="typ">FileName</span><span class="pun">);</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">AppendFormat</span><span class="pun">(</span><span class="str">"&lt;br/&gt; File type: {0}"</span><span class="pun">,</span><span class="pln">    </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">PostedFile</span><span class="pun">.</span><span class="typ">ContentType</span><span class="pun">);</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">AppendFormat</span><span class="pun">(</span><span class="str">"&lt;br/&gt; File length: {0}"</span><span class="pun">,</span><span class="pln">  </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">PostedFile</span><span class="pun">.</span><span class="typ">ContentLength</span><span class="pun">);</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">AppendFormat</span><span class="pun">(</span><span class="str">"&lt;br/&gt; File name: {0}"</span><span class="pun">,</span><span class="pln">  </span><span class="typ">FileUpload1</span><span class="pun">.</span><span class="typ">PostedFile</span><span class="pun">.</span><span class="typ">FileName</span><span class="pun">);</span><span class="pln">
         
      </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Exception</span><span class="pln"> ex</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">Append</span><span class="pun">(</span><span class="str">"&lt;br/&gt; Error &lt;br/&gt;"</span><span class="pun">);</span><span class="pln">
         sb</span><span class="pun">.</span><span class="typ">AppendFormat</span><span class="pun">(</span><span class="str">"Unable to save file &lt;br/&gt; {0}"</span><span class="pun">,</span><span class="pln"> ex</span><span class="pun">.</span><span class="typ">Message</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> sb</span><span class="pun">.</span><span class="typ">ToString</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Note the following:</p>
<ul class="list">
<li><p>The StringBuilder class is derived from System.IO namespace, so it needs to be included.</p></li>
<li><p>The try and catch blocks are used for catching errors, and display the error message.</p></li>
</ul>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="313_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="315_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
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