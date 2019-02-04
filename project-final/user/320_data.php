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
	$sid=320;
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
<p>A data source control interacts with the data-bound controls and hides the complex data binding processes. These are the tools that provide data to the data bound controls and support execution of operations like insertions, deletions, sorting, and updates.</p>
<p>Each data source control wraps a particular data provider-relational databases, XML documents, or custom classes and helps in:</p>
<ul class="list">
<li>Managing connection</li>
<li>Selecting data</li>
<li>Managing presentation aspects like paging, caching, etc.</li>
<li>Manipulating data</li>
</ul>
<p>There are many data source controls available in ASP.NET for accessing data from SQL Server, from ODBC or OLE DB servers, from XML files, and from business objects.</p>
<p>Based on type of data, these controls could be divided into two categories:</p>
<ul class="list">
<li>Hierarchical data source controls</li>
<li>Table-based data source controls</li>
</ul>
<p>The data source controls used for hierarchical data are:</p>
<ul class="list">
<li><p><b>XMLDataSource</b> - It allows binding to XML files and strings with or without schema information.</p></li>
<li><p><b>SiteMapDataSource</b> - It allows binding to a provider that supplies site map information.</p></li>
</ul>
<p>The data source controls used for tabular data are:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Data source controls</th>
<th>Description</th>
</tr>
<tr>
<td>SqlDataSource</td>
<td>It represents a connection to an ADO.NET data provider that returns SQL data, including data sources accessible via OLEDB and ODBC.</td>
</tr>
<tr>
<td>ObjectDataSource</td>
<td>It allows binding to a custom .Net business object that returns data.</td>
</tr>
<tr>
<td>LinqdataSource</td>
<td>It allows binding to the results of a Linq-to-SQL query (supported by ASP.NET 3.5 only).</td>
</tr>
<tr><td>AccessDataSource</td>
<td>It represents connection to a Microsoft Access database.</td>
</tr>
</tbody></table>
<h4>Data Source Views</h4>
<p>Data source views are objects of the DataSourceView class. Which represent a customized view of data for different data operations such as sorting, filtering, etc.</p>
<p>The DataSourceView class serves as the base class for all data source view classes, which define the capabilities of data source controls.</p>
<p>The following table provides the properties of the DataSourceView class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>CanDelete</td>
<td>Indicates whether deletion is allowed on the underlying data source.</td>
</tr>
<tr>
<td>CanInsert</td>
<td>Indicates whether insertion is allowed on the underlying data source.</td>
</tr>
<tr>
<td>CanPage</td>
<td>Indicates whether paging is allowed on the underlying data source.</td>
</tr>
<tr>
<td>CanRetrieveTotalRowCount</td>
<td>Indicates whether total row count information is available.</td>
</tr>
<tr>
<td>CanSort</td>
<td>Indicates whether the data could be sorted.</td>
</tr>
<tr>
<td>CanUpdate</td>
<td>Indicates whether updates are allowed on the underlying data source.</td>
</tr>
<tr>
<td>Events</td>
<td>Gets a list of event-handler delegates for the data source view.</td>
</tr>
<tr>
<td>Name</td>
<td>Name of the view.</td>
</tr>
</tbody></table>
<p>The following table provides the methods of the DataSourceView class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>CanExecute</td>
<td>Determines whether the specified command can be executed.</td>
</tr>
<tr>
<td>ExecuteCommand</td>
<td>Executes the specific command.</td>
</tr>
<tr>
<td>ExecuteDelete</td>
<td>Performs a delete operation on the list of data that the DataSourceView object represents.</td>
</tr>
<tr>
<td>ExecuteInsert</td>
<td>Performs an insert operation on the list of data that the DataSourceView object represents.</td>
</tr>
<tr>
<td>ExecuteSelect</td>
<td>Gets a list of data from the underlying data storage.</td>
</tr>
<tr>
<td>ExecuteUpdate</td>
<td>Performs an update operation on the list of data that the DataSourceView object represents.</td>
</tr>
<tr>
<td>Delete</td>
<td>Performs a delete operation on the data associated with the view.</td>
</tr>
<tr>
<td>Insert</td>
<td>Performs an insert operation on the data associated with the view.</td>
</tr>
<tr>
<td>Select</td>
<td>Returns the queried data.</td>
</tr>
<tr>
<td>Update</td>
<td>Performs an update operation on the data associated with the view.</td>
</tr>
<tr>
<td>OnDataSourceViewChanged</td>
<td>Raises the DataSourceViewChanged event.</td>
</tr>
<tr>
<td>RaiseUnsupportedCapabilitiesError</td>
<td>Called by the RaiseUnsupportedCapabilitiesError method to compare the capabilities requested for an ExecuteSelect operation against those that the view supports.</td>
</tr>
</tbody></table>
<h4>The SqlDataSource Control</h4>
<p>The SqlDataSource control represents a connection to a relational database such as SQL Server or Oracle database, or data accessible through OLEDB or Open Database Connectivity (ODBC). Connection to data is made through two important properties ConnectionString and ProviderName.</p>
<p>The following code snippet provides the basic syntax of the control:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">&lt;asp:SqlDataSource runat="server" ID="MySqlSource"
   ProviderName='</span><span class="pun">&lt;%</span><span class="pln">$ </span><span class="typ">ConnectionStrings</span><span class="pun">:</span><span class="typ">LocalNWind</span><span class="pun">.</span><span class="typ">ProviderName</span><span class="pln">  %&gt;'
   ConnectionString='</span><span class="pun">&lt;%</span><span class="pln">$ </span><span class="typ">ConnectionStrings</span><span class="pun">:</span><span class="typ">LocalNWind</span><span class="pln"> %&gt;'
   SelectionCommand= "SELECT * FROM EMPLOYEES" /&gt;

