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
	$sid=313;
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
<p>ADO.NET provides a bridge between the front end controls and the back end database. The ADO.NET objects encapsulate all the data access operations and the controls interact with these objects to display data, thus hiding the details of movement of data.</p>
<p>The following figure shows the ADO.NET objects at a glance:</p>
<img src="images/ado.net_objects.jpg" alt="ADO.Net objects">
<h4>The DataSet Class</h4>
<p>The dataset represents a subset of the database. It does not have a continuous connection to the database. To update the database a reconnection is required. The DataSet contains DataTable objects and DataRelation objects. The DataRelation objects represent the relationship between two tables.</p>
<p>Following table shows some important properties of the DataSet class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>CaseSensitive</td>
<td>Indicates whether string comparisons within the data tables are case-sensitive.</td>
</tr>
<tr>
<td>Container</td>
<td>Gets the container for the component.</td>
</tr>
<tr>
<td>DataSetName</td>
<td>Gets or sets the name of the current data set.</td>
</tr>
<tr>
<td>DefaultViewManager</td>
<td>Returns a view of data in the data set.</td>
</tr>
<tr>
<td>DesignMode</td>
<td>Indicates whether the component is currently in design mode.</td>
</tr>
<tr>
<td>EnforceConstraints</td>
<td>Indicates whether constraint rules are followed when attempting any update operation.</td>
</tr>
<tr>
<td>Events</td>
<td>Gets the list of event handlers that are attached to this component.</td>
</tr>
<tr>
<td>ExtendedProperties</td>
<td>Gets the collection of customized user information associated with the DataSet.</td>
</tr>
<tr>
<td>HasErrors</td>
<td>Indicates if there are any errors.</td>
</tr>
<tr>
<td>IsInitialized</td>
<td>Indicates whether the DataSet is initialized.</td>
</tr>
<tr>
<td>Locale</td>
<td>Gets or sets the locale information used to compare strings within the table.</td>
</tr>
<tr>
<td>Namespace</td>
<td>Gets or sets the namespace of the DataSet.</td>
</tr>
<tr>
<td>Prefix</td>
<td>Gets or sets an XML prefix that aliases the namespace of the DataSet.</td>
</tr>
<tr>
<td>Relations</td>
<td>Returns the collection of DataRelation objects.</td>
</tr>
<tr>
<td>Tables</td>
<td>Returns the collection of DataTable objects.</td>
</tr>
</tbody></table>
<p>The following table shows some important methods of the DataSet class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>AcceptChanges</td>
<td>Accepts all changes made since the DataSet was loaded or this method was called.</td>
</tr>
<tr>
<td>BeginInit</td>
<td>Begins the initialization of the DataSet. The initialization occurs at run time.</td>
</tr>
<tr>
<td>Clear</td>
<td>Clears data.</td>
</tr>
<tr>
<td>Clone</td>
<td>Copies the structure of the DataSet, including all DataTable schemas, relations, and constraints. Does not copy any data.</td>
</tr>
<tr>
<td>Copy</td>
<td>Copies both structure and data.</td>
</tr>
<tr>
<td>CreateDataReader()</td>
<td>Returns a DataTableReader with one result set per DataTable, in the same sequence as the tables appear in the Tables collection.</td>
</tr>
<tr>
<td>CreateDataReader(DataTable[])</td>
<td>Returns a DataTableReader with one result set per DataTable.</td>
</tr>
<tr>
<td>EndInit</td>
<td>Ends the initialization of the data set.</td>
</tr>
<tr>
<td>Equals(Object)</td>
<td>Determines whether the specified Object is equal to the current Object.</td>
</tr>
<tr>
<td>Finalize</td>
<td>Free resources and perform other cleanups.</td>
</tr>
<tr>
<td>GetChanges</td>
<td>Returns a copy of the DataSet with all changes made since it was loaded or the AcceptChanges method was called.</td>
</tr>
<tr>
<td>GetChanges(DataRowState)</td>
<td>Gets a copy of DataSet with all changes made since it was loaded or the AcceptChanges method was called, filtered by DataRowState.</td>
</tr>
<tr>
<td>GetDataSetSchema</td>
<td> Gets a copy of XmlSchemaSet for the DataSet.</td>
</tr>
<tr>
<td>GetObjectData</td>
<td>Populates a serialization information object with the data needed to serialize the DataSet.</td>
</tr>
<tr>
<td>GetType</td>
<td>Gets the type of the current instance.</td>
</tr>
<tr>
<td>GetXML</td>
<td>Returns the XML representation of the data.</td>
</tr>
<tr>
<td>GetXMLSchema</td>
<td>Returns the XSD schema for the XML representation of the data.</td>
</tr>
<tr>
<td>HasChanges()</td>
<td>Gets a value indicating whether the DataSet has changes, including new, deleted, or modified rows.</td>
</tr>
<tr>
<td>HasChanges(DataRowState)</td>
<td>Gets a value indicating whether the DataSet has changes, including new, deleted, or modified rows, filtered by DataRowState.</td>
</tr>
<tr>
<td>IsBinarySerialized</td>
<td>Inspects the format of the serialized representation of the DataSet.</td>
</tr>
<tr>
<td style="width:55%;">Load(IDataReader, LoadOption, DataTable[])</td>
<td>Fills a DataSet with values from a data source using the supplied IDataReader, using an array of DataTable instances to supply the schema and namespace information.</td>
</tr>
<tr>
<td>Load(IDataReader, LoadOption, String[])</td>
<td>Fills a DataSet with values from a data source using the supplied IDataReader, using an array of strings to supply the names for the tables within the DataSet.</td>
</tr>
<tr>
<td>Merge()</td>
<td>Merges the data with data from another DataSet. This method has different overloaded forms.</td>
</tr>
<tr>
<td>ReadXML()</td>
<td>Reads an XML schema and data into the DataSet. This method has different overloaded forms.</td>
</tr>
<tr>
<td>ReadXMLSchema(0)</td>
<td>Reads an XML schema into the DataSet. This method has different overloaded forms.</td>
</tr>
<tr>
<td>RejectChanges</td>
<td>Rolls back all changes made since the last call to AcceptChanges.</td>
</tr>
<tr>
<td>WriteXML()</td>
<td>Writes an XML schema and data from the DataSet. This method has different overloaded forms.</td>
</tr>
<tr>
<td>WriteXMLSchema()</td>
<td>Writes the structure of the DataSet as an XML schema. This method has different overloaded forms.</td>
</tr>
</tbody></table>
<h4>The DataTable Class</h4>
<p>The DataTable class represents the tables in the database. It has the following important properties; most of these properties are read only properties except the PrimaryKey property:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>ChildRelations</td>
<td>Returns the collection of child relationship.</td>
</tr>
<tr>
<td>Columns</td>
<td>Returns the Columns collection.</td>
</tr>
<tr>
<td>Constraints</td>
<td>Returns the Constraints collection.</td>
</tr>
<tr>
<td>DataSet</td>
<td>Returns the parent DataSet.</td>
</tr>
<tr>
<td>DefaultView</td>
<td>Returns a view of the table.</td>
</tr>
<tr>
<td>ParentRelations</td>
<td>Returns the ParentRelations collection.</td>
</tr>
<tr>
<td>PrimaryKey</td>
<td>Gets or sets an array of columns as the primary key for the table.</td>
</tr>
<tr>
<td>Rows</td>
<td>Returns the Rows collection.</td>
</tr>
</tbody></table>
<p>The following table shows some important methods of the DataTable class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>AcceptChanges</td>
<td>Commits all changes since the last AcceptChanges.</td>
</tr>
<tr>
<td>Clear</td>
<td>Clears all data from the table.</td>
</tr>
<tr>
<td>GetChanges</td>
<td>Returns a copy of the DataTable with all changes made since the AcceptChanges method was called.</td>
</tr>
<tr>
<td>GetErrors</td>
<td>Returns an array of rows with errors.</td>
</tr>
<tr>
<td>ImportRows</td>
<td>Copies a new row into the table.</td>
</tr>
<tr>
<td>LoadDataRow</td>
<td>Finds and updates a specific row, or creates a new one, if not found any.</td>
</tr>
<tr>
<td>Merge</td>
<td>Merges the table with another DataTable.</td>
</tr>
<tr>
<td>NewRow</td>
<td>Creates a new DataRow.</td>
</tr>
<tr>
<td>RejectChanges</td>
<td>Rolls back all changes made since the last call to AcceptChanges.</td>
</tr>
<tr>
<td>Reset</td>
<td>Resets the table to its original state.</td>
</tr>
<tr>
<td>Select</td>
<td>Returns an array of DataRow objects.</td>
</tr>
</tbody></table>
<h4>The DataRow Class</h4>
<p>The DataRow object represents a row in a table. It has the following important properties:</p>
<table class="table table-bordered" border="1" cellpadding="5" cellspacing="0" style="width:100%">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>HasErrors</td>
<td>Indicates if there are any errors.</td>
</tr>
<tr>
<td>Items</td>
<td>Gets or sets the data stored in a specific column.</td>
</tr>
<tr>
<td>ItemArrays</td>
<td>Gets or sets all the values for the row.</td>
</tr>
<tr>
<td>Table</td>
<td>Returns the parent table.</td>
</tr>
</tbody></table>
<p>The following table shows some important methods of the DataRow class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Methods</th>
<th>Description</th>
</tr>
<tr>
<td>AcceptChanges</td>
<td>Accepts all changes made since this method was called.</td>
</tr>
<tr>
<td>BeginEdit</td>
<td>Begins edit operation.</td>
</tr>
<tr>
<td>CancelEdit</td>
<td>Cancels edit operation.</td>
</tr>
<tr>
<td>Delete</td>
<td>Deletes the DataRow.</td>
</tr>
<tr>
<td>EndEdit</td>
<td>Ends the edit operation.</td>
</tr>
<tr>
<td>GetChildRows</td>
<td>Gets the child rows of this row.</td>
</tr>
<tr>
<td>GetParentRow</td>
<td>Gets the parent row.</td>
</tr>
<tr>
<td>GetParentRows</td>
<td>Gets parent rows of DataRow object.</td>
</tr>
<tr>
<td>RejectChanges</td>
<td>Rolls back all changes made since the last call to AcceptChanges.</td>
</tr>
</tbody></table>
<h4>The DataAdapter Object</h4>
<p>The DataAdapter object acts as a mediator between the DataSet object and the database. This helps the Dataset to contain data from multiple databases or other data source.</p>
<h4>The DataReader Object</h4>
<p>The DataReader object is an alternative to the DataSet and DataAdapter combination. This object provides a connection oriented access to the data records in the database. These objects are suitable for read-only access, such as populating a list and then breaking the connection.</p>
<h4>DbCommand and DbConnection Objects</h4>
<p>The DbConnection object represents a connection to the data source. The connection could be shared among different command objects.</p>
<p>The DbCommand object represents the command or a stored procedure sent to the database from retrieving or manipulating data.</p>
<h4>Example</h4>
<p>So far, we have used tables and databases already existing in our computer. In this example, we will create a table, add column, rows and data into it and display the table using a GridView object.</p>

