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
	$sid=295;
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


<p>A <b>file</b> is a collection of data stored in a disk with a specific name and a directory path. When a file is opened for reading or writing, it becomes a <b>stream</b>.</p>
<p>The stream is basically the sequence of bytes passing through the communication path. There are two main streams: the <b>input stream</b> and the <b>output stream</b>. The <b>input stream</b> is used for reading data from file (read operation) and the <b>output stream</b> is used for writing into the file (write operation).</p>
<h4>VB.Net I/O Classes</h4>
<p>The System.IO namespace has various classes that are used for performing various operations with files, like creating and deleting files, reading from or writing to a file, closing a file, etc.</p>
<p>The following table shows some commonly used non-abstract classes in the System.IO namespace:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:25%;">I/O Class</th>
<th>Description</th>
</tr>
<tr>
<td>BinaryReader</td>
<td>Reads primitive data from a binary stream.</td>
</tr>
<tr>
<td>BinaryWriter</td>
<td>Writes primitive data in binary format.</td>
</tr>
<tr>
<td>BufferedStream</td>
<td>A temporary storage for a stream of bytes.</td>
</tr>
<tr>
<td>Directory</td>
<td>Helps in manipulating a directory structure.</td>
</tr>
<tr>
<td>DirectoryInfo</td>
<td>Used for performing operations on directories.</td>
</tr>
<tr>
<td>DriveInfo</td>
<td>Provides information for the drives.</td>
</tr>
<tr>
<td>File</td>
<td>Helps in manipulating files. </td>
</tr>
<tr>
<td>FileInfo</td>
<td>Used for performing operations on files. </td>
</tr>
<tr>
<td>FileStream</td>
<td>Used to read from and write to any location in a file. </td>
</tr>
<tr>
<td>MemoryStream</td>
<td>Used for random access of streamed data stored in memory.</td>
</tr>
<tr>
<td>Path</td>
<td>Performs operations on path information.</td>
</tr>
<tr>
<td>StreamReader</td>
<td>Used for reading characters from a byte stream.</td>
</tr>
<tr>
<td>StreamWriter</td>
<td>Is used for writing characters to a stream.</td>
</tr>
<tr>
<td>StringReader</td>
<td>Is used for reading from a string buffer.</td>
</tr>
<tr>
<td>StringWriter</td>
<td>Is used for writing into a string buffer.</td>
</tr>
</tbody></table>
<h4>The FileStream Class</h4>
<p>The <b>FileStream</b> class in the System.IO namespace helps in reading from, writing to and closing files. This class derives from the abstract class Stream. </p>
<p>You need to create a <b>FileStream</b> object to create a new file or open an existing file. The syntax for creating a <b>FileStream</b> object is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> </span><span class="str">&lt;object_name&gt;</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">FileStream</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">FileStream</span><span class="pun">(&lt;</span><span class="pln">file_name</span><span class="pun">&gt;,</span><span class="pln"> </span><span class="pun">&lt;</span><span class="typ">FileMode</span><span class="pln"> </span><span class="typ">Enumerator</span><span class="pun">&gt;,</span><span class="pln"> </span><span class="pun">&lt;</span><span class="typ">FileAccess</span><span class="pln"> </span><span class="typ">Enumerator</span><span class="pun">&gt;,</span><span class="pln"> </span><span class="pun">&lt;</span><span class="typ">FileShare</span><span class="pln"> </span><span class="typ">Enumerator</span><span class="pun">&gt;)</span></pre>
<p>For example, for creating a FileStream object <b>F</b> for reading a file named <b>sample.txt</b>:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> f1 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">FileStream</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">FileStream</span><span class="pun">(</span><span class="str">"sample.txt"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">FileMode</span><span class="pun">.</span><span class="typ">OpenOrCreate</span><span class="pun">,</span><span class="pln"> </span><span class="typ">FileAccess</span><span class="pun">.</span><span class="typ">ReadWrite</span><span class="pun">)</span></pre>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%;">Parameter</th>
<th>Description</th>
</tr>
<tr>
<td>FileMode</td>
<td>
<p>The <b>FileMode</b> enumerator defines various methods for opening files. The members of the FileMode enumerator are:</p>
<ul class="list">
<li><p><b>Append</b>: It opens an existing file and puts cursor at the end of file, or creates the file, if the file does not exist. </p></li>
<li><p><b>Create</b>: It creates a new file.</p></li>
<li><p><b>CreateNew</b>: It specifies to the operating system that it should create a new file. </p></li>
<li><p><b>Open</b>: It opens an existing file.</p></li>
<li><p><b>OpenOrCreate</b>: It specifies to the operating system that it should open a file if it exists, otherwise it should create a new file.</p></li>
<li><p><b>Truncate</b>: It opens an existing file and truncates its size to zero bytes.</p></li>
</ul>
</td>
</tr>
<tr>
<td>FileAccess</td>
<td>
<p><b>FileAccess</b> enumerators have members: <b>Read</b>, <b>ReadWrite</b> and <b>Write</b>.</p>
</td>
</tr>
<tr>
<td>FileShare</td>
<td>
<p><b>FileShare</b> enumerators have the following members:</p>
<ul class="list">
<li><p><b>Inheritable</b>: It allows a file handle to pass inheritance to the child processes</p></li>
<li><p><b>None</b>: It declines sharing of the current file</p></li>
<li><p><b>Read</b>: It allows opening the file for reading </p></li>
<li><p><b>ReadWrite</b>: It allows opening the file for reading and writing</p></li>
<li><p><b>Write</b>: It allows opening the file for writing</p></li>
</ul>
</td>
</tr>
</tbody></table>
<h4>Example:</h4>
<p>The following program demonstrates use of the <b>FileStream </b>class:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Imports</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="pln">IO
</span><span class="typ">Module</span><span class="pln"> fileProg
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> f1 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">FileStream</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">FileStream</span><span class="pun">(</span><span class="str">"sample.txt"</span><span class="pun">,</span><span class="pln"> _
              </span><span class="typ">FileMode</span><span class="pun">.</span><span class="typ">OpenOrCreate</span><span class="pun">,</span><span class="pln"> </span><span class="typ">FileAccess</span><span class="pun">.</span><span class="typ">ReadWrite</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> i </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">20</span><span class="pln">
          f1</span><span class="pun">.</span><span class="typ">WriteByte</span><span class="pun">(</span><span class="typ">CByte</span><span class="pun">(</span><span class="pln">i</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Next</span><span class="pln"> i
      f1</span><span class="pun">.</span><span class="typ">Position</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">20</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"{0} "</span><span class="pun">,</span><span class="pln"> f1</span><span class="pun">.</span><span class="typ">ReadByte</span><span class="pun">())</span><span class="pln">
      </span><span class="typ">Next</span><span class="pln"> i
      f1</span><span class="pun">.</span><span class="typ">Close</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">1</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="lit">4</span><span class="pln"> </span><span class="lit">5</span><span class="pln"> </span><span class="lit">6</span><span class="pln"> </span><span class="lit">7</span><span class="pln"> </span><span class="lit">8</span><span class="pln"> </span><span class="lit">9</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="lit">11</span><span class="pln"> </span><span class="lit">12</span><span class="pln"> </span><span class="lit">13</span><span class="pln"> </span><span class="lit">14</span><span class="pln"> </span><span class="lit">15</span><span class="pln"> </span><span class="lit">16</span><span class="pln"> </span><span class="lit">17</span><span class="pln"> </span><span class="lit">18</span><span class="pln"> </span><span class="lit">19</span><span class="pln"> </span><span class="lit">20</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1</span></pre>
<h4>Advanced File Operations in VB.Net</h4>
<p>The preceding example provides simple file operations in VB.Net. However, to utilize the immense powers of System.IO classes, you need to know the commonly used properties and methods of these classes.</p>
<p>We will discuss these classes and the operations they perform in the following sections. Please click the links provided to get to the individual sections:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%;">Topic and Description</th>
</tr>
<tr>
<td><p>Reading from and Writing into Text files</a></p>
<p>It involves reading from and writing into text files. The <b>StreamReader</b> and <b>StreamWriter</b> classes help to accomplish it.</p></td>
</tr>
<tr>
<td><p>Reading from and Writing into Binary files</a></p>
<p>It involves reading from and writing into binary files. The <b>BinaryReader</b> and <b>BinaryWriter</b> classes help to accomplish this.</p>
</td>
</tr>
<tr>
<td><p>Manipulating the Windows file system</a></p>
<p>It gives a VB.Net programmer the ability to browse and locate Windows files and directories. </p>
</td>
</tr>
</tbody></table>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="294_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="296_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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