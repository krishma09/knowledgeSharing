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
	$sid=193;
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




<p>Dependency Injection is a software design pattern in which components are given their dependencies instead of hard coding them within the component. This relieves a component from locating the dependency and makes dependencies configurable. This helps in making components reusable, maintainable and testable.</p>
<p>AngularJS provides a supreme Dependency Injection mechanism. It provides following core components which can be injected into each other as dependencies.</p>
<ul class="list">
<li>value</li>
<li>factory</li>
<li>service</li>
<li>provider</li>
<li>constant</li>
</ul>
<h4>value</h4>
<p>value is simple javascript object and it is used to pass values to controller during config phase.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">//define a module</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="kwd">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">

</span><span class="com">//create a value object as "defaultInput" and pass it a data.</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">value</span><span class="pun">(</span><span class="str">"defaultInput"</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">);</span><span class="pln">
</span><span class="pun">...</span><span class="pln">

</span><span class="com">//inject the value in the controller using its name "defaultInput"</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'CalcController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">,</span><span class="pln"> defaultInput</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="pln">number </span><span class="pun">=</span><span class="pln"> defaultInput</span><span class="pun">;</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="pln">result </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">.</span><span class="pln">square</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">number</span><span class="pun">);</span><span class="pln">
   
   $scope</span><span class="pun">.</span><span class="pln">square </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $scope</span><span class="pun">.</span><span class="pln">result </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">.</span><span class="pln">square</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">number</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">});</span></pre>
<h4>factory</h4>
<p>factory is a function which is used to return value. It creates value on demand whenever a service or controller requires. It normally uses a factory function to calculate and return the value.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">//define a module</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="kwd">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">

</span><span class="com">//create a factory "MathService" which provides a method multiply to return multiplication of two numbers</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">factory</span><span class="pun">(</span><span class="str">'MathService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> factory </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
   
   factory</span><span class="pun">.</span><span class="pln">multiply </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> a </span><span class="pun">*</span><span class="pln"> b
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> factory</span><span class="pun">;</span><span class="pln">
</span><span class="pun">});</span><span class="pln"> 

</span><span class="com">//inject the factory "MathService" in a service to utilize the multiply method of factory.</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">service</span><span class="pun">(</span><span class="str">'CalcService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="typ">MathService</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">square </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> </span><span class="typ">MathService</span><span class="pun">.</span><span class="pln">multiply</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln">a</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">});</span><span class="pln">
</span><span class="pun">...</span></pre>
<h4>service</h4>
<p>service is a singleton javascript object containing a set of functions to perform certain tasks. Services are defined using service() functions and then injected into controllers.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">//define a module</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="kwd">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">
</span><span class="pun">...</span><span class="pln">

</span><span class="com">//create a service which defines a method square to return square of a number.</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">service</span><span class="pun">(</span><span class="str">'CalcService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="typ">MathService</span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">square </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> </span><span class="typ">MathService</span><span class="pun">.</span><span class="pln">multiply</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln">a</span><span class="pun">);</span><span class="pln"> 
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

</span><span class="com">//inject the service "CalcService" into the controller</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'CalcController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">,</span><span class="pln"> defaultInput</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="pln">number </span><span class="pun">=</span><span class="pln"> defaultInput</span><span class="pun">;</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="pln">result </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">.</span><span class="pln">square</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">number</span><span class="pun">);</span><span class="pln">
   
   $scope</span><span class="pun">.</span><span class="pln">square </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $scope</span><span class="pun">.</span><span class="pln">result </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">.</span><span class="pln">square</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">number</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">});</span></pre>
<h4>provider</h4>
<p>provider is used by AngularJS internally to create services, factory etc. during config phase(phase during which AngularJS bootstraps itself). Below mention script can be used to create MathService that we've created earlier. Provider is a special factory method with a method get() which is used to return the value/service/factory.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">//define a module</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="kwd">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">
</span><span class="pun">...</span><span class="pln">

</span><span class="com">//create a service using provider which defines a method square to return square of a number.</span><span class="pln">
mainApp</span><span class="pun">.</span><span class="pln">config</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$provide</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $provide</span><span class="pun">.</span><span class="pln">provider</span><span class="pun">(</span><span class="str">'MathService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">$get </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> factory </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">  
         
         factory</span><span class="pun">.</span><span class="pln">multiply </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> a </span><span class="pun">*</span><span class="pln"> b</span><span class="pun">;</span><span class="pln"> 
         </span><span class="pun">}</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> factory</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">};</span><span class="pln">
   </span><span class="pun">});</span><span class="pln">
</span><span class="pun">});</span></pre>
<h4>constant</h4>
<p>constants are used to pass values at config phase considering the fact that value can not be used to be passed during config phase.</p>
<pre class="result notranslate">mainApp.constant("configParam", "constant value");
</pre>
<h4>Example</h4>
<p>Following example will showcase all the above mentioned directives.</p>
<p><i>testAngularJS.htm</i></p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">AngularJS Dependency Injection</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">AngularJS Sample Application</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"CalcController"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">Enter a number: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"number"</span><span class="pln"> </span><span class="atn">ng-model</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"number"</span><span class="pln"> </span><span class="tag">/&gt;&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">ng-click</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"square()"</span><span class="tag">&gt;</span><span class="pln">X</span><span class="tag">&lt;sup&gt;</span><span class="pln">2</span><span class="tag">&lt;/sup&gt;&lt;/button&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">Result: {{result}}</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="pln">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">config</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$provide</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $provide</span><span class="pun">.</span><span class="pln">provider</span><span class="pun">(</span><span class="str">'MathService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">$get </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  </span><span class="kwd">var</span><span class="pln"> factory </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
                  
                  factory</span><span class="pun">.</span><span class="pln">multiply </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                     </span><span class="kwd">return</span><span class="pln"> a </span><span class="pun">*</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
                  </span><span class="pun">}</span><span class="pln">
                  </span><span class="kwd">return</span><span class="pln"> factory</span><span class="pun">;</span><span class="pln">
               </span><span class="pun">};</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
			
         mainApp</span><span class="pun">.</span><span class="pln">value</span><span class="pun">(</span><span class="str">"defaultInput"</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">);</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">factory</span><span class="pun">(</span><span class="str">'MathService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> factory </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
            
            factory</span><span class="pun">.</span><span class="pln">multiply </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">return</span><span class="pln"> a </span><span class="pun">*</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> factory</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">service</span><span class="pun">(</span><span class="str">'CalcService'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="typ">MathService</span><span class="pun">){</span><span class="pln">
            </span><span class="kwd">this</span><span class="pun">.</span><span class="pln">square </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">a</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">return</span><span class="pln"> </span><span class="typ">MathService</span><span class="pun">.</span><span class="pln">multiply</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln">a</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'CalcController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">,</span><span class="pln"> defaultInput</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">number </span><span class="pun">=</span><span class="pln"> defaultInput</span><span class="pun">;</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">result </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">.</span><span class="pln">square</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">number</span><span class="pun">);</span><span class="pln">

            $scope</span><span class="pun">.</span><span class="pln">square </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $scope</span><span class="pun">.</span><span class="pln">result </span><span class="pun">=</span><span class="pln"> </span><span class="typ">CalcService</span><span class="pun">.</span><span class="pln">square</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">number</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
			
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="192_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="194_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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