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
	$sid=102;
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




<p>In this chapter, we will discuss the transactions in PL/SQL. A database <b>transaction</b> is an atomic unit of work that may consist of one or more related SQL statements. It is called atomic because the database modifications brought about by the SQL statements that constitute a transaction can collectively be either committed, i.e., made permanent to the database or rolled back (undone) from the database.</p>
<p>A successfully executed SQL statement and a committed transaction are not same. Even if an SQL statement is executed successfully, unless the transaction containing the statement is committed, it can be rolled back and all changes made by the statement(s) can be undone.</p>
<h4>Starting and Ending a Transaction</h4>
<p>A transaction has a <b>beginning</b> and an <b>end</b>. A transaction starts when one of the following events take place −</p>
<ul class="list">
<li><p>The first SQL statement is performed after connecting to the database.</p></li>
<li><p>At each new SQL statement issued after a transaction is completed.</p></li>
</ul>
<p>A transaction ends when one of the following events take place −</p>
<ul class="list">
<li><p>A <b>COMMIT</b> or a <b>ROLLBACK</b> statement is issued.</p></li>
<li><p>A <b>DDL</b> statement, such as <b>CREATE TABLE</b> statement, is issued; because in that case a COMMIT is automatically performed.</p></li>
<li><p>A <b>DCL</b> statement, such as a <b>GRANT</b> statement, is issued; because in that case a COMMIT is automatically performed.</p></li>
<li><p>User disconnects from the database.</p></li>
<li><p>User exits from <b>SQL*PLUS</b> by issuing the <b>EXIT</b> command, a COMMIT is automatically performed.</p></li>
<li><p>SQL*Plus terminates abnormally, a <b>ROLLBACK</b> is automatically performed.</p></li>
<li><p>A <b>DML</b> statement fails; in that case a ROLLBACK is automatically performed for undoing that DML statement.</p></li>
</ul>
<h4>Committing a Transaction</h4>
<p>A transaction is made permanent by issuing the SQL command COMMIT. The general syntax for the COMMIT command is −</p>
<pre class="result notranslate">COMMIT;
</pre>
<p>For example,</p>
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
VALUES </span><span class="pun">(</span><span class="lit">6</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Komal'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln"> </span><span class="str">'MP'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln"> 

COMMIT</span><span class="pun">;</span></pre>
<h4>Rolling Back Transactions</h4>
<p>Changes made to the database without COMMIT could be undone using the ROLLBACK command.</p>
<p>The general syntax for the ROLLBACK command is −</p>
<pre class="result notranslate">ROLLBACK [TO SAVEPOINT &lt; savepoint_name&gt;]; 
</pre>
<p>When a transaction is aborted due to some unprecedented situation, like system failure, the entire transaction since a commit is automatically rolled back. If you are not using <b>savepoint</b>, then simply use the following statement to rollback all the changes −</p>
<pre class="result notranslate">ROLLBACK;
</pre>
<h5>Savepoints</h5>
<p>Savepoints are sort of markers that help in splitting a long transaction into smaller units by setting some checkpoints. By setting savepoints within a long transaction, you can roll back to a checkpoint if required. This is done by issuing the <b>SAVEPOINT</b> command.</p>
<p>The general syntax for the SAVEPOINT command is −</p>
<pre class="result notranslate">ROLLBACK [TO SAVEPOINT &lt; savepoint_name&gt;]; 
</pre>
<p>When a transaction is aborted due to some unprecedented situation, like system failure, the entire transaction since a commit is automatically rolled back. If you are not using <b>savepoint</b>, then simply use the following statement to rollback all the changes −</p>
<pre class="result notranslate">ROLLBACK;
</pre>
<h5>Savepoints</h5>
<p>Savepoints are sort of markers that help in splitting a long transaction into smaller units by setting some checkpoints. By setting savepoints within a long transaction, you can roll back to a checkpoint if required. This is done by issuing the <b>SAVEPOINT</b> command.</p>
<p>The general syntax for the SAVEPOINT command is −</p>
<pre class="result notranslate">SAVEPOINT &lt; savepoint_name &gt;;
</pre>
<p>For example</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">7</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Rajnish'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">27</span><span class="pun">,</span><span class="pln"> </span><span class="str">'HP'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">9500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln"> 

INSERT INTO CUSTOMERS </span><span class="pun">(</span><span class="pln">ID</span><span class="pun">,</span><span class="pln">NAME</span><span class="pun">,</span><span class="pln">AGE</span><span class="pun">,</span><span class="pln">ADDRESS</span><span class="pun">,</span><span class="pln">SALARY</span><span class="pun">)</span><span class="pln"> 
VALUES </span><span class="pun">(</span><span class="lit">8</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Riddhi'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">21</span><span class="pun">,</span><span class="pln"> </span><span class="str">'WB'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4500.00</span><span class="pln"> </span><span class="pun">);</span><span class="pln"> 
SAVEPOINT sav1</span><span class="pun">;</span><span class="pln">
  
UPDATE CUSTOMERS 
SET SALARY </span><span class="pun">=</span><span class="pln"> SALARY </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1000</span><span class="pun">;</span><span class="pln"> 
ROLLBACK TO sav1</span><span class="pun">;</span><span class="pln">
  
UPDATE CUSTOMERS 
SET SALARY </span><span class="pun">=</span><span class="pln"> SALARY </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1000</span><span class="pln"> 
WHERE ID </span><span class="pun">=</span><span class="pln"> </span><span class="lit">7</span><span class="pun">;</span><span class="pln"> 
UPDATE CUSTOMERS 
SET SALARY </span><span class="pun">=</span><span class="pln"> SALARY </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1000</span><span class="pln"> 
WHERE ID </span><span class="pun">=</span><span class="pln"> </span><span class="lit">8</span><span class="pun">;</span><span class="pln"> 

COMMIT</span><span class="pun">;</span></pre>
<p><b>ROLLBACK TO sav1</b> − This statement rolls back all the changes up to the point, where you had marked savepoint sav1.</p>
<p>After that, the new changes that you make will start.</p>
<h4>Automatic Transaction Control</h4>
<p>To execute a <b>COMMIT</b> automatically whenever an <b>INSERT, UPDATE</b> or <b>DELETE</b> command is executed, you can set the <b>AUTOCOMMIT</b> environment variable as −</p>
<pre class="result notranslate">SET AUTOCOMMIT ON; 
</pre>
<p>You can turn-off the auto commit mode using the following command −</p>
<pre class="result notranslate">SET AUTOCOMMIT OFF;
</pre>
<pre class="result notranslate">SET AUTOCOMMIT OFF;
</pre>















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="101_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="103_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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