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
	$sid=194;
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




<p>Custom directives are used in AngularJS to extend the functionality of HTML. Custom directives are defined using "directive" function. A custom directive simply replaces the element for which it is activated. AngularJS application during bootstrap finds the matching elements and do one time activity using its compile() method of the custom directive then process the element using link() method of the custom directive based on the scope of the directive. AngularJS provides support to create custom directives for following type of elements.</p>
<ul class="list">
<li><p><b>Element directives</b> − Directive activates when a matching element is encountered.</p></li>
<li><p><b>Attribute</b> − Directive activates when a matching attribute is encountered.</p></li>
<li><p><b>CSS</b> − Directive activates when a matching css style is encountered.</p></li>
<li><p><b>Comment</b> − Directive activates when a matching comment is encountered.</p></li>
</ul>
<h4>Understanding Custom Directive</h4>
<p>Define custom html tags.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;student</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Mahesh"</span><span class="tag">&gt;&lt;/student&gt;&lt;br/&gt;</span><span class="pln">
</span><span class="tag">&lt;student</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Piyush"</span><span class="tag">&gt;&lt;/student&gt;</span></pre>
<p>Define custom directive to handle above custom html tags.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="kwd">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">

</span><span class="com">//Create a directive, first parameter is the html element to be attached.	  </span><span class="pln">
</span><span class="com">//We are attaching student html tag. </span><span class="pln">
</span><span class="com">//This directive will be activated as soon as any student element is encountered in html</span><span class="pln">

mainApp</span><span class="pun">.</span><span class="pln">directive</span><span class="pun">(</span><span class="str">'student'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">//define the directive object</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> directive </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
   
   </span><span class="com">//restrict = E, signifies that directive is Element directive</span><span class="pln">
   directive</span><span class="pun">.</span><span class="pln">restrict </span><span class="pun">=</span><span class="pln"> </span><span class="str">'E'</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com">//template replaces the complete element with its text. </span><span class="pln">
   directive</span><span class="pun">.</span><span class="kwd">template</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Student: &lt;b&gt;{{student.name}}&lt;/b&gt; , Roll No: &lt;b&gt;{{student.rollno}}&lt;/b&gt;"</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com">//scope is used to distinguish each student element based on criteria.</span><span class="pln">
   directive</span><span class="pun">.</span><span class="pln">scope </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      student </span><span class="pun">:</span><span class="pln"> </span><span class="str">"=name"</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">//compile is called during application initialization. AngularJS calls it once when html page is loaded.</span><span class="pln">
	
   directive</span><span class="pun">.</span><span class="pln">compile </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">element</span><span class="pun">,</span><span class="pln"> attributes</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      element</span><span class="pun">.</span><span class="pln">css</span><span class="pun">(</span><span class="str">"border"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"1px solid #cccccc"</span><span class="pun">);</span><span class="pln">
      
      </span><span class="com">//linkFunction is linked with each element with scope to get the element specific data.</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> linkFunction </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln"> element</span><span class="pun">,</span><span class="pln"> attributes</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         element</span><span class="pun">.</span><span class="pln">html</span><span class="pun">(</span><span class="str">"Student: &lt;b&gt;"</span><span class="pun">+</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">student</span><span class="pun">.</span><span class="pln">name </span><span class="pun">+</span><span class="str">"&lt;/b&gt; , Roll No: &lt;b&gt;"</span><span class="pun">+</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">student</span><span class="pun">.</span><span class="pln">rollno</span><span class="pun">+</span><span class="str">"&lt;/b&gt;&lt;br/&gt;"</span><span class="pun">);</span><span class="pln">
         element</span><span class="pun">.</span><span class="pln">css</span><span class="pun">(</span><span class="str">"background-color"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"#ff00ff"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      </span><span class="kwd">return</span><span class="pln"> linkFunction</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> directive</span><span class="pun">;</span><span class="pln">
</span><span class="pun">});</span></pre>
<p>Define controller to update the scope for directive. Here we are using name attribute's value as scope's child.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'StudentController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="typ">Mahesh</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="typ">Mahesh</span><span class="pun">.</span><span class="pln">name </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Mahesh Parashar"</span><span class="pun">;</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="typ">Mahesh</span><span class="pun">.</span><span class="pln">rollno  </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   
   $scope</span><span class="pun">.</span><span class="typ">Piyush</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="typ">Piyush</span><span class="pun">.</span><span class="pln">name </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Piyush Parashar"</span><span class="pun">;</span><span class="pln">
   $scope</span><span class="pun">.</span><span class="typ">Piyush</span><span class="pun">.</span><span class="pln">rollno  </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln">
</span><span class="pun">});</span></pre>
<h4>Example</h4>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular JS Custom Directives</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">AngularJS Sample Application</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"StudentController"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;student</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Mahesh"</span><span class="tag">&gt;&lt;/student&gt;&lt;br/&gt;</span><span class="pln">
         </span><span class="tag">&lt;student</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Piyush"</span><span class="tag">&gt;&lt;/student&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="pln">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">directive</span><span class="pun">(</span><span class="str">'student'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> directive </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
            directive</span><span class="pun">.</span><span class="pln">restrict </span><span class="pun">=</span><span class="pln"> </span><span class="str">'E'</span><span class="pun">;</span><span class="pln">
            directive</span><span class="pun">.</span><span class="pln">template </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Student: &lt;b&gt;{{student.name}}&lt;/b&gt; , Roll No: &lt;b&gt;{{student.rollno}}&lt;/b&gt;"</span><span class="pun">;</span><span class="pln">
            
            directive</span><span class="pun">.</span><span class="pln">scope </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               student </span><span class="pun">:</span><span class="pln"> </span><span class="str">"=name"</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            directive</span><span class="pun">.</span><span class="pln">compile </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">element</span><span class="pun">,</span><span class="pln"> attributes</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               element</span><span class="pun">.</span><span class="pln">css</span><span class="pun">(</span><span class="str">"border"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"1px solid #cccccc"</span><span class="pun">);</span><span class="pln">
               
               </span><span class="kwd">var</span><span class="pln"> linkFunction </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln"> element</span><span class="pun">,</span><span class="pln"> attributes</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  element</span><span class="pun">.</span><span class="pln">html</span><span class="pun">(</span><span class="str">"Student: &lt;b&gt;"</span><span class="pun">+</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">student</span><span class="pun">.</span><span class="pln">name </span><span class="pun">+</span><span class="str">"&lt;/b&gt; , Roll No: &lt;b&gt;"</span><span class="pun">+</span><span class="pln">$scope</span><span class="pun">.</span><span class="pln">student</span><span class="pun">.</span><span class="pln">rollno</span><span class="pun">+</span><span class="str">"&lt;/b&gt;&lt;br/&gt;"</span><span class="pun">);</span><span class="pln">
                  element</span><span class="pun">.</span><span class="pln">css</span><span class="pun">(</span><span class="str">"background-color"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"#ff00ff"</span><span class="pun">);</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
               </span><span class="kwd">return</span><span class="pln"> linkFunction</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">return</span><span class="pln"> directive</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'StudentController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="typ">Mahesh</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="typ">Mahesh</span><span class="pun">.</span><span class="pln">name </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Mahesh Parashar"</span><span class="pun">;</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="typ">Mahesh</span><span class="pun">.</span><span class="pln">rollno  </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">

            $scope</span><span class="pun">.</span><span class="typ">Piyush</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{};</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="typ">Piyush</span><span class="pun">.</span><span class="pln">name </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Piyush Parashar"</span><span class="pun">;</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="typ">Piyush</span><span class="pun">.</span><span class="pln">rollno  </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
			
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="193_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="195_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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