<p>The source file code is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"Default.aspx.cs"</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"createdatabase._Default"</span><span class="pln"> %&gt;

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
            </span><span class="tag">&lt;asp:GridView</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"GridView1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:GridView&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The code behind file is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">namespace</span><span class="pln"> createdatabase
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="typ">DataSet</span><span class="pln"> ds </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CreateDataSet</span><span class="pun">();</span><span class="pln">
            </span><span class="typ">GridView1</span><span class="pun">.</span><span class="typ">DataSource</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> ds</span><span class="pun">.</span><span class="typ">Tables</span><span class="pun">[</span><span class="str">"Student"</span><span class="pun">];</span><span class="pln">
            </span><span class="typ">GridView1</span><span class="pun">.</span><span class="typ">DataBind</span><span class="pun">();</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">private</span><span class="pln"> </span><span class="typ">DataSet</span><span class="pln"> </span><span class="typ">CreateDataSet</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="com">//creating a DataSet object for tables</span><span class="pln">
         </span><span class="typ">DataSet</span><span class="pln"> dataset </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">DataSet</span><span class="pun">();</span><span class="pln">

         </span><span class="com">// creating the student table</span><span class="pln">
         </span><span class="typ">DataTable</span><span class="pln"> </span><span class="typ">Students</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CreateStudentTable</span><span class="pun">();</span><span class="pln">
         dataset</span><span class="pun">.</span><span class="typ">Tables</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">);</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> dataset</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="kwd">private</span><span class="pln"> </span><span class="typ">DataTable</span><span class="pln"> </span><span class="typ">CreateStudentTable</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">DataTable</span><span class="pln"> </span><span class="typ">Students</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">DataTable</span><span class="pun">(</span><span class="str">"Student"</span><span class="pun">);</span><span class="pln">

         </span><span class="com">// adding columns</span><span class="pln">
         </span><span class="typ">AddNewColumn</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="str">"System.Int32"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"StudentID"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">AddNewColumn</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="str">"System.String"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"StudentName"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">AddNewColumn</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="str">"System.String"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"StudentCity"</span><span class="pun">);</span><span class="pln">

         </span><span class="com">// adding rows</span><span class="pln">
         </span><span class="typ">AddNewRow</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">"M H Kabir"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Kolkata"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">AddNewRow</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Shreya Sharma"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Delhi"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">AddNewRow</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Rini Mukherjee"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Hyderabad"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">AddNewRow</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Sunil Dubey"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Bikaner"</span><span class="pun">);</span><span class="pln">
         </span><span class="typ">AddNewRow</span><span class="pun">(</span><span class="typ">Students</span><span class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Rajat Mishra"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Patna"</span><span class="pun">);</span><span class="pln">

         </span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Students</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="kwd">private</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">AddNewColumn</span><span class="pun">(</span><span class="typ">DataTable</span><span class="pln"> table</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> columnType</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">string</span><span class="pln">  columnName</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">DataColumn</span><span class="pln"> column </span><span class="pun">=</span><span class="pln"> table</span><span class="pun">.</span><span class="typ">Columns</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">columnName</span><span class="pun">,</span><span class="pln">  </span><span class="typ">Type</span><span class="pun">.</span><span class="typ">GetType</span><span class="pun">(</span><span class="pln">columnType</span><span class="pun">));</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">

      </span><span class="com">//adding data into the table</span><span class="pln">
      </span><span class="kwd">private</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">AddNewRow</span><span class="pun">(</span><span class="typ">DataTable</span><span class="pln"> table</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> id</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> name</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> city</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">DataRow</span><span class="pln"> newrow </span><span class="pun">=</span><span class="pln"> table</span><span class="pun">.</span><span class="typ">NewRow</span><span class="pun">();</span><span class="pln">
         newrow</span><span class="pun">[</span><span class="str">"StudentID"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> id</span><span class="pun">;</span><span class="pln">
         newrow</span><span class="pun">[</span><span class="str">"StudentName"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> name</span><span class="pun">;</span><span class="pln">
         newrow</span><span class="pun">[</span><span class="str">"StudentCity"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> city</span><span class="pun">;</span><span class="pln">
         table</span><span class="pun">.</span><span class="typ">Rows</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="pln">newrow</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When you execute the program, observe the following:</p>
<ul class="list">
<li><p>The application first creates a data set and binds it with the grid view control using the DataBind() method of the GridView control.</p></li>
<li><p>The Createdataset() method is a user defined function, which creates a new DataSet object and then calls another user defined method CreateStudentTable() to create the table and add it to the Tables collection of the data set.</p></li>
<li><p>The CreateStudentTable() method calls the user defined methods AddNewColumn() and AddNewRow() to create the columns and rows of the table as well as to add data to the rows.</p></li>
</ul>
<p>When the page is executed, it returns the rows of the table as shown:</p>
<img src="images/ado.net_result.jpg" alt="ADO.Net Result">






<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="312_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="314_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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