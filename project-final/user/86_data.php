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
<title>PL/SQL Tutorials | knowledge.com</title>
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
	$sid=86;
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





<p>In this chapter, we will discuss the Data Types in PL/SQL. The PL/SQL variables, constants and parameters must have a valid data type, which specifies a storage format, constraints, and a valid range of values. We will focus on the <b>SCALAR</b> and the <b>LOB</b> data types in this chapter. The other two data types will be covered in other chapters.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Category &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>Scalar</b></p>
<p>Single values with no internal components, such as a <b>NUMBER, DATE,</b> or <b>BOOLEAN</b>.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>Large Object (LOB)</b></p>
<p>Pointers to large objects that are stored separately from other data items, such as text, graphic images, video clips, and sound waveforms.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>Composite</b></p>
<p>Data items that have internal components that can be accessed individually. For example, collections and records.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>Reference</b></p>
<p>Pointers to other data items.</p></td>
</tr>
</tbody></table>
<h4>PL/SQL Scalar Data Types and Subtypes</h4>
<p>PL/SQL Scalar Data Types and Subtypes come under the following categories −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Date Type &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>Numeric</b></p>
<p>Numeric values on which arithmetic operations are performed.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>Character</b></p>
<p>Alphanumeric values that represent single characters or strings of characters.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>Boolean</b></p>
<p>Logical values on which logical operations are performed.</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>Datetime</b></p>
<p>Dates and times.</p></td>
</tr>
</tbody></table>
<p>PL/SQL provides subtypes of data types. For example, the data type NUMBER has a subtype called INTEGER. You can use the subtypes in your PL/SQL program to make the data types compatible with data types in other programs while embedding the PL/SQL code in another program, such as a Java program.</p>
<h4>PL/SQL Numeric Data Types and Subtypes</h4>
<p>Following table lists out the PL/SQL pre-defined numeric data types and their sub-types −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Data Type &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>PLS_INTEGER</b></p>
<p>Signed integer in range -2,147,483,648 through 2,147,483,647, represented in 32 bits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>BINARY_INTEGER</b></p>
<p>Signed integer in range -2,147,483,648 through 2,147,483,647, represented in 32 bits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>BINARY_FLOAT</b></p>
<p>Single-precision IEEE 754-format floating-point number</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>BINARY_DOUBLE</b></p>
<p>Double-precision IEEE 754-format floating-point number</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">5</td>
<td><p><b>NUMBER(prec, scale)</b></p>
<p>Fixed-point or floating-point number with absolute value in range 1E-130 to (but not including) 1.0E126. A NUMBER variable can also represent 0</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">6</td>
<td><p><b>DEC(prec, scale)</b></p>
<p>ANSI specific fixed-point type with maximum precision of 38 decimal digits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">7</td>
<td><p><b>DECIMAL(prec, scale)</b></p>
<p>IBM specific fixed-point type with maximum precision of 38 decimal digits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">8</td>
<td><p><b>NUMERIC(pre, secale)</b></p>
<p>Floating type with maximum precision of 38 decimal digits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">9</td>
<td><p><b>DOUBLE PRECISION</b></p>
<p>ANSI specific floating-point type with maximum precision of 126 binary digits (approximately 38 decimal digits)</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">10</td>
<td><p><b>FLOAT</b></p>
<p>ANSI and IBM specific floating-point type with maximum precision of 126 binary digits (approximately 38 decimal digits)</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">11</td>
<td><p><b>INT</b></p>
<p>ANSI specific integer type with maximum precision of 38 decimal digits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">12</td>
<td><p><b>INTEGER</b></p>
<p>ANSI and IBM specific integer type with maximum precision of 38 decimal digits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">13</td>
<td><p><b>SMALLINT</b></p>
<p>ANSI and IBM specific integer type with maximum precision of 38 decimal digits</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">14</td>
<td><p><b>REAL</b></p>
<p>Floating-point type with maximum precision of 63 binary digits (approximately 18 decimal digits)</p></td>
</tr>
</tbody></table>
<p>Following is a valid declaration −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   num1 INTEGER</span><span class="pun">;</span><span class="pln"> 
   num2 REAL</span><span class="pun">;</span><span class="pln"> 
   num3 DOUBLE PRECISION</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   </span><span class="kwd">null</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">PL</span><span class="pun">/</span><span class="pln">SQL procedure successfully completed </span></pre>
