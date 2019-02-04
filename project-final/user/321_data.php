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
	$sid=321;
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

<p>Every ASP.NET web form control inherits the DataBind method from its parent Control class, which gives it an inherent capability to bind data to at least one of its properties. This is known as <b>simple data binding</b> or <b>inline data binding</b>.</p>
<p>Simple data binding involves attaching any collection (item collection) which implements the IEnumerable interface, or the DataSet and DataTable classes to the DataSource property of the control.</p>
<p>On the other hand, some controls can bind records, lists, or columns of data into their structure through a DataSource control. These controls derive from the BaseDataBoundControl class. This is called <b>declarative data binding</b>.</p>
<p>The data source controls help the data-bound controls implement functionalities such as, sorting, paging, and editing data collections.</p>
<p>The BaseDataBoundControl is an abstract class, which is inherited by two more abstract classes:</p>
<ul class="list">
<li>DataBoundControl</li>
<li>HierarchicalDataBoundControl</li>
</ul>
<p>The abstract class DataBoundControl is again inherited by two more abstract classes:</p>
<ul class="list">
<li>ListControl</li>
<li>CompositeDataBoundControl</li>
</ul>
<p>The controls capable of simple data binding are derived from the ListControl abstract class and these controls are:</p>
<ul class="list">
<li>BulletedList</li>
<li>CheckBoxList</li>
<li>DropDownList</li>
<li>ListBox</li>
<li>RadioButtonList</li>
</ul>
<p>The controls capable of declarative data binding (a more complex data binding) are derived from the abstract class CompositeDataBoundControl. These controls are:</p>
<ul class="list">
<li>DetailsView</li>
<li>FormView</li>
<li>GridView</li>
<li>RecordList</li>
</ul>
<h4>Simple Data Binding</h4>
<p>Simple data binding involves the read-only selection lists. These controls can bind to an array list or fields from a database. Selection lists takes two values from the database or the data source; one value is displayed by the list and the other is considered as the value corresponding to the display.</p>
<p>Let us take up a small example to understand the concept. Create a web site with a bulleted list and a SqlDataSource control on it. Configure the data source control to retrieve two values from your database (we use the same DotNetReferences table as in the previous chapter).</p>
<p>Choosing a data source for the bulleted list control involves:</p>
<ul class="list">
<li>Selecting the data source control</li>
<li>Selecting a field to display, which is called the data field</li>
<li>Selecting a field for the value</li>
</ul>
<img src="images/choose_data_source.jpg" alt="Choose Data Source">
<p>When the application is executed, check that the entire title column is bound to the bulleted list and displayed.</p>
<img src="images/choose_data_source2.jpg" alt="Choose Data Source2">
<h4>Declarative Data Binding</h4>
<p>We have already used declarative data binding in the previous tutorial using GridView control. The other composite data bound controls capable of displaying and manipulating data in a tabular manner are the DetailsView, FormView, and RecordList control.</p>
<p>In the next tutorial, we will look into the technology for handling database, i.e, ADO.NET.</p>
<p>However, the data binding involves the following objects:</p>
<ul class="list">
<li><p>A dataset that stores the data retrieved from the database.</p></li>
<li><p>The data provider, which retrieves data from the database by using a command over a connection.</p></li>
<li><p>The data adapter that issues the select statement stored in the command object; it is also capable of update the data in a database by issuing Insert, Delete, and Update statements.</p></li>
</ul>
<p>Relation between the data binding objects:</p>
<img src="images/declarative_data_binding.jpg" alt="Declarative Data Binding">
<h5>Example</h5>
<p>Let us take the following steps:</p>
<p><b>Step (1)</b> : Create a new website. Add a class named booklist by right clicking on the solution name in the Solution Explorer and choosing the item 'Class' from the 'Add Item' dialog box. Name it as booklist.cs.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Data</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Configuration</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Security</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">HtmlControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">.</span><span class="typ">WebParts</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Xml</span><span class="pun">.</span><span class="typ">Linq</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">namespace</span><span class="pln"> databinding
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> booklist
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> bookname</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> authorname</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">public</span><span class="pln"> booklist</span><span class="pun">(</span><span class="typ">String</span><span class="pln"> bname</span><span class="pun">,</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> aname</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">bookname </span><span class="pun">=</span><span class="pln"> bname</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">authorname </span><span class="pun">=</span><span class="pln"> aname</span><span class="pun">;</span><span class="pln">

      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="typ">Book</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">get</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">bookname</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">set</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">bookname </span><span class="pun">=</span><span class="pln"> value</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="typ">Author</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">get</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">authorname</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">set</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">authorname </span><span class="pun">=</span><span class="pln"> value</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><b>Step (2)</b> : Add four list controls on the page a list box control, a radio button list, a check box list, and a drop down list and four labels along with these list controls. The page should look like this in design view:</p>
