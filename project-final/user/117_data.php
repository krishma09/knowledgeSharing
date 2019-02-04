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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=117;
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



<p>This session demonstrates how PHP can provide dynamic content according to browser type, randomly generated numbers or User Input. It also demonstrated how the client browser can be redirected.</p>
<h4>Identifying Browser &amp; Platform</h4>
<p>PHP creates some useful <b>environment variables</b> that can be seen in the phpinfo.php page that was used to setup the PHP environment.</p>
<p>One of the environment variables set by PHP is <b>HTTP_USER_AGENT</b> which identifies the user's browser and operating system.</p>
<p>PHP provides a function getenv() to access the value of all the environment variables. The information contained in the HTTP_USER_AGENT environment variable can be used to create dynamic content appropriate to the browser.</p>
<p>Following example demonstrates how you can identify a client browser and operating system.</p>
<p><b>NOTE</b> − The function preg_match()is discussed in <a href="/php/php_regular_expression.htm">PHP Regular expression</a> session.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><span class="kwd">function</span><span class="pln"> getBrowser</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
            $u_agent </span><span class="pun">=</span><span class="pln"> $_SERVER</span><span class="pun">[</span><span class="str">'HTTP_USER_AGENT'</span><span class="pun">];</span><span class="pln"> 
            $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Unknown'</span><span class="pun">;</span><span class="pln">
            $platform </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Unknown'</span><span class="pun">;</span><span class="pln">
            $version </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
            
            </span><span class="com">//First get the platform?</span><span class="pln">
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/linux/i'</span><span class="pun">,</span><span class="pln"> $u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $platform </span><span class="pun">=</span><span class="pln"> </span><span class="str">'linux'</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">elseif </span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/macintosh|mac os x/i'</span><span class="pun">,</span><span class="pln"> $u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $platform </span><span class="pun">=</span><span class="pln"> </span><span class="str">'mac'</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">elseif </span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/windows|win32/i'</span><span class="pun">,</span><span class="pln"> $u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $platform </span><span class="pun">=</span><span class="pln"> </span><span class="str">'windows'</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="com">// Next get the name of the useragent yes seperately and for good reason</span><span class="pln">
            </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/MSIE/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="pln"> </span><span class="pun">!</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/Opera/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Internet Explorer'</span><span class="pun">;</span><span class="pln">
               $ub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"MSIE"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln"> elseif</span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/Firefox/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Mozilla Firefox'</span><span class="pun">;</span><span class="pln">
               $ub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Firefox"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln"> elseif</span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/Chrome/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Google Chrome'</span><span class="pun">;</span><span class="pln">
               $ub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Chrome"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">elseif</span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/Safari/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Apple Safari'</span><span class="pun">;</span><span class="pln">
               $ub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Safari"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">elseif</span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/Opera/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Opera'</span><span class="pun">;</span><span class="pln">
               $ub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Opera"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">elseif</span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">'/Netscape/i'</span><span class="pun">,</span><span class="pln">$u_agent</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $bname </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Netscape'</span><span class="pun">;</span><span class="pln">
               $ub </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Netscape"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="com">// finally get the correct version number</span><span class="pln">
            $known </span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'Version'</span><span class="pun">,</span><span class="pln"> $ub</span><span class="pun">,</span><span class="pln"> </span><span class="str">'other'</span><span class="pun">);</span><span class="pln">
            $pattern </span><span class="pun">=</span><span class="pln"> </span><span class="str">'#(?&lt;browser&gt;'</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> join</span><span class="pun">(</span><span class="str">'|'</span><span class="pun">,</span><span class="pln"> $known</span><span class="pun">)</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">')[/ ]+(?&lt;version&gt;[0-9.|a-zA-Z.]*)#'</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">preg_match_all</span><span class="pun">(</span><span class="pln">$pattern</span><span class="pun">,</span><span class="pln"> $u_agent</span><span class="pun">,</span><span class="pln"> $matches</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="com">// we have no matching number just continue</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="com">// see how many we have</span><span class="pln">
            $i </span><span class="pun">=</span><span class="pln"> count</span><span class="pun">(</span><span class="pln">$matches</span><span class="pun">[</span><span class="str">'browser'</span><span class="pun">]);</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$i </span><span class="pun">!=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="com">//we will have two since we are not using 'other' argument yet</span><span class="pln">
               
               </span><span class="com">//see if version is before or after the name</span><span class="pln">
               </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">strripos</span><span class="pun">(</span><span class="pln">$u_agent</span><span class="pun">,</span><span class="str">"Version"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;</span><span class="pln"> strripos</span><span class="pun">(</span><span class="pln">$u_agent</span><span class="pun">,</span><span class="pln">$ub</span><span class="pun">)){</span><span class="pln">
                  $version</span><span class="pun">=</span><span class="pln"> $matches</span><span class="pun">[</span><span class="str">'version'</span><span class="pun">][</span><span class="lit">0</span><span class="pun">];</span><span class="pln">
               </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  $version</span><span class="pun">=</span><span class="pln"> $matches</span><span class="pun">[</span><span class="str">'version'</span><span class="pun">][</span><span class="lit">1</span><span class="pun">];</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $version</span><span class="pun">=</span><span class="pln"> $matches</span><span class="pun">[</span><span class="str">'version'</span><span class="pun">][</span><span class="lit">0</span><span class="pun">];</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="com">// check if we have a number</span><span class="pln">
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$version </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">null</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> $version </span><span class="pun">==</span><span class="pln"> </span><span class="str">""</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">$version </span><span class="pun">=</span><span class="pln"> </span><span class="str">"?"</span><span class="pun">;}</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> array</span><span class="pun">(</span><span class="pln">
               </span><span class="str">'userAgent'</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> $u_agent</span><span class="pun">,</span><span class="pln">
               </span><span class="str">'name'</span><span class="pln">      </span><span class="pun">=&gt;</span><span class="pln"> $bname</span><span class="pun">,</span><span class="pln">
               </span><span class="str">'version'</span><span class="pln">   </span><span class="pun">=&gt;</span><span class="pln"> $version</span><span class="pun">,</span><span class="pln">
               </span><span class="str">'platform'</span><span class="pln">  </span><span class="pun">=&gt;</span><span class="pln"> $platform</span><span class="pun">,</span><span class="pln">
               </span><span class="str">'pattern'</span><span class="pln">   </span><span class="pun">=&gt;</span><span class="pln"> $pattern
            </span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="com">// now try it</span><span class="pln">
         $ua </span><span class="pun">=</span><span class="pln"> getBrowser</span><span class="pun">();</span><span class="pln">
         $yourbrowser </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Your browser: "</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $ua</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">" "</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $ua</span><span class="pun">[</span><span class="str">'version'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln">
            </span><span class="str">" on "</span><span class="pln"> </span><span class="pun">.</span><span class="pln">$ua</span><span class="pun">[</span><span class="str">'platform'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">" reports: &lt;br &gt;"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $ua</span><span class="pun">[</span><span class="str">'userAgent'</span><span class="pun">];</span><span class="pln">
         
         print_r</span><span class="pun">(</span><span class="pln">$yourbrowser</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This is producing following result on my machine. This result may be different for your computer depending on what you are using.</p>
<p>It will produce the following result −</p>
<pre class="result notranslate">Your browser: Google Chrome 54.0.2840.99 on windows reports: 
Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) 
   Chrome/54.0.2840.99 Safari/537.36
</pre>
<h4>Display Images Randomly</h4>
<p>The PHP <b>rand()</b> function is used to generate a random number.i This function can generate numbers with-in a given range. The random number generator should be seeded to prevent a regular pattern of numbers being generated. This is achieved using the <b>srand()</b> function that specifies the seed number as its argument.</p>
<p>Following example demonstrates how you can display different image each time out of four images −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         srand</span><span class="pun">(</span><span class="pln"> microtime</span><span class="pun">()</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> </span><span class="lit">1000000</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         $num </span><span class="pun">=</span><span class="pln"> rand</span><span class="pun">(</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">switch</span><span class="pun">(</span><span class="pln"> $num </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">case</span><span class="pln"> </span><span class="lit">1</span><span class="pun">:</span><span class="pln"> $image_file </span><span class="pun">=</span><span class="pln"> </span><span class="str">"/php/images/logo.png"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="lit">2</span><span class="pun">:</span><span class="pln"> $image_file </span><span class="pun">=</span><span class="pln"> </span><span class="str">"/php/images/php.jpg"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="lit">3</span><span class="pun">:</span><span class="pln"> $image_file </span><span class="pun">=</span><span class="pln"> </span><span class="str">"/php/images/logo.png"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="lit">4</span><span class="pun">:</span><span class="pln"> $image_file </span><span class="pun">=</span><span class="pln"> </span><span class="str">"/php/images/php.jpg"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         echo </span><span class="str">"Random Image : &lt;img src=$image_file /&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/display_image_randomly.jpg" alt="Display Image Randomly">
<h4>Using HTML Forms</h4>
<p>The most important thing to notice when dealing with HTML forms and PHP is that any form element in an HTML page will automatically be available to your PHP scripts.</p>
<p>Try out following example by putting the source code in test.php script.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">"age"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">"/[^A-Za-z'-]/"</span><span class="pun">,</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">die</span><span class="pln"> </span><span class="pun">(</span><span class="str">"invalid name and name should be alpha"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      echo </span><span class="str">"Welcome "</span><span class="pun">.</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">'name'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      echo </span><span class="str">"You are "</span><span class="pun">.</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">'age'</span><span class="pun">].</span><span class="pln"> </span><span class="str">" years old."</span><span class="pun">;</span><span class="pln">
      
      </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      &lt;form action = "</span><span class="pun">&lt;?</span><span class="pln">php </span><b><span class="pln">$_PHP_SELF</span></b><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">" method = "POST"&gt;
         Name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         Age: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"age"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/forms.jpg" alt="Forms">

<ul class="list">
<li><p>The PHP default variable <b>$_PHP_SELF</b> is used for the PHP script name and when you click "submit" button then same PHP script will be called and will produce following result −</p></li>
<li><p>The method = "POST" is used to post user data to the server script. There are two methods of posting data to the server script which are discussed in <a href="/php/php_get_post.htm">PHP GET &amp; POST</a> chapter.</p></li>
</ul>
<h4>Browser Redirection</h4>
<p>The PHP <b>header()</b> function supplies raw HTTP headers to the browser and can be used to redirect it to another location. The redirection script should be at the very top of the page to prevent any other part of the page from loading.</p>
<p>The target is specified by the <b>Location:</b> header as the argument to the <b>header()</b> function. After calling this function the <b>exit()</b> function can be used to halt parsing of  rest of the code.</p>
<p>Following example demonstrates how you can redirect a browser request to another web page. Try out this example by putting the source code in test.php script.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">"location"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $location </span><span class="pun">=</span><span class="pln"> $_POST</span><span class="pun">[</span><span class="str">"location"</span><span class="pun">];</span><span class="pln">
      header</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Location:$location"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      
      </span><span class="kwd">exit</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Choose a site to visit :</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      &lt;form action = "</span><span class="pun">&lt;?</span><span class="pln">php </span><b><span class="pln">$_SERVER</span><span class="pun">[</span><span class="str">'PHP_SELF'</span><span class="pun">]</span></b><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">" method ="POST"&gt;
         </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"location"</span><span class="tag">&gt;</span><span class="pln">.
         
            </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://www.tutorialspoint.com"</span><span class="tag">&gt;</span><span class="pln">
               Tutorialspoint.com
            </span><span class="tag">&lt;/option&gt;</span><span class="pln">
         
            </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://www.google.com"</span><span class="tag">&gt;</span><span class="pln">
               Google Search Page
            </span><span class="tag">&lt;/option&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;/select&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/browser_redirection.jpg" alt="Browser Redirection">

<h4>Displaying "File Download" Dialog Box</h4>
<p>Sometime it is desired that you want to give option where a use will click a link and it will pop up a "File Download" box to the user in stead of displaying actual content. This is very easy and will be achieved through HTTP header.</p>
<p>The HTTP header will be different  from the actual header  where we send <b>Content-Type</b> as <b>text/html\n\n</b>. In this case content type will be <b>application/octet-stream</b> and actual file name will be concatenated along with it.</p>
<p>For example,if you want make a <b>FileName</b> file downloadable from a given link then its syntax will be as follows.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#!/usr/bin/perl</span><span class="pln">

</span><span class="com"># HTTP Header</span><span class="pln">
</span><span class="kwd">print</span><span class="pln"> </span><span class="str">"</span><b><span class="str">Content-Type:</span></b><span class="str">application/octet-stream; name=\"FileName\"\r\n"</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">print</span><span class="pln"> </span><span class="str">"</span><b><span class="str">Content-Disposition:</span></b><span class="str"> attachment; filename=\"FileName\"\r\n\n"</span><span class="pun">;</span><span class="pln">

</span><span class="com"># Actual File Content</span><span class="pln">
open</span><span class="pun">(</span><span class="pln"> FILE</span><span class="pun">,</span><span class="pln"> </span><span class="str">"&lt;FileName"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

</span><span class="kwd">while</span><span class="pun">(</span><span class="pln">read</span><span class="pun">(</span><span class="pln">FILE</span><span class="pun">,</span><span class="pln"> $buffer</span><span class="pun">,</span><span class="pln"> </span><span class="lit">100</span><span class="pun">)</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"$buffer"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="116_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="118_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
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