</span><span class="tag">&lt;asp:GridView</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"GridView1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">DataSourceID</span><span class="pun">=</span><span class="atv">"MySqlSource"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>

<p>Configuring various data operations on the underlying data depends upon the various properties (property groups) of the data source control.</p>
<p>The following table provides the related sets of properties of the SqlDataSource control, which provides the programming interface of the control:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Property Group</th>
<th>Description</th>
</tr>
<tr>
<td>
<p>DeleteCommand,</p>
<p>DeleteParameters,</p>
<p>DeleteCommandType</p>
</td>
<td>Gets or sets the SQL statement, parameters, and type for deleting rows in the underlying data.</td>
</tr>
<tr>
<td>
<p>FilterExpression,</p>
<p>FilterParameters</p>
</td>
<td>Gets or sets the data filtering string and parameters.</td>
</tr>
<tr>
<td>
<p>InsertCommand,</p>
<p>InsertParameters,</p>
<p>InsertCommandType</p>
</td>
<td>Gets or sets the SQL statement, parameters, and type for inserting rows in the underlying database.</td>
</tr>
<tr>
<td>
<p>SelectCommand,</p>
<p>SelectParameters,</p>
<p>SelectCommandType</p>
</td>
<td>Gets or sets the SQL statement, parameters, and type for retrieving rows from the underlying database.</td>
</tr>
<tr>
<td>SortParameterName</td>
<td>Gets or sets the name of an input parameter that the command's stored procedure will use to sort data.</td>
</tr>
<tr>
<td>
<p>UpdateCommand,</p>
<p>UpdateParameters,</p>
<p>UpdateCommandType</p>
</td>
<td>Gets or sets the SQL statement, parameters, and type for updating rows in the underlying data store.</td>
</tr>
</tbody></table>
<p>The following code snippet shows a data source control enabled for data manipulation:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">&lt;asp:SqlDataSource runat="server" ID= "MySqlSource"
   ProviderName='</span><span class="pun">&lt;%</span><span class="pln">$ </span><span class="typ">ConnectionStrings</span><span class="pun">:</span><span class="typ">LocalNWind</span><span class="pun">.</span><span class="typ">ProviderName</span><span class="pln">  %&gt;'
   ConnectionString=' </span><span class="pun">&lt;%</span><span class="pln">$ </span><span class="typ">ConnectionStrings</span><span class="pun">:</span><span class="typ">LocalNWind</span><span class="pln"> %&gt;'
   SelectCommand= "SELECT * FROM EMPLOYEES"
   UpdateCommand= "UPDATE EMPLOYEES SET LASTNAME=@lame"
   DeleteCommand= "DELETE FROM EMPLOYEES WHERE EMPLOYEEID=@eid"
   FilterExpression= "EMPLOYEEID &gt; 10"&gt;
   .....
   .....
</span><span class="tag">&lt;/asp:SqlDataSource&gt;</span></pre>
<h4>The ObjectDataSource Control</h4>
<p>The ObjectDataSource Control enables user-defined classes to associate the output of their methods to data bound controls. The programming interface of this class is almost same as the SqlDataSource control.</p>
<p>Following are two important aspects of binding business objects:</p>

