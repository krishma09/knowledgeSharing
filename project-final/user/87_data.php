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
	$sid=87;
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



<p>In this chapter, we will discuss Variables in Pl/SQL. A variable is nothing but a name given to a storage area that our programs can manipulate. Each variable in PL/SQL has a specific data type, which determines the size and the layout of the variable's memory; the range of values that can be stored within that memory and the set of operations that can be applied to the variable.</p>
<p>The name of a PL/SQL variable consists of a letter optionally followed by more letters, numerals, dollar signs, underscores, and number signs and should not exceed 30 characters. By default, variable names are not case-sensitive. You cannot use a reserved PL/SQL keyword as a variable name.</p> 
<p>PL/SQL programming language allows to define various types of variables, such as date time data types, records, collections, etc. which we will cover in subsequent chapters. For this chapter, let us study only basic variable types.</p>
<h4>Variable Declaration in PL/SQL</h4>
<p>PL/SQL variables must be declared in the declaration section or in a package as a global variable. When you declare a variable, PL/SQL allocates memory for the variable's value and the storage location is identified by the variable name.</p>
<p>The syntax for declaring a variable is −</p>
<pre class="result notranslate">variable_name [CONSTANT] datatype [NOT NULL] [:= | DEFAULT initial_value] 
</pre>
<p>Where, <i>variable_name</i> is a valid identifier in PL/SQL, <i>datatype</i> must be a valid PL/SQL data type or any user defined data type which we already have discussed in the last chapter. Some valid variable declarations along with their definition are shown below −</p>
<pre class="result notranslate">sales number(10, 2); 
pi CONSTANT double precision := 3.1415; 
name varchar2(25); 
address varchar2(100);
</pre>
<p>When you provide a size, scale or precision limit with the data type, it is called a <b>constrained declaration</b>. Constrained declarations require less memory than unconstrained declarations. For example −</p>
<pre class="result notranslate">sales number(10, 2); 
name varchar2(25); 
address varchar2(100); 
</pre>
<h4>Initializing Variables in PL/SQL</h4>
<p>Whenever you declare a variable, PL/SQL assigns it a default value of NULL. If you want to initialize a variable with a value other than the NULL value, you can do so during the declaration, using either of the following −</p>
<ul class="list">
<li><p>The <b>DEFAULT</b> keyword</p></li>
<li><p>The <b>assignment</b> operator</p></li>
</ul>
<p>For example −</p>
<pre class="result notranslate">counter binary_integer := 0; 
greetings varchar2(20) DEFAULT 'Have a Good Day';
</pre>
<p>You can also specify that a variable should not have a <b>NULL</b> value using the <b>NOT NULL</b> constraint. If you use the NOT NULL constraint, you must explicitly assign an initial value for that variable.</p>
<p>It is a good programming practice to initialize variables properly otherwise, sometimes programs would produce unexpected results. Try the following example which makes use of various types of variables −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   a integer </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln"> 
   b integer </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln"> 
   c integer</span><span class="pun">;</span><span class="pln"> 
   f real</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   c </span><span class="pun">:=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">;</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Value of c: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c</span><span class="pun">);</span><span class="pln"> 
   f </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">70.0</span><span class="pun">/</span><span class="lit">3.0</span><span class="pun">;</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Value of f: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> f</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln">  </span></pre>
<p>When the above code is executed, it produces the following result −</p>
<pre class="result notranslate">Value of c: 30 
Value of f: 23.333333333333333333  

PL/SQL procedure successfully completed. 
</pre>
<h4>Variable Scope in PL/SQL</h4>
<p>PL/SQL allows the nesting of blocks, i.e., each program block may contain another inner block. If a variable is declared within an inner block, it is not accessible to the outer block. However, if a variable is declared and accessible to an outer block, it is also accessible to all nested inner blocks. There are two types of variable scope −</p>
<ul class="list">
<li><p><b>Local variables</b> − Variables declared in an inner block and not accessible to outer blocks.</p></li>
<li><p><b>Global variables</b> − Variables declared in the outermost block or a package.</p></li>
</ul>
<p>Following example shows the usage of <b>Local</b> and <b>Global</b> variables in its simple form −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   </span><span class="pun">--</span><span class="pln"> </span><span class="typ">Global</span><span class="pln"> variables  
   num1 number </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">95</span><span class="pun">;</span><span class="pln">  
   num2 number </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">85</span><span class="pun">;</span><span class="pln">  
