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
<title>JAVA Tutorials | knowledge.com</title>
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
	$sid=450;
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

<h4>Introduction</h4>
<p>The <b>Java.io.File</b> class is an abstract representation of file and directory pathnames. Following are the important points about File −</p>
<ul class="list">
<li><p>Instances may or may not denote an actual file-system object such as a file or a directory. If it does denote such an object then that object resides in a partition. A partition is an operating system-specific portion of storage for a file system.</p></li>
<li><p>A file system may implement restrictions to certain operations on the actual file-system object, such as reading, writing, and executing. These restrictions are collectively known as access permissions.</p></li>
<li><p>Instances of the File class are immutable; that is, once created, the abstract pathname represented by a File object will never change.</p></li>
</ul>
<h4>Class declaration</h4>
<p>Following is the declaration for <b>Java.io.File</b> class −</p>
<pre class="result notranslate">public class File
   extends Object
      implements Serializable, Comparable&lt;File&gt;
</pre>
<h4>Field</h4>
<p>Following are the fields for <b>Java.io.File</b> class −</p>
<ul class="list">
<li><p><b>static String pathSeparator</b> − This is the system-dependent path-separator character, represented as a string for convenience.</p></li>
<li><p><b>static char pathSeparatorChar</b> − This is the system-dependent path-separator character.</p></li>
<li><p><b>static String separator</b> − This is the system-dependent default name-separator character, represented as a string for convenience.</p></li>
<li><p><b>static char separatorChar</b> − This is the system-dependent default name-separator character.</p></li>
</ul>	
<h4>Class constructors</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Constructor &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>File(File parent, String child)</b></p>
<p>This method creates a new File instance from a parent abstract pathname and a child pathname string.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td><p><b>File(String pathname)</b></p>
<p>This method creates a new File instance by converting the given pathname string into an abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td><p><b>File(String parent, String child)</b></p>
<p>This method creates a new File instance from a parent pathname string and a child pathname string.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td><p><b>File(URI uri)</b></p>
<p>This method Creates a new File instance by converting the given file : URI into an abstract pathname.</p></td>
</tr>
</tbody></table>
<h4>Class methods</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Method &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>boolean canExecute()
<p>This method tests whether the application can execute the file denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td>boolean canRead()
<p>This method tests whether the application can read the file denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td>boolean canWrite()
<p>This method tests whether the application can modify the file denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td>int compareTo(File pathname)
<p>This method compares two abstract pathnames lexicographically.</p></td>
</tr>
<tr>
<td class="ts">5</td>
<td>boolean createNewFile()
<p>This method atomically creates a new, empty file named by this abstract pathname if and only if a file with this name does not yet exist.</p></td>
</tr>
<tr>
<td class="ts">6</td>
<td>static File createTempFile(String prefix, String suffix) 
<p>This method creates an empty file in the default temporary-file directory, using the given prefix and suffix to generate its name.</p></td>
</tr>
<tr>
<td class="ts">7</td>
<td>static File createTempFile(String prefix, String suffix, File directory)
<p>This method Creates a new empty file in the specified directory, using the given prefix and suffix strings to generate its name.</p></td>
</tr>
<tr>
<td class="ts">8</td>
<td>boolean delete()
<p>This method deletes the file or directory denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">9</td>
<td>void deleteOnExit()
<p>This method requests that the file or directory denoted by this abstract pathname be deleted when the virtual machine terminates.</p></td>
</tr>
<tr>
<td class="ts">10</td>
<td>boolean equals(Object obj)
<p>This method tests this abstract pathname for equality with the given object.</p></td>
</tr>
<tr>
<td class="ts">11</td>
<td>boolean exists()
<p>This method tests whether the file or directory denoted by this abstract pathname exists.</p></td>
</tr>
<tr>
<td class="ts">12</td>
<td>File getAbsoluteFile()
<p>This method returns the absolute form of this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">13</td>
<td>String getAbsolutePath()
<p>This method returns the absolute pathname string of this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">14</td>
<td>File getCanonicalFile()
<p>This method returns the canonical form of this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">15</td>
<td>String getCanonicalPath()
<p>This method returns the canonical pathname string of this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">16</td>
<td>long getFreeSpace()
<p>This method returns the number of unallocated bytes in the partition named by this abstract path name.</p></td>
</tr>
<tr>
<td class="ts">17</td>
<td>String getName()
<p>This method returns the name of the file or directory denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">18</td>
<td>String getParent()
<p>This method returns the pathname string of this abstract pathname's parent, or null if this pathname does not name a parent directory.</p></td>
</tr>
<tr>
<td class="ts">19</td>
<td>File getParentFile()
<p>This method returns the abstract pathname of this abstract pathname's parent, or null if this pathname does not name a parent directory.</p></td>
</tr>
<tr>
<td class="ts">20</td>
<td>String getPath()
<p>This method converts this abstract pathname into a pathname string.</p></td>
</tr>
<tr>
<td class="ts">21</td>
<td>long getTotalSpace()
<p>This method returns the size of the partition named by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">22</td>
<td>long getUsableSpace()
<p>This method returns the number of bytes available to this virtual machine on the partition named by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">23</td>
<td>int hashCode()
<p>This method computes a hash code for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">24</td>
<td>boolean isAbsolute()
<p>This method tests whether this abstract pathname is absolute.</p></td>
</tr>
<tr>
<td class="ts">25</td>
<td>boolean isDirectory()
<p>This method tests whether the file denoted by this abstract pathname is a directory.</p></td>
</tr>
<tr>
<td class="ts">26</td>
<td>boolean isFile()
<p>This method tests whether the file denoted by this abstract pathname is a normal file.</p></td>
</tr>
<tr>
<td class="ts">27</td>
<td>boolean isHidden()
<p>This method tests whether the file named by this abstract pathname is a hidden file.</p></td>
</tr>
<tr>
<td class="ts">28</td>
<td>long lastModified()
<p>This method returns the time that the file denoted by this abstract pathname was last modified.</p></td>
</tr>
<tr>
<td class="ts">29</td>
<td>long length()</a>
<p>This method returns the length of the file denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">30</td>
<td>String[] list()</a>
<p>This method returns an array of strings naming the files and directories in the directory denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">31</td>
<td>String[] list(FilenameFilter filter)</a>
<p>This method returns an array of strings naming the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.</p></td>
</tr>
<tr>
<td class="ts">32</td>
<td>File[] listFiles()</a>
<p>This method returns an array of abstract pathnames denoting the files in the directory denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">33</td>
<td>File[] listFiles(FileFilter filter)</a>
<p>This method returns an array of abstract pathnames denoting the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.</p></td>
</tr>
<tr>
<td class="ts">34</td>
<td>File[] listFiles(FilenameFilter filter)</a>
<p>This method returns an array of abstract pathnames denoting the files and directories in the directory denoted by this abstract pathname that satisfy the specified filter.</p></td>
</tr>
<tr>
<td class="ts">35</td>
<td>static File[] listRoots()</a>
<p>This method lists the available filesystem roots.</p></td>
</tr>
<tr>
<td class="ts">36</td>
<td>boolean mkdir()</a>
<p>This method creates the directory named by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">37</td>
<td>boolean mkdirs()</a>
<p>This method creates the directory named by this abstract pathname, including any necessary but non existent parent directories.</p></td>
</tr>
<tr>
<td class="ts">38</td>
<td>boolean renameTo(File dest)</a>
<p>This method renames the file denoted by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">39</td>
<td>boolean setExecutable(boolean executable)</a>
<p>This is a convenience method to set the owner's execute permission for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">40</td>
<td>boolean setExecutable(boolean executable, boolean ownerOnly)</a>
<p>This method Sets the owner's or everybody's execute permission for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">41</td>
<td>boolean setLastModified(long time)</a>
<p>This method sets the last-modified time of the file or directory named by this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">42</td>
<td>boolean setReadable(boolean readable)</a>
<p>This is a convenience method to set the owner's read permission for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">43</td>
<td>boolean setReadable(boolean readable, boolean ownerOnly) </a>
<p>This method sets the owner's or everybody's read permission for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">44</td>
<td>boolean setReadOnly()</a>
<p>This method marks the file or directory named by this abstract pathname so that only read operations are allowed.</p></td>
</tr>
<tr>
<td class="ts">45</td>
<td>boolean setWritable(boolean writable)</a>
<p>This is a convenience method to set the owner's write permission for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">46</td>
<td>boolean setWritable(boolean writable, boolean ownerOnly) </a>
<p>This method sets the owner's or everybody's write permission for this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">47</td>
<td>String toString()</a>
<p>This method returns the pathname string of this abstract pathname.</p></td>
</tr>
<tr>
<td class="ts">48</td>
<td>URI toURI()</a>
<p>This method constructs a file : URI that represents this abstract pathname.</p></td>
</tr>
</tbody></table>
<h4>Methods inherited</h4>
<p>This class inherits methods from the following classes −</p>
<ul class="list">
<li>Java.io.Object</li>
</ul>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="449_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="451_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'java_header.php'; ?></aside>
 
  
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