<ul class="list">
<li><p>The bindable class should have a default constructor, it should be stateless, and have methods that can be mapped to select, update, insert, and delete semantics.</p></li>
<li><p>The object must update one item at a time, batch operations are not supported.</p></li>
</ul>
<p>Let us go directly to an example to work with this control. The student class is the class to be used with an object data source. This class has three properties: a student id, name, and city. It has a default constructor and a GetStudents method for retrieving data.</p>
<p>The student class:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Student</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> </span><span class="typ">StudentID</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">City</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Student</span><span class="pun">()</span><span class="pln">
   </span><span class="pun">{</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">DataSet</span><span class="pln"> </span><span class="typ">GetStudents</span><span class="pun">()</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">DataSet</span><span class="pln"> ds </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">DataSet</span><span class="pun">();</span><span class="pln">
      </span><span class="typ">DataTable</span><span class="pln"> dt </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">DataTable</span><span class="pun">(</span><span class="str">"Students"</span><span class="pun">);</span><span class="pln">
      
      dt</span><span class="pun">.</span><span class="typ">Columns</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="str">"StudentID"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">typeof</span><span class="pun">(</span><span class="typ">System</span><span class="pun">.</span><span class="typ">Int32</span><span class="pun">));</span><span class="pln">
      dt</span><span class="pun">.</span><span class="typ">Columns</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="str">"StudentName"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">typeof</span><span class="pun">(</span><span class="typ">System</span><span class="pun">.</span><span class="typ">String</span><span class="pun">));</span><span class="pln">
      dt</span><span class="pun">.</span><span class="typ">Columns</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="str">"StudentCity"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">typeof</span><span class="pun">(</span><span class="typ">System</span><span class="pun">.</span><span class="typ">String</span><span class="pun">));</span><span class="pln">
      dt</span><span class="pun">.</span><span class="typ">Rows</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="kwd">object</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">"M. H. Kabir"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Calcutta"</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
      dt</span><span class="pun">.</span><span class="typ">Rows</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="kwd">object</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Ayan J. Sarkar"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Calcutta"</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
      ds</span><span class="pun">.</span><span class="typ">Tables</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">dt</span><span class="pun">);</span><span class="pln">
      
      </span><span class="kwd">return</span><span class="pln"> ds</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Take the following steps to bind the object with an object data source and retrieve data:</p>
<ul class="list">
<li><p>Create a new web site.</p></li>
<li><p>Add a class (Students.cs) to it by right clicking the project from the Solution Explorer, adding a class template, and placing the above code in it.</p></li>
<li><p>Build the solution so that the application can use the reference to the class.</p></li>
<li><p>Place an object data source control in the web form.</p></li>
<li><p>Configure the data source by selecting the object.</p></li>
</ul>
<img src="images/selecting_the_object.jpg" alt="selecting the object">
<ul class="list">
<li><p>Select a data method(s) for different operations on data. In this example, there is only one method.</p></li>
</ul>
<img src="images/select_data_method.jpg" alt="Select a data method">
<ul class="list">
<li><p>Place a data bound control such as grid view on the page and select the object data source as its underlying data source.</p></li>
</ul>
<img src="images/data_bound_control.jpg" alt="Data Bound Control">
<ul class="list">
<li><p>At this stage, the design view should look like the following:</p></li>
</ul>
<img src="images/object_data_source.jpg" alt="Object Data Source">
<ul class="list">
<li><p>Run the project, it retrieves the hard coded tuples from the students class.</p></li>
</ul>
<img src="images/object_data_result.jpg" alt="Object Data Result">
<h4>The AccessDataSource Control</h4>
<p>The AccessDataSource control represents a connection to an Access database. It is based on the SqlDataSource control and provides simpler programming interface. The following code snippet provides the basic syntax for the data source:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:AccessDataSource</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"AccessDataSource1 runat="</span><span class="atn">server</span><span class="atv">" 
   DataFile="</span><span class="pln">~</span><span class="pun">/</span><span class="atn">App_Data</span><span class="pun">/</span><span class="atn">ASPDotNetStepByStep</span><span class="pln">.</span><span class="atn">mdb</span><span class="atv">" SelectCommand="</span><span class="atn">SELECT</span><span class="pln"> * </span><span class="atn">FROM</span><span class="pln">  [</span><span class="atn">DotNetReferences</span><span class="pln">]</span><span class="atv">"&gt;</span><span class="pln">
</span><span class="tag">&lt;/asp:AccessDataSource&gt;</span></pre>
<p>The AccessDataSource control opens the database in read-only mode.  However, it can also be used for performing insert, update, or delete operations. This is done using the ADO.NET commands and parameter collection.</p>
<p>Updates are problematic for Access databases from within an ASP.NET application because an Access database is a plain file and the default account of the ASP.NET application might not have the permission to write to the database file.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="319_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="321_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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