</span><span class="kwd">BEGIN</span><span class="pln">  
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Outer Variable num1: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> num1</span><span class="pun">);</span><span class="pln"> 
   dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Outer Variable num2: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> num2</span><span class="pun">);</span><span class="pln"> 
   DECLARE  
      </span><span class="pun">--</span><span class="pln"> </span><span class="typ">Local</span><span class="pln"> variables 
      num1 number </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">195</span><span class="pun">;</span><span class="pln">  
      num2 number </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">185</span><span class="pun">;</span><span class="pln">  
   </span><span class="kwd">BEGIN</span><span class="pln">  
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Inner Variable num1: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> num1</span><span class="pun">);</span><span class="pln"> 
      dbms_output</span><span class="pun">.</span><span class="pln">put_line</span><span class="pun">(</span><span class="str">'Inner Variable num2: '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> num2</span><span class="pun">);</span><span class="pln"> 
   </span><span class="kwd">END</span><span class="pun">;</span><span class="pln">  
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln"> </span></pre>
<p>When the above code is executed, it produces the following result −</p>
<pre class="result notranslate">Outer Variable num1: 95 
Outer Variable num2: 85 
Inner Variable num1: 195 
Inner Variable num2: 185  

PL/SQL procedure successfully completed. 
</pre>
<h4>Assigning SQL Query Results to PL/SQL Variables</h4>
<p>You can use the <b>SELECT INTO</b> statement of SQL to assign values to PL/SQL variables. For each item in the <b>SELECT list</b>, there must be a corresponding, type-compatible variable in the <b>INTO list</b>. The following example illustrates the concept. Let us create a table named CUSTOMERS −</p>
<p>(<b>For SQL statements, please refer to the <a href="/sql/index.htm">SQL tutorial</a></b>)</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">CREATE TABLE CUSTOMERS</span><span class="pun">(</span><span class="pln"> 
   ID   INT NOT NULL</span><span class="pun">,</span><span class="pln"> 
   NAME VARCHAR </span><span class="pun">(</span><span class="lit">20</span><span class="pun">)</span><span class="pln"> NOT NULL</span><span class="pun">,</span><span class="pln"> 
   AGE INT NOT NULL</span><span class="pun">,</span><span class="pln"> 
   ADDRESS CHAR </span><span class="pun">(</span><span class="lit">25</span><span class="pun">),</span><span class="pln"> 
   SALARY   DECIMAL </span><span class="pun">(</span><span class="lit">18</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">),</span><span class="pln">        
   PRIMARY KEY </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">)</span><span class="pln"> 
</span><span class="pun">);</span><span class="pln">  

</span><span class="typ">Table</span><span class="pln"> </span><span class="typ">Created</span><span class="pln">  </span></pre>
<p>Let us now insert some values in the table −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Ramesh'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">32</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Ahmedabad'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2000.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln">  

INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Khilan'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">25</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Delhi'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln">  

INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="str">'kaushik'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">23</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Kota'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2000.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
  
INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Chaitali'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">25</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Mumbai'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">6500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln"> 
 
INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">5</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Hardik'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">27</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Bhopal'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">8500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln">  

INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">6</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Komal'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln"> </span><span class="str">'MP'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln"> </span></pre>
<p>The following program assigns values from the above table to PL/SQL variables using the <b>SELECT INTO clause</b> of SQL −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">DECLARE 
   c_id customers</span><span class="pun">.</span><span class="pln">id</span><span class="pun">%</span><span class="pln">type </span><span class="pun">:=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln"> 
   c_name  customerS</span><span class="pun">.</span><span class="typ">No</span><span class="pun">.</span><span class="pln">ame</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
   c_addr customers</span><span class="pun">.</span><span class="pln">address</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
   c_sal  customers</span><span class="pun">.</span><span class="pln">salary</span><span class="pun">%</span><span class="pln">type</span><span class="pun">;</span><span class="pln"> 
</span><span class="kwd">BEGIN</span><span class="pln"> 
   SELECT name</span><span class="pun">,</span><span class="pln"> address</span><span class="pun">,</span><span class="pln"> salary INTO c_name</span><span class="pun">,</span><span class="pln"> c_addr</span><span class="pun">,</span><span class="pln"> c_sal 
   FROM customers 
   WHERE id </span><span class="pun">=</span><span class="pln"> c_id</span><span class="pun">;</span><span class="pln">  
   dbms_output</span><span class="pun">.</span><span class="pln">put_line 
   </span><span class="pun">(</span><span class="str">'Customer '</span><span class="pln"> </span><span class="pun">||</span><span class="pln">c_name </span><span class="pun">||</span><span class="pln"> </span><span class="str">' from '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c_addr </span><span class="pun">||</span><span class="pln"> </span><span class="str">' earns '</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> c_sal</span><span class="pun">);</span><span class="pln"> 
</span><span class="kwd">END</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">/</span><span class="pln">  </span></pre>
<p>When the above code is executed, it produces the following result −</p>
<pre class="result notranslate">Customer Ramesh from Ahmedabad earns 2000  

PL/SQL procedure completed successfully
</pre>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="86_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="88_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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