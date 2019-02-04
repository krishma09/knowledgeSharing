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
<title>C++ Tutorials | knowledge.com</title>
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
	$sid=255;
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
<p>Multithreading is a specialized form of multitasking and a multitasking is the feature that allows your computer to run two or more programs concurrently.  In general, there are two types of multitasking: process-based and thread-based.</p>
<p>Process-based multitasking handles the concurrent execution of programs. Thread-based multitasking deals with the concurrent execution of pieces of the same program.</p>
<p>A multithreaded program contains two or more parts that can run concurrently. Each part of such a program is called a thread, and each thread defines a separate path of execution.</p>
<p>C++ does not contain any built-in support for multithreaded applications. Instead, it relies entirely upon the operating system to provide this feature.</p>
<p>This tutorial assumes that you are working on Linux OS and we are going to write multi-threaded C++ program using POSIX. POSIX Threads, or Pthreads provides  API which are available on many Unix-like POSIX systems such as FreeBSD, NetBSD, GNU/Linux, Mac OS X and Solaris.</p>
<h4>Creating Threads</h4>
<p>There is following routine which we use to create a POSIX thread:</p>
<pre class="result notranslate">#include &lt;pthread.h&gt;
pthread_create (thread, attr, start_routine, arg) 
</pre>
<p>Here, <b>pthread_create</b> creates a new thread and makes it executable. This routine can be called any number of times from anywhere within your code. Here is the description of the parameters:</p>
<table class="table table-bordered">
<tbody><tr>
<th width="25%">Parameter</th>
<th>Description</th>
</tr>
<tr>
<td>thread</td>
<td>An opaque, unique identifier for the new thread returned by the subroutine.</td>
</tr>
<tr>
<td>attr</td>
<td>An opaque attribute object that may be used to set thread attributes. You can specify a thread attributes object, or NULL for the default values.</td>
</tr>
<tr>
<td>start_routine</td>
<td>The C++ routine that the thread will execute once it is created.</td>
</tr>
<tr>
<td>arg</td>
<td>A single argument that may be passed to start_routine. It must be passed by reference as a pointer cast of type void. NULL may be used if no argument is to be passed.</td>
</tr>
</tbody></table>
<p>The maximum number of threads that may be created by a process is implementation dependent. Once created, threads are peers, and may create other threads. There is no implied hierarchy or dependency between threads.</p>
<h4>Terminating Threads</h4>
<p>There is following routine which we use to terminate a POSIX thread:</p>
<pre class="result notranslate">#include &lt;pthread.h&gt;
pthread_exit (status) 
</pre>
<p>Here <b>pthread_exit</b> is used to explicitly exit a thread. Typically, the pthread_exit() routine is called after a thread has completed its work and is no longer required to exist.</p>
<p>If main() finishes before the threads it has created, and exits with pthread_exit(), the other threads will continue to execute. Otherwise, they will be automatically terminated when main() finishes.</p>
<h4>Example</h4>
<p>This simple example code creates 5 threads with the pthread_create() routine. Each thread prints a "Hello World!" message, and then terminates with a call to pthread_exit().</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cstdlib&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;pthread.h&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="com">#define</span><span class="pln"> NUM_THREADS     </span><span class="lit">5</span><span class="pln">

