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
	$sid=340;
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
<h4>What is Thread?</h4>
<p>A thread is a flow of execution through the process code, with its own program counter that keeps track of which instruction to execute next, system registers which hold its current working variables, and a stack which contains the execution history.</p>
<p>A thread shares with its peer threads few information like code segment, data segment and open files. When one thread alters a code segment memory item, all other threads see that.</p>
<p>A thread is also called a <b>lightweight process</b>. Threads provide a way to improve application performance through parallelism. Threads represent a software approach to improving performance of operating system by reducing the overhead thread is equivalent to a classical process.</p>
<p>Each thread belongs to exactly one process and no thread can exist outside a process. Each thread represents a separate flow of control. Threads have been successfully used in implementing network servers and web server. They also provide a suitable foundation for parallel execution of applications on shared memory multiprocessors. The following figure shows the working of a single-threaded and a multithreaded process.</p>
<img src="images/thread_processes.jpg" alt="Single vs Multithreaded Process">

<h4>Difference between Process and Thread</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N.</th>
<th style="width:45%;">Process</th>
<th>Thread</th>
</tr>
<tr>
<td>1</td>
<td>Process is heavy weight or resource intensive.</td>
<td>Thread is light weight, taking lesser resources than a process.</td>
</tr>
<tr>
<td>2</td>
<td>Process switching needs interaction with operating system.</td>
<td>Thread switching does not need to interact with operating system.</td>
</tr>
<tr>
<td>3</td>
<td>In multiple processing environments, each process executes the same code but has its own memory and file resources.</td>
<td>All threads can share same set of open files, child processes.</td>
</tr>
<tr>
<td>4</td>
<td>If one process is blocked, then no other process can execute until the first process is unblocked.</td>
<td>While one thread is blocked and waiting, a second thread in the same task can run.</td>
</tr>
<tr>
<td>5</td>
<td>Multiple processes without using threads use more resources.</td>
<td>Multiple threaded processes use fewer resources.</td>
</tr>
<tr>
<td>6</td>
<td>In multiple processes each process operates independently of the others.</td>
<td>One thread can read, write or change another thread's data.</td>
</tr>
</tbody></table>
<h4>Advantages of Thread</h4>
<ul class="list">
<li>Threads minimize the context switching time.</li>
<li>Use of threads provides concurrency within a process.</li>
<li>Efficient communication.</li>
<li>It is more economical to create and context switch threads.</li>
<li>Threads allow utilization of multiprocessor architectures to a greater scale and efficiency.</li>
</ul>
<h4>Types of Thread</h4>
<p>Threads are implemented in following two ways −</p>
<ul class="list">
<li><p><b>User Level Threads</b> − User managed threads.</p></li>
<li><p><b>Kernel Level Threads</b> − Operating System managed threads acting on kernel, an operating system core.</p></li>
</ul>
<h4>User Level Threads</h4>

