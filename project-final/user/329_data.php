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
<title>ASP.NET Tutorials | knowledge.com</title>
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
	$sid=329;
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

<p>A thread is defined as the execution path of a program. Each thread defines a unique flow of control. If your application involves complicated and time consuming operations such as database access or some intense I/O operations, then it is often helpful to set different execution paths or threads, with each thread performing a particular job.</p>
<p>Threads are lightweight processes. One common example of use of thread is implementation of concurrent programming by modern operating systems. Use of threads saves wastage of CPU cycle and increases efficiency of an application.</p>
<p>So far we compiled programs where a single thread runs as a single process which is the running instance of the application. However, this way the application can perform one job at a time. To make it execute multiple tasks at a time, it could be divided into smaller threads.</p>
<p>In .Net, the threading is handled through the 'System.Threading' namespace. Creating a variable of the <i>System.Threading.Thread</i> type allows you to create a new thread to start working with. It allows you to create and access individual threads in a program.</p>
<h4>Creating Thread</h4>
<p>A thread is created by creating a Thread object, giving its constructor a ThreadStart reference.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">ThreadStart</span><span class="pln"> childthreat </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ThreadStart</span><span class="pun">(</span><span class="pln">childthreadcall</span><span class="pun">);</span></pre>

<h4>Thread Life Cycle</h4>
<p>The life cycle of a thread starts when an object of the System.Threading.Thread class is created and ends when the thread is terminated or completes execution.</p>
<p>Following are the various states in the life cycle of a thread:</p>
<ul class="list">
<li><p><b>The Unstarted State</b> : It is the situation when the instance of the thread is created but the Start method is not called.</p></li>
<li><p><b>The Ready State</b> : It is the situation when the thread is ready to execute and waiting CPU cycle.</p></li>
<li><p><b>The Not Runnable State</b> : a thread is not runnable, when:</p>
<ul class="list">
<li>Sleep method has been called</li>
<li>Wait method has been called</li>
<li>Blocked by I/O operations</li>
</ul>
</li>
<li><p><b>The Dead State</b> : It is the situation when the thread has completed execution or has been aborted.</p></li>
</ul>
<h4>Thread Priority</h4>
<p>The Priority property of the Thread class specifies the priority of one thread with respect to other. The .Net runtime selects the ready thread with the highest priority.</p>
<p>The priorities could be categorized as:</p>
<ul class="list">
<li>Above normal</li>
<li>Below normal</li>
<li>Highest</li>
<li>Lowest</li>
<li>Normal</li>
</ul>

