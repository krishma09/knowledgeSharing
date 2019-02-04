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
	$sid=315;
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

<p>The AdRotator control randomly selects banner graphics from a list, which is specified in an external XML schedule file. This external XML schedule file is called the advertisement file.</p>
<p>The AdRotator control allows you to specify the advertisement file and the type of window that the link should follow in the AdvertisementFile and the Target property respectively.</p>
<p>The basic syntax of adding an AdRotator is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:AdRotator</span><span class="pln">  </span><span class="atn">runat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AdvertisementFile</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"adfile.xml"</span><span class="pln">  </span><span class="atn">Target</span><span class="pln"> </span><span class="pun">=</span><span class="pln">  </span><span class="atv">"_blank"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<p>Before going into the details of the AdRotator control and its properties, let us look into the construction of the advertisement file.</p>
<h4>The Advertisement File</h4>
<p>The advertisement file is an XML file, which contains the information about the advertisements to be displayed.</p>
<p>Extensible Markup Language (XML) is a W3C standard for text document markup. It is a text-based markup language that enables you to store data in a structured format by using meaningful tags. The term 'extensible' implies that you can extend your ability to describe a document by defining meaningful tags for the application.</p>
<p>XML is not a language in itself, like HTML, but a set of rules for creating new markup languages. It is a meta-markup language. It allows developers to create custom tag sets for special uses. It structures, stores, and transports the information.</p>
<p>Following is an example of XML file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;BOOK&gt;</span><span class="pln">
   </span><span class="tag">&lt;NAME&gt;</span><span class="pln"> Learn XML </span><span class="tag">&lt;/NAME&gt;</span><span class="pln">
   </span><span class="tag">&lt;AUTHOR&gt;</span><span class="pln"> Samuel Peterson </span><span class="tag">&lt;/AUTHOR&gt;</span><span class="pln">
   </span><span class="tag">&lt;PUBLISHER&gt;</span><span class="pln"> NSS Publications </span><span class="tag">&lt;/PUBLISHER&gt;</span><span class="pln">
   </span><span class="tag">&lt;PRICE&gt;</span><span class="pln"> $30.00</span><span class="tag">&lt;/PRICE&gt;</span><span class="pln">
</span><span class="tag">&lt;/BOOK&gt;</span></pre>
<p>Like all XML files, the advertisement file needs to be a structured text file with well-defined tags delineating the data. There are the following standard XML elements that are commonly used in the advertisement file:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Element</th>
<th>Description</th>
</tr>
<tr>
<td>Advertisements</td>
<td>Encloses the advertisement file.</td>
</tr>
<tr>
<td>Ad</td>
<td>Delineates separate ad.</td>
</tr>
<tr>
<td>ImageUrl</td>
<td>The path of image that will be displayed.</td>
</tr>
<tr>
<td>NavigateUrl</td>
<td>The link that will be followed when the user clicks the ad.</td>
</tr>
<tr>
<td>AlternateText</td>
<td>The text that will be displayed instead of the picture if it cannot be displayed.</td>
</tr>
<tr>
<td>Keyword</td>
<td>Keyword identifying a group of advertisements. This is used for filtering.</td>
</tr>
<tr>
<td>Impressions</td>
<td>The number indicating how often an advertisement will appear.</td>
</tr>
<tr>
<td>Height</td>
<td>Height of the image to be displayed.</td>
</tr>
<tr>
<td>Width</td>
<td>Width of the image to be displayed.</td>
</tr>
</tbody></table>
<p>Apart from these tags, customs tags with custom attributes could also be included. The following code illustrates an advertisement file ads.xml:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;Advertisements&gt;</span><span class="pln">
   </span><span class="tag">&lt;Ad&gt;</span><span class="pln">
      </span><span class="tag">&lt;ImageUrl&gt;</span><span class="pln">rose1.jpg</span><span class="tag">&lt;/ImageUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;NavigateUrl&gt;</span><span class="pln">http://www.1800flowers.com</span><span class="tag">&lt;/NavigateUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;AlternateText&gt;</span><span class="pln">
         Order flowers, roses, gifts and more
      </span><span class="tag">&lt;/AlternateText&gt;</span><span class="pln">
      </span><span class="tag">&lt;Impressions&gt;</span><span class="pln">20</span><span class="tag">&lt;/Impressions&gt;</span><span class="pln">
      </span><span class="tag">&lt;Keyword&gt;</span><span class="pln">flowers</span><span class="tag">&lt;/Keyword&gt;</span><span class="pln">
   </span><span class="tag">&lt;/Ad&gt;</span><span class="pln">

   </span><span class="tag">&lt;Ad&gt;</span><span class="pln">
      </span><span class="tag">&lt;ImageUrl&gt;</span><span class="pln">rose2.jpg</span><span class="tag">&lt;/ImageUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;NavigateUrl&gt;</span><span class="pln">http://www.babybouquets.com.au</span><span class="tag">&lt;/NavigateUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;AlternateText&gt;</span><span class="pln">Order roses and flowers</span><span class="tag">&lt;/AlternateText&gt;</span><span class="pln">
      </span><span class="tag">&lt;Impressions&gt;</span><span class="pln">20</span><span class="tag">&lt;/Impressions&gt;</span><span class="pln">
      </span><span class="tag">&lt;Keyword&gt;</span><span class="pln">gifts</span><span class="tag">&lt;/Keyword&gt;</span><span class="pln">
   </span><span class="tag">&lt;/Ad&gt;</span><span class="pln">

   </span><span class="tag">&lt;Ad&gt;</span><span class="pln">
      </span><span class="tag">&lt;ImageUrl&gt;</span><span class="pln">rose3.jpg</span><span class="tag">&lt;/ImageUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;NavigateUrl&gt;</span><span class="pln">http://www.flowers2moscow.com</span><span class="tag">&lt;/NavigateUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;AlternateText&gt;</span><span class="pln">Send flowers to Russia</span><span class="tag">&lt;/AlternateText&gt;</span><span class="pln">
      </span><span class="tag">&lt;Impressions&gt;</span><span class="pln">20</span><span class="tag">&lt;/Impressions&gt;</span><span class="pln">
      </span><span class="tag">&lt;Keyword&gt;</span><span class="pln">russia</span><span class="tag">&lt;/Keyword&gt;</span><span class="pln">
   </span><span class="tag">&lt;/Ad&gt;</span><span class="pln">

   </span><span class="tag">&lt;Ad&gt;</span><span class="pln">
      </span><span class="tag">&lt;ImageUrl&gt;</span><span class="pln">rose4.jpg</span><span class="tag">&lt;/ImageUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;NavigateUrl&gt;</span><span class="pln">http://www.edibleblooms.com</span><span class="tag">&lt;/NavigateUrl&gt;</span><span class="pln">
      </span><span class="tag">&lt;AlternateText&gt;</span><span class="pln">Edible Blooms</span><span class="tag">&lt;/AlternateText&gt;</span><span class="pln">
      </span><span class="tag">&lt;Impressions&gt;</span><span class="pln">20</span><span class="tag">&lt;/Impressions&gt;</span><span class="pln">
      </span><span class="tag">&lt;Keyword&gt;</span><span class="pln">gifts</span><span class="tag">&lt;/Keyword&gt;</span><span class="pln">
   </span><span class="tag">&lt;/Ad&gt;</span><span class="pln">
