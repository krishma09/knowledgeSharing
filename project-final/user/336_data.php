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
	$sid=336;
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


<h4>Batch processing</h4>
<p>Batch processing is a technique in which an Operating System collects the programs and data together in a batch before processing starts. An operating system does the following activities related to batch processing −</p>
<ul class="list">
<li><p>The OS defines a job which has predefined sequence of commands, programs and data as a single unit.</p></li>
<li><p>The OS keeps a number a jobs in memory and executes them without any manual information.</p></li>
<li><p>Jobs are processed in the order of submission, i.e., first come first served fashion.</p></li>
<li><p>When a job completes its execution, its memory is released and the output for the job gets copied into an output spool for later printing or processing.</p></li>
</ul>
<img src="images/batch_processing.jpg" alt="Batch Processing">
<h5>Advantages</h5>
<ul class="list">
<li><p>Batch processing takes much of the work of the operator to the computer.</p></li>
<li><p>Increased performance as a new job get started as soon as the previous job is finished, without any manual intervention.</p></li>
</ul>
<h5>Disadvantages</h5>
<ul class="list">
<li>Difficult to debug program.</li>
<li>A job could enter an infinite loop.</li>
<li>Due to lack of protection scheme, one batch job can affect pending jobs.</li>
</ul>
<h4>Multitasking</h4>
<p>Multitasking is when multiple jobs are executed by the CPU simultaneously by switching between them. Switches occur so frequently that the users may interact with each program while it is running. An OS does the following activities related to multitasking −</p>
<ul class="list">
<li><p>The user gives instructions to the operating system or to a program directly, and receives an immediate response.</p></li>
<li><p>The OS handles multitasking in the way that it can handle multiple operations/executes multiple programs at a time.</p></li>
<li><p>Multitasking Operating Systems are also known as Time-sharing systems.</p></li>
<li><p>These Operating Systems were developed to provide interactive use of a computer system at a reasonable cost.</p></li>
<li><p>A time-shared operating system uses the concept of CPU scheduling and multiprogramming to provide each user with a small portion of a time-shared CPU.</p></li>
<li><p>Each user has at least one separate program in memory.</p></li>
</ul>
<img src="images/multitasking.jpg" alt="Multitasking">
<ul class="list">
<li><p>A program that is loaded into memory and is executing is commonly referred to as a <b>process</b>.</p></li>
<li><p>When a process executes, it typically executes for only a very short time before it either finishes or needs to perform I/O.</p></li>
<li><p>Since interactive I/O typically runs at slower speeds, it may take a long time to complete. During this time, a CPU can be utilized by another process.</p></li>
<li><p>The operating system allows the users to share the computer simultaneously. Since each action or command in a time-shared system tends to be short, only a little CPU time is needed for each user.</p></li>
<li><p>As the system switches CPU rapidly from one user/program to the next, each user is given the impression that he/she has his/her own CPU, whereas actually one CPU is being shared among many users.</p></li>
</ul>
<h4>Multiprogramming</h4>
<p>Sharing the processor, when two or more programs reside in memory at the same time, is referred as <b> multiprogramming</b>. Multiprogramming assumes a single shared processor. Multiprogramming increases CPU utilization by organizing jobs so that the CPU always has one to execute.</p>
<p>The following figure shows the memory layout for a multiprogramming system.</p>
<img src="images/memory_layout.jpg" alt="Memory layout">
<p>An OS does the following activities related to multiprogramming.</p>
<ul class="list">
<li><p>The operating system keeps several jobs in memory at a time.</p></li>
<li><p>This set of jobs is a subset of the jobs kept in the job pool.</p></li>
<li><p>The operating system picks and begins to execute one of the jobs in the memory.</p></li>
<li><p>Multiprogramming operating systems monitor the state of all active programs and system resources using memory management programs to ensures that the CPU is never idle, unless there are no jobs to process.</p></li>
</ul>
<h5>Advantages</h5>
<ul class="list">
<li>High and efficient CPU utilization.</li>
<li>User feels that many programs are allotted CPU almost simultaneously.</li>
</ul>
<h5>Disadvantages</h5>
<ul class="list">
<li>CPU scheduling is required.</li>
<li>To accommodate many jobs in memory, memory management is required.</li>
</ul>
<h4>Interactivity</h4>
<p>Interactivity refers to the ability of users to interact with a computer system. An Operating system does the following activities related to interactivity −</p>
<ul class="list">
<li>Provides the user an interface to interact with the system.</li>
<li>Manages input devices to take inputs from the user. For example, keyboard.</li>
<li>Manages output devices to show outputs to the user. For example, Monitor.</li>
</ul><p>The response time of the OS needs to be short, since the user submits and waits for the result.</p>

<h4>Real Time System</h4>
<p>Real-time systems are usually dedicated, embedded systems. An operating system does the following activities related to real-time system activity.</p>
<ul class="list">
<li>In such systems, Operating Systems typically read from and react to sensor data.</li> 
<li>The Operating system must guarantee response to events within fixed periods of time to ensure correct performance.</li>
</ul>
<h4>Distributed Environment </h4>
<p>A distributed environment refers to multiple independent CPUs or processors in a computer system. An operating system does the following activities related to distributed environment −</p>
<ul class="list">
<li><p>The OS distributes computation logics among several physical processors.</p></li>
<li><p>The processors do not share memory or a clock. Instead, each processor has its own local memory.</p></li>
<li><p>The OS manages the communications between the processors. They communicate with each other through various communication lines.</p></li>
</ul>
<ul class="list">
<li><p>The OS distributes computation logics among several physical processors.</p></li>
<li><p>The processors do not share memory or a clock. Instead, each processor has its own local memory.</p></li>
<li><p>The OS manages the communications between the processors. They communicate with each other through various communication lines.</p></li>
</ul>
<p>Spooling is an acronym for simultaneous peripheral operations on line. Spooling refers to putting data of various I/O jobs in a buffer. This buffer is a special area in memory or hard disk which is accessible to I/O devices.</p>
<p>An operating system does the following activities related to distributed environment −</p>
<ul class="list">
<li><p>Handles I/O device data spooling as devices have different data access rates.</p></li>
<li><p>Maintains the spooling buffer which provides a waiting station where data can rest while the slower device catches up.</p></li>
<li><p>Maintains parallel computation because of spooling process as a computer can perform I/O in parallel fashion. It becomes possible to have the computer read data from a tape, write data to disk and to write out to a tape printer while it is doing its computing task.</p></li>
</ul>
<img src="images/spooling.jpg" alt="Spooling">
<h5>Advantages</h5>
<ul class="list">
<li>The spooling operation uses a disk as a very large buffer.</li>
<li>Spooling is capable of overlapping I/O operation for one job with processor operations for another job.</li>
</ul>

</ul>
</strong>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="335_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="337_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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