</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="typ">PrintHello</span><span class="pun">(</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="pln">threadid</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">long</span><span class="pln"> tid</span><span class="pun">;</span><span class="pln">
   tid </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">long</span><span class="pun">)</span><span class="pln">threadid</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Hello World! Thread ID, "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> tid </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   pthread_exit</span><span class="pun">(</span><span class="pln">NULL</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">pthread_t</span><span class="pln"> threads</span><span class="pun">[</span><span class="pln">NUM_THREADS</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> rc</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
	
   </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> NUM_THREADS</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"main() : creating thread, "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      rc </span><span class="pun">=</span><span class="pln"> pthread_create</span><span class="pun">(&amp;</span><span class="pln">threads</span><span class="pun">[</span><span class="pln">i</span><span class="pun">],</span><span class="pln"> NULL</span><span class="pun">,</span><span class="pln"> </span><span class="typ">PrintHello</span><span class="pun">,</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*)</span><span class="pln">i</span><span class="pun">);</span><span class="pln">
		
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">rc</span><span class="pun">){</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Error:unable to create thread,"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> rc </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">exit</span><span class="pun">(-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   pthread_exit</span><span class="pun">(</span><span class="pln">NULL</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Compile the following program using -lpthread library as follows:</p>
<pre class="result notranslate">$gcc test.cpp -lpthread
</pre>
<p>Now, execute your program which should generate result something as follows:</p>
<pre class="result notranslate">main() : creating thread, 0
main() : creating thread, 1
main() : creating thread, 2
main() : creating thread, 3
main() : creating thread, 4
Hello World! Thread ID, 0
Hello World! Thread ID, 1
Hello World! Thread ID, 2
Hello World! Thread ID, 3
Hello World! Thread ID, 4
</pre>
<h4>Passing Arguments to Threads</h4>
<p>This example shows how to pass multiple arguments via a structure. You can pass any data type in a thread callback because it points to void as explained in the following example:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cstdlib&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;pthread.h&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="com">#define</span><span class="pln"> NUM_THREADS     </span><span class="lit">5</span><span class="pln">

</span><span class="kwd">struct</span><span class="pln"> thread_data</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">  thread_id</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> </span><span class="pun">*</span><span class="pln">message</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="typ">PrintHello</span><span class="pun">(</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="pln">threadarg</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">struct</span><span class="pln"> thread_data </span><span class="pun">*</span><span class="pln">my_data</span><span class="pun">;</span><span class="pln">

   my_data </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">struct</span><span class="pln"> thread_data </span><span class="pun">*)</span><span class="pln"> threadarg</span><span class="pun">;</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Thread ID : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> my_data</span><span class="pun">-&gt;</span><span class="pln">thread_id </span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">" Message : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> my_data</span><span class="pun">-&gt;</span><span class="pln">message </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   pthread_exit</span><span class="pun">(</span><span class="pln">NULL</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">pthread_t</span><span class="pln"> threads</span><span class="pun">[</span><span class="pln">NUM_THREADS</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">struct</span><span class="pln"> thread_data td</span><span class="pun">[</span><span class="pln">NUM_THREADS</span><span class="pun">];</span><span class="pln">
	
   </span><span class="kwd">int</span><span class="pln"> rc</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> NUM_THREADS</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="str">"main() : creating thread, "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      td</span><span class="pun">[</span><span class="pln">i</span><span class="pun">].</span><span class="pln">thread_id </span><span class="pun">=</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
      td</span><span class="pun">[</span><span class="pln">i</span><span class="pun">].</span><span class="pln">message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This is message"</span><span class="pun">;</span><span class="pln">
      rc </span><span class="pun">=</span><span class="pln"> pthread_create</span><span class="pun">(&amp;</span><span class="pln">threads</span><span class="pun">[</span><span class="pln">i</span><span class="pun">],</span><span class="pln"> NULL</span><span class="pun">,</span><span class="pln"> </span><span class="typ">PrintHello</span><span class="pun">,</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*)&amp;</span><span class="pln">td</span><span class="pun">[</span><span class="pln">i</span><span class="pun">]);</span><span class="pln">
		
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">rc</span><span class="pun">){</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Error:unable to create thread,"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> rc </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">exit</span><span class="pun">(-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   pthread_exit</span><span class="pun">(</span><span class="pln">NULL</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">main() : creating thread, 0
main() : creating thread, 1
main() : creating thread, 2
main() : creating thread, 3
main() : creating thread, 4
Thread ID : 3 Message : This is message
Thread ID : 2 Message : This is message
Thread ID : 0 Message : This is message
Thread ID : 1 Message : This is message
Thread ID : 4 Message : This is message
</pre>
<h4>Joining and Detaching Threads</h4>
<p>There are following two routines which we can use to join or detach threads:</p>
<pre class="result notranslate">pthread_join (threadid, status) 
pthread_detach (threadid) 
</pre>
<p>The pthread_join() subroutine blocks the calling thread until the specified threadid thread terminates. When a thread is created, one of its attributes defines whether it is joinable or detached. Only threads that are created as joinable can be joined. If a thread is created as detached, it can never be joined.</p>
<p>This example demonstrates how to wait for thread completions by using the Pthread join routine.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cstdlib&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;pthread.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;unistd.h&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="com">#define</span><span class="pln"> NUM_THREADS     </span><span class="lit">5</span><span class="pln">

</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="pln">wait</span><span class="pun">(</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="pln">t</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">long</span><span class="pln"> tid</span><span class="pun">;</span><span class="pln">

   tid </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">long</span><span class="pun">)</span><span class="pln">t</span><span class="pun">;</span><span class="pln">

   sleep</span><span class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Sleeping in thread "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Thread with id : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> tid </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"  ...exiting "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   pthread_exit</span><span class="pun">(</span><span class="pln">NULL</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> rc</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
	
   </span><span class="typ">pthread_t</span><span class="pln"> threads</span><span class="pun">[</span><span class="pln">NUM_THREADS</span><span class="pun">];</span><span class="pln">
   </span><span class="typ">pthread_attr_t</span><span class="pln"> attr</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*</span><span class="pln">status</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// Initialize and set thread joinable</span><span class="pln">
   pthread_attr_init</span><span class="pun">(&amp;</span><span class="pln">attr</span><span class="pun">);</span><span class="pln">
   pthread_attr_setdetachstate</span><span class="pun">(&amp;</span><span class="pln">attr</span><span class="pun">,</span><span class="pln"> PTHREAD_CREATE_JOINABLE</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> NUM_THREADS</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"main() : creating thread, "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
      rc </span><span class="pun">=</span><span class="pln"> pthread_create</span><span class="pun">(&amp;</span><span class="pln">threads</span><span class="pun">[</span><span class="pln">i</span><span class="pun">],</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">attr</span><span class="pun">,</span><span class="pln"> wait</span><span class="pun">,</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">void</span><span class="pln"> </span><span class="pun">*)</span><span class="pln">i </span><span class="pun">);</span><span class="pln">
		
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">rc</span><span class="pun">){</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Error:unable to create thread,"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> rc </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">exit</span><span class="pun">(-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">

   </span><span class="com">// free attribute and wait for the other threads</span><span class="pln">
   pthread_attr_destroy</span><span class="pun">(&amp;</span><span class="pln">attr</span><span class="pun">);</span><span class="pln">
	
   </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> NUM_THREADS</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
      rc </span><span class="pun">=</span><span class="pln"> pthread_join</span><span class="pun">(</span><span class="pln">threads</span><span class="pun">[</span><span class="pln">i</span><span class="pun">],</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">status</span><span class="pun">);</span><span class="pln">
		
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">rc</span><span class="pun">){</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Error:unable to join,"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> rc </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">exit</span><span class="pun">(-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Main: completed thread id :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">;</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"  exiting with status :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> status </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Main: program exiting."</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   pthread_exit</span><span class="pun">(</span><span class="pln">NULL</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">main() : creating thread, 0
main() : creating thread, 1
main() : creating thread, 2
main() : creating thread, 3
main() : creating thread, 4
Sleeping in thread
Thread with id : 0 .... exiting
Sleeping in thread
Thread with id : 1 .... exiting
Sleeping in thread
Thread with id : 2 .... exiting
Sleeping in thread
Thread with id : 3 .... exiting
Sleeping in thread
Thread with id : 4 .... exiting
Main: completed thread id :0  exiting with status :0
Main: completed thread id :1  exiting with status :0
Main: completed thread id :2  exiting with status :0
Main: completed thread id :3  exiting with status :0
Main: completed thread id :4  exiting with status :0
Main: program exiting.
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="254_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="256_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c++header_header.php'; ?></aside>
 
  
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