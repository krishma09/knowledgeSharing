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
	$sid=184;
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




<p>Table data is normally repeatable by nature. ng-repeat directive can be used to draw table easily. Following example states the use of ng-repeat directive to draw a table.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;table&gt;</span><span class="pln">
   </span><span class="tag">&lt;tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">
      </span><span class="tag">&lt;th&gt;</span><span class="pln">Marks</span><span class="tag">&lt;/th&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">ng-repeat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"subject in student.subjects"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ subject.name }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ subject.marks }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
   </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span></pre>
<p>Table can be styled using CSS Styling.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;style&gt;</span><span class="pln">
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
</span><span class="tag">&lt;/style&gt;</span></pre>
<h4>Example</h4>
<p>Following example will showcase all the above mentioned directive.</p>
<p><i>testAngularJS.htm</i></p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Angular JS Table</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
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
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">ng-app</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mainApp"</span><span class="pln"> </span><span class="atn">ng-controller</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"studentController"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">border</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Enter first name:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">ng-model</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"student.firstName"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Enter last name: </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">ng-model</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"student.lastName"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Name: </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">{{student.fullName()}}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Subject:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
					
               </span><span class="tag">&lt;td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;table&gt;</span><span class="pln">
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;th&gt;</span><span class="pln">Name</span><span class="tag">&lt;/th&gt;</span><span class="pln">.
                        </span><span class="tag">&lt;th&gt;</span><span class="pln">Marks</span><span class="tag">&lt;/th&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">ng-repeat</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"subject in student.subjects"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ subject.name }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;</span><span class="pln">{{ subject.marks }}</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
							
                  </span><span class="tag">&lt;/table&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
					
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;/table&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script&gt;</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> mainApp </span><span class="pun">=</span><span class="pln"> angular</span><span class="pun">.</span><span class="pln">module</span><span class="pun">(</span><span class="str">"mainApp"</span><span class="pun">,</span><span class="pln"> </span><span class="pun">[]);</span><span class="pln">
         
         mainApp</span><span class="pun">.</span><span class="pln">controller</span><span class="pun">(</span><span class="str">'studentController'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$scope</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $scope</span><span class="pun">.</span><span class="pln">student </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               firstName</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Mahesh"</span><span class="pun">,</span><span class="pln">
               lastName</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Parashar"</span><span class="pun">,</span><span class="pln">
               fees</span><span class="pun">:</span><span class="lit">500</span><span class="pun">,</span><span class="pln">
               
               subjects</span><span class="pun">:[</span><span class="pln">
                  </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">'Physics'</span><span class="pun">,</span><span class="pln">marks</span><span class="pun">:</span><span class="lit">70</span><span class="pun">},</span><span class="pln">
                  </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">'Chemistry'</span><span class="pun">,</span><span class="pln">marks</span><span class="pun">:</span><span class="lit">80</span><span class="pun">},</span><span class="pln">
                  </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">'Math'</span><span class="pun">,</span><span class="pln">marks</span><span class="pun">:</span><span class="lit">65</span><span class="pun">},</span><span class="pln">
                  </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">'English'</span><span class="pun">,</span><span class="pln">marks</span><span class="pun">:</span><span class="lit">75</span><span class="pun">},</span><span class="pln">
                  </span><span class="pun">{</span><span class="pln">name</span><span class="pun">:</span><span class="str">'Hindi'</span><span class="pun">,</span><span class="pln">marks</span><span class="pun">:</span><span class="lit">67</span><span class="pun">}</span><span class="pln">
               </span><span class="pun">],</span><span class="pln">
               
               fullName</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  </span><span class="kwd">var</span><span class="pln"> studentObject</span><span class="pun">;</span><span class="pln">
                  studentObject </span><span class="pun">=</span><span class="pln"> $scope</span><span class="pun">.</span><span class="pln">student</span><span class="pun">;</span><span class="pln">
                  </span><span class="kwd">return</span><span class="pln"> studentObject</span><span class="pun">.</span><span class="pln">firstName </span><span class="pun">+</span><span class="pln"> </span><span class="str">" "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> studentObject</span><span class="pun">.</span><span class="pln">lastName</span><span class="pun">;</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">};</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="183_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="185_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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