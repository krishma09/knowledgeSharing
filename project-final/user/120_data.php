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
	$sid=120;
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




<p>This chapter will explain following functions related to files −</p>
<ul class="list">
<li>Opening a file</li>
<li>Reading a file</li>
<li>Writing a file</li>
<li>Closing a file</li>
</ul>
<h4>Opening and Closing Files</h4>
<p>The PHP <b>fopen()</b> function is used to open a file. It requires two arguments stating first the file name and then mode in which to operate.</p>
<p>Files modes can be specified as one of the six options in this table.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Mode</th>
<th>Purpose</th>
</tr>
<tr>
<td>r</td>
<td><p>Opens the file for reading only.</p>
<p>Places the file pointer at the beginning of the file.</p>
</td>
</tr>
<tr>
<td>r+</td>
<td><p>Opens the file for reading and writing.</p>
<p>Places the file pointer at the beginning of the file.</p></td>
</tr>
<tr>
<td>w</td>
<td><p>Opens the file for writing only.</p>
<p>Places the file pointer at the beginning of the file.</p>
<p>and truncates the file to zero length. If files does not</p>
<p>exist then it attempts to create a file.</p>
</td>
</tr>
<tr>
<td>w+</td>
<td><p>Opens the file for reading and writing only.</p>
<p>Places the file pointer at the beginning of the file.</p>
<p>and truncates the file to zero length. If files does not</p>
<p>exist then it attempts to create a file.</p>
</td>
</tr>
<tr>
<td>a</td>
<td><p>Opens the file for writing only.</p>
<p>Places the file pointer at the end of the file.</p>
<p>If files does not exist then it attempts to create a file.</p>
</td>
</tr>
<tr>
<td>a+</td>
<td><p>Opens the file for reading and writing only.</p>
<p>Places the file pointer at the end of the file.</p>
<p>If files does not exist then it attempts to create a file.</p>
</td>
</tr>
</tbody></table>
<p>If an attempt to open a file fails then <b>fopen</b> returns a value of <b>false</b> otherwise it returns a <b>file pointer</b> which is used for further reading or writing to that file.</p>
<p>After making a changes to the opened file it is important to close it with the <b>fclose()</b> function. The <b>fclose()</b> function requires a file pointer as its argument and then returns <b>true</b> when the closure succeeds or <b>false</b> if it fails.</p>
<h4>Reading a file</h4>
<p>Once a file is opened using <b>fopen()</b> function it can be read  with a function called <b>fread()</b>. This function requires two arguments. These must be the file pointer and the length of the file expressed in bytes.</p>
<p>The files length can be found using the <b>filesize()</b> function which takes the file name as its argument and returns the size of the file expressed in bytes.</p>
<p>So here are the steps required to read a file with PHP.</p>
<ul class="list">
<li><p>Open a file using <b>fopen()</b> function.</p></li>
<li><p>Get the file's length using <b>filesize()</b> function.</p></li>
<li><p>Read the file's content using <b>fread()</b> function.</p></li>
<li><p>Close the file with <b>fclose()</b> function.</p></li>
</ul>
<p>The following example assigns the content of a text file to a variable then displays those contents on the web page.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Reading a file using PHP</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $filename </span><span class="pun">=</span><span class="pln"> </span><span class="str">"tmp.txt"</span><span class="pun">;</span><span class="pln">
         $file </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="pln"> $filename</span><span class="pun">,</span><span class="pln"> </span><span class="str">"r"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $file </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">false</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"Error in opening file"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         $filesize </span><span class="pun">=</span><span class="pln"> filesize</span><span class="pun">(</span><span class="pln"> $filename </span><span class="pun">);</span><span class="pln">
         $filetext </span><span class="pun">=</span><span class="pln"> fread</span><span class="pun">(</span><span class="pln"> $file</span><span class="pun">,</span><span class="pln"> $filesize </span><span class="pun">);</span><span class="pln">
         fclose</span><span class="pun">(</span><span class="pln"> $file </span><span class="pun">);</span><span class="pln">
         
         echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"File size : $filesize bytes"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"&lt;pre&gt;$filetext&lt;/pre&gt;"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/reading_file.jpg" alt="Reading File">
<h4>Writing a file</h4>
<p>A new file can be written or text can be appended to an existing file using the PHP <b>fwrite()</b> function. This function requires two arguments specifying a <b>file pointer</b> and the string of data that is to be written. Optionally a third integer argument can be included to specify the length of the data to write. If the third argument is included, writing would will stop after the specified length has been reached.</p>
<p>The following example creates a new text file then writes a short text heading inside it. After closing this file its existence is confirmed using <b>file_exist()</b> function which takes file name as an argument</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   $filename </span><span class="pun">=</span><span class="pln"> </span><span class="str">"/home/user/guest/newfile.txt"</span><span class="pun">;</span><span class="pln">
   $file </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="pln"> $filename</span><span class="pun">,</span><span class="pln"> </span><span class="str">"w"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $file </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">false</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"Error in opening new file"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   fwrite</span><span class="pun">(</span><span class="pln"> $file</span><span class="pun">,</span><span class="pln"> </span><span class="str">"This is  a simple test\n"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
   fclose</span><span class="pun">(</span><span class="pln"> $file </span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Writing a file using PHP</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $filename </span><span class="pun">=</span><span class="pln"> </span><span class="str">"newfile.txt"</span><span class="pun">;</span><span class="pln">
         $file </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="pln"> $filename</span><span class="pun">,</span><span class="pln"> </span><span class="str">"r"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $file </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">false</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"Error in opening file"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         $filesize </span><span class="pun">=</span><span class="pln"> filesize</span><span class="pun">(</span><span class="pln"> $filename </span><span class="pun">);</span><span class="pln">
         $filetext </span><span class="pun">=</span><span class="pln"> fread</span><span class="pun">(</span><span class="pln"> $file</span><span class="pun">,</span><span class="pln"> $filesize </span><span class="pun">);</span><span class="pln">
         
         fclose</span><span class="pun">(</span><span class="pln"> $file </span><span class="pun">);</span><span class="pln">
         
         echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"File size : $filesize bytes"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         echo </span><span class="pun">(</span><span class="pln"> </span><span class="str">"$filetext"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         echo</span><span class="pun">(</span><span class="str">"file name: $filename"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/writing_file.jpg" alt="Writing File">
<p>We have covered  all the function related to file input and out in <a href="/php/php_file_system_functions.htm">PHP File System Function</a> chapter.</p>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="119_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="121_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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