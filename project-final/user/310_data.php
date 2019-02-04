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
	$sid=310;
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
<p>Hyper Text Transfer Protocol (HTTP) is a stateless protocol. When the client disconnects from the server, the ASP.NET engine discards the page objects. This way, each web application can scale up to serve numerous requests simultaneously without running out of server memory.</p>
<p>However, there needs to be some technique to store the information between requests and to retrieve it when required. This information i.e., the current value of all the controls and variables for the current user in the current session is called the State.</p>
<p>ASP.NET manages four types of states:</p>
<ul class="list">
<li>View State</li>
<li>Control State</li>
<li>Session State</li>
<li>Application State</li>
</ul>
<h4>View State</h4>
<p>The view state is the state of the page and all its controls. It is automatically maintained across posts by the ASP.NET framework.</p>
<p>When a page is sent back to the client, the changes in the properties of the page and its controls are determined, and stored in the value of a hidden input field named _VIEWSTATE. When the page is again posted back, the _VIEWSTATE field is sent to the server with the HTTP request.</p>
<p>The view state could be enabled or disabled for:</p>
<ul class="list">
<li><p><b>The entire application</b> by setting the EnableViewState property in the &lt;pages&gt; section of web.config file.</p></li>
<li><p><b>A page</b> by setting the EnableViewState attribute of the Page directive, as &lt;%@ Page Language="C#"   EnableViewState="false"  %&gt;</p></li>
<li><p><b>A control</b> by setting the Control.EnableViewState property.</p></li>
</ul>
<p>It is implemented using a view state object defined by the StateBag class which defines a collection of view state items. The state bag is a data structure containing attribute value pairs, stored as strings associated with objects.</p>
<p>The StateBag class has the following properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Item(name)</td>
<td>The value of the view state item with the specified name. This is the default property of the StateBag class.</td>
</tr>
<tr>
<td>Count</td>
<td>The number of items in the view state collection.</td>
</tr>
<tr>
<td>Keys</td>
<td>Collection of keys for all the items in the collection.</td>
</tr>
<tr>
<td>Values</td>
<td>Collection of values for all the items in the collection.</td>
</tr>
</tbody></table>
<p>The StateBag class has the following methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>Add(name, value)</td>
<td>Adds an item to the view state collection and existing item is updated.</td>
</tr>
<tr>
<td>Clear</td>
<td>Removes all the items from the collection.</td>
</tr>
<tr>
<td>Equals(Object)</td>
<td>Determines whether the specified object is equal to the current object.</td>
</tr>
<tr>
<td>Finalize</td>
<td>Allows it to free resources and perform other cleanup operations.</td>
</tr>
<tr>
<td>GetEnumerator</td>
<td>Returns an enumerator that iterates over all the key/value pairs of the StateItem objects stored in the StateBag object.</td>
</tr>
<tr>
<td>GetType</td>
<td>Gets the type of the current instance.</td>
</tr>
<tr>
<td>IsItemDirty</td>
<td>Checks a StateItem object stored in the StateBag object to evaluate whether it has been modified.</td>
</tr>
<tr>
<td>Remove(name)</td>
<td>Removes the specified item.</td>
</tr>
<tr>
<td>SetDirty</td>
<td>Sets the state of the StateBag object as well as the Dirty property of each of the StateItem objects contained by it.</td>
</tr>
<tr>
<td>SetItemDirty</td>
<td>Sets the Dirty property for the specified StateItem object in the StateBag object.</td>
</tr>
<tr>
<td>ToString</td>
<td>Returns a string representing the state bag object.</td>
</tr>
</tbody></table>

