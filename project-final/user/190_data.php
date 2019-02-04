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
<title>AngularJs Tutorials | knowledge.com</title>
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
	$sid=190;
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




<p>AngularJS supports Single Page Application via multiple views on a single page. To do this AngularJS has provided ng-view and ng-template directives and $routeProvider services.</p>
<h4>ng-view</h4>
<p>ng-view tag simply creates a place holder where a corresponding view (html or ng-template view) can be placed based on the configuration.</p>
<h4>Usage</h4>
<p>Define a div with ng-view within the main module.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="tag">&gt;</span><span class="pln">
   ...
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-view</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;/div&gt;</span><span class="pln">    </span></pre>
<h4>ng-template</h4>
<p>ng-template directive is used to create an html view using script tag. It contains "id" attribute which is used by $routeProvider to map a view with a controller.</p>
<h4>Usage</h4>
<p>Define a script block with type as ng-template within the main module.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="tag">&gt;</span><span class="pln">
   ...
	
   </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/ng-template"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"addStudent.htm"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="pun">&lt;</span><span class="pln">h4</span><span class="pun">&gt;</span><span class="pln"> </span><span class="typ">Add</span><span class="pln"> </span><span class="typ">Student</span><span class="pln"> </span><span class="pun">&lt;/</span><span class="pln">h4</span><span class="pun">&gt;</span><span class="pln">
      </span><span class="pun">{{</span><span class="pln">message</span><span class="pun">}}</span><span class="pln">
   </span><span class="tag">&lt;/script&gt;</span><span class="pln">

</span><span class="tag">&lt;/div&gt;</span><span class="pln">    </span></pre>
<h4>$routeProvider</h4>
<p>$routeProvider is the key service which set the configuration of urls, map them with the corresponding html page or ng-template, and attach a controller with the same.</p>
<h4>Usage</h4>
<p>Define a script block with main module and set the routing configuration.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="kwd">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[</span><span class="str">'ngRoute'</span><span class="pun">]);</span><span class="pln">

