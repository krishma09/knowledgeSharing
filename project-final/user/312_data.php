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
	$sid=312;
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
<p>ASP.NET allows the following sources of data to be accessed and used:</p>
<ul class="list">
<li>Databases (e.g., Access, SQL Server, Oracle, MySQL)</li>
<li>XML documents</li>
<li>Business Objects</li>
<li>Flat files</li>
</ul>
<p>ASP.NET hides the complex processes of data access and provides much higher level of classes and objects through which data is accessed easily. These classes hide all complex coding for connection, data retrieving, data querying, and data manipulation.</p>
<p>ADO.NET is the technology that provides the bridge between various ASP.NET control objects and the backend data source. In this tutorial, we will look at data access and working with the data in brief.</p>
<h4>Retrieve and display data</h4>
<p>It takes two types of data controls to retrieve and display data in ASP.NET:</p>
<ul class="list">
<li><p><b>A data source control</b> - It manages the connection to the data, selection of data, and other jobs such as paging and caching of data etc.</p></li>
<li><p><b>A data view control</b> - It binds and displays the data and allows data manipulation.</p></li>
</ul>
<p>We will discuss the data binding and data source controls in detail later. In this section, we will use a SqlDataSource control to access data and a GridView control to display and manipulate data in this chapter.</p>
<p>We will also use an Access database, which contains the details about .Net books available in the market. Name of our database is ASPDotNetStepByStep.mdb and we will use the data table DotNetReferences.</p>
<p> The table has the following columns: ID, Title, AuthorFirstName, AuthorLastName, Topic, and Publisher.</p>
<p>Here is a snapshot of the data table:</p>
<img src="images/data_table.jpg" alt="Data Table">
<p>Let us directly move to action, take the following steps:</p>
<p><b>(1)</b> Create a web site and add a SqlDataSourceControl on the web form.</p>
<img src="images/sqldatasourcecontrol.jpg" alt="SqlDataSourceControl">
<p><b>(2)</b> Click on the Configure Data Source option.</p>
<img src="images/configure_data_source.jpg" alt="Configure Data Source">
<p><b>(3)</b> Click on the New Connection button to establish connection with a database.</p>
<img src="images/connection_with_database.jpg" alt="Connection with a database">
<p><b>(4)</b> Once the connection is set up, you may save it for further use. At the next step, you are asked to configure the select statement:</p>
<img src="images/select_statement.jpg" alt="Select statement">
<p><b>(5)</b> Select the columns and click next to complete the steps. Observe the WHERE, ORDER BY, and the Advanced buttons. These buttons allow you to provide the where clause, order by clause, and specify the insert, update, and delete commands of SQL respectively. This way, you can manipulate the data.</p>

<p><b>(6)</b> Add a GridView control on the form. Choose the data source and format the control using AutoFormat option.</p>
<img src="images/autoformat.jpg" alt="AutoFormat ">
<p><b>(7)</b> After this the formatted GridView control displays the column headings, and the application is ready to execute.</p>
<img src="images/gridview_control.jpg" alt="GridView control">
<p><b>(8)</b> Finally execute the application.</p>
<img src="images/databasse_result.jpg" alt="Database Result">
<p>The content file code is as given:</p>
<pre class="prettyprint prettyprinted"><span class="pun">&lt;%@</span><span class="pln"> </span><span class="typ">Page</span><span class="pln"> </span><span class="typ">Language</span><span class="pun">=</span><span class="str">"C#"</span><span class="pln"> </span><span class="typ">AutoEventWireup</span><span class="pun">=</span><span class="str">"true"</span><span class="pln"> </span><span class="typ">CodeBehind</span><span class="pun">=</span><span class="str">"dataaccess.aspx.cs"</span><span class="pln"> 
   </span><span class="typ">Inherits</span><span class="pun">=</span><span class="str">"datacaching.WebForm1"</span><span class="pln"> %&gt;