<h4>PL/SQL Character Data Types and Subtypes</h4>
<p>Following is the detail of PL/SQL pre-defined character data types and their sub-types −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No</th>
<th style="text-align:center;">Data Type &amp; Description</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">1</td>
<td><p><b>CHAR</b></p>
<p>Fixed-length character string with maximum size of 32,767 bytes</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">2</td>
<td><p><b>VARCHAR2</b></p>
<p>Variable-length character string with maximum size of 32,767 bytes</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">3</td>
<td><p><b>RAW</b></p>
<p>Variable-length binary or byte string with maximum size of 32,767 bytes, not interpreted by PL/SQL</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">4</td>
<td><p><b>NCHAR</b></p>
<p>Fixed-length national character string with maximum size of 32,767 bytes</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">5</td>
<td><p><b>NVARCHAR2</b></p>
<p>Variable-length national character string with maximum size of 32,767 bytes</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">6</td>
<td><p><b>LONG</b></p>
<p>Variable-length character string with maximum size of 32,760 bytes</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">7</td>
<td><p><b>LONG RAW</b></p>
<p>Variable-length binary or byte string with maximum size of 32,760 bytes, not interpreted by PL/SQL</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">8</td>
<td><p><b>ROWID</b></p>
<p>Physical row identifier, the address of a row in an ordinary table</p></td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">9</td>
<td><p><b>UROWID</b></p>
<p>Universal row identifier (physical, logical, or foreign row identifier)</p></td>
</tr>
</tbody></table>
<h4>PL/SQL Boolean Data Types</h4>
<p>The <b>BOOLEAN</b> data type stores logical values that are used in logical operations. The logical values are the Boolean values <b>TRUE</b> and <b>FALSE</b> and the value <b>NULL</b>.</p>
<p>However, SQL has no data type equivalent to BOOLEAN. Therefore, Boolean values cannot be used in − </p>
<ul class="list">
<li>SQL statements</li>
<li>Built-in SQL functions (such as <b>TO_CHAR</b>)</li>
<li>PL/SQL functions invoked from SQL statements</li>
</ul>
<h4>PL/SQL Datetime and Interval Types</h4>
<p>The <b>DATE</b> datatype is used to store fixed-length datetimes, which include the time of day in seconds since midnight. Valid dates range from January 1, 4712 BC to December 31, 9999 AD.</p>
<p>The default date format is set by the Oracle initialization parameter NLS_DATE_FORMAT. For example, the default might be 'DD-MON-YY', which includes a two-digit number for the day of the month, an abbreviation of the month name, and the last two digits of the year. For example, 01-OCT-12.</p>
<p>Each DATE includes the century, year, month, day, hour, minute, and second. The following table shows the valid values for each field −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Field Name</th>
<th style="text-align:center;">Valid Datetime Values</th>
<th style="text-align:center;">Valid Interval Values</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">YEAR</td>
<td>-4712 to 9999 (excluding year 0)</td>
<td style="vertical-align:middle;">Any nonzero integer</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">MONTH</td>
<td>01 to 12</td>
<td>0 to 11</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">DAY</td>
<td>01 to 31 (limited by the values of MONTH and YEAR, according to the rules of the calendar for the locale)</td>
<td style="vertical-align:middle;">Any nonzero integer</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">HOUR</td>
<td>00 to 23</td>
<td>0 to 23</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">MINUTE</td>
<td>00 to 59</td>
<td>0 to 59</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">SECOND</td>
<td>00 to 59.9(n), where 9(n) is the precision of time fractional seconds</td>
<td>0 to 59.9(n), where 9(n) is the precision of interval fractional seconds</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_HOUR</td>
<td>-12 to 14 (range accommodates daylight savings time changes)</td>
<td style="vertical-align:middle;">Not applicable</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_MINUTE</td>
<td>00 to 59</td>
<td style="vertical-align:middle;">Not applicable</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_REGION</td>
<td>Found in the dynamic performance view V$TIMEZONE_NAMES</td>
<td style="vertical-align:middle;">Not applicable</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">TIMEZONE_ABBR</td>
<td>Found in the dynamic performance view V$TIMEZONE_NAMES</td>
<td style="vertical-align:middle;">Not applicable</td>
</tr>
</tbody></table>
<h4>PL/SQL Large Object (LOB) Data Types</h4>
<p>Large Object (LOB) data types refer to large data items such as text, graphic images, video clips, and sound waveforms. LOB data types allow efficient, random, piecewise access to this data. Following are the predefined PL/SQL LOB data types −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center; width:20%">Data Type</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;">Size</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">BFILE</td>
<td>Used to store large binary objects in operating system files outside the database.</td>
<td>System-dependent. Cannot exceed 4 gigabytes (GB).</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">BLOB</td>
<td>Used to store large binary objects in the database.</td>
<td>8 to 128 terabytes (TB)</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">CLOB</td>
<td>Used to store large blocks of character data in the database.</td>
<td>8 to 128 TB</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">NCLOB</td>
<td>Used to store large blocks of NCHAR data in the database.</td>
<td>8 to 128 TB</td>
</tr>
</tbody></table>
<h4>PL/SQL User-Defined Subtypes</h4>
<p>A subtype is a subset of another data type, which is called its base type. A subtype has the same valid operations as its base type, but only a subset of its valid values.</p>
<p>PL/SQL predefines several subtypes in package <b>STANDARD</b>. For example, PL/SQL predefines the subtypes <b>CHARACTER</b> and <b>INTEGER</b> as follows −</p>
<pre class="result notranslate">SUBTYPE CHARACTER IS CHAR; 
SUBTYPE INTEGER IS NUMBER(38,0);
</pre>
<p>You can define and use your own subtypes. The following program illustrates defining and using a user-defined subtype −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   SUBTYPE name IS </span><span class="kwd">char</span><span class="pun">(</span><span class="lit">20</span><span class="pun">);</span><span class="pln"> 
   SUBTYPE message IS varchar2</span><span class="pun">(</span><span class="lit">100</span><span class="pun">);</span><span class="pln"> 
   salutation name</span><span class="pun">;</span><span class="pln"> 
   greetings message</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   salutation </span><span class="pun">:=</span><span class="pln"> </span><span class="str">'Reader '</span><span class="pun">;</span><span class="pln"> 
   greetings </span><span class="pun">:=</span><span class="pln"> </span><span class="str">'Welcome to the World of PL/SQL'</span><span class="pun">;</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Hello '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> salutation </span><span class="pun">||</span><span class="pln"> greetings</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed at the SQL prompt, it produces the following result −</p>
<pre class="result notranslate">Hello Reader Welcome to the World of PL/SQL 
 
PL/SQL procedure successfully completed. 
</pre>
<h4>NULLs in PL/SQL</h4>
<p>PL/SQL NULL values represent <b>missing</b> or <b>unknown data</b> and they are not an integer, a character, or any other specific data type. Note that <b>NULL</b> is not the same as an empty data string or the null character value <b>'\0'</b>. A null can be assigned but it cannot be equated with anything, including itself.</p>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="85_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="87_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'plsql_header.php'; ?>
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