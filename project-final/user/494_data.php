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
<title>ANGULAR 2 Tutorials | knowledge.com</title>
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
	$sid=494;
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

<p>In this chapter, we are going to discuss the architectural style of Angular 2 framework, for implementing user applications. The following diagram shows architecture of Angular 2:</p>
<img src="images/angular_arch.jpg" height="500px" width="500px" alt="Angular 2 Architecture">
<p>The architecture of Angular 2 contains following modules:</p>
<ul class="list">
<li><b>Module</b></li>
<li><b>Component</b></li>
<li><b>Template</b></li>
<li><b>Metadata</b></li>
<li><b>Data Binding</b></li>
<li><b>Service</b></li>
<li><b>Directive</b></li>
<li><b>Dependency Injection</b></li>
</ul>
<h4>Module</h4>
<p>The module component is characterized by a block of code which can be used to perform a single task. You can export the value of something from the code such as a class. The Angular apps are called as modules and build your application using many modules. The basic building block of Angular 2 is a <i>component</i> class which can be exported from a module.</p>
<p>Some of the applications will have a component class name as <i>AppComponent</i> and you can find it in a file called <i>app.component.ts</i>. Use the <i>export</i> statement to export component class from module as shown below:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">export</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">AppComponent</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">}</span></pre>
<p>The <i>export</i> statement specifies that it is a module and its <i>AppComponent</i> class is defined as public and can be accessible to other modules of the application.</p>
<h4>Component</h4>
<p>A component is a controller class with a template which mainly deals with a view of the application and logic on the page. It is a bit of code that can be used throughout an application. Component knows how to render itself and configure dependency injection. You can associate CSS styles using component inline styles, style urls and template inline styles to a component.</p>
<p>To register component, we use <i>@Component</i> annotation and can be used to break up the application into smaller parts. There will be only one component per DOM element.</p>
<h4>Template</h4>
<p>The component's view can be defined by using the <i>template</i> which tells Angular how to display the component. For instance, below simple template shows how to display the name:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;div&gt;</span><span class="pln">
Your name is : {{name}}
</span><span class="tag">&lt;/div&gt;</span></pre>
<p>To display the value, you can put template expression within the interpolation braces. </p>
<h4>Metadata</h4>
<p>Metadata is a way of processing the class. Consider we have one component called <i>MyComponent</i> which will be a class until we tell Angular that it's a component. You can use <i>metadata</i> to the class to tell Angular that <i>MyComponent</i> is a component. The metadata can be attached to TypeScript by using the <i>decorator</i>.</p>
<p>For instance:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">@Component</span><span class="pun">({</span><span class="pln">
   selector </span><span class="pun">:</span><span class="pln"> </span><span class="str">'mylist'</span><span class="pun">,</span><span class="pln">
   </span><span class="kwd">template</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">'&lt;h4&gt;Name is Harry&lt;/h4&gt;'</span><span class="pln">
   directives </span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="typ">MyComponentDetails</span><span class="pun">]</span><span class="pln">
</span><span class="pun">})</span><span class="pln">
</span><span class="kwd">export</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ListComponent</span><span class="pun">{...}</span></pre>
<p>The <i>@Component</i> is a decorator which uses configuration object to create the component and its view. The <i>selector</i> creates an instance of the component where it finds &lt;mylist&gt; tag in parent HTML. The <i>template</i> tells Angular how to display the component. The <i>directive</i> decorator is used to represent the array of components or directives.</p>
<h4>Data Binding</h4>
<p>Data binding is a process of coordinating application data values by declaring bindings between sources and target HTML elements. It combines the template parts with components parts and template HTML is bound with markup to connect both sides. There are four types of data binding:</p>
<ul class="list">
<li><p><b>Interpolation</b>: It displays the component value within the div tags.</p></li>
<li><p><b>Property Binding</b>: It passes the property from the parent to property of the child.</p></li>
<li><p><b>Event Binding</b>: It fires when you click on the components method name.</p></li>
<li><p><b>Two-way Binding</b>: This form binds property and event by using the <i>ngModel</i> directive in a single notation.</p></li>
</ul>
<h4>Service</h4>
<p>Services are JavaScript functions that are responsible for doing a specific task only. Angular services are injected using Dependency Injection mechanism. Service includes the value, function or feature which is required by the application. Generally, service is a class which can perform something specific such as logging service, data service, message service, the configuration of application etc. There is nothing much about service in Angular and there is no ServiceBase class, but still services can be treated as fundamental to Angular application.</p>
<h4>Directive</h4>
<p>The directive is a class that represents the metadata. There are three types of directives:</p>
<ul class="list">
<li><p><b>Component Directive</b>: It creates custom controller by using view and controller and used as custom HTML element.</p></li>
<li><p><b>Decorator Directive</b>: It decorates the elements using additional behavior.</p></li>
<li><p><b>Template Directive</b>: It converts HTML into a reusable template.</p></li>
</ul>
<h4>Dependency Injection</h4>
<p>Dependency Injection is a design pattern that passes an object as dependencies in different components across the application. It creates new a instance of class along with its required dependencies.</p>
<p>You must remember the below points while using Dependency Injection:</p>
<ul class="list">
<li><p>The Dependency Injection is stimulated into the framework and can be used everywhere.</p></li>
<li><p>The <i>injector</i> mechanism maintains service instance and can be created using a <i>provider</i>.</p></li>
<li><p>The <i>provider</i> is a way of creating a service.</p></li>
<li><p>You can register the <i>providers</i> along with injectors.</p></li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="493_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="495_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'angular2_header.php'; ?></aside>
 
  
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