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
	$sid=125;
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




<p>A PHP script can be used with a HTML form to allow users to upload files to the server. Initially files are uploaded into a temporary directory and then relocated to a target destination by a PHP script.</p>
<p>Information in the <b>phpinfo.php</b> page describes the temporary directory that is used for file uploads as <b>upload_tmp_dir</b> and the maximum permitted size of files that can be uploaded is stated as <b>upload_max_filesize</b>. These parameters are set into PHP configuration file <b>php.ini</b></p>
<p>The process of uploading a file follows these steps −</p>
<ul class="list">
<li><p>The user opens the page containing a HTML form featuring a text files, a browse button and a submit button.</p></li>
<li><p>The user clicks the browse button and selects a file to upload from the local PC.</p></li>
<li><p>The full path to the selected file appears in the text filed then the user clicks the submit button.</p></li>
<li><p>The selected file is sent to the temporary directory on the server.</p></li>
<li><p>The PHP script that was specified as the form handler in the form's action attribute checks that the file has arrived and then copies the file into an intended directory.</p></li>
<li><p>The PHP script confirms the success to the user.</p></li>
</ul>
<p>As usual when writing files it is necessary for both temporary and final locations to have permissions set that enable file writing. If either is set to be read-only then process will fail.</p>
<p>An uploaded file could be a text file or image file or any document.</p>
<h4>Creating an upload form</h4>
<p>The following HTM code below creates an uploader form. This form is having method attribute set to <b>post</b> and enctype attribute is set to <b>multipart/form-data</b></p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">isset</span><span class="pun">(</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">])){</span><span class="pln">
      $errors</span><span class="pun">=</span><span class="pln"> array</span><span class="pun">();</span><span class="pln">
      $file_name </span><span class="pun">=</span><span class="pln"> $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'name'</span><span class="pun">];</span><span class="pln">
      $file_size </span><span class="pun">=</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'size'</span><span class="pun">];</span><span class="pln">
      $file_tmp </span><span class="pun">=</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'tmp_name'</span><span class="pun">];</span><span class="pln">
      $file_type</span><span class="pun">=</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'type'</span><span class="pun">];</span><span class="pln">
      $file_ext</span><span class="pun">=</span><span class="pln">strtolower</span><span class="pun">(</span><span class="kwd">end</span><span class="pun">(</span><span class="pln">explode</span><span class="pun">(</span><span class="str">'.'</span><span class="pun">,</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'name'</span><span class="pun">])));</span><span class="pln">
      
      $expensions</span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="str">"jpeg"</span><span class="pun">,</span><span class="str">"jpg"</span><span class="pun">,</span><span class="str">"png"</span><span class="pun">);</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">in_array</span><span class="pun">(</span><span class="pln">$file_ext</span><span class="pun">,</span><span class="pln">$expensions</span><span class="pun">)===</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">){</span><span class="pln">
         $errors</span><span class="pun">[]=</span><span class="str">"extension not allowed, please choose a JPEG or PNG file."</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">$file_size </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">2097152</span><span class="pun">){</span><span class="pln">
         $errors</span><span class="pun">[]=</span><span class="str">'File size must be excately 2 MB'</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$errors</span><span class="pun">)==</span><span class="kwd">true</span><span class="pun">){</span><span class="pln">
         move_uploaded_file</span><span class="pun">(</span><span class="pln">$file_tmp</span><span class="pun">,</span><span class="str">"images/"</span><span class="pun">.</span><span class="pln">$file_name</span><span class="pun">);</span><span class="pln">
         echo </span><span class="str">"Success"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
         print_r</span><span class="pun">(</span><span class="pln">$errors</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">""</span><span class="pln"> </span><span class="atn">method</span><span class="pun">=</span><span class="atv">"POST"</span><span class="pln"> </span><span class="atn">enctype</span><span class="pun">=</span><span class="atv">"multipart/form-data"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"file"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"image"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/upload_form.jpg" alt="Upload Form">

<h4>Creating an upload script</h4>
<p>There is one global PHP variable called <b>$_FILES</b>. This variable is an associate double dimension array and keeps all the information related to uploaded file. So if the value assigned to the input's name attribute in uploading form was <b>file</b>, then PHP would create following five variables −</p>
<ul class="list">
<li><p><b>$_FILES['file']['tmp_name']</b> − the uploaded file in the temporary directory on the web server.</p></li>
<li><p><b>$_FILES['file']['name']</b> − the actual name of the uploaded file.</p></li>
<li><p><b>$_FILES['file']['size']</b> − the size in bytes of the uploaded file.</p></li>
<li><p><b>$_FILES['file']['type']</b> − the MIME type of the uploaded file.</p></li>
<li><p><b>$_FILES['file']['error']</b> − the error code  associated with this file upload.</p></li>
</ul>
<h5>Example</h5>
<p>Below example should allow upload images and gives back result as uploaded file information.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">isset</span><span class="pun">(</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">])){</span><span class="pln">
      $errors</span><span class="pun">=</span><span class="pln"> array</span><span class="pun">();</span><span class="pln">
      $file_name </span><span class="pun">=</span><span class="pln"> $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'name'</span><span class="pun">];</span><span class="pln">
      $file_size </span><span class="pun">=</span><span class="pln"> $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'size'</span><span class="pun">];</span><span class="pln">
      $file_tmp </span><span class="pun">=</span><span class="pln"> $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'tmp_name'</span><span class="pun">];</span><span class="pln">
      $file_type </span><span class="pun">=</span><span class="pln"> $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'type'</span><span class="pun">];</span><span class="pln">
      $file_ext</span><span class="pun">=</span><span class="pln">strtolower</span><span class="pun">(</span><span class="kwd">end</span><span class="pun">(</span><span class="pln">explode</span><span class="pun">(</span><span class="str">'.'</span><span class="pun">,</span><span class="pln">$_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'name'</span><span class="pun">])));</span><span class="pln">
      
      $expensions</span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="str">"jpeg"</span><span class="pun">,</span><span class="str">"jpg"</span><span class="pun">,</span><span class="str">"png"</span><span class="pun">);</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">in_array</span><span class="pun">(</span><span class="pln">$file_ext</span><span class="pun">,</span><span class="pln">$expensions</span><span class="pun">)===</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">){</span><span class="pln">
         $errors</span><span class="pun">[]=</span><span class="str">"extension not allowed, please choose a JPEG or PNG file."</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">$file_size </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">2097152</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         $errors</span><span class="pun">[]=</span><span class="str">'File size must be excately 2 MB'</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$errors</span><span class="pun">)==</span><span class="kwd">true</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         move_uploaded_file</span><span class="pun">(</span><span class="pln">$file_tmp</span><span class="pun">,</span><span class="str">"images/"</span><span class="pun">.</span><span class="pln">$file_name</span><span class="pun">);</span><span class="pln">
         echo </span><span class="str">"Success"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">else</span><span class="pun">{</span><span class="pln">
         print_r</span><span class="pun">(</span><span class="pln">$errors</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">""</span><span class="pln"> </span><span class="atn">method</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"POST"</span><span class="pln"> </span><span class="atn">enctype</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"multipart/form-data"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"file"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"image"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="tag">/&gt;</span><span class="pln">
			
         </span><span class="tag">&lt;ul&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">Sent file: </span><span class="pun">&lt;?</span><span class="pln">php echo $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'name'</span><span class="pun">];</span><span class="pln">  </span><span class="pun">?&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">File size: </span><span class="pun">&lt;?</span><span class="pln">php echo $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'size'</span><span class="pun">];</span><span class="pln">  </span><span class="pun">?&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">File type: </span><span class="pun">&lt;?</span><span class="pln">php echo $_FILES</span><span class="pun">[</span><span class="str">'image'</span><span class="pun">][</span><span class="str">'type'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">
         </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
			
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/upload_script.jpg" alt="Upload Script">


















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="124_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="126_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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