</span><span class="tag">&lt;/Advertisements&gt;</span></pre>
<h4>Properties and Events of the AdRotator Class</h4>

<p>The AdRotator class is derived from the WebControl class and inherits its properties. Apart from those, the AdRotator class has the following properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>AdvertisementFile</td>
<td>The path to the advertisement file.</td>
</tr>
<tr>
<td>AlternateTextFeild</td>
<td>The element name of the field where alternate text is provided. The default value is  AlternateText.</td>
</tr>
<tr>
<td>DataMember</td>
<td>The name of the specific list of data to be bound when advertisement file is not used.</td>
</tr>
<tr>
<td>DataSource</td>
<td>Control from where it would retrieve data.</td>
</tr>
<tr>
<td>DataSourceID</td>
<td>Id of the control from where it would retrieve data.</td>
</tr>
<tr>
<td>Font</td>
<td>Specifies the font properties associated with the advertisement banner control.</td>
</tr>
<tr>
<td>ImageUrlField</td>
<td>The element name of the field where the URL for the image is provided. The default value is ImageUrl.</td>
</tr>
<tr>
<td>KeywordFilter</td>
<td>For displaying the keyword based ads only.</td>
</tr>
<tr>
<td>NavigateUrlField</td>
<td>The element name of the field where the URL to navigate to is provided. The default value is NavigateUrl.</td>
</tr>
<tr>
<td>Target</td>
<td>The browser window or frame that displays the content of the page linked.</td>
</tr>
<tr>
<td>UniqueID</td>
<td>Obtains the unique, hierarchically qualified identifier for the AdRotator control.</td>
</tr>
</tbody></table>
<p>Following are the important events of the AdRotator class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Events</th>
<th>Description</th>
</tr>
<tr>
<td>AdCreated </td>
<td>It is raised once per round trip to the server after creation of the control, but before the page is rendered</td>
</tr>
<tr>
<td>DataBinding</td>
<td>Occurs when the server control binds to a data source. </td>
</tr>
<tr>
<td>DataBound</td>
<td>Occurs after the server control binds to a data source. </td>
</tr>
<tr>
<td>Disposed</td>
<td>Occurs when a server control is released from memory, which is the last stage of the server control lifecycle when an ASP.NET page is requested</td>
</tr>
<tr>
<td>Init</td>
<td>Occurs when the server control is initialized, which is the first step in its lifecycle.</td>
</tr>
<tr>
<td>Load</td>
<td>Occurs when the server control is loaded into the Page object.</td>
</tr>
<tr>
<td>PreRender</td>
<td>Occurs after the Control object is loaded but prior to rendering. </td>
</tr>
<tr>
<td>Unload</td>
<td>Occurs when the server control is unloaded from memory.</td>
</tr>
</tbody></table>
<h4>Working with AdRotator Control</h4>
<p>Create a new web page and place an AdRotator control on it.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;asp:AdRotator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"AdRotator1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">AdvertisementFile</span><span class="pln">  </span><span class="pun">=</span><span class="atv">"~/ads.xml"</span><span class="pln"> </span><span class="atn">onadcreated</span><span class="pun">=</span><span class="atv">"</span><span class="typ">AdRotator1_AdCreated</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<p>The ads.xml file and the image files should be located in the root directory of the web site.</p>
<p>Try to execute the above application and observe that each time the page is reloaded, the ad is changed.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="314_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="316_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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