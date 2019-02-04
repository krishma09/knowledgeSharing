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
	$sid=339;
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
<p>A Process Scheduler schedules different processes to be assigned to the CPU based on particular scheduling algorithms. There are six popular process scheduling algorithms which we are going to discuss in this chapter −</p>
<ul class="list">
<li>First-Come, First-Served (FCFS) Scheduling</li>
<li>Shortest-Job-Next (SJN) Scheduling</li>
<li>Priority Scheduling</li>
<li>Shortest Remaining Time</li>
<li>Round Robin(RR) Scheduling</li>
<li>Multiple-Level Queues Scheduling</li>
</ul>
<p>These algorithms are either <b>non-preemptive or preemptive</b>. Non-preemptive
algorithms are designed so that once a process enters the running state, it cannot be preempted until it completes its allotted time, whereas the preemptive scheduling is based on priority where a scheduler may preempt a low priority running process anytime when a high priority process enters into a ready state.</p>
<h4>First Come First Serve (FCFS)</h4>
<ul class="list">
<li>Jobs are executed on first come, first serve basis.</li>
<li>It is a non-preemptive, pre-emptive scheduling algorithm.</li>
<li>Easy to understand and implement.</li>
<li>Its implementation is based on FIFO queue.</li>
<li>Poor in performance as average wait time is high.</li>
</ul>
<img src="images/fcfs.jpg" alt="First Come First Serve Scheduling Algorithm">
<p><b>Wait time</b> of each process is as follows −</p>
<table style="text-align:center" class="table table-bordered">
<tbody><tr>
<th style="width:10%;">Process</th>
<th style="text-align:center">Wait Time : Service Time - Arrival Time</th>
</tr>
<tr>
<td>P0</td>
<td>0 - 0 = 0</td>
</tr>
<tr>
<td>P1</td>
<td>5 - 1 = 4</td>
</tr>
<tr>
<td>P2</td>
<td>8 - 2 = 6</td>
</tr>
<tr>
<td>P3</td>
<td>16 - 3 = 13</td>
</tr>
</tbody></table>
<p>Average Wait Time: (0+4+6+13) / 4 = 5.75</p>
<h4>Shortest Job Next (SJN)</h4>
<ul class="list">
<li><p>This is also known as <b>shortest job first</b>, or SJF</p></li>
<li><p>This is a non-preemptive, pre-emptive scheduling algorithm.</p></li>
<li><p>Best approach to minimize waiting time.</p></li>
<li><p>Easy to implement in Batch systems where required CPU time is known in advance.</p></li>
<li><p>Impossible to implement in interactive systems where required CPU time is not known.</p></li>
<li><p>The processer should know in advance how much time process will take.</p></li>
</ul>
<p><b>Wait time</b> of each process is as follows −</p>
<table style="text-align:center" class="table table-bordered">
<tbody><tr>
<th style="width:10%; text-align:center">Process</th>
<th style="text-align:center">Wait Time : Service Time - Arrival Time</th>
</tr>
<tr>
<td>P0</td>
<td>3 - 0 = 3</td>
</tr>
<tr>
<td>P1</td>
<td>0 - 0 = 0</td>
</tr>
<tr>
<td>P2</td>
<td>16 - 2 = 14</td>
</tr>
<tr>
<td>P3</td>
<td>8 - 3 = 5</td>
</tr>
</tbody></table>
<p>Average Wait Time: (3+0+14+5) / 4 = 5.50</p>
<h4>Priority Based Scheduling</h4><ul class="list">
<li><p>Priority scheduling is a non-preemptive algorithm and one of the most common scheduling algorithms in batch systems.</p></li>
<li><p>Each process is assigned a priority. Process with highest priority is to be executed first and so on.</p></li>
<li><p>Processes with same priority are executed on first come first served basis.</p></li>
<li><p>Priority can be decided based on memory requirements, time requirements or any other resource requirement.</p></li>
</ul>
<img src="images/priority_scheduling.jpg" alt="Priority Scheduling Algorithm">
<table style="text-align:center" class="table table-bordered">
<tbody><tr>
<th style="width:10%; text-align:center">Process</th>
<th style="text-align:center">Wait Time : Service Time - Arrival Time</th>
</tr>
<tr>
<td>P0</td>
<td>9 - 0 = 9</td>
</tr>
<tr>
<td>P1</td>
<td>6 - 1 = 5</td>
</tr>
<tr>
<td>P2</td>
<td>14 - 2 = 12</td>
</tr>
<tr>
<td>P3</td>
<td>0 - 0 = 0</td>
</tr>
</tbody></table>
<p>Average Wait Time: (9+5+12+0) / 4 = 6.5</p>
<h4>Shortest Remaining Time</h4>
<ul class="list">
<li><p>Shortest remaining time (SRT) is the preemptive version of the SJN algorithm.</p></li>
<li><p>The processor is allocated to the job closest to completion but it can be preempted by a newer ready job with shorter time to completion.</p></li>
<li><p>Impossible to implement in interactive systems where required CPU time is not known.</p></li>
<li><p>It is often used in batch environments where short jobs need to give preference.</p></li>
</ul>
<h4>Round Robin Scheduling</h4>
<ul class="list">
<li><p>Round Robin is the preemptive process scheduling algorithm.</p></li>
<li><p>Each process is provided a fix time to execute, it is called a <b>quantum</b>.</p></li>
<li><p>Once a process is executed for a given time period, it is preempted and other process executes for a given time period.</p></li>
<li><p>Context switching is used to save states of preempted processes.</p></li>
</ul>
<img src="images/round_robin.jpg" alt="Round Robin Scheduling Algorithm">
<p><b>Wait time</b> of each process is as follows −</p>
<table style="text-align:center" class="table table-bordered">
<tbody><tr>
<th style="width:10%; text-align:center">Process</th>
<th style="text-align:center">Wait Time : Service Time - Arrival Time</th>
</tr>
<tr>
<td>P0</td>
<td>(0 - 0) + (12 - 3) = 9</td>
</tr>
<tr>
<td>P1</td>
<td>(3 - 1) = 2</td>
</tr>
<tr>
<td>P2</td>
<td>(6 - 2) + (14 - 9) + (20 - 17) = 12</td>
</tr>
<tr>
<td>P3</td>
<td>(9 - 3) + (17 - 12) = 11</td>
</tr>
</tbody></table>
<p>Average Wait Time: (9+2+12+11) / 4 = 8.5</p>
<h4>Multiple-Level Queues Scheduling</h4>
<p>Multiple-level queues are not an independent scheduling algorithm. They make use of other existing algorithms to group and schedule jobs with common characteristics.</p>
<ul class="list">
<li>Multiple queues are maintained for processes with common characteristics.</li>
<li>Each queue can have its own scheduling algorithms.</li>
<li>Priorities are assigned to each queue.</li>
</ul>
<p>For example, CPU-bound jobs can be scheduled in one queue and all I/O-bound jobs in another queue. The Process Scheduler then alternately selects jobs from each queue and assigns them to the CPU based on the algorithm assigned to the queue.</p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="338_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="340_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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