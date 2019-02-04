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
	$sid=330;
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

<p>The behavior of an ASP.NET application is affected by different settings in the configuration files:</p>
<ul class="list">
<li>machine.config</li>
<li>web.config</li>
</ul>
<p>The machine.config file contains default and the machine-specific value for all supported settings. The machine settings are controlled by the system administrator and applications are generally not given access to this file.</p>
<p>An application however, can override the default values by creating web.config files in its roots folder. The web.config file is a subset of the machine.config file.</p>
<p>If the application contains child directories, it can define a web.config file for each folder. Scope of each configuration file is determined in a hierarchical top-down manner.</p>
<p>Any web.config file can locally extend, restrict, or override any settings defined on the upper level.</p>
<p>Visual Studio generates a default web.config file for each project. An application can execute without a web.config file, however, you cannot debug an application without a web.config file.</p>
<p>The following figure shows the Solution Explorer for the sample example used in the web services tutorial:</p>
<img src="images/solution_explorer2.jpg" alt="Solution Explorer-2">
<p>In this application, there are two web.config files for two projects i.e., the web service and the web site calling the web service.</p>
<p>The web.config file has the configuration element as the root node. Information inside this element is grouped into two main areas: the configuration section-handler declaration area, and the configuration section settings area.</p>
<p>The following code snippet shows the basic syntax of a configuration file:</p>

<h4>Configuration Section Handler declarations</h4>
<p>The configuration section handlers are contained within the &lt;configSections&gt; tags. Each configuration handler specifies name of a configuration section, contained within the file, which provides some configuration data. It has the following basic syntax:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;configSections&gt;</span><span class="pln">
   </span><span class="tag">&lt;section</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;sectionGroup</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;remove</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;clear/&gt;</span><span class="pln">
</span><span class="tag">&lt;/configSections&gt;</span></pre>
<p>It has the following elements:</p>
<ul class="list">
<li><p><b>Clear</b> - It removes all references to inherited sections and section groups.</p></li>
<li><p><b>Remove</b> - It removes a reference to an inherited section and section group.</p></li>
<li><p><b>Section</b> - It defines an association between a configuration section handler and a configuration element.</p></li>
<li><p><b>Section group</b> - It defines an association between a configuration section handler and a configuration section.</p></li>
</ul>
<h4>Application Settings</h4>
<p>The application settings allow storing application-wide name-value pairs for read-only access. For example, you can define a custom application setting as:</p>

<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;configuration&gt;</span><span class="pln">
   </span><span class="tag">&lt;appSettings&gt;</span><span class="pln">
      </span><span class="tag">&lt;add</span><span class="pln"> </span><span class="atn">key</span><span class="pun">=</span><span class="atv">"Application Name"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"MyApplication"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;/appSettings&gt;</span><span class="pln">
</span><span class="tag">&lt;/configuration&gt;</span></pre>
<p>For example, you can also store the name of a book and its ISBN number:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;configuration&gt;</span><span class="pln">
   </span><span class="tag">&lt;appSettings&gt;</span><span class="pln">
      </span><span class="tag">&lt;add</span><span class="pln"> </span><span class="atn">key</span><span class="pun">=</span><span class="atv">"appISBN"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"0-273-68726-3"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;add</span><span class="pln"> </span><span class="atn">key</span><span class="pun">=</span><span class="atv">"appBook"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Corporate Finance"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/appSettings&gt;</span><span class="pln">
</span><span class="tag">&lt;/configuration&gt;</span></pre>
<h4>Connection Strings</h4>
<p>The connection strings show which database connection strings are available to the website. For example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;connectionStrings&gt;</span><span class="pln">
   </span><span class="tag">&lt;add</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"ASPDotNetStepByStepConnectionString"</span><span class="pln"> 
      </span><span class="atn">connectionString</span><span class="pun">=</span><span class="atv">"Provider=Microsoft.Jet.OLEDB.4.0;
      Data Source=E:\\projects\datacaching\ /
      datacaching\App_Data\ASPDotNetStepByStep.mdb"</span><span class="pln">
      </span><span class="atn">providerName</span><span class="pun">=</span><span class="atv">"System.Data.OleDb"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;add</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"booksConnectionString"</span><span class="pln"> 
      </span><span class="atn">connectionString</span><span class="pun">=</span><span class="atv">"Provider=Microsoft.Jet.OLEDB.4.0;
      Data Source=C:\ \databinding\App_Data\books.mdb"</span><span class="pln">
      </span><span class="atn">providerName</span><span class="pun">=</span><span class="atv">"System.Data.OleDb"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/connectionStrings&gt;</span></pre>
