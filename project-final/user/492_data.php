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
	$sid=492;
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
<p>In this chapter let us study about <i>Angular 2 development environment</i>.</p>
<ul class="list">
<li><p>Angular uses <i>TypeScript</i> which is a primary language for developing of Angular applications.</p></li>
<li><p>The <i>TypeScript</i> is a super set of JavaScript which is migrated to TypeScript and code written in TypeScript makes less prone to run time errors.</p></li>
</ul>
<p>To setup development environment follow the below steps:</p>
<p><b>Step(1):</b> Create a project folder in your local drive by typing below commands in the command prompt.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">mkdir angular2</span><span class="pun">-</span><span class="pln">demo
cd angular2</span><span class="pun">-</span><span class="pln">demo</span></pre>
<h4>Creating Configuration Files</h4>
<p><b>Step(2):</b> You need to create <b>tsconfig.json</b> which is the TypeScript compiler configuration file. It guides the compiler to generate JavaScript files.

</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
  </span><span class="str">"compilerOptions"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    </span><span class="str">"target"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"es5"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"module"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"system"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"moduleResolution"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"node"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"sourceMap"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"emitDecoratorMetadata"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"experimentalDecorators"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"removeComments"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"noImplicitAny"</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">false</span><span class="pln">
  </span><span class="pun">},</span><span class="pln">
  </span><span class="str">"exclude"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">[</span><span class="pln">
    </span><span class="str">"node_modules"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"typings/main"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"typings/main.d.ts"</span><span class="pln">
  </span><span class="pun">]</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><b>Step(3):</b> Create a <b>typings.json</b> file in your project folder <i>angular2-demo</i> as shown below:</p>
<b>typings.json</b>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
  </span><span class="str">"globalDependencies"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    </span><span class="str">"core-js"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"registry:dt/core-js#0.0.0+20160602141332"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"jasmine"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"registry:dt/jasmine#2.2.0+20160621224255"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"node"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"registry:dt/node#6.0.0+20160621231320"</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>A large number of libraries of the JavaScript extends JavaScript environment with features and syntax which is not natively recognized by the TypeScript compiler. The <b>typings.json</b> file is used to identify TypeScript definition files in your Angular application.</p>
<p>In the above code, there are three typing files as shown below:</p>
<ul class="list">
   <li><p><b>core-js</b>: It brings ES2015/ES6 capabilities to our ES5 browsers.</p></li>
   <li><p><b>jasmine</b>: It is the typing for Jasmine test framework.</p></li>
   <li><p><b>node</b>: It is used for the code that references objects in the nodejs environment.</p></li>
</ul>
<p>These typings are used in development of larger Angular applications.</p>
<p><b>Step(4):</b> Add <b>package.json</b> file to your <i>angular2-demo</i> project folder with the below code:</p>
<b>package.json</b>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
  </span><span class="str">"name"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"angular2-demo"</span><span class="pun">,</span><span class="pln">
  </span><span class="str">"version"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"1.0.0"</span><span class="pun">,</span><span class="pln">
  </span><span class="str">"scripts"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    </span><span class="str">"start"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"concurrent \"npm run tsc:w\" \"npm run lite\" "</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"tsc"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"tsc"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"tsc:w"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"tsc -w"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"lite"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"lite-server"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"typings"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"typings"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"postinstall"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"typings install"</span><span class="pln">
  </span><span class="pun">},</span><span class="pln">
  </span><span class="str">"license"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"ISC"</span><span class="pun">,</span><span class="pln">
  </span><span class="str">"dependencies"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    </span><span class="str">"angular2"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"2.0.0-beta.7"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"systemjs"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.19.22"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"es6-promise"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"^3.0.2"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"es6-shim"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"^0.33.3"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"reflect-metadata"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.1.2"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"rxjs"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"5.0.0-beta.2"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"zone.js"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"0.5.15"</span><span class="pln">
  </span><span class="pun">},</span><span class="pln">
  </span><span class="str">"devDependencies"</span><span class="pun">:</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    </span><span class="str">"concurrently"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"^2.0.0"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"lite-server"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"^2.1.0"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"typescript"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"^1.7.5"</span><span class="pun">,</span><span class="pln">
    </span><span class="str">"typings"</span><span class="pun">:</span><span class="str">"^0.6.8"</span><span class="pln">
  </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The <b>package.json</b> will contain the packages that our apps require. These packages are installed and maintained with npm (Node Package Manager). To install <i>npm</i> </p>
