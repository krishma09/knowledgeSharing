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
	$sid=323;
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

<p>Web sites are designed for repeated visits from the users. Personalization allows a site to remember the user identity and other information details, and it presents an individualistic environment to each user.</p>
<p>ASP.NET provides services for personalizing a web site to suit a particular client's taste and preference.</p>
<h4>Understanding Profiles</h4>
<p>ASP.NET personalization service is based on user profile. User profile defines the kind of information about the user that the site needs. For example, name, age, address, date of birth, and phone number.</p>
<p>This information is defined in the web.config file of the application and ASP.NET runtime reads and uses it. This job is done by the personalization providers.</p>
<img src="images/personalization.jpg" alt="Personalization">
<p>Update Page_load to display profile information:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Data</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Configuration</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="typ">Security</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">WebControls</span><span class="pun">.</span><span class="typ">WebParts</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">HtmlControls</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">_Default</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln"> 
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">IsPostBack</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         </span><span class="typ">ProfileCommon</span><span class="pln"> pc</span><span class="pun">=</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Profile</span><span class="pun">.</span><span class="typ">GetProfile</span><span class="pun">(</span><span class="typ">Profile</span><span class="pun">.</span><span class="typ">UserName</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">pc </span><span class="pun">!=</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtname</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> pc</span><span class="pun">.</span><span class="typ">Name</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtaddr</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">Street</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtcity</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">City</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtstate</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">State</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtzip</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">Zipcode</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Calendar1</span><span class="pun">.</span><span class="typ">SelectedDate</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> pc</span><span class="pun">.</span><span class="typ">Birthday</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Write the following handler for the Submit button, for saving the user data into the profile:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnsubmit_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">ProfileCommon</span><span class="pln"> pc</span><span class="pun">=</span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Profile</span><span class="pun">.</span><span class="typ">GetProfile</span><span class="pun">(</span><span class="typ">Profile</span><span class="pun">.</span><span class="typ">UserName</span><span class="pun">);</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">pc </span><span class="pun">!=</span><span class="pln"> </span><span class="kwd">null</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      pc</span><span class="pun">.</span><span class="typ">Name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtname</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">Street</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtaddr</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">City</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtcity</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">State</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtstate</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      pc</span><span class="pun">.</span><span class="typ">Address</span><span class="pun">.</span><span class="typ">Zipcode</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">txtzip</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">;</span><span class="pln">
      pc</span><span class="pun">.</span><span class="typ">Birthday</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">this</span><span class="pun">.</span><span class="typ">Calendar1</span><span class="pun">.</span><span class="typ">SelectedDate</span><span class="pun">;</span><span class="pln">
      
      pc</span><span class="pun">.</span><span class="typ">Save</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the page is executed for the first time, the user needs to enter the information. However, next time the user details would be automatically loaded.</p>
<h4>Attributes for the &lt;add&gt;  Element</h4>
<p>Apart from the name and type attributes that we have used, there are other attributes to the &lt;add&gt; element. Following table illustrates some of these attributes:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Attributes</th>
<th>Description</th>
</tr>
<tr>
<td>name</td>
<td>The name of the property.</td>
</tr>
<tr>
<td>type</td>
<td>By default the type is string but it allows any fully qualified class name as data type.</td>
</tr>
<tr>
<td>serializeAs</td>
<td>The format to use when serializing this value.</td>
</tr>
<tr>
<td>readOnly</td>
<td>A read only profile value cannot be changed, by default this property is false.</td>
</tr>
<tr>
<td>defaultValue</td>
<td>A default value that is used if the profile does not exist or does not have information.</td>
</tr>
<tr>
<td>allowAnonymous</td>
<td>A Boolean value indicating whether this property can be used with the anonymous profiles.</td>
</tr>
<tr>
<td>Provider</td>
<td>The profiles provider that should be used to manage just this property.</td>
</tr>
</tbody></table>
<h4>Anonymous Personalization</h4>
<p>Anonymous personalization allows the user to personalize the site before identifying themselves. For example, Amazon.com allows the user to add items in the shopping cart before they log in. To enable this feature, the web.config file could be configured as:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;anonymousIdentification</span><span class="pln"> </span><span class="atn">enabled</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"true"</span><span class="pln"> </span><span class="atn">cookieName</span><span class="pun">=</span><span class="atv">".ASPXANONYMOUSUSER"</span><span class="pln">
   </span><span class="atn">cookieTimeout</span><span class="pun">=</span><span class="atv">"120000"</span><span class="pln"> </span><span class="atn">cookiePath</span><span class="pun">=</span><span class="atv">"/"</span><span class="pln"> </span><span class="atn">cookieRequiresSSL</span><span class="pun">=</span><span class="atv">"false"</span><span class="pln">
   </span><span class="atn">cookieSlidingExpiration</span><span class="pun">=</span><span class="atv">"true"</span><span class="pln"> </span><span class="atn">cookieprotection</span><span class="pun">=</span><span class="atv">"Encryption"</span><span class="pln">
   </span><span class="atn">coolieless</span><span class="pun">=</span><span class="atv">"UseDeviceProfile"</span><span class="tag">/&gt;</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="322_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="324_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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