<h4>System.Web Element</h4>
<p>The system.web element specifies the root element for the ASP.NET configuration section and contains configuration elements that configure ASP.NET Web applications and control how the applications behave.</p>
<p>It holds most of the configuration elements needed to be adjusted in common applications. The basic syntax for the element is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;system.web&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;anonymousIdentification&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;authentication&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;authorization&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;browserCaps&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;caching&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;clientTarget&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;compilation&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;customErrors&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;deployment&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;deviceFilters&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;globalization&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;healthMonitoring&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;hostingEnvironment&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;httpCookies&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;httpHandlers&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;httpModules&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;httpRuntime&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;identity&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;machineKey&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;membership&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;mobileControls&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;pages&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;processModel&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;profile&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;roleManager&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;securityPolicy&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;sessionPageState&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;sessionState&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;siteMap&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;trace&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;trust&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;urlMappings&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;webControls&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;webParts&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;webServices&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;xhtmlConformance&gt;</span><span class="pln"> 
</span><span class="tag">&lt;/system.web&gt;</span></pre>
<p>The following table provides brief description of some of common sub elements of the <b>system.web</b> element:</p>
<h5>AnonymousIdentification</h5>
<p>This is required to identify users who are not authenticated when authorization is required.</p>
<h5>Authentication</h5>
<p>It configures the authentication support. The basic syntax is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;authentication</span><span class="pln"> </span><span class="atn">mode</span><span class="pun">=</span><span class="atv">"[Windows|Forms|Passport|None]"</span><span class="tag">&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;forms&gt;</span><span class="pln">...</span><span class="tag">&lt;/forms&gt;</span><span class="pln">
   </span><span class="tag">&lt;passport/&gt;</span><span class="pln">
</span><span class="tag">&lt;/authentication&gt;</span></pre>
<h5>Caching</h5>
<p>It Configures the cache settings. The basic syntax is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;caching&gt;</span><span class="pln">
   </span><span class="tag">&lt;cache&gt;</span><span class="pln">...</span><span class="tag">&lt;/cache&gt;</span><span class="pln">
   </span><span class="tag">&lt;outputCache&gt;</span><span class="pln">...</span><span class="tag">&lt;/outputCache&gt;</span><span class="pln">
   </span><span class="tag">&lt;outputCacheSettings&gt;</span><span class="pln">...</span><span class="tag">&lt;/outputCacheSettings&gt;</span><span class="pln">
   </span><span class="tag">&lt;sqlCacheDependency&gt;</span><span class="pln">...</span><span class="tag">&lt;/sqlCacheDependency&gt;</span><span class="pln">
