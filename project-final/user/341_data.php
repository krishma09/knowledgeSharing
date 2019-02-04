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
	$sid=341;
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
<p>Memory management is the functionality of an operating system which handles or
manages primary memory and moves processes back and forth between main memory
and disk during execution. Memory management keeps track of each and every memory
location, regardless of either it is allocated to some process or it is free. It checks how much memory is to be allocated to processes. It decides which process will get memory at what time. It tracks whenever some memory gets freed or unallocated and correspondingly it updates the status.</p>
<p>This tutorial will teach you basic concepts related to Memory Management.</p>
<h4>Process Address Space</h4>
<p>The process address space is the set of logical addresses that a process references in its code. For example, when 32-bit addressing is in use, addresses can range from 0 to 0x7fffffff; that is, 2^31 possible numbers, for a total theoretical size of 2 gigabytes.</p>
<p>The operating system takes care of mapping the logical addresses to physical addresses at the time of memory allocation to the program. There are three types of addresses used in a program before and after memory is allocated −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center">Memory Addresses &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Symbolic addresses</b></p>
<p>The addresses used in a source code. The variable names, constants, and instruction labels are the basic elements of the symbolic address space.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Relative addresses</b></p>
<p>At the time of compilation, a compiler converts symbolic addresses into relative
addresses.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>Physical addresses</b></p>
<p>The loader generates these addresses at the time when a program is loaded into main memory.</p>
</td>
</tr>
</tbody></table>
<p>Virtual and physical addresses are the same in compile-time and load-time address-binding schemes. Virtual and physical addresses differ in execution-time address-binding scheme.</p>
<p>The set of all logical addresses generated by a program is referred to as a <b>logical address space</b>. The set of all physical addresses corresponding to these logical addresses is referred to as a <b>physical address space.</b></p>
<p>The runtime mapping from virtual to physical address is done by the memory management unit (MMU) which is a hardware device. MMU uses following mechanism to convert virtual address to physical address.</p>
<ul class="list">
<li><p>The value in the base register is added to every address generated by a user process, which is treated as offset at the time it is sent to memory. For example, if the base register value is 10000, then an attempt by the user to use address location 100 will be dynamically reallocated to location 10100.</p></li>
<li><p>The user program deals with virtual addresses; it never sees the real physical addresses.</p></li>
</ul>
<h4>Static vs Dynamic Loading</h4>
<p>The choice between Static or Dynamic Loading is to be made at the time of computer program being developed. If you have to load your program statically, then at the time of compilation, the complete programs will be compiled and linked without leaving any external program or module dependency. The linker combines the object program with other necessary object modules into an absolute program, which also includes logical addresses.</p>
<p>If you are writing a Dynamically loaded program, then your compiler will compile the program and for all the modules which you want to include dynamically, only references will be provided and rest of the work will be done at the time of execution.</p>
<p>At the time of loading, with <b>static loading</b>, the absolute program (and data) is loaded into memory in order for execution to start.</p>
<p>If you are using <b>dynamic loading</b>, dynamic routines of the library are stored on a disk in relocatable form and are loaded into memory only when they are needed by the program.</p>
<h4>Static vs Dynamic Linking</h4>
<p>As explained above, when static linking is used, the linker combines all other modules needed by a program into a single executable program to avoid any runtime dependency.</p>
<p>When dynamic linking is used, it is not required to link the actual module or library with the program, rather a reference to the dynamic module is provided at the time of compilation and linking. Dynamic Link Libraries (DLL) in Windows and Shared Objects in Unix are good examples of dynamic libraries.</p>
<h4>Swapping</h4>
<p>Swapping is a mechanism in which a process can be swapped temporarily out of main memory (or move) to secondary storage (disk) and make that memory available to other processes. At some later time, the system swaps back the process from the secondary storage to main memory.</p>
<p>Though performance is usually affected by swapping process but it helps in running multiple and big processes in parallel and that's the reason <b>Swapping is also known as a technique for memory compaction</b>.</p>
<img src="images/process_swapping.jpg" alt="Process Swapping">
<p>The total time taken by swapping process includes the time it takes to move the entire process to a secondary disk and then to copy the process back to memory, as well as the time the process takes to regain main memory.</p>
<p>Let us assume that the user process is of size 2048KB and on a standard hard disk where swapping will take place has a data transfer rate around 1 MB per second. The actual transfer of the 1000K process to or from memory will take</p>
<pre class="result notranslate">2048KB / 1024KB per second
= 2 seconds
= 2000 milliseconds
</pre>
<p>Now considering in and out time, it will take complete 4000 milliseconds plus other overhead where the process competes to regain main memory.</p>
<h4>Memory Allocation</h4>
<p>Main memory usually has two partitions −</p>
<ul class="list">
<li><p><b>Low Memory</b> − Operating system resides in this memory.</p></li>
<li><p><b>High Memory</b> − User processes are held in high memory.</p></li>
</ul>
<p>Operating system uses the following memory allocation mechanism.</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center">Memory Allocation &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>Single-partition allocation</b></p>
<p>In this type of allocation, relocation-register scheme is used to protect user processes from each other, and from changing operating-system code and data. Relocation register contains value of smallest physical address whereas limit register contains range of logical addresses. Each logical address must be less than the limit register.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>Multiple-partition allocation</b></p>
<p>In this type of allocation, main memory is divided into a number of fixed-sized
partitions where each partition should contain only one process. When a partition
is free, a process is selected from the input queue and is loaded into the free
partition. When the process terminates, the partition becomes available for
another process.</p></td>
</tr>
</tbody></table>
<h4>Fragmentation</h4>
<p>As processes are loaded and removed from memory, the free memory space is broken into little pieces. It happens after sometimes that processes cannot be allocated to memory blocks considering their small size and memory blocks remains unused. This problem is known as Fragmentation.</p>
<p>The following diagram shows how fragmentation can cause waste of memory and a compaction technique can be used to create more free memory out of fragmented memory −</p>
<img src="images/memory_fragmentation.jpg" alt="Memory Fragmentation">
<p>External fragmentation can be reduced by compaction or shuffle memory contents to place all free memory together in one large block. To make compaction feasible, relocation should be dynamic.</p>
<p>The internal fragmentation can be reduced by effectively assigning the smallest partition but large enough for the process.</p>
<h4>Paging</h4>
<p>A computer can address more memory than the amount physically installed on the system. This extra memory is actually called virtual memory and it is a section of a hard that's set up to emulate the computer's RAM. Paging technique plays an important role in implementing virtual memory.</p>
<p>Paging is a memory management technique in which process address space is broken into blocks of the same size called <b>pages</b> (size is power of 2, between 512 bytes and 8192 bytes). The size of the process is measured in the number of pages.</p>
<p>Similarly, main memory is divided into small fixed-sized blocks of (physical) memory called <b>frames</b> and the size of a frame is kept the same as that of a page to have optimum utilization of the main memory and to avoid external fragmentation.</p>
<img src="images/paging.jpg" alt="Paging">
<h5>Address Translation</h5>
<p>Page address is called <b>logical address</b> and represented by <b>page number</b> and the <b>offset</b>.</p>
<pre class="result notranslate">Logical Address = Page number + page offset
</pre>
<p>Frame address is called <b>physical address</b> and represented by a <b>frame number</b> and the <b>offset</b>.</p>
<pre class="result notranslate">2048KB / 1024KB per second
= 2 seconds
= 2000 milliseconds
</pre>
<p>Now considering in and out time, it will take complete 4000 milliseconds plus other overhead where the process competes to regain main memory.</p>
<h4>Memory Allocation</h4>
<p>Main memory usually has two partitions −</p>
<ul class="list">
<li><p><b>Low Memory</b> − Operating system resides in this memory.</p></li>
<li><p><b>High Memory</b> − User processes are held in high memory.</p></li>
</ul>
<ul class="list">
<li><p><b>Low Memory</b> − Operating system resides in this memory.</p></li>
<li><p><b>High Memory</b> − User processes are held in high memory.</p></li>
</ul>


