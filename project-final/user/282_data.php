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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=282;
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
<p>The modifiers are keywords added with any programming element to give some especial emphasis on how the programming element will behave or will be accessed in the program</p>
<p>For example, the access modifiers: Public, Private, Protected, Friend, Protected Friend, etc., indicate the access level of a programming element like a variable, constant, enumeration or a class. </p>
<h4>List of Available Modifiers in VB.Net</h4>
<p>The following table provides the complete list of VB.Net modifiers:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th style="width:25%;">Modifier</th>
<th>Description</th>
</tr>
<tr>
<td>1</td>
<td>Ansi </td>
<td>Specifies that Visual Basic should marshal all strings to American National Standards Institute (ANSI) values regardless of the name of the external procedure being declared.</td>
</tr>
<tr>
<td>2</td>
<td>Assembly</td>
<td>Specifies that an attribute at the beginning of a source file applies to the entire assembly.</td>
</tr>
<tr>
<td>3</td>
<td>Async </td>
<td>Indicates that the method or lambda expression that it modifies is asynchronous. Such methods are referred to as async methods. The caller of an async method can resume its work without waiting for the async method to finish.</td>
</tr>
<tr>
<td>4</td>
<td>Auto </td>
<td>The <i>charsetmodifier</i> part in the <b>Declare</b> statement supplies the character set information for marshaling strings during a call to the external procedure. It also affects how Visual Basic searches the external file for the external procedure name. The Auto modifier specifies that Visual Basic should marshal strings according to .NET Framework rules.</td>
</tr>
<tr>
<td>5</td>
<td>ByRef </td>
<td>Specifies that an argument is passed by reference, i.e., the called procedure can change the value of a variable underlying the argument in the calling code. It is used under the contexts of:
<ul class="list">
<li>Declare Statement</li>
<li>Function Statement</li>
<li>Sub Statement</li>
</ul>
</td>
</tr>
<tr>
<td>6</td>
<td>ByVal </td>
<td>Specifies that an argument is passed in such a way that the called procedure or property cannot change the value of a variable underlying the argument in the calling code. It is used under the contexts of:
<ul class="list">
<li>Declare Statement</li>
<li>Function Statement</li>
<li>Operator Statement</li>
<li>Property Statement</li>
<li>Sub Statement</li>
</ul>
</td>
</tr>
<tr>
<td>7</td>
<td>Default </td>
<td>Identifies a property as the default property of its class, structure, or interface.</td>
</tr>
<tr>
<td>8</td>
<td>Friend </td>
<td>
<p>Specifies that one or more declared programming elements are accessible from within the assembly that contains their declaration, not only by the component that declares them.</p>
<p><b>Friend</b> access is often the preferred level for an application's programming elements, and Friend is the default access level of an interface, a module, a class, or a structure.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>In </td>
<td>It is used in generic interfaces and delegates.</td>
</tr>
<tr>
<td>10</td>
<td>Iterator </td>
<td>Specifies that a function or Get accessor is an iterator. An <b>iterator</b> performs a custom iteration over a collection.</td>
</tr>
<tr>
<td>11</td>
<td>Key </td>
<td>The Key keyword enables you to specify behavior for properties of anonymous types.</td>
</tr>
<tr>
<td>12</td>
<td>Module </td>
<td>Specifies that an attribute at the beginning of a source file applies to the current assembly module. It is not same as the Module statement.</td>
</tr>
<tr>
<td>13</td>
<td>MustInherit </td>
<td>Specifies that a class can be used only as a base class and that you cannot create an object directly from it.</td>
</tr>
<tr>
<td>14</td>
<td>MustOverride </td>
<td>Specifies that a property or procedure is not implemented in this class and must be overridden in a derived class before it can be used.</td>
</tr>
<tr>
<td>15</td>
<td>Narrowing </td>
<td>Indicates that a conversion operator (CType) converts a class or structure to a type that might not be able to hold some of the possible values of the original class or structure.</td>
</tr>
<tr>
<td>16</td>
<td>NotInheritable</td>
<td>Specifies that a class cannot be used as a base class.</td>
</tr>
<tr>
<td>17</td>
<td>NotOverridable</td>
<td>Specifies that a property or procedure cannot be overridden in a derived class.</td>
</tr>
<tr>
<td>18</td>
<td>Optional </td>
<td>Specifies that a procedure argument can be omitted when the procedure is called.</td>
</tr>
<tr>
<td>19</td>
<td>Out </td>
<td>For generic type parameters, the Out keyword specifies that the type is covariant.</td>
</tr>
<tr>
<td>20</td>
<td>Overloads</td>
<td>Specifies that a property or procedure redeclares one or more existing properties or procedures with the same name.</td>
</tr>
<tr>
<td>21</td>
<td>Overridable </td>
<td>Specifies that a property or procedure can be overridden by an identically named property or procedure in a derived class.</td>
</tr>
<tr>
<td>22</td>
<td>Overrides </td>
<td>Specifies that a property or procedure overrides an identically named property or procedure inherited from a base class.</td>
</tr>
<tr>
<td>23</td>
<td>ParamArray </td>
<td>ParamArray allows you to pass an arbitrary number of arguments to the procedure. A ParamArray parameter is always declared using ByVal.</td>
</tr>
<tr>
<td>24</td>
<td>Partial </td>
<td>Indicates that a class or structure declaration is a partial definition of the class or structure.</td>
</tr>
<tr>
<td>25</td>
<td>Private</td>
<td>Specifies that one or more declared programming elements are accessible only from within their declaration context, including from within any contained types.</td>
</tr>
<tr>
<td>26</td>
<td>Protected </td>
<td>Specifies that one or more declared programming elements are accessible only from within their own class or from a derived class.</td>
</tr>
<tr>
<td>27</td>
<td>Public</td>
<td>Specifies that one or more declared programming elements have no access restrictions.</td>
</tr>
<tr>
<td>28</td>
<td>ReadOnly </td>
<td>Specifies that a variable or property can be read but not written.</td>
</tr>
<tr>
<td>29</td>
<td>Shadows </td>
<td>Specifies that a declared programming element redeclares and hides an identically named element, or set of overloaded elements, in a base class.</td>
</tr>
<tr>
<td>30</td>
<td>Shared  </td>
<td>Specifies that one or more declared programming elements are associated with a class or structure at large, and not with a specific instance of the class or structure.</td>
</tr>
<tr>
<td>31</td>
<td>Static </td>
<td>Specifies that one or more declared local variables are to continue to exist and retain their latest values after termination of the procedure in which they are declared.</td>
</tr>
<tr>
<td>32</td>
<td>Unicode</td>
<td>Specifies that Visual Basic should marshal all strings to Unicode values regardless of the name of the external procedure being declared.</td>
</tr>
<tr>
<td>33</td>
<td>Widening </td>
<td>Indicates that a conversion operator (CType) converts a class or structure to a type that can hold all possible values of the original class or structure.</td>
</tr>
<tr>
<td>34</td>
<td>WithEvents </td>
<td>Specifies that one or more declared member variables refer to an instance of a class that can raise events.</td>
</tr>
<tr>
<td>35</td>
<td>WriteOnly</td>
<td>Specifies that a property can be written but not read.</td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="281_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="283_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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