<p>In this case, the thread management kernel is not aware of the existence of threads. The thread library contains code for creating and destroying threads, for passing message and data between threads, for scheduling thread execution and for saving and restoring thread contexts. The application starts with a single thread.</p>
<img src="images/user_threads.jpg" alt="User level thread">
<h5>Advantages</h5>
<ul class="list">
<li>Thread switching does not require Kernel mode privileges.</li>
<li>User level thread can run on any operating system.</li>
<li>Scheduling can be application specific in the user level thread.</li>
<li>User level threads are fast to create and manage.</li>
</ul>
<h5>Disadvantages</h5>
<ul class="list">
<li>In a typical operating system, most system calls are blocking.</li>
<li>Multithreaded application cannot take advantage of multiprocessing.</li>
</ul>
<h4>Kernel Level Threads</h4>
<p>In this case, thread management is done by the Kernel. There is no thread management code in the application area. Kernel threads are supported directly by the operating system. Any application can be programmed to be multithreaded. All of the threads within an application are supported within a single process.</p>
<p>The Kernel maintains context information for the process as a whole and for individuals threads within the process. Scheduling by the Kernel is done on a thread basis. The Kernel performs thread creation, scheduling and management in Kernel space. Kernel threads are generally slower to create and manage than the user threads.</p>
<h5>Advantages</h5>
<ul class="list">
<li>Thread switching does not require Kernel mode privileges.</li>
<li>User level thread can run on any operating system.</li>
<li>Scheduling can be application specific in the user level thread.</li>
<li>User level threads are fast to create and manage.</li>
</ul>
<h5>Disadvantages</h5>
<ul class="list">
<li>In a typical operating system, most system calls are blocking.</li>
<li>Multithreaded application cannot take advantage of multiprocessing.</li>
</ul>
<h4>Kernel Level Threads</h4>
<p>In this case, thread management is done by the Kernel. There is no thread management code in the application area. Kernel threads are supported directly by the operating system. Any application can be programmed to be multithreaded. All of the threads within an application are supported within a single process.</p>
<p>The Kernel maintains context information for the process as a whole and for individuals threads within the process. Scheduling by the Kernel is done on a thread basis. The Kernel performs thread creation, scheduling and management in Kernel space. Kernel threads are generally slower to create and manage than the user threads.</p>
<h5>Advantages</h5>
<ul class="list">
<li>Kernel can simultaneously schedule multiple threads from the same process on multiple processes.</li>
<li>If one thread in a process is blocked, the Kernel can schedule another thread of the same process.</li>
<li>Kernel routines themselves can be multithreaded.</li>
</ul>
<h5>Disadvantages</h5>
<ul class="list">
<li>Kernel threads are generally slower to create and manage than the user threads.</li>
<li>Transfer of control from one thread to another within the same process requires a mode switch to the Kernel.</li>
</ul>
<h4>Multithreading Models</h4>
<p>Some operating system provide a combined user level thread and Kernel level thread facility. Solaris is a good example of this combined approach. In a combined system, multiple threads within the same application can run in parallel on multiple processors and a blocking system call need not block the entire process. Multithreading models are three types</p>
<ul class="list">
<li>Many to many relationship.</li>
<li>Many to one relationship.</li>
<li>One to one relationship.</li>
</ul>
<h4>Many to Many Model</h4>
<p>The many-to-many model multiplexes any number of user threads onto an equal or smaller number of kernel threads.</p>
<p>The following diagram shows the many-to-many threading model where 6 user level threads are multiplexing with 6 kernel level threads. In this model, developers can create as many user threads as necessary and the corresponding Kernel threads can run in parallel on a multiprocessor machine. This model provides the best accuracy on concurrency and when a thread performs a blocking system call, the kernel can schedule another thread for execution.</p>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<img src="images/many_to_many.jpg" alt="Many to many thread model">
<h4>Many to One Model</h4>
<p>Many-to-one model maps many user level threads to one Kernel-level thread. Thread management is done in user space by the thread library. When thread makes a blocking system call, the entire process will be blocked. Only one thread can access the Kernel at a time, so multiple threads are unable to run in parallel on multiprocessors.</p>
<p>If the user-level thread libraries are implemented in the operating system in such a way that the system does not support them, then the Kernel threads use the many-to-one relationship modes.</p>
<img src="images/many_to_one.jpg" alt="Many to one thread model">
<h4>One to One Model</h4>
<p>There is one-to-one relationship of user-level thread to the kernel-level thread. This model provides more concurrency than the many-to-one model. It also allows another thread to run when a thread makes a blocking system call. It supports multiple threads to execute in parallel on microprocessors.</p>
<p>Disadvantage of this model is that creating user thread requires the corresponding Kernel thread. OS/2, windows NT and windows 2000 use one to one relationship model.</p>
<img src="images/one_to_one.jpg" alt="One to one thread model">
<h4>Difference between User-Level &amp; Kernel-Level Thread</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%; text-align:center">S.N.</th>
<th style="width:45%; text-align:center">User-Level Threads</th>
<th style="width:45%; text-align:center">Kernel-Level Thread</th>
</tr>
<tr>
<td>1</td>
<td>User-level threads are faster to create and manage.</td>
<td>Kernel-level threads are slower to create and manage.</td>
</tr>
<tr>
<td>2</td>
<td>Implementation is by a thread library at the user level.</td>
<td>Operating system supports creation of Kernel threads.</td>
</tr>
<tr>
<td>3</td>
<td>User-level thread is generic and can run on any operating system.</td>
<td>Kernel-level thread is specific to the operating system.</td>
</tr>
<tr>
<td>4</td>
<td>Multi-threaded applications cannot take advantage of multiprocessing.</td>
<td>Kernel routines themselves can be multithreaded.</td>
</tr>
</tbody></table>

<div class="row">
<a href="339_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="341_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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