<p><b>Step(5):</b> To install packages, run the below npm command in command prompt.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">npm install</span></pre>
Error messages in red may appear while installing npm, just ignore them.
<h4>Creating Our First Angular Component</h4>
A component is the fundamental concept of Angular. A component is a class that controls a view template - a part of a web page where information to the user is displayed and user feedback is responded. Components are required to build Angular apps.

<p><b>Step(6):</b> Create a sub-folder called <i>app/</i> inside your project folder to the place Angular app components. You can use the below command to create the folder:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">mkdir app
cd app</span></pre>
<p><b>Step(7):</b> The files which you create need to be saved with <b>.ts</b> extension. Create a file called <b>environment_app.component.ts</b> in your <i>app/</i> folder with the below code:</p>
<b>environment_app.component.ts</b>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="typ">Component</span><span class="pun">,</span><span class="pln"> </span><span class="typ">View</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"angular2/core"</span><span class="pun">;</span><span class="pln">

</span><span class="lit">@Component</span><span class="pun">({</span><span class="pln">
   selector</span><span class="pun">:</span><span class="pln"> </span><span class="str">'my-app'</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="lit">@View</span><span class="pun">({</span><span class="pln">
  </span><span class="kwd">template</span><span class="pun">:</span><span class="pln"> </span><span class="str">'&lt;h4&gt;My First Angular 2 App&lt;/h4&gt;'</span><span class="pln">
</span><span class="pun">})</span><span class="pln">

</span><span class="kwd">export</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">AppComponent</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

</span><span class="pun">}</span></pre>
<ul class="list">
   <li><p>The above code will import the <i>Component</i> and <i>View</i> package from <i>angular2/core</i>.</p></li>
   <li><p>The <i>@Component</i> is an Angular 2 <i>decorator</i> that allows you to associate metadata with the component class.</p></li>
   <li><p>The <i>my-app</i> can be used as HTML tag to injecting and can be used as a component.</p></li>
   <li><p>The <i>@view</i> contains a <i>template</i> that tells Angular how to render a view.</p></li>
   <li><p>The <i>export</i> specifies that, this component will be available outside the file.</p></li>
</ul>
<p><b>Step(8):</b> Next, create <b>environment_main.ts</b> file with the below code:</p>
<b>environment_main.ts</b>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="pln">bootstrap</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"angular2/platform/browser"</span><span class="pln">
</span><span class="kwd">import</span><span class="pln"> </span><span class="pun">{</span><span class="typ">AppComponent</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="str">"./environment_app.component"</span><span class="pln">

bootstrap</span><span class="pun">(</span><span class="typ">AppComponent</span><span class="pun">);</span></pre>
<ul class="list">
   <li><p>The <i>environment_main.ts</i> file tells Angular to load the component.</p></li>
   <li><p>To launch the application, we need to import both <i>Angular's browser bootstrap</i> function and <i>root component of the application</i>.</p></li>
   <li><p>After importing, the <i>bootstrap</i> is called by passing the <i>root component type</i> i.e. <i>AppComponent</i>.</p></li>
</ul>
<p><b>Step(9):</b> Now create a <b>index.html</b> in your project folder <i>angular2-demo/</i> with the below code:</p>
<b>index.html</b>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
  </span><span class="tag">&lt;head&gt;</span><span class="pln">
    </span><span class="tag">&lt;title&gt;</span><span class="pln">Hello World</span><span class="tag">&lt;/title&gt;</span><span class="pln">
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
      </span><span class="typ">System</span><span class="pun">.</span><span class="kwd">import</span><span class="pun">(</span><span class="str">'app/environment_main'</span><span class="pun">)</span><span class="pln">
            </span><span class="pun">.</span><span class="pln">then</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">,</span><span class="pln"> console</span><span class="pun">.</span><span class="pln">error</span><span class="pun">.</span><span class="pln">bind</span><span class="pun">(</span><span class="pln">console</span><span class="pun">));</span><span class="pln">
    </span><span class="tag">&lt;/script&gt;</span><span class="pln">
  </span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
   </span><span class="tag">&lt;my-app&gt;</span><span class="pln">Loading...</span><span class="tag">&lt;/my-app&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Angular will launch the app in the browser with our component and places it in a specific location on <i>index.html</i>.</p>
<h4>Compile and Run</h4>
<p><b>Step(10):</b> To run the application, type the below command in a terminal window:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">npm start</span></pre>
<p>The above command runs two parallel node processes as listed below:</p>
<ul class="list">
   <li><p>TypeScript compiler in the watch mode</p></li>
   <li><p>The <b>lite-server (static server)</b> loads the <i>index.html</i> in a browser and refreshes the browser as  application files change.</p></li>
</ul>
<p>After few moments, a browser tab will get open with the following output:</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="491_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="493_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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