<p>Operating system uses the following memory allocation mechanism.</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center">Memory Allocation &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>Single-partition allocation</b></p>
<p>In this type of allocation, relocation-register scheme is used to protect user processes from each other, and from changing operating-system code and data. Relocation register contains value of smallest physical address whereas limit register contains range of logical addresses. Each logical address must be less than the limit register.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>Multiple-partition allocation</b></p>
<p>In this type of allocation, main memory is divided into a number of fixed-sized
partitions where each partition should contain only one process. When a partition
is free, a process is selected from the input queue and is loaded into the free
partition. When the process terminates, the partition becomes available for
another process.</p></td>
</tr>
</tbody></table>
<h4>Fragmentation</h4>
<p>As processes are loaded and removed from memory, the free memory space is broken into little pieces. It happens after sometimes that processes cannot be allocated to memory blocks considering their small size and memory blocks remains unused. This problem is known as Fragmentation.</p>
<p>Fragmentation is of two types −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center">Fragmentation &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>External fragmentation</b></p>
<p>Total memory space is enough to satisfy a request or to reside a process in it, but it is not contiguous, so it cannot be used.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>Internal fragmentation</b></p>
<p>Memory block assigned to process is bigger. Some portion of memory is left unused, as it cannot be used by another process.</p></td>
</tr>
</tbody></table>
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center">Fragmentation &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>External fragmentation</b></p>
<p>Total memory space is enough to satisfy a request or to reside a process in it, but it is not contiguous, so it cannot be used.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>Internal fragmentation</b></p>
<p>Memory block assigned to process is bigger. Some portion of memory is left unused, as it cannot be used by another process.</p></td>
</tr>
</tbody>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center">Fragmentation &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>External fragmentation</b></p>
<p>Total memory space is enough to satisfy a request or to reside a process in it, but it is not contiguous, so it cannot be used.</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>Internal fragmentation</b></p>
<p>Memory block assigned to process is bigger. Some portion of memory is left unused, as it cannot be used by another process.</p></td>
</tr>
</tbody></table>
<p>The following diagram shows how fragmentation can cause waste of memory and a compaction technique can be used to create more free memory out of fragmented memory −</p>
<img src="images/memory_fragmentation.jpg" alt="Memory Fragmentation">
<p>External fragmentation can be reduced by compaction or shuffle memory contents to place all free memory together in one large block. To make compaction feasible, relocation should be dynamic.</p>
<p>The internal fragmentation can be reduced by effectively assigning the smallest partition but large enough for the process.</p>
<h4>Paging</h4>
<p>A computer can address more memory than the amount physically installed on the system. This extra memory is actually called virtual memory and it is a section of a hard that's set up to emulate the computer's RAM. Paging technique plays an important role in implementing virtual memory.</p>
<p>Paging is a memory management technique in which process address space is broken into blocks of the same size called <b>pages</b> (size is power of 2, between 512 bytes and 8192 bytes). The size of the process is measured in the number of pages.</p>
<p>Similarly, main memory is divided into small fixed-sized blocks of (physical) memory called <b>frames</b> and the size of a frame is kept the same as that of a page to have optimum utilization of the main memory and to avoid external fragmentation.</p>
<img src="images/paging.jpg" alt="Paging">
<h5>Address Translation</h5>
<p>Page address is called <b>logical address</b> and represented by <b>page number</b> and the <b>offset</b>.</p>
<pre class="result notranslate">Logical Address = Page number + page offset
</pre>
<p>Frame address is called <b>physical address</b> and represented by a <b>frame number</b> and the <b>offset</b>.</p>
<pre class="result notranslate">Physical Address = Frame number + page offset
</pre>
<p>A data structure called <b>page map table</b> is used to keep track of the relation between a page of a process to a frame in physical memory.</p>
<img src="images/page_map_table.jpg" alt="Page Map Table">
<p>When the system allocates a frame to any page, it translates this logical address into a physical address and create entry into the page table to be used throughout execution of the program.</p>
<p>When a process is to be executed, its corresponding pages are loaded into any available memory frames. Suppose you have a program of 8Kb but your memory can accommodate only 5Kb at a given point in time, then the paging concept will come into picture. When a computer runs out of RAM, the operating system (OS) will move idle or unwanted pages of memory to secondary memory to free up RAM for other processes and brings them back when needed by the program.</p>
<p>This process continues during the whole execution of the program where the OS keeps removing idle pages from the main memory and write them onto the secondary memory and bring them back when required by the program.</p>
<h5>Advantages and Disadvantages of Paging</h5>
<p>Here is a list of advantages and disadvantages of paging −</p>
<ul class="list">
<li><p>Paging reduces external fragmentation, but still suffer from internal fragmentation.</p></li>
<li><p>Paging is simple to implement and assumed as an efficient memory management technique.</p></li>
<li><p>Due to equal size of the pages and frames, swapping becomes very easy.</p></li>
<li><p>Page table requires extra memory space, so may not be good for a system having small RAM.</p></li>
</ul>
<h4>Segmentation</h4>
<p>Segmentation is a memory management technique in which each job is divided into several segments of different sizes, one for each module that contains pieces that perform related functions. Each segment is actually a different logical address space of the program.</p>
<p>When a process is to be executed, its corresponding segmentation are loaded into non-contiguous memory though every segment is loaded into a contiguous block of available memory.</p>
<p>Segmentation memory management works very similar to paging but here segments are of variable-length where as in paging pages are of fixed size.</p>

<p>A program segment contains the program's main function, utility functions, data structures, and so on. The operating system maintains a <b>segment map table</b> for every process and a list of free memory blocks along with segment numbers, their size and corresponding memory locations in main memory. For each segment, the table stores the starting address of the segment and the length of the segment. A reference to a memory location includes a value that identifies a segment and an offset.</p>
<img src="images/segment_map_table.jpg" alt="Segment Map Table">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="340_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="342_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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