</span><span class="tag">&lt;/caching&gt;</span></pre>
<h5>CustomErrors</h5>
<p>It defines custom error messages. The basic syntax is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;customErrors</span><span class="pln"> </span><span class="atn">defaultRedirect</span><span class="pun">=</span><span class="atv">"url"</span><span class="pln"> </span><span class="atn">mode</span><span class="pun">=</span><span class="atv">"On|Off|RemoteOnly"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;error</span><span class="pln">. . .</span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/customErrors&gt;</span></pre>
<h5>Deployment</h5>
<p>It defines configuration settings used for deployment. The basic syntax is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;deployment</span><span class="pln"> </span><span class="atn">retail</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<h5>HostingEnvironment</h5>
<p>It defines configuration settings for hosting environment. The basic syntax is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;hostingEnvironment</span><span class="pln"> </span><span class="atn">idleTimeout</span><span class="pun">=</span><span class="atv">"HH:MM:SS"</span><span class="pln"> </span><span class="atn">shadowCopyBinAssemblies</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="pln"> 
   </span><span class="atn">shutdownTimeout</span><span class="pun">=</span><span class="atv">"number"</span><span class="pln"> </span><span class="atn">urlMetadataSlidingExpiration</span><span class="pun">=</span><span class="atv">"HH:MM:SS"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
   <h5>Identity</h5>
   <p>It configures the identity of the application. The basic syntax is as given:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="pln">&lt;identity impersonate="true|false" userName="domain\username"
   password="</span><span class="tag">&lt;secure</span><span class="pln"> </span><span class="atn">password</span><span class="tag">&gt;</span><span class="pln">"/&gt;</span></pre>
   <h5>MachineKey</h5>
   <p>It configures keys to use for encryption and decryption of Forms authentication cookie data.</p>
   <p>It also allows configuring a validation key that performs message authentication checks on view-state data and forms authentication tickets. The basic syntax is:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;machineKey</span><span class="pln"> </span><span class="atn">validationKey</span><span class="pun">=</span><span class="atv">"AutoGenerate,IsolateApps"</span><span class="pln"> [</span><span class="atn">String</span><span class="pln">]
   </span><span class="atn">decryptionKey</span><span class="pun">=</span><span class="atv">"AutoGenerate,IsolateApps"</span><span class="pln"> [</span><span class="atn">String</span><span class="pln">]
   </span><span class="atn">validation</span><span class="pun">=</span><span class="atv">"HMACSHA256"</span><span class="pln"> [</span><span class="atn">SHA1</span><span class="pln"> | </span><span class="atn">MD5</span><span class="pln"> | 3</span><span class="atn">DES</span><span class="pln"> | </span><span class="atn">AES</span><span class="pln"> | </span><span class="atn">HMACSHA256</span><span class="pln"> | 
   </span><span class="atn">HMACSHA384</span><span class="pln"> | </span><span class="atn">HMACSHA512</span><span class="pln"> | </span><span class="atn">alg:algorithm_name</span><span class="pln">]
   </span><span class="atn">decryption</span><span class="pun">=</span><span class="atv">"Auto"</span><span class="pln"> [</span><span class="atn">Auto</span><span class="pln"> | </span><span class="atn">DES</span><span class="pln"> | 3</span><span class="atn">DES</span><span class="pln"> | </span><span class="atn">AES</span><span class="pln"> | </span><span class="atn">alg:algorithm_name</span><span class="pln">]
</span><span class="tag">/&gt;</span></pre>
<h5>Membership</h5>
<p>This configures parameters of managing and authenticating user accounts. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;membership</span><span class="pln"> </span><span class="atn">defaultProvider</span><span class="pun">=</span><span class="atv">"provider name"</span><span class="pln">
   </span><span class="atn">userIsOnlineTimeWindow</span><span class="pun">=</span><span class="atv">"number of minutes"</span><span class="pln"> </span><span class="atn">hashAlgorithmType</span><span class="pun">=</span><span class="atv">"SHA1"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;providers&gt;</span><span class="pln">...</span><span class="tag">&lt;/providers&gt;</span><span class="pln">
</span><span class="tag">&lt;/membership&gt;</span></pre>
<h5>Pages</h5>
<p>It provides page-specific configurations. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;pages</span><span class="pln"> </span><span class="atn">asyncTimeout</span><span class="pun">=</span><span class="atv">"number"</span><span class="pln"> </span><span class="atn">autoEventWireup</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln">
      </span><span class="atn">buffer</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln"> </span><span class="atn">clientIDMode</span><span class="pun">=</span><span class="atv">"[AutoID|Predictable|Static]"</span><span class="pln">
      </span><span class="atn">compilationMode</span><span class="pun">=</span><span class="atv">"[Always|Auto|Never]"</span><span class="pln"> 
      </span><span class="atn">controlRenderingCompatibilityVersion</span><span class="pun">=</span><span class="atv">"[3.5|4.0]"</span><span class="pln">
      </span><span class="atn">enableEventValidation</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln">
      </span><span class="atn">enableSessionState</span><span class="pun">=</span><span class="atv">"[True|False|ReadOnly]"</span><span class="pln">
      </span><span class="atn">enableViewState</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln">
      </span><span class="atn">enableViewStateMac</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln">
      </span><span class="atn">maintainScrollPositionOnPostBack</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln"> 
      </span><span class="atn">masterPageFile</span><span class="pun">=</span><span class="atv">"file path"</span><span class="pln"> 
      </span><span class="atn">maxPageStateFieldLength</span><span class="pun">=</span><span class="atv">"number"</span><span class="pln"> 
      </span><span class="atn">pageBaseType</span><span class="pun">=</span><span class="atv">"typename, assembly"</span><span class="pln">
      </span><span class="atn">pageParserFilterType</span><span class="pun">=</span><span class="atv">"string"</span><span class="pln"> 
      </span><span class="atn">smartNavigation</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln">
      </span><span class="atn">styleSheetTheme</span><span class="pun">=</span><span class="atv">"string"</span><span class="pln">
      </span><span class="atn">theme</span><span class="pun">=</span><span class="atv">"string"</span><span class="pln">
      </span><span class="atn">userControlBaseType</span><span class="pun">=</span><span class="atv">"typename"</span><span class="pln">
      </span><span class="atn">validateRequest</span><span class="pun">=</span><span class="atv">"[True|False]"</span><span class="pln">
      </span><span class="atn">viewStateEncryptionMode</span><span class="pun">=</span><span class="atv">"[Always|Auto|Never]"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;controls&gt;</span><span class="pln">...</span><span class="tag">&lt;/controls&gt;</span><span class="pln">
   </span><span class="tag">&lt;namespaces&gt;</span><span class="pln">...</span><span class="tag">&lt;/namespaces&gt;</span><span class="pln">
   </span><span class="tag">&lt;tagMapping&gt;</span><span class="pln">...</span><span class="tag">&lt;/tagMapping&gt;</span><span class="pln">
   </span><span class="tag">&lt;ignoreDeviceFilters&gt;</span><span class="pln">...</span><span class="tag">&lt;/ignoreDeviceFilters&gt;</span><span class="pln">