<img src="images/list_box_control.jpg" alt="List box control">
<p>The source file should look as the following:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">559px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">228px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">157px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ListBox1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> 
                  </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">ListBox1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:ListBox&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">

            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">157px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"DropDownList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
                  </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">DropDownList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:DropDownList&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">             
         </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

         </span><span class="tag">&lt;tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">228px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lbllistbox"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:Label&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">

            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lbldrpdown"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

         </span><span class="tag">&lt;tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">228px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">21px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">

            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">21px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">              
         </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

         </span><span class="tag">&lt;tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">228px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">21px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:RadioButtonList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"RadioButtonList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln">
                  </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln">  </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">RadioButtonList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:RadioButtonList&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">

            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">21px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:CheckBoxList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"CheckBoxList1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
                  </span><span class="atn">AutoPostBack</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> </span><span class="atn">OnSelectedIndexChanged</span><span class="pun">=</span><span class="atv">"</span><span class="typ">CheckBoxList1_SelectedIndexChanged</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:CheckBoxList&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">                
         </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

         </span><span class="tag">&lt;tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">228px</span><span class="pun">;</span><span class="pln"> height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">21px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblrdlist"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">

            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">height</span><span class="pun">:</span><span class="pln"> </span><span class="lit">21px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblchklist"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/asp:Label&gt;</span><span class="pln">
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">           
         </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">      
      
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<p><b>Step (3)</b> : Finally, write the following code behind routines of the application:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">IList</span><span class="pln"> bklist </span><span class="pun">=</span><span class="pln"> createbooklist</span><span class="pun">();</span><span class="pln">
      
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">ListBox1</span><span class="pun">.</span><span class="typ">DataSource</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> bklist</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">ListBox1</span><span class="pun">.</span><span class="typ">DataTextField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Book"</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">ListBox1</span><span class="pun">.</span><span class="typ">DataValueField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Author"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">DropDownList1</span><span class="pun">.</span><span class="typ">DataSource</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> bklist</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">DropDownList1</span><span class="pun">.</span><span class="typ">DataTextField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Book"</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">DropDownList1</span><span class="pun">.</span><span class="typ">DataValueField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Author"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">RadioButtonList1</span><span class="pun">.</span><span class="typ">DataSource</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> bklist</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">RadioButtonList1</span><span class="pun">.</span><span class="typ">DataTextField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Book"</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">RadioButtonList1</span><span class="pun">.</span><span class="typ">DataValueField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Author"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">CheckBoxList1</span><span class="pun">.</span><span class="typ">DataSource</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> bklist</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">CheckBoxList1</span><span class="pun">.</span><span class="typ">DataTextField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Book"</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">CheckBoxList1</span><span class="pun">.</span><span class="typ">DataValueField</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Author"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">DataBind</span><span class="pun">();</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="typ">IList</span><span class="pln"> createbooklist</span><span class="pun">()</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">ArrayList</span><span class="pln"> allbooks </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ArrayList</span><span class="pun">();</span><span class="pln">
      booklist bl</span><span class="pun">;</span><span class="pln">
      
      bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> booklist</span><span class="pun">(</span><span class="str">"UNIX CONCEPTS"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"SUMITABHA DAS"</span><span class="pun">);</span><span class="pln">
      allbooks</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">);</span><span class="pln">
      
      bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> booklist</span><span class="pun">(</span><span class="str">"PROGRAMMING IN C"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"RICHI KERNIGHAN"</span><span class="pun">);</span><span class="pln">
      allbooks</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">);</span><span class="pln">
      
      bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> booklist</span><span class="pun">(</span><span class="str">"DATA STRUCTURE"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"TANENBAUM"</span><span class="pun">);</span><span class="pln">
      allbooks</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">);</span><span class="pln">
      
      bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> booklist</span><span class="pun">(</span><span class="str">"NETWORKING CONCEPTS"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"FOROUZAN"</span><span class="pun">);</span><span class="pln">
      allbooks</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">);</span><span class="pln">
      
      bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> booklist</span><span class="pun">(</span><span class="str">"PROGRAMMING IN C++"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"B. STROUSTROUP"</span><span class="pun">);</span><span class="pln">
      allbooks</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">);</span><span class="pln">
      
      bl </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> booklist</span><span class="pun">(</span><span class="str">"ADVANCED JAVA"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"SUMITABHA DAS"</span><span class="pun">);</span><span class="pln">
      allbooks</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">bl</span><span class="pun">);</span><span class="pln">
      
      </span><span class="kwd">return</span><span class="pln"> allbooks</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">ListBox1_SelectedIndexChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lbllistbox</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">ListBox1</span><span class="pun">.</span><span class="typ">SelectedValue</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">DropDownList1_SelectedIndexChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lbldrpdown</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">DropDownList1</span><span class="pun">.</span><span class="typ">SelectedValue</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">RadioButtonList1_SelectedIndexChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lblrdlist</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">RadioButtonList1</span><span class="pun">.</span><span class="typ">SelectedValue</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">CheckBoxList1_SelectedIndexChanged</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">lblchklist</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">CheckBoxList1</span><span class="pun">.</span><span class="typ">SelectedValue</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Observe the following:</p>
<ul class="list">
<li><p>The booklist class has two properties: bookname and authorname.</p></li>
<li><p>The createbooklist method is a user defined method that creates an array of booklist objects named allbooks.</p></li>
<li><p>The Page_Load event handler ensures that a list of books is created. The list is of IList type, which implements the IEnumerable interface and capable of being bound to the list controls. The page load event handler binds the IList object 'bklist' with the list controls. The bookname property is to be displayed and the authorname property is considered as the value.</p></li>
<li><p>When the page is run, if the user selects a book, its name is selected and displayed by the list controls whereas the corresponding labels display the author name, which is the corresponding value for the selected index of the list control.</p></li>
</ul>
<img src="images/data_binding_result.jpg" alt="Data Binding Results">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="320_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="322_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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