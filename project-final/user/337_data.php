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
<title>OS Tutorials | knowledge.com</title>
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
	$sid=337;
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


<h4>Process</h4>
<p>A process is basically a program in execution. The execution of a process must progress in a sequential fashion.</p>
A process is defined as an entity which represents the basic unit of work to be implemented in the system.<br><br>
<p>To put it in simple terms, we write our computer programs in a text file and when we execute this program, it becomes a process which performs all the tasks mentioned in the program.</p>
<p>When a program is loaded into the memory and it becomes a process, it can be divided into four sections ─ stack, heap, text and data. The following image shows a simplified layout of a process inside main memory −</p>
<img src="images/process_components.jpg" alt="Process Components">
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N.</th>
<th style="text-align:center">Component &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>Stack</b></p>
<p>The process Stack contains the temporary data such as method/function parameters, return address and local variables.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>Heap</b></p>
<p>This is dynamically allocated memory to a process during its run time.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>Text</b></p>
<p>This includes the current activity represented by the value of Program Counter and the contents of the processor's registers.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><b>Data</b></p>
<p>This section contains the global and static variables.</p>
</td>
</tr>
</tbody></table>
<h4>Program</h4>
<p>A program is a piece of code which may be a single line or millions of lines. A computer program is usually written by a computer programmer in a programming language. For example, here is a simple program written in C programming language −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Hello, World! \n"</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>A computer program is a collection of instructions that performs a specific task when executed by a computer. When we compare a program with a process, we can conclude that a process is a dynamic instance of a computer program.</p>
<p>A part of a computer program that performs a well-defined task is known as an <b>algorithm</b>. A collection of computer programs, libraries and related data are referred to as a <b>software</b>.</p>
<p>A part of a computer program that performs a well-defined task is known as an <b>algorithm</b>. A collection of computer programs, libraries and related data are referred to as a <b>software</b>.</p>
<h4>Process Life Cycle</h4>
<p> When a process executes, it passes through different states. These stages may differ in different operating systems, and the names of these states are also not standardized.</p>
<p>In general, a process can have one of the following five states at a time.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N.</th>
<th style="text-align:center">State &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Start</b></p>
<p>This is the initial state when a process is first started/created.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Ready</b></p>
<p>The process is waiting to be assigned to a processor. Ready processes are waiting to have the processor allocated to them by the operating system so that they can run. Process may come into this state after <b>Start</b> state or while running it by but interrupted by the scheduler to assign CPU to some other process.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>Running</b></p>
<p>Once the process has been assigned to a processor by the OS scheduler, the process state is set to running and the processor executes its instructions.</p></td>
</tr>
<tr>
<td>4</td>
<td><p><b>Waiting</b></p> 
<p>Process moves into the waiting state if it needs to wait for a resource, such as waiting for user input, or waiting for a file to become available.</p></td>
</tr>
<tr>
<td>5</td>
<td><p><b>Terminated or Exit</b></p>
<p>Once the process finishes its execution, or it is terminated by the operating system, it is moved to the terminated state where it waits to be removed from main memory.</p></td>
</tr>
</tbody></table>
<img src="images/process_state.jpg" alt="Process States">
<h4>Process Control Block (PCB)</h4>
<p>A Process Control Block is a data structure maintained by the Operating System for every process. The PCB is identified by an integer process ID (PID). A PCB keeps all the information needed to keep track of a process as listed below in the table −</p> 	
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N.</th>
<th style="text-align:center">Information &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>Process State</b></p>
<p>The current state of the process i.e., whether it is ready, running, waiting, or whatever.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>Process privileges</b></p>
<p>This is required to allow/disallow access to system resources.</p></td>
</tr>
<tr>
<td>3</td>
<td><p><b>Process ID</b></p>
<p>Unique identification for each of the process in the operating system.</p></td>
</tr>
<tr>
<td>4</td>
<td><p><b>Pointer</b></p>
<p>A pointer to parent process.</p></td>
</tr>
<tr>
<td>5</td>
<td><p><b>Program Counter</b></p>
<p>Program Counter is a pointer to the address of the next instruction to be executed for this process.</p></td>
</tr>
<tr>
<td>6</td>
<td><p><b>CPU registers</b></p>
<p>Various CPU registers where process need to be stored for execution for running state.</p></td>
</tr>
<tr>
<td>7</td>
<td><p><b>CPU Scheduling Information</b></p> 
<p>Process priority and other scheduling information  which is required to schedule the process.</p></td>
</tr>
<tr>
<td>8</td>
<td><p><b>Memory management information</b></p> 
<p>This includes the information of page table, memory limits, Segment table depending on memory used by the operating system.</p></td>
</tr>
<tr>
<td>9</td>
<td><p><b>Accounting information</b></p>
<p>This  includes the amount of CPU used for process execution, time limits, execution ID etc.</p></td>
</tr>
<tr>
<td>10</td>
<td><p><b>IO status information</b></p>
<p>This includes a list of I/O devices allocated to the process.</p></td>
</tr>
</tbody></table>
<p>The architecture of a PCB is completely dependent on Operating System and may contain different information in different operating systems. Here is a simplified diagram of a PCB −</p>
<img src="/operating_system/images/pcb.jpg" alt="Process Control Block">
<div class="sc_line sc_line_style_solid margin_top_3em"></div><p>The PCB is maintained for a process throughout its lifetime, and is deleted once the process terminates.</p>


<div class="row">
<a href="336_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="338_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'os_header.php'; ?></aside>
 
  
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