</span><span class="tag">&lt;/pages&gt;</span></pre>
<h5>Profile</h5>
<p>It configures user profile parameters. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;profile</span><span class="pln"> </span><span class="atn">enabled</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="pln"> </span><span class="atn">inherits</span><span class="pun">=</span><span class="atv">"fully qualified type reference"</span><span class="pln">
   </span><span class="atn">automaticSaveEnabled</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="pln"> </span><span class="atn">defaultProvider</span><span class="pun">=</span><span class="atv">"provider name"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;properties&gt;</span><span class="pln">...</span><span class="tag">&lt;/properties&gt;</span><span class="pln">
   </span><span class="tag">&lt;providers&gt;</span><span class="pln">...</span><span class="tag">&lt;/providers&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/profile&gt;</span></pre>
<h5>RoleManager</h5>
<p>It configures settings for user roles. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;roleManager</span><span class="pln"> </span><span class="atn">cacheRolesInCookie</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="pln"> </span><span class="atn">cookieName</span><span class="pun">=</span><span class="atv">"name"</span><span class="pln">
   </span><span class="atn">cookiePath</span><span class="pun">=</span><span class="atv">"/"</span><span class="pln"> </span><span class="atn">cookieProtection</span><span class="pun">=</span><span class="atv">"All|Encryption|Validation|None"</span><span class="pln">
   </span><span class="atn">cookieRequireSSL</span><span class="pun">=</span><span class="atv">"true|false "</span><span class="pln"> </span><span class="atn">cookieSlidingExpiration</span><span class="pun">=</span><span class="atv">"true|false "</span><span class="pln">
   </span><span class="atn">cookieTimeout</span><span class="pun">=</span><span class="atv">"number of minutes"</span><span class="pln"> </span><span class="atn">createPersistentCookie</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="pln">
   </span><span class="atn">defaultProvider</span><span class="pun">=</span><span class="atv">"provider name"</span><span class="pln"> </span><span class="atn">domain</span><span class="pun">=</span><span class="atv">"cookie domain"</span><span class="tag">&gt;</span><span class="pln"> 
   enabled="true|false"
   maxCachedResults="maximum number of role names cached"
   
   </span><span class="tag">&lt;providers&gt;</span><span class="pln">...</span><span class="tag">&lt;/providers&gt;</span><span class="pln">
</span><span class="tag">&lt;/roleManager&gt;</span></pre>
<h5>SecurityPolicy</h5>
<p>It configures the security policy. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;securityPolicy&gt;</span><span class="pln">
   </span><span class="tag">&lt;trustLevel</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/securityPolicy&gt;</span></pre>
<h5>UrlMappings</h5>
<p>It defines mappings to hide the original URL and provide a more user friendly URL. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;urlMappings</span><span class="pln"> </span><span class="atn">enabled</span><span class="pun">=</span><span class="atv">"true|false"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;add</span><span class="pln">...</span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;clear</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;remove</span><span class="pln">...</span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/urlMappings&gt;</span></pre>
<h5>WebControls</h5>
<p>It provides the name of shared location for client scripts. The basic syntax is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;webControls</span><span class="pln"> </span><span class="atn">clientScriptsLocation</span><span class="pun">=</span><span class="atv">"String"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<h5>WebServices</h5>
<p>This configures the web services.</p>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="329_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="331_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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