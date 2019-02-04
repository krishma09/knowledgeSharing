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
	$sid=189;
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



<p>AngularJS provides $https: control which works as a service to read data from the server. The server makes a database call to get the desired records. AngularJS needs data in JSON format. Once the data is ready, $https: can be used to get the data from server in the following manner −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> studentController</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln">$https</span><span class="pun">:)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> url </span><span class="pun">=</span><span class="pln"> </span><span class="str">"data.txt"</span><span class="pun">;</span><span class="pln">

   $https</span><span class="pun">:.</span><span class="kwd">get</span><span class="pun">(</span><span class="pln">url</span><span class="pun">).</span><span class="pln">success</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">response</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $scope</span><span class="pun">.</span><span class="pln">students </span><span class="pun">=</span><span class="pln"> response</span><span class="pun">;</span><span class="pln"> 
   </span><span class="pun">});</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Here, the file data.txt contains student records. $https: service makes an ajax call and sets response to its property students. <i>students</i> model can be used to draw tables in HTML.</p>
<h4>Examples</h4>
<h5>data.txt</h5>
<pre class="prettyprint notranslate prettyprinted" id="data_txt"><span class="pun">[</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"Name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"Mahesh Parashar"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"RollNo"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">101</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"Percentage"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"80%"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
	
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"Name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"Dinkar Kad"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"RollNo"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">201</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"Percentage"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"70%"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
	
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"Name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"Robert"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"RollNo"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">191</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"Percentage"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"75%"</span><span class="pln">
   </span><span class="pun">},</span><span class="pln">
	
   </span><span class="pun">{</span><span class="pln">
      </span><span class="str">"Name"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"Julian Joe"</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"RollNo"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">111</span><span class="pun">,</span><span class="pln">
      </span><span class="str">"Percentage"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"77%"</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">]</span></pre>
<h5>testAngularJS.htm</h5>
<pre class="prettyprint notranslate tryit prettyprinted" title="data_txt"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular JS Includes</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         table</span><span class="pun">,</span><span class="pln"> th </span><span class="pun">,</span><span class="pln"> td </span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1px</span><span class="pln"> solid grey</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln"> collapse</span><span class="pun">;</span><span class="pln">
            padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         table tr</span><span class="pun">:</span><span class="pln">nth</span><span class="pun">-</span><span class="pln">child</span><span class="pun">(</span><span class="pln">odd</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#f2f2f2;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         table tr</span><span class="pun">:</span><span class="pln">nth</span><span class="pun">-</span><span class="pln">child</span><span class="pun">(</span><span class="pln">even</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#ffffff;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">AngularJS Sample Application</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">""</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"studentController"</span><span class="tag">&gt;</span><span class="pln">
      
         </span><span class="tag">&lt;table&gt;</span><span class="pln">
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">
               </span><span class="tag">&lt;th&gt;</span><span class="pln">Roll No</span><span class="tag">&lt;/th&gt;</span><span class="pln">
               </span><span class="tag">&lt;th&gt;</span><span class="pln">Percentage</span><span class="tag">&lt;/th&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
         
            </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">ng-repeat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"student in students"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ student.Name }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ student.RollNo }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ student.Percentage }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> studentController</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln">$http</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> url </span><span class="pun">=</span><span class="pln"> </span><span class="str">"data.txt"</span><span class="pun">;</span><span class="pln">

            $http</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="pln">url</span><span class="pun">).</span><span class="pln">then</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">response</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $scope</span><span class="pun">.</span><span class="pln">students </span><span class="pun">=</span><span class="pln"> response</span><span class="pun">.</span><span class="pln">data</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>testAngularJS.htm</h5>
<pre class="prettyprint notranslate tryit prettyprinted" title="data_txt"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular JS Includes</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         table</span><span class="pun">,</span><span class="pln"> th </span><span class="pun">,</span><span class="pln"> td </span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1px</span><span class="pln"> solid grey</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln"> collapse</span><span class="pun">;</span><span class="pln">
            padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         table tr</span><span class="pun">:</span><span class="pln">nth</span><span class="pun">-</span><span class="pln">child</span><span class="pun">(</span><span class="pln">odd</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#f2f2f2;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         table tr</span><span class="pun">:</span><span class="pln">nth</span><span class="pun">-</span><span class="pln">child</span><span class="pun">(</span><span class="pln">even</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#ffffff;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">AngularJS Sample Application</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">""</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"studentController"</span><span class="tag">&gt;</span><span class="pln">
      
         </span><span class="tag">&lt;table&gt;</span><span class="pln">
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">
               </span><span class="tag">&lt;th&gt;</span><span class="pln">Roll No</span><span class="tag">&lt;/th&gt;</span><span class="pln">
               </span><span class="tag">&lt;th&gt;</span><span class="pln">Percentage</span><span class="tag">&lt;/th&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
         
            </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">ng-repeat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"student in students"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ student.Name }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ student.RollNo }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ student.Percentage }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> studentController</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">,</span><span class="pln">$http</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> url </span><span class="pun">=</span><span class="pln"> </span><span class="str">"data.txt"</span><span class="pun">;</span><span class="pln">

            $http</span><span class="pun">.</span><span class="kwd">get</span><span class="pun">(</span><span class="pln">url</span><span class="pun">).</span><span class="pln">then</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">response</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $scope</span><span class="pun">.</span><span class="pln">students </span><span class="pun">=</span><span class="pln"> response</span><span class="pun">.</span><span class="pln">data</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>


















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="188_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="190_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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