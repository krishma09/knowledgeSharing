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
	$sid=279;
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
<p>Data types refer to an extensive system used for declaring variables or functions of different types. The type of a variable determines how much space it occupies in storage and how the bit pattern stored is interpreted.</p>
<h4>Data Types Available in VB.Net</h4>
<p>VB.Net provides a wide range of data types. The following table shows all the data types available:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:15%;">Data Type</th>
<th style="width:20%;">Storage Allocation</th>
<th>Value Range</th>
</tr>
<tr>
<td>Boolean</td>
<td>Depends on implementing platform</td>
<td>
<b>True</b> or <b>False</b></td>
</tr>
<tr>
<td>Byte</td>
<td>1 byte</td>
<td>0 through 255 (unsigned)</td>
</tr>
<tr>
<td>Char</td>
<td>2 bytes</td>
<td>0 through 65535 (unsigned)</td>
</tr>
<tr>
<td>Date</td>
<td>8 bytes</td>
<td>0:00:00 (midnight) on January 1, 0001 through 11:59:59 PM on December 31, 9999</td>
</tr>
<tr>
<td>Decimal</td>
<td>16 bytes</td>
<td>0 through +/-79,228,162,514,264,337,593,543,950,335 (+/-7.9...E+28) with no decimal point; 0 through +/-7.9228162514264337593543950335 with 28 places to the right of the decimal</td>
</tr>
<tr>
<td>Double </td>
<td>8 bytes</td>
<td><p>-1.79769313486231570E+308 through -4.94065645841246544E-324, for negative values</p>
<p>4.94065645841246544E-324 through 1.79769313486231570E+308, for positive values</p>
</td>
</tr>
<tr>
<td>Integer</td>
<td>4 bytes</td>
<td>-2,147,483,648 through 2,147,483,647 (signed)</td>
</tr>
<tr>
<td>Long</td>
<td>8 bytes</td>
<td>-9,223,372,036,854,775,808 through 9,223,372,036,854,775,807(signed)</td>
</tr>
<tr>
<td>Object</td>
<td><p>4 bytes on 32-bit platform</p>
<p>8 bytes on 64-bit platform</p>
</td>
<td>Any type can be stored in a variable of type Object</td></tr>
<tr><td>SByte</td>
<td>1 byte</td>
<td>-128 through 127 (signed)</td>
</tr>
<tr>
<td>Short</td>
<td>2 bytes</td>
<td>-32,768 through 32,767 (signed)</td>
</tr>
<tr>
<td>Single</td>
<td>4 bytes</td>
<td><p>-3.4028235E+38 through -1.401298E-45 for negative values;</p>
<p>1.401298E-45 through 3.4028235E+38 for positive values</p>
</td>
</tr>
<tr>
<td>String</td>
<td>Depends on implementing platform</td>
<td>0 to approximately 2 billion Unicode characters</td>
</tr>
<tr>
<td>UInteger</td>
<td>4 bytes</td>
<td>0 through 4,294,967,295 (unsigned)</td>
</tr>
<tr>
<td>ULong</td>
<td>8 bytes</td>
<td>0 through 18,446,744,073,709,551,615 (unsigned)</td>
</tr>
<tr>
<td>User-Defined</td>
<td>Depends on implementing platform</td>
<td>Each member of the structure has a range determined by its data type and independent of the ranges of the other members</td>
</tr>
<tr>
<td>UShort</td>
<td>2 bytes</td>
<td>0 through 65,535 (unsigned)</td>
</tr>
</tbody></table>
<h4>Example</h4>
<p>The following example demonstrates use of some of the types:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> </span><span class="typ">DataTypes</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> b </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Byte</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> n </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> si </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Single</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> d </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> da </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Date</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> c </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Char</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> s </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> bl </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Boolean</span><span class="pln">
      b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
      n </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1234567</span><span class="pln">
      si </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0.12345678901234566</span><span class="pln">
      d </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0.12345678901234566</span><span class="pln">
      da </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Today</span><span class="pln">
      c </span><span class="pun">=</span><span class="pln"> </span><span class="str">"U"</span><span class="pln">c
      s </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Me"</span><span class="pln">
      </span><span class="typ">If</span><span class="pln"> </span><span class="typ">ScriptEngine</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"VB"</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
         bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">True</span><span class="pln">
      </span><span class="typ">Else</span><span class="pln">
         bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">False</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
      </span><span class="typ">If</span><span class="pln"> bl </span><span class="typ">Then</span><span class="pln">
         </span><span class="str">'the oath taking
          Console.Write(c &amp; " and," &amp; s &amp; vbCrLf)
          Console.WriteLine("declaring on the day of: {0}", da)
          Console.WriteLine("We will learn VB.Net seriously")
          Console.WriteLine("Lets see what happens to the floating point variables:")
          Console.WriteLine("The Single: {0}, The Double: {1}", si, d)
      End If
      Console.ReadKey()
   End Sub

End Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">U </span><span class="kwd">and</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Me</span><span class="pln">
declaring on the day of</span><span class="pun">:</span><span class="pln"> </span><span class="lit">12</span><span class="pun">/</span><span class="lit">4</span><span class="pun">/</span><span class="lit">2012</span><span class="pln"> </span><span class="lit">12</span><span class="pun">:</span><span class="lit">00</span><span class="pun">:</span><span class="lit">00</span><span class="pln"> PM
</span><span class="typ">We</span><span class="pln"> will learn VB</span><span class="pun">.</span><span class="typ">Net</span><span class="pln"> seriously
</span><span class="typ">Lets</span><span class="pln"> see what happens to the floating point variables</span><span class="pun">:</span><span class="pln">
</span><span class="typ">The</span><span class="pln"> </span><span class="typ">Single</span><span class="pun">:</span><span class="lit">0.1234568</span><span class="pun">,</span><span class="pln"> </span><span class="typ">The</span><span class="pln"> </span><span class="typ">Double</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0.123456789012346</span></pre>
<h4>The Type Conversion Functions in VB.Net</h4>
<p>VB.Net provides the following in-line type conversion functions:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Functions &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>CBool(expression)</b></p>
<p>Converts the expression to Boolean data type.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>CByte(expression)</b></p>
<p>Converts the expression to Byte data type.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>CChar(expression)</b></p>
<p>Converts the expression to Char data type.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>CDate(expression)</b></p>
<p>Converts the expression to Date data type</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>CDbl(expression)</b></p>
<p>Converts the expression to Double data type.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>CDec(expression)</b></p>
<p>Converts the expression to Decimal data type.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>CInt(expression)</b></p>
<p>Converts the expression to Integer data type.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>CLng(expression)</b></p>
<p>Converts the expression to Long data type.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>CObj(expression)</b></p>
<p>Converts the expression to Object type.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>CSByte(expression)</b></p>
<p>Converts the expression to SByte data type.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>CShort(expression)</b></p>
<p>Converts the expression to Short data type.</p>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>CSng(expression)</b></p>
<p>Converts the expression to Single data type.</p>
</td>
</tr>
<tr>
<td>13</td>
<td>
<p><b>CStr(expression)</b></p>
<p>Converts the expression to String data type.</p>
</td>
</tr>
<tr>
<td>14</td>
<td>
<p><b>CUInt(expression)</b></p>
<p>Converts the expression to UInt data type.</p>
</td>
</tr>
<tr>
<td>15</td>
<td>
<p><b>CULng(expression)</b></p>
<p>Converts the expression to ULng data type.</p>
</td>
</tr>
<tr>
<td>16</td>
<td>
<p><b>CUShort(expression)</b></p>
<p>Converts the expression to UShort data type.</p>
</td>
</tr>
</tbody></table>
<h4>Example:</h4>
<p>The following example demonstrates some of these functions:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> </span><span class="typ">DataTypes</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> n </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> da </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Date</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> bl </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Boolean</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">True</span><span class="pln">
      n </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1234567</span><span class="pln">
      da </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Today</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">CSByte</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">CStr</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">CStr</span><span class="pun">(</span><span class="pln">da</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">CChar</span><span class="pun">(</span><span class="typ">CChar</span><span class="pun">(</span><span class="typ">CStr</span><span class="pun">(</span><span class="pln">n</span><span class="pun">))))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">CChar</span><span class="pun">(</span><span class="typ">CStr</span><span class="pun">(</span><span class="pln">da</span><span class="pun">)))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">True</span><span class="pln">
</span><span class="pun">-</span><span class="lit">1</span><span class="pln">
</span><span class="kwd">True</span><span class="pln">
</span><span class="lit">12</span><span class="pun">/</span><span class="lit">4</span><span class="pun">/</span><span class="lit">2012</span><span class="pln">
</span><span class="lit">1</span><span class="pln">
</span><span class="lit">1</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="278_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="280_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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