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
	$sid=498;
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
<h4>Description</h4>
<p>Metadata is a way of processing the class. Consider you have one component called <i>MyComponent</i> which will be a class until you tell Angular that it's a component. You can use <i>metadata</i> to the class to tell Angular that <i>MyComponent</i> is a component and metadata can be attached to TypeScript by using the <i>decorator</i>.</p>
<h4>Example</h4>
<p>The below example describes use of metadata in the Angular 2:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular 2 Metadata</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.33.3/es6-shim.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://cdnjs.cloudflare.com/ajax/libs/systemjs/0.19.20/system-polyfills.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://code.angularjs.org/2.0.0-beta.6/angular2-polyfills.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://code.angularjs.org/tools/system.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://code.angularjs.org/tools/typescript.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://code.angularjs.org/2.0.0-beta.6/Rx.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"https://code.angularjs.org/2.0.0-beta.6/angular2.dev.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="typ">System</span><span class="pun">.</span><span class="pln">config</span><span class="pun">({</span><span class="pln">
           transpiler</span><span class="pun">:</span><span class="pln"> </span><span class="str">'typescript'</span><span class="pun">,</span><span class="pln">
           typescriptOptions</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> emitDecoratorMetadata</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pln"> </span><span class="pun">},</span><span class="pln">
           packages</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="str">'app'</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">defaultExtension</span><span class="pun">:</span><span class="pln"> </span><span class="str">'ts'</span><span class="pun">}},</span><span class="pln">
           map</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="str">'app'</span><span class="pun">:</span><span class="pln"> </span><span class="str">'./angular2/src/app'</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         </span><span class="typ">System</span><span class="pun">.</span><span class="kwd">import</span><span class="pun">(</span><span class="str">'app/metadata_main'</span><span class="pun">)</span><span class="pln">
            </span><span class="pun">.</span><span class="pln">then</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">,</span><span class="pln"> console</span><span class="pun">.</span><span class="pln">error</span><span class="pun">.</span><span class="pln">bind</span><span class="pun">(</span><span class="pln">console</span><span class="pun">));</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;my-app&gt;</span><span class="pln">Loading...</span><span class="tag">&lt;/my-app&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>The above code includes the following configuration options:</p>
<ul class="list">
   <li>
      <p>You can configure the <i>index.html</i> file using <i>typescript</i> version. The SystemJS transpile the TypeScript to JavaScript before running the application by using the <i>transpiler</i> option.</p>
   </li>
   <li>
      <p>If you do not transpile to JavaScript before running the application, you could see the compiler warnings and errors which are hidden in the browser.</p>
   </li>
   <li>
      <p>The TypeScript generates metadata for each and every class of the code when the <i>emitDecoratorMetadata</i> option is set. If you don't specify this option, large amount of unused metadata will be generated which affects the file size and impact on the application runtime.</p>
   </li>
   <li>
      <p>Angular 2 includes the packages form the <i>app</i> folder where files will have the <i>.ts</i> extension.</p>
   </li>
   <li>
      <p>Next it will load the main component file from the <i>app</i> folder. If there is no main component file found, then it will display the error in the console.</p>
   </li>
   <li>
      <p>When Angular calls the bootstrap function in main.ts, it reads the Component metadata, finds the 'app' selector, locates an element tag named app, and loads the application between those tags.</p>
   </li>
</ul>
<p>To run the code, you need the following <i>TypeScript(.ts)</i> files which you need to save under the <i>app</i> folder.</p>
<b>metadata_main.ts</b>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="pln">bootstrap</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"angular2/platform/browser"</span><span class="pln">    </span><span class="com">//importing bootstrap function</span><span class="pln">
</span><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="typ">MyTemplate</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"./metadata_app.component"</span><span class="pln">    </span><span class="com">//importing component function</span><span class="pln">

bootstrap</span><span class="pun">(</span><span class="typ">MyTemplate</span><span class="pun">);</span></pre>
<p>Now we will create a component in TypeScript(.ts) file as shown below:</p>
<b>metadata_app.component.ts</b>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="typ">Component</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"angular2/core"</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="typ">ItemComponent</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">'./item-list.component'</span><span class="pun">;</span><span class="pln">

</span><span class="lit">@Component</span><span class="pun">({</span><span class="pln">
    selector</span><span class="pun">:</span><span class="pln"> </span><span class="str">'my-app'</span><span class="pun">,</span><span class="pln">
    </span><span class="kwd">template</span><span class="pun">:</span><span class="pln"> </span><span class="str">`&lt;my-list&gt;&lt;/my-list&gt;`</span><span class="pun">,</span><span class="pln">
    directives</span><span class="pun">:[</span><span class="typ">ItemComponent</span><span class="pun">]</span><span class="pln">
</span><span class="pun">})</span><span class="pln">
</span><span class="kwd">export</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">MyTemplate</span><span class="pln"> </span><span class="pun">{}</span></pre>
<ul class="list">
   <li>
      <p>The <i>@Component</i> is a decorator which uses configuration object to create the component and its view.</p>
   </li>
   <li>
      <p>The <i>selector</i> creates an instance of the component where it finds &lt;my-app&gt; tag in parent HTML.</p>
   </li>
   <li>
      <p>The <i>directive</i> decorator is used to represent the array of components or directives.</p>
   </li>
</ul>
<p>The below TypeScript(.ts) file displays the list of items on the output.</p>
<b>item-list.component.ts</b>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="typ">Component</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"angular2/core"</span><span class="pun">;</span><span class="pln">

</span><span class="lit">@Component</span><span class="pun">({</span><span class="pln">
   selector</span><span class="pun">:</span><span class="str">'my-list'</span><span class="pun">,</span><span class="pln">
   </span><span class="kwd">template</span><span class="pun">:</span><span class="str">`&lt;h4&gt;List of Fruits&lt;/h4&gt;
   &lt;ul&gt;
      &lt;li *ngFor="#myItem of itemList"&gt;{{myItem.name}}&lt;/li&gt;
   &lt;/ul&gt;
   `</span><span class="pln">
</span><span class="pun">})</span><span class="pln">
</span><span class="kwd">export</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">ItemComponent</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> itemList </span><span class="pun">=</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">"Apple"</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">"Orange"</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">"Grapes"</span><span class="pun">},</span><span class="pln">
   </span><span class="pun">];</span><span class="pln">
</span><span class="pun">}</span></pre>
<ul class="list">
   <li>
      <p>The <i>template</i> tells Angular how to display the component.</p>
   </li>
   <li>
      <p>The <i>*ngFor</i> directive is used to loop the list of items from the array of <i>itemList</i> object.</p>
   </li>
</ul>
<h4>Output</h4>
<p>Let's carry out the following steps to see how above code works:</p>
<ul class="list">
   <li>
      <p>Save above HTML code as <b>index.html</b> file as how we created in <a href="/angular2/angular2_environment.htm">environment</a> chapter and use the above <i>app</i> folder which contains <i>.ts</i> files.</p>
   </li>
   <li>
      <p>Open the terminal window and enter the below command:</p>
      <pre class="prettyprint notranslate prettyprinted"><span class="pln">npm start</span></pre>
   </li>
   <li>
      <p>After few moments, a browser tab should open and displays the output as shown below.</p>
   </li>
</ul>
<p><b>OR</b> you can run this file in another way:</p>
<ul class="list">
   <li>
      <p>Save above HTML code as <b>angular2_metadata.html</b> file in your server root folder.</p>
   </li>
   <li>
      <p>Open this HTML file as http://localhost/angular2_metadata.html and output as below gets displayed.</p>
   </li>
</ul>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="497_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="499_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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