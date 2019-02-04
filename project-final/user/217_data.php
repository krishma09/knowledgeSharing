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
<title>C Tutorials | knowledge.com</title>
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
	$sid=217;
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
<p>The last chapter explained the standard input and output devices handled by C programming language. This chapter cover how C programmers can create, open, close text or binary files for their data storage.</p>
<p>A file represents a sequence of bytes, regardless of it being a text file or a binary file. C programming language provides access on high level functions as well as low level (OS level) calls to handle file on your storage devices. This chapter will take you through the important calls for file management.</p>
<h4>Opening Files</h4>
<p>You can use the <b>fopen( )</b> function to create a new file or to open an existing file. This call will initialize an object of the type <b>FILE</b>, which contains all the information necessary to control the stream. The prototype of this function call is as follows −</p>
<pre class="result notranslate">FILE *fopen( const char * filename, const char * mode );
</pre>
<p>Here, <b>filename</b> is a string literal, which you will use to name your file, and access <b>mode</b> can have one of the following values −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%">Mode</th>
<th>Description</th>
</tr>
<tr>
<td>r</td>
<td>Opens an existing text file for reading purpose.</td>
</tr>
<tr>
<td>w</td>
<td>Opens a text file for writing. If it does not exist, then a new file is created. Here your program will start writing content from the beginning of the file.</td>
</tr>
<tr>
<td>a</td>
<td>Opens a text file for writing in appending mode. If it does not exist, then a new file is created. Here your program will start appending content in the existing file content.</td>
</tr>
<tr>
<td>r+</td>
<td>Opens a text file for both reading and writing.</td>
</tr>
<tr>
<td>w+</td>
<td>Opens a text file for both reading and writing. It first truncates the file to zero length if it exists, otherwise creates a file if it does not exist.</td>
</tr>
<tr>
<td>a+</td>
<td>Opens a text file for both reading and writing. It creates the file if it does not exist. The reading will start from the beginning but writing can only be appended.</td>
</tr>
</tbody></table>
<p>If you are going to handle binary files, then you will use following access modes instead of the above mentioned ones −</p>
<pre class="result notranslate">"rb", "wb", "ab", "rb+", "r+b", "wb+", "w+b", "ab+", "a+b"
</pre>
<h4>Closing a File</h4>
<p>To close a file, use the fclose( ) function. The prototype of this function is −</p>
<pre class="result notranslate">int fclose( FILE *fp );
</pre>
<p>The <b>fclose(-)</b> function returns zero on success, or <b>EOF</b> if there is an error in closing the file. This function actually flushes any data still pending in the buffer to the file, closes the file, and releases any memory used for the file. The EOF is a constant defined in the header file <b>stdio.h</b>.</p>
<p>There are various functions provided by C standard library to read and write a file, character by character, or in the form of a fixed length string.</p>
<h4>Writing a File</h4><p>Following is the simplest function to write individual characters to a stream −</p>
<pre class="result notranslate">int fputc( int c, FILE *fp );
</pre>
<p>The function <b>fputc()</b> writes the character value of the argument c to the output stream referenced by fp. It returns the written character written on success otherwise <b>EOF</b> if there is an error. You can use the following functions to write a null-terminated string to a stream −</p>

<pre class="result notranslate">int fputs( const char *s, FILE *fp );
</pre>
<p>The function <b>fputs()</b> writes the string <b>s</b> to the output stream referenced by fp. It returns a non-negative value on success, otherwise <b>EOF</b> is returned in case of any error. You can use <b>int fprintf(FILE *fp,const char *format, ...)</b> function as well to write a string into a file. Try the following example.</p>
<p>Make sure you have <b>/tmp</b> directory available. If it is not, then before proceeding, you must create this directory on your machine.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   FILE </span><span class="pun">*</span><span class="pln">fp</span><span class="pun">;</span><span class="pln">

   fp </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="str">"/tmp/test.txt"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"w+"</span><span class="pun">);</span><span class="pln">
   fprintf</span><span class="pun">(</span><span class="pln">fp</span><span class="pun">,</span><span class="pln"> </span><span class="str">"This is testing for fprintf...\n"</span><span class="pun">);</span><span class="pln">
   fputs</span><span class="pun">(</span><span class="str">"This is testing for fputs...\n"</span><span class="pun">,</span><span class="pln"> fp</span><span class="pun">);</span><span class="pln">
   fclose</span><span class="pun">(</span><span class="pln">fp</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it creates a new file <b>test.txt</b> in /tmp directory and writes two lines using two different functions. Let us read this file in the next section.</p>
<h4>Reading a File</h4>
<p>Given below is the simplest function to read a single character from a file −</p>
<pre class="result notranslate">int fgetc( FILE * fp );
</pre>
<p>The <b>fgetc()</b> function reads a character from the input file referenced by fp. The return value is the character read, or in case of any error, it returns <b>EOF</b>. The following function allows to read a string from a stream −</p>
<pre class="result notranslate">char *fgets( char *buf, int n, FILE *fp );
</pre>

<p>The functions <b>fgets()</b> reads up to n-1 characters from the input stream referenced by fp. It copies the read string into the buffer <b>buf</b>, appending a <b>null</b> character to terminate the string.</p>
<p>If this function encounters a newline character '\n' or the end of the file EOF before they have read the maximum number of characters, then it returns only the characters read up to that point including the new line character. You can also use <b>int fscanf(FILE *fp, const char *format, ...)</b> function to read strings from a file, but it stops reading after encountering the first space character.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   FILE </span><span class="pun">*</span><span class="pln">fp</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> buff</span><span class="pun">[</span><span class="lit">255</span><span class="pun">];</span><span class="pln">

   fp </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="str">"/tmp/test.txt"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"r"</span><span class="pun">);</span><span class="pln">
   fscanf</span><span class="pun">(</span><span class="pln">fp</span><span class="pun">,</span><span class="pln"> </span><span class="str">"%s"</span><span class="pun">,</span><span class="pln"> buff</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"1 : %s\n"</span><span class="pun">,</span><span class="pln"> buff </span><span class="pun">);</span><span class="pln">

   fgets</span><span class="pun">(</span><span class="pln">buff</span><span class="pun">,</span><span class="pln"> </span><span class="lit">255</span><span class="pun">,</span><span class="pln"> </span><span class="pun">(</span><span class="pln">FILE</span><span class="pun">*)</span><span class="pln">fp</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"2: %s\n"</span><span class="pun">,</span><span class="pln"> buff </span><span class="pun">);</span><span class="pln">
   
   fgets</span><span class="pun">(</span><span class="pln">buff</span><span class="pun">,</span><span class="pln"> </span><span class="lit">255</span><span class="pun">,</span><span class="pln"> </span><span class="pun">(</span><span class="pln">FILE</span><span class="pun">*)</span><span class="pln">fp</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"3: %s\n"</span><span class="pun">,</span><span class="pln"> buff </span><span class="pun">);</span><span class="pln">
   fclose</span><span class="pun">(</span><span class="pln">fp</span><span class="pun">);</span><span class="pln">

</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it reads the file created in the previous section and produces the following result −</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="216_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="218_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c_header.php'; ?></aside>
 
  
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