</span><span class="dec">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns</span><span class="pun">=</span><span class="atv">"http://www.w3.org/1999/xhtml"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;head</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">
         Untitled Page
      </span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div&gt;</span><span class="pln">
         
            &lt;asp:SqlDataSource ID="SqlDataSource1" runat="server" 
               ConnectionString= "</span><span class="pun">&lt;%</span><span class="pln">$   </span><span class="typ">ConnectionStrings</span><span class="pun">:</span><span class="typ">ASPDotNetStepByStepConnectionString</span><span class="pln">%&gt;" 
               ProviderName= "</span><span class="pun">&lt;%</span><span class="pln">$ </span><span class="typ">ConnectionStrings</span><span class="pun">:</span><span class="pln">
                  </span><span class="typ">ASPDotNetStepByStepConnectionString</span><span class="pun">.</span><span class="typ">ProviderName</span><span class="pln"> %&gt;" 
               SelectCommand="SELECT [Title], [AuthorLastName], 
                  [AuthorFirstName], [Topic] FROM [DotNetReferences]"&gt;
            </span><span class="tag">&lt;/asp:SqlDataSource&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;asp:GridView</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"GridView1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
               </span><span class="atn">AutoGenerateColumns</span><span class="pun">=</span><span class="atv">"False"</span><span class="pln"> </span><span class="atn">CellPadding</span><span class="pun">=</span><span class="atv">"4"</span><span class="pln"> 
               </span><span class="atn">DataSourceID</span><span class="pun">=</span><span class="atv">"SqlDataSource1"</span><span class="pln"> </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"#333333"</span><span class="pln"> 
               </span><span class="atn">GridLines</span><span class="pun">=</span><span class="atv">"None"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;RowStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#F7F6F3"</span><span class="pln"> </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"#333333"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            
               </span><span class="tag">&lt;Columns&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:BoundField</span><span class="pln"> </span><span class="atn">DataField</span><span class="pun">=</span><span class="atv">"Title"</span><span class="pln"> </span><span class="atn">HeaderText</span><span class="pun">=</span><span class="atv">"Title"</span><span class="pln"> 
                     </span><span class="atn">SortExpression</span><span class="pun">=</span><span class="atv">"Title"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:BoundField</span><span class="pln"> </span><span class="atn">DataField</span><span class="pun">=</span><span class="atv">"AuthorLastName"</span><span class="pln"> 
                     </span><span class="atn">HeaderText</span><span class="pun">=</span><span class="atv">"AuthorLastName"</span><span class="pln"> </span><span class="atn">SortExpression</span><span class="pun">=</span><span class="atv">"AuthorLastName"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:BoundField</span><span class="pln"> </span><span class="atn">DataField</span><span class="pun">=</span><span class="atv">"AuthorFirstName"</span><span class="pln"> 
                     </span><span class="atn">HeaderText</span><span class="pun">=</span><span class="atv">"AuthorFirstName"</span><span class="pln"> </span><span class="atn">SortExpression</span><span class="pun">=</span><span class="atv">"AuthorFirstName"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
                  </span><span class="tag">&lt;asp:BoundField</span><span class="pln"> </span><span class="atn">DataField</span><span class="pun">=</span><span class="atv">"Topic"</span><span class="pln"> 
                     </span><span class="atn">HeaderText</span><span class="pun">=</span><span class="atv">"Topic"</span><span class="pln"> </span><span class="atn">SortExpression</span><span class="pun">=</span><span class="atv">"Topic"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;/Columns&gt;</span><span class="pln">
               </span><span class="tag">&lt;FooterStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#5D7B9D"</span><span class="pln"> 
                  </span><span class="atn">Font-Bold</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"White"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;PagerStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#284775"</span><span class="pln"> 
                  </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"White"</span><span class="pln"> </span><span class="atn">HorizontalAlign</span><span class="pun">=</span><span class="atv">"Center"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;SelectedRowStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#E2DED6"</span><span class="pln"> 
                  </span><span class="atn">Font-Bold</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln"> </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"#333333"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;HeaderStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#5D7B9D"</span><span class="pln"> </span><span class="atn">Font-Bold</span><span class="pun">=</span><span class="atv">"True"</span><span class="pln">  
                  </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"White"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;EditRowStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"#999999"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
               </span><span class="tag">&lt;AlternatingRowStyle</span><span class="pln"> </span><span class="atn">BackColor</span><span class="pun">=</span><span class="atv">"White"</span><span class="pln"> </span><span class="atn">ForeColor</span><span class="pun">=</span><span class="atv">"#284775"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:GridView&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="311_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="313_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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