mainApp</span><span class="pun">.</span><span class="pln">config</span><span class="pun">([</span><span class="str">'$routeProvider'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$routeProvider</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $routeProvider</span><span class="pun">.</span><span class="pln">
   
   </span><span class="kwd">when</span><span class="pun">(</span><span class="str">'/addStudent'</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      templateUrl</span><span class="pun">:</span><span class="pln"> </span><span class="str">'addStudent.htm'</span><span class="pun">,</span><span class="pln"> controller</span><span class="pun">:</span><span class="pln"> </span><span class="str">'AddStudentController'</span><span class="pln">
   </span><span class="pun">}).</span><span class="pln">
   
   </span><span class="kwd">when</span><span class="pun">(</span><span class="str">'/viewStudents'</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      templateUrl</span><span class="pun">:</span><span class="pln"> </span><span class="str">'viewStudents.htm'</span><span class="pun">,</span><span class="pln"> controller</span><span class="pun">:</span><span class="pln"> </span><span class="str">'ViewStudentsController'</span><span class="pln">
   </span><span class="pun">}).</span><span class="pln">
   
   otherwise</span><span class="pun">({</span><span class="pln">
      redirectTo</span><span class="pun">:</span><span class="pln"> </span><span class="str">'/addStudent'</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">
	
</span><span class="pun">}]);</span></pre>
<p>Following are the important points to be considered in above example.</p>
<ul class="list">
<li><p>$routeProvider is defined as a function under config of mainApp module using key as '$routeProvider'.</p></li>
<li><p>$routeProvider.when defines a url "/addStudent" which then is mapped to "addStudent.htm". addStudent.htm should be present in the same path as main html page.If htm page is not defined then ng-template to be used with id="addStudent.htm". We've used ng-template.</p></li>
<li><p>"otherwise" is used to set the default view.</p></li>
<li><p>"controller" is used to set the corresponding controller for the view.</p></li>
</ul>
<h4>Example</h4>
<p>Following example will showcase all the above mentioned directives.</p>
<p><i>testAngularJS.htm</i></p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular JS Views</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">AngularJS Sample Application</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#addStudent"</span><span class="tag">&gt;</span><span class="pln">Add Student</span><span class="tag">&lt;/a&gt;&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#viewStudents"</span><span class="tag">&gt;</span><span class="pln">View Students</span><span class="tag">&lt;/a&gt;&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-view</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/ng-template"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"addStudent.htm"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="pun">&lt;</span><span class="pln">h4</span><span class="pun">&gt;</span><span class="pln"> </span><span class="typ">Add</span><span class="pln"> </span><span class="typ">Student</span><span class="pln"> </span><span class="pun">&lt;/</span><span class="pln">h4</span><span class="pun">&gt;</span><span class="pln">
            </span><span class="pun">{{</span><span class="pln">message</span><span class="pun">}}</span><span class="pln">
         </span><span class="tag">&lt;/script&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/ng-template"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"viewStudents.htm"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="pun">&lt;</span><span class="pln">h4</span><span class="pun">&gt;</span><span class="pln"> </span><span class="typ">View</span><span class="pln"> </span><span class="typ">Students</span><span class="pln"> </span><span class="pun">&lt;/</span><span class="pln">h4</span><span class="pun">&gt;</span><span class="pln">
            </span><span class="pun">{{</span><span class="pln">message</span><span class="pun">}}</span><span class="pln">
         </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="pln">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[</span><span class="str">'ngRoute'</span><span class="pun">]);</span><span class="pln">
         mainApp</span><span class="pun">.</span><span class="pln">config</span><span class="pun">([</span><span class="str">'$routeProvider'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$routeProvider</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $routeProvider</span><span class="pun">.</span><span class="pln">
            
            when</span><span class="pun">(</span><span class="str">'/addStudent'</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               templateUrl</span><span class="pun">:</span><span class="pln"> </span><span class="str">'addStudent.htm'</span><span class="pun">,</span><span class="pln">
               controller</span><span class="pun">:</span><span class="pln"> </span><span class="str">'AddStudentController'</span><span class="pln">
            </span><span class="pun">}).</span><span class="pln">
            
            when</span><span class="pun">(</span><span class="str">'/viewStudents'</span><span class="pun">,</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               templateUrl</span><span class="pun">:</span><span class="pln"> </span><span class="str">'viewStudents.htm'</span><span class="pun">,</span><span class="pln">
               controller</span><span class="pun">:</span><span class="pln"> </span><span class="str">'ViewStudentsController'</span><span class="pln">
            </span><span class="pun">}).</span><span class="pln">
            
            otherwise</span><span class="pun">({</span><span class="pln">
               redirectTo</span><span class="pun">:</span><span class="pln"> </span><span class="str">'/addStudent'</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">}]);</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'AddStudentController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This page will be used to display add student form"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'ViewStudentsController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This page will be used to display all the students"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
			
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<ul class="list">
<li><p>We've set values to models in shapeController.</p></li>
<li><p>We've overridden message in child controller circleController. When "message" is used within module of controller circleController, the overridden message will be used.</p></li>
</ul>
<h4>Example</h4>
<p>Following example will showcase all the above mentioned directives.</p>
<p><i>testAngularJS.htm</i></p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular JS Forms</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">AngularJS Sample Application</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"shapeController"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">{{message}} </span><span class="tag">&lt;br/&gt;</span><span class="pln"> {{type}} </span><span class="tag">&lt;/p&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"circleController"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;p&gt;</span><span class="pln">{{message}} </span><span class="tag">&lt;br/&gt;</span><span class="pln"> {{type}} </span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"squareController"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;p&gt;</span><span class="pln">{{message}} </span><span class="tag">&lt;br/&gt;</span><span class="pln"> {{type}} </span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
			
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="pln">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">"shapeController"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"In shape controller"</span><span class="pun">;</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">type </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Shape"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">"circleController"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"In circle controller"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">"squareController"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"In square controller"</span><span class="pun">;</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">type </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Square"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
			
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="189_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="191_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'AngularJs_header.php'; ?>
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