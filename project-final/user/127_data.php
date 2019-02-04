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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=127;
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
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">

<p>PHP provides a large number of predefined variables to any script which it runs. PHP provides an additional set of predefined arrays containing variables from the web server the environment, and user input. These new arrays are called superglobals −</p>
<p>All the following variables are automatically available in every scope.</p>
<h4>PHP Superglobals</h4>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Sr.No</th>
<th>Variable &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>$GLOBALS</b></p>
<p>Contains a reference to every variable which is currently available within the global scope of the script. The keys of this array are the names of the global variables.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>$_SERVER</b></p>
<p>This is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these. See next section for a complete list of all the SERVER variables.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>$_GET</b></p>
<p>An associative array of variables passed to the current script via the HTTP GET method.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>$_POST</b></p>
<p>An associative array of variables passed to the current script via the HTTP POST method.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><b>$_FILES</b></p>
<p>An associative array of items uploaded to the current script via the HTTP POST method.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>$_REQUEST</b></p>
<p>An associative array consisting of the contents of $_GET, $_POST, and $_COOKIE.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><p><b>$_COOKIE</b></p>
<p>An associative array of variables passed to the current script via HTTP cookies.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>$_SESSION</b></p>
<p>An associative array containing session variables available to the current script.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>$_PHP_SELF</b></p>
<p>A string containing PHP script file name in which it is called.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>$php_errormsg</b></p>
<p>$php_errormsg is a variable containing the text of the last error message generated by PHP.</p>
</td>
</tr>
</tbody></table>
<h4>Server variables: $_SERVER</h4>
<p>$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Sr.No</th>
<th>Variable &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>$_SERVER['PHP_SELF']</b></p>
<p>The filename of the currently executing script, relative to the document root</p></td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>$_SERVER['argv']</b></p>
<p>Array of arguments passed to the script. When the script is run on the command line, this gives C-style access to the command line parameters. When called via the GET method, this will contain the query string.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>$_SERVER['argc']</b></p>
<p>Contains the number of command line parameters passed to the script if run on the command line.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>$_SERVER['GATEWAY_INTERFACE']</b></p>
<p>What revision of the CGI specification the server is using; i.e. 'CGI/1.1'.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>$_SERVER['SERVER_ADDR']</b></p>
<p>The IP address of the server under which the current script is executing.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>$_SERVER['SERVER_NAME']</b></p>
<p>The name of the server host under which the current script is executing. If the script is running on a virtual host, this will be the value defined for that virtual host.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>$_SERVER['SERVER_SOFTWARE']</b></p>
<p>Server identification string, given in the headers when responding to requests.</p>
</td>
</tr>
<tr>
<td>8</td>
<td><p><b>$_SERVER['SERVER_PROTOCOL']</b></p>
<p>Name and revision of the information protocol via which the page was requested; i.e. 'HTTP/1.0';</p>
</td>
</tr>
<tr>
<td>9</td>
<td><p><b>$_SERVER['REQUEST_METHOD']</b></p>
<p>Which request method was used to access the page; i.e. 'GET', 'HEAD', 'POST', 'PUT'.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>$_SERVER['REQUEST_TIME']</b></p>
<p>The timestamp of the start of the request. Available since PHP 5.1.0.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>$_SERVER['QUERY_STRING']</b></p>
<p>The query string, if any, via which the page was accessed.</p>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>$_SERVER['DOCUMENT_ROOT']</b></p>
<p>The document root directory under which the current script is executing, as defined in the server's configuration file.</p>
</td>
</tr>
<tr>
<td>13</td>
<td>
<p><b>$_SERVER['HTTP_ACCEPT']</b></p>
<p>Contents of the Accept: header from the current request, if there is one.</p>
</td>
</tr>
<tr>
<td>14</td>
<td><p><b>$_SERVER['HTTP_ACCEPT_CHARSET']</b></p>
<p>Contents of the Accept-Charset: header from the current request, if there is one. Example: 'iso-8859-1,*,utf-8'.</p>
</td>
</tr>
<tr>
<td>15</td>
<td>
<p><b>$_SERVER['HTTP_ACCEPT_ENCODING']</b></p>
<p>Contents of the Accept-Encoding: header from the current request, if there is one. Example: 'gzip'.</p>
</td>
</tr>
<tr>
<td>16</td>
<td>
<p><b>$_SERVER['HTTP_ACCEPT_LANGUAGE']</b></p>
<p>Contents of the Accept-Language: header from the current request, if there is one. Example: 'en'.</p>
</td>
</tr>
<tr>
<td>17</td>
<td>
<p><b>$_SERVER['HTTP_CONNECTION']</b></p>
<p>Contents of the Connection: header from the current request, if there is one. Example: 'Keep-Alive'.</p>
</td>
</tr>
<tr>
<td>18</td>
<td>
<p><b>$_SERVER['HTTP_HOST']</b></p>
<p>Contents of the Host: header from the current request, if there is one.</p>
</td>
</tr>
<tr>
<td>19</td>
<td><p><b>$_SERVER['HTTP_REFERER']</b></p><b>
<p>The address of the page (if any) which referred the user agent to the current page.</p>
</b></td>
</tr>
<tr>
<td>20</td>
<td>
<p><b>$_SERVER['HTTP_USER_AGENT']</b></p>
<p>This is a string denoting the user agent being which is accessing the page. A typical example is: Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586).</p>
</td>
</tr>
<tr>
<td>21</td>
<td>
<p><b>$_SERVER['HTTPS']</b></p>
<p>Set to a non-empty value if the script was queried through the HTTPS protocol.</p>
</td>
</tr>
<tr>
<td>22</td>
<td>
<p><b>$_SERVER['REMOTE_ADDR']</b></p>
<p>The IP address from which the user is viewing the current page.</p>
</td>
</tr>
<tr>
<td>23</td>
<td>
<p><b>$_SERVER['REMOTE_HOST']</b></p>
<p>The Host name from which the user is viewing the current page. The reverse dns lookup is based off the REMOTE_ADDR of the user.</p>
</td>
</tr>
<tr>
<td>24</td>
<td>
<p><b>$_SERVER['REMOTE_PORT']</b></p>
<p>The port being used on the user's machine to communicate with the web server.</p>
</td>
</tr>
<tr>
<td>25</td>
<td>
<p><b>$_SERVER['SCRIPT_FILENAME']</b></p>
<p>The absolute pathname of the currently executing script.</p>
</td>
</tr>
<tr>
<td>26</td>
<td><p><b>$_SERVER['SERVER_ADMIN']</b></p>
<p>The value given to the SERVER_ADMIN (for Apache) directive in the web server configuration file.</p>
</td>
</tr>
<tr>
<td>27</td>
<td>
<p><b>$_SERVER['SERVER_PORT']</b></p>
<p>The port on the server machine being used by the web server for communication. For default setups, this will be '80'.</p>
</td>
</tr>
<tr>
<td>28</td>
<td>
<p><b>$_SERVER['SERVER_SIGNATURE']</b></p>
<p>String containing the server version and virtual host name which are added to server-generated pages, if enabled.</p>
</td>
</tr>
<tr>
<td>29</td>
<td>
<p><b>$_SERVER['PATH_TRANSLATED']</b></p>
<p>Filesystem based path to the current script.</p>
</td>
</tr>
<tr>
<td>30</td>
<td>
<p><b>$_SERVER['SCRIPT_NAME']</b></p>
<p>Contains the current script's path. This is useful for pages which need to point to themselves.</p>
</td>
</tr>
<tr>
<td>31</td>
<td><p><b>$_SERVER['REQUEST_URI']</b></p>
<p>The URI which was given in order to access this page; for instance, '/index.html'.</p>
</td>
</tr>
<tr>
<td>32</td>
<td>
<p>$_SERVER['PHP_AUTH_DIGEST']</p>
<p>When running under Apache as module doing Digest HTTP authentication this variable is set to the 'Authorization' header sent by the client.</p>
</td>
</tr>
<tr>
<td>33</td>
<td>
<p><b>$_SERVER['PHP_AUTH_USER']</b></p>
<p>When running under Apache or IIS (ISAPI on PHP 5) as module doing HTTP authentication this variable is set to the username provided by the user.</p>
</td>
</tr>
<tr>
<td>34</td>
<td>
<p><b>$_SERVER['PHP_AUTH_PW']</b></p>
<p>When running under Apache or IIS (ISAPI on PHP 5) as module doing HTTP authentication this variable is set to the password provided by the user.</p>
</td>
</tr>
<tr>
<td>35</td>
<td><p><b>$_SERVER['AUTH_TYPE']</b></p>
<p>When running under Apache as module doing HTTP authenticated this variable is set to the authentication type.</p></td>
</tr>
</tbody></table>


















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="126_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="128_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
</aside>
 
  
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