<p>Once a thread is created, its priority is set using the Priority property of the thread class.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">NewThread</span><span class="pun">.</span><span class="typ">Priority</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">ThreadPriority</span><span class="pun">.</span><span class="typ">Highest</span><span class="pun">;</span></pre>
<h4>Thread Properties &amp; Methods</h4>
<p>The Thread class has the following important properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property</th>
<th>Description</th>
</tr>
<tr>
<td>CurrentContext</td>
<td>Gets the current context in which the thread is executing.</td>
</tr>
<tr>
<td>CurrentCulture</td>
<td>Gets or sets the culture for the current thread.</td>
</tr>
<tr>
<td>CurrentPrinciple</td>
<td>Gets or sets the thread's current principal for role-based security.</td>
</tr>
<tr>
<td>CurrentThread</td>
<td>Gets the currently running thread.</td>
</tr>
<tr>
<td>CurrentUICulture</td>
<td>Gets or sets the current culture used by the Resource Manager to look up culture-specific resources at run time.</td>
</tr>
<tr>
<td>ExecutionContext</td>
<td>Gets an ExecutionContext object that contains information about the various contexts of the current thread.</td>
</tr>
<tr>
<td>IsAlive</td>
<td>Gets a value indicating the execution status of the current thread.</td>
</tr>
<tr>
<td>IsBackground</td>
<td>Gets or sets a value indicating whether or not a thread is a background thread.</td>
</tr>
<tr>
<td>IsThreadPoolThread</td>
<td>Gets a value indicating whether or not a thread belongs to the managed thread pool.</td>
</tr>
<tr>
<td>ManagedThreadId</td>
<td>Gets a unique identifier for the current managed thread.</td>
</tr>
<tr>
<td>Name</td>
<td>Gets or sets the name of the thread.</td>
</tr>
<tr>
<td>Priority</td>
<td>Gets or sets a value indicating the scheduling priority of a thread.</td>
</tr>
<tr>
<td>ThreadState</td>
<td>Gets a value containing the states of the current thread.</td>
</tr>
</tbody></table>
<p>The Thread class has the following important methods:</p>
<p>The Thread class has the following important methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>Abort</td>
<td>Raises a ThreadAbortException in the thread on which it is invoked, to begin the process of terminating the thread. Calling this method usually terminates the thread.</td>
</tr>
<tr>
<td>AllocateDataSlot</td>
<td>Allocates an unnamed data slot on all the threads. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>AllocateNamedDataSlot</td>
<td>Allocates a named data slot on all threads. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>BeginCriticalRegion</td>
<td>Notifies a host that execution is about to enter a region of code in which the effects of a thread abort or unhandled exception might endanger other tasks in the application domain.</td>
</tr>
<tr>
<td>BeginThreadAffinity</td>
<td>Notifies a host that managed code is about to execute instructions that depend on the identity of the current physical operating system thread.</td>
</tr>
<tr>
<td>EndCriticalRegion</td>
<td>Notifies a host that execution is about to enter a region of code in which the effects of a thread abort or unhandled exception are limited to the current task.</td>
</tr>
<tr>
<td>EndThreadAffinity</td>
<td>Notifies a host that managed code has finished executing instructions that depend on the identity of the current physical operating system thread.</td>
</tr>
<tr>
<td>FreeNamedDataSlot</td>
<td>Eliminates the association between a name and a slot, for all threads in the process. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>GetData</td>
<td>Retrieves the value from the specified slot on the current thread, within the current thread's current domain. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>GetDomain</td>
<td>Returns the current domain in which the current thread is running.</td>
</tr>
<tr>
<td>GetDomainID</td>
<td>Returns a unique application domain identifier.</td>
</tr>
<tr>
<td>GetNamedDataSlot</td>
<td>Looks up a named data slot. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>Interrupt </td>
<td>Interrupts a thread that is in the WaitSleepJoin thread state.</td>
</tr>
<tr>
<td>Join </td>
<td>Blocks the calling thread until a thread terminates, while continuing to perform standard COM and SendMessage pumping. This method has different overloaded forms.</td>
</tr>
<tr>
<td>MemoryBarrier</td>
<td>Synchronizes memory access as follows: The processor executing the current thread cannot reorder instructions in such a way that memory accesses prior to the call to MemoryBarrier execute after memory accesses that follow the call to MemoryBarrier.</td>
</tr>
<tr>
<td>ResetAbort</td>
<td>Cancels an Abort requested for the current thread.</td>
</tr>
<tr>
<td>SetData</td>
<td>Sets the data in the specified slot on the currently running thread, for that thread's current domain. For better performance, use fields marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>Start</td>
<td>Starts a thread.</td>
</tr>
<tr>
<td>Sleep</td>
<td>Makes the thread pause for a period of time.</td>
</tr>
<tr>
<td>SpinWait</td>
<td>Causes a thread to wait the number of times defined by the iterations parameter.</td>
</tr>
<tr>
<td>VolatileRead()</td>
<td>Reads the value of a field. The value is the latest written by any processor in a computer, regardless of the number of processors or the state of processor cache. This method has different overloaded forms.</td>
</tr>
<tr>
<td>VolatileWrite()</td>
<td>Writes a value to a field immediately, so that the value is visible to all processors in the computer. This method has different overloaded forms.</td>
</tr>
<tr>
<td>Yield </td>
<td>Causes the calling thread to yield execution to another thread that is ready to run on the current processor. The operating system selects the thread to yield to.</td>
</tr>
</tbody></table>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>Abort</td>
<td>Raises a ThreadAbortException in the thread on which it is invoked, to begin the process of terminating the thread. Calling this method usually terminates the thread.</td>
</tr>
<tr>
<td>AllocateDataSlot</td>
<td>Allocates an unnamed data slot on all the threads. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>AllocateNamedDataSlot</td>
<td>Allocates a named data slot on all threads. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>BeginCriticalRegion</td>
<td>Notifies a host that execution is about to enter a region of code in which the effects of a thread abort or unhandled exception might endanger other tasks in the application domain.</td>
</tr>
<tr>
<td>BeginThreadAffinity</td>
<td>Notifies a host that managed code is about to execute instructions that depend on the identity of the current physical operating system thread.</td>
</tr>
<tr>
<td>EndCriticalRegion</td>
<td>Notifies a host that execution is about to enter a region of code in which the effects of a thread abort or unhandled exception are limited to the current task.</td>
</tr>
<tr>
<td>EndThreadAffinity</td>
<td>Notifies a host that managed code has finished executing instructions that depend on the identity of the current physical operating system thread.</td>
</tr>
<tr>
<td>FreeNamedDataSlot</td>
<td>Eliminates the association between a name and a slot, for all threads in the process. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>GetData</td>
<td>Retrieves the value from the specified slot on the current thread, within the current thread's current domain. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>GetDomain</td>
<td>Returns the current domain in which the current thread is running.</td>
</tr>
<tr>
<td>GetDomainID</td>
<td>Returns a unique application domain identifier.</td>
</tr>
<tr>
<td>GetNamedDataSlot</td>
<td>Looks up a named data slot. For better performance, use fields that are marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>Interrupt </td>
<td>Interrupts a thread that is in the WaitSleepJoin thread state.</td>
</tr>
<tr>
<td>Join </td>
<td>Blocks the calling thread until a thread terminates, while continuing to perform standard COM and SendMessage pumping. This method has different overloaded forms.</td>
</tr>
<tr>
<td>MemoryBarrier</td>
<td>Synchronizes memory access as follows: The processor executing the current thread cannot reorder instructions in such a way that memory accesses prior to the call to MemoryBarrier execute after memory accesses that follow the call to MemoryBarrier.</td>
</tr>
<tr>
<td>ResetAbort</td>
<td>Cancels an Abort requested for the current thread.</td>
</tr>
<tr>
<td>SetData</td>
<td>Sets the data in the specified slot on the currently running thread, for that thread's current domain. For better performance, use fields marked with the ThreadStaticAttribute attribute instead.</td>
</tr>
<tr>
<td>Start</td>
<td>Starts a thread.</td>
</tr>
<tr>
<td>Sleep</td>
<td>Makes the thread pause for a period of time.</td>
</tr>
<tr>
<td>SpinWait</td>
<td>Causes a thread to wait the number of times defined by the iterations parameter.</td>
</tr>
<tr>
<td>VolatileRead()</td>
<td>Reads the value of a field. The value is the latest written by any processor in a computer, regardless of the number of processors or the state of processor cache. This method has different overloaded forms.</td>
</tr>
<tr>
<td>VolatileWrite()</td>
<td>Writes a value to a field immediately, so that the value is visible to all processors in the computer. This method has different overloaded forms.</td>
</tr>
<tr>
<td>Yield </td>
<td>Causes the calling thread to yield execution to another thread that is ready to run on the current processor. The operating system selects the thread to yield to.</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>The following example illustrates the uses of the Thread class. The page has a label control for displaying messages from the child thread. The messages from the main program are directly displayed using the Response.Write() method. Hence they appear on the top of the page.</p>
<p>The source file is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"threaddemo._Default"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">
         Untitled Page
      </span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
            </span><span class="tag">&lt;h5&gt;</span><span class="pln">Thread Example</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblmessage"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Label"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind file is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Collections</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Configuration</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Data</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Security</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">HtmlControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">.</span><span class="typ">WebParts</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Xml</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Threading</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">namespace</span><span class="pln"> threaddemo
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">ThreadStart</span><span class="pln"> childthreat </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ThreadStart</span><span class="pun">(</span><span class="pln">childthreadcall</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">Response</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Child Thread Started &lt;br/&gt;"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">Thread</span><span class="pln"> child </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Thread</span><span class="pun">(</span><span class="pln">childthreat</span><span class="pun">);</span><span class="pln">
         
         child</span><span class="pun">.</span><span class="typ">Start</span><span class="pun">();</span><span class="pln">
         
         </span><span class="typ">Response</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Main sleeping  for 2 seconds.......&lt;br/&gt;"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">Thread</span><span class="pun">.</span><span class="typ">Sleep</span><span class="pun">(</span><span class="lit">2000</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">Response</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"&lt;br/&gt;Main aborting child thread&lt;br/&gt;"</span><span class="pun">);</span><span class="pln">
         
         child</span><span class="pun">.</span><span class="typ">Abort</span><span class="pun">();</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> childthreadcall</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;Child thread started &lt;br/&gt;"</span><span class="pun">;</span><span class="pln">
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"Child Thread: Coiunting to 10"</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="lit">10</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="typ">Thread</span><span class="pun">.</span><span class="typ">Sleep</span><span class="pun">(</span><span class="lit">500</span><span class="pun">);</span><span class="pln">
               lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"&lt;br/&gt; in Child thread &lt;/br&gt;"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"&lt;br/&gt; child thread finished"</span><span class="pun">;</span><span class="pln">
            
         </span><span class="pun">}</span><span class="kwd">catch</span><span class="pun">(</span><span class="typ">ThreadAbortException</span><span class="pln"> e</span><span class="pun">){</span><span class="pln">
         
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"&lt;br /&gt; child thread - exception"</span><span class="pun">;</span><span class="pln">
            
         </span><span class="pun">}</span><span class="kwd">finally</span><span class="pun">{</span><span class="pln">
            lblmessage</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="str">"&lt;br /&gt; child thread - unable to catch the  exception"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Observe the following</h4>
<ul class="list">
<li><p>When the page is loaded, a new thread is started with the reference of the method childthreadcall(). The main thread activities are displayed directly on the web page.</p></li>
<li><p>The second thread runs and sends messages to the label control.</p></li>
<li><p>The main thread sleeps for 2000 ms, during which the child thread executes.</p></li>
<li><p>The child thread runs till it is aborted by the main thread. It raises the ThreadAbortException and is terminated.</p></li>
<li><p>Control returns to the main thread.</p></li>
</ul>
<p>When executed the program sends the following messages:</p>
<img src="images/asp.net_thread.jpg" alt="ASP.NET Thread">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="328_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="330_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
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