<h5>Example</h5>
<p>The following example demonstrates the concept of storing view state. Let us keep a counter, which is incremented each time the page is posted back by clicking a button on the page. A label control shows the value in the counter.</p>
<p>The markup file code is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"statedemo._Default"</span><span class="pln"> %&gt;

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
            </span><span class="tag">&lt;h5&gt;</span><span class="pln">View State demo</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
         
            Page Counter:
            
            </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblCounter"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnIncrement"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Add Count"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnIncrement_Click</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind file for the example is shown here:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> counter
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">get</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"pcounter"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">!=</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">((</span><span class="kwd">int</span><span class="pun">)</span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"pcounter"</span><span class="pun">]);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">else</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">set</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">ViewState</span><span class="pun">[</span><span class="str">"pcounter"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> value</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
        
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      lblCounter</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> counter</span><span class="pun">.</span><span class="typ">ToString</span><span class="pun">();</span><span class="pln">
      counter</span><span class="pun">++;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>It would produce the following result:</p>
<img src="images/view_state_demo.jpg" alt="View State Demo">
<h4>Control State</h4>
<p>Control state cannot be modified, accessed directly, or disabled.</p>
<h4>Session State</h4>
<p>When a user connects to an ASP.NET website, a new session object is created. When session state is turned on, a new session state object is created for each new request. This session state object becomes part of the context and it is available through the page.</p>
<p>Session state is generally used for storing application data such as inventory, supplier list, customer record, or shopping cart. It can also keep information about the user and his preferences, and keep the track of pending operations.</p>
<p>Sessions are identified and tracked with a 120-bit SessionID, which is passed from client to server and back as cookie or a modified URL. The SessionID is globally unique and random.</p>
<p>The session state object is created from the HttpSessionState class, which defines a collection of session state items.</p>
<p>The HttpSessionState class has the following properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>SessionID</td>
<td>The unique session identifier.</td>
</tr>
<tr>
<td>Item(name)</td>
<td>The value of the session state item with the specified name. This is the default property of the HttpSessionState class.</td>
</tr>
<tr>
<td>Count</td>
<td>The number of items in the session state collection.</td>
</tr>
<tr>
<td>TimeOut</td>
<td>Gets and sets the amount of time, in minutes, allowed between requests before the session-state provider terminates the session.</td>
</tr>
</tbody></table>
<p>The HttpSessionState class has the following methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>Add(name, value)</td>
<td>Adds an item to the session state collection.</td>
</tr>
<tr>
<td>Clear</td>
<td>Removes all the items from session state collection.</td>
</tr>
<tr>
<td>Remove(name)</td>
<td>Removes the specified item from the session state collection.</td>
</tr>
<tr>
<td>RemoveAll</td>
<td>Removes all keys and values from the session-state collection.</td>
</tr>
<tr>
<td>RemoveAt</td>
<td>Deletes an item at a specified index from the session-state collection.</td>
</tr>
</tbody></table>
<p>The session state object is a name-value pair to store and retrieve some information from the session state object. You could use the following code for the same:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">void</span><span class="pln"> </span><span class="typ">StoreSessionInfo</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">String</span><span class="pln"> fromuser </span><span class="pun">=</span><span class="pln"> </span><span class="typ">TextBox1</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Session</span><span class="pun">[</span><span class="str">"fromuser"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> fromuser</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">void</span><span class="pln"> </span><span class="typ">RetrieveSessionInfo</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">String</span><span class="pln"> fromuser </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Session</span><span class="pun">[</span><span class="str">"fromuser"</span><span class="pun">];</span><span class="pln">
   </span><span class="typ">Label1</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> fromuser</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The above code stores only strings in the Session dictionary object, however, it can store all the primitive data types and arrays composed of primitive data types, as well as the DataSet, DataTable, HashTable, and Image objects, as well as any user-defined class that inherits from the ISerializable object.</p>
<h5>Example</h5>
<p>The following example demonstrates the concept of storing session state. There are two buttons on the page, a text box to enter string and a label to display the text stored from last session.</p>


<p>The mark up file code is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln">  </span><span class="typ">CodeFile</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"_Default"</span><span class="pln">  %&gt;

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
            &amp;nbsp; &amp;nbsp; &amp;nbsp;
            
            </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">568px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">103px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">209px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblstr"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Enter a String"</span><span class="pln">  </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">94px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
					
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">317px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtstr"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">227px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
	
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">209px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">317px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
	
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">209px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnnrm"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
                        </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"No action button"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">128px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
	
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">317px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnstr"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
                        </span><span class="atn">OnClick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnstr_Click</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Submit the String"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln"> 
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
	
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">209px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
	
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">317px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">  </span><span class="tag">&lt;/td&gt;</span><span class="pln">  
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
	
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">209px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblsession"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln">  </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">231px</span><span class="atv">"</span><span class="pln">  </span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
	
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">317px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
	
               </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">209px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblshstr"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
	
                  </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">317px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">  </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
               
            </span><span class="tag">&lt;/table&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It should look like the following in design view:</p>
<img src="images/session_design_view.jpg" alt="session design view">
<p>The code behind file is given here:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln"> 
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">String</span><span class="pln"> mystr</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lblshstr</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">mystr</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lblsession</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">)</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Session</span><span class="pun">[</span><span class="str">"str"</span><span class="pun">];</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnstr_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">mystr </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtstr</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Session</span><span class="pun">[</span><span class="str">"str"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtstr</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lblshstr</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">mystr</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lblsession</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">)</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Session</span><span class="pun">[</span><span class="str">"str"</span><span class="pun">];</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Execute the file and observe how it works:</p>
<img src="images/session_run_view.jpg" alt="session run view">
<h4>Application State</h4>
<p>The ASP.NET application is the collection of all web pages, code and other files within a single virtual directory on a web server. When information is stored in application state, it is available to all the users.</p>
<p>To provide for the use of application state, ASP.NET creates an application state object for each application from the HTTPApplicationState class and stores this object in server memory. This object is represented by class file global.asax.</p>
<p>Application State is mostly used to store hit counters and other statistical data, global application data like tax rate, discount rate etc. and to keep the track of users visiting the site.</p>
<p>The HttpApplicationState class has the following properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Item(name)</td>
<td>The value of the application state item with the specified name. This is the default property of the HttpApplicationState class.</td>
</tr>
<tr>
<td>Count</td>
<td>The number of items in the application state collection.</td>
</tr>
</tbody></table>
<p>The HttpApplicationState class has the following methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>Add(name, value)</td>
<td>Adds an item to the application state collection.</td>
</tr>
<tr>
<td>Clear</td>
<td>Removes all the items from the application state collection.</td>
</tr>
<tr>
<td>Remove(name)</td>
<td>Removes the specified item from the application state collection.</td>
</tr>
<tr>
<td>RemoveAll</td>
<td>Removes all objects from an HttpApplicationState collection.</td>
</tr>
<tr>
<td>RemoveAt</td>
<td>Removes an HttpApplicationState object from a collection by index.</td>
</tr>
<tr>
<td>Lock()</td>
<td>Locks the application state collection so only the current user can access it.</td>
</tr>
<tr>
<td>Unlock()</td>
<td>Unlocks the application state collection so all the users can access it.</td>
</tr>
</tbody></table>
<p>Application state data is generally maintained by writing handlers for the events:</p>
<ul class="list">
<li>Application_Start</li>
<li>Application_End</li>
<li>Application_Error</li>
<li>Session_Start</li>
<li>Session_End</li>
</ul>
<p>The following code snippet shows the basic syntax for storing application state information:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Void</span><span class="pln"> </span><span class="typ">Application_Start</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Application</span><span class="pun">[</span><span class="str">"startMessage"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"The application has started."</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="typ">Void</span><span class="pln"> </span><span class="typ">Application_End</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Application</span><span class="pun">[</span><span class="str">"endtMessage"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"The application has ended."</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="309_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="311_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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