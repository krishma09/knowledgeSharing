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
	$sid=134;
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



<h4>PHP login with session</h4>
<p>Php login script is used to provide the authentication for our web pages. the Script executes after submitting the user login button.</p>
<h4>Login Page</h4>
<p>Login page should be as follows and works based on session. If the user close the session, it will erase the session data.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   ob_start</span><span class="pun">();</span><span class="pln">
   session_start</span><span class="pun">();</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">

</span><span class="pun">&lt;?</span><span class="pln">
   </span><span class="com">// error_reporting(E_ALL);</span><span class="pln">
   </span><span class="com">// ini_set("display_errors", 1);</span><span class="pln">
</span><span class="pun">?&gt;</span><span class="pln">

</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">lang</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"en"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Tutorialspoint.com</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;link</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"css/bootstrap.min.css"</span><span class="pln"> </span><span class="atn">rel</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"stylesheet"</span><span class="tag">&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         body </span><span class="pun">{</span><span class="pln">
            padding</span><span class="pun">-</span><span class="pln">top</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40px</span><span class="pun">;</span><span class="pln">
            padding</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40px</span><span class="pun">;</span><span class="pln">
            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#ADABAB;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin </span><span class="pun">{</span><span class="pln">
            max</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">330px</span><span class="pun">;</span><span class="pln">
            padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln">
            margin</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="kwd">auto</span><span class="pun">;</span><span class="pln">
            color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#017572;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin</span><span class="pun">-</span><span class="pln">heading</span><span class="pun">,</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin </span><span class="pun">.</span><span class="pln">checkbox </span><span class="pun">{</span><span class="pln">
            margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin </span><span class="pun">.</span><span class="pln">checkbox </span><span class="pun">{</span><span class="pln">
            font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln"> normal</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">control </span><span class="pun">{</span><span class="pln">
            position</span><span class="pun">:</span><span class="pln"> relative</span><span class="pun">;</span><span class="pln">
            height</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">auto</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">-</span><span class="pln">webkit</span><span class="pun">-</span><span class="pln">box</span><span class="pun">-</span><span class="pln">sizing</span><span class="pun">:</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">box</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">-</span><span class="pln">moz</span><span class="pun">-</span><span class="pln">box</span><span class="pun">-</span><span class="pln">sizing</span><span class="pun">:</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">box</span><span class="pun">;</span><span class="pln">
            box</span><span class="pun">-</span><span class="pln">sizing</span><span class="pun">:</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">box</span><span class="pun">;</span><span class="pln">
            padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
            font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="pln"> </span><span class="lit">16px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">control</span><span class="pun">:</span><span class="pln">focus </span><span class="pun">{</span><span class="pln">
            z</span><span class="pun">-</span><span class="pln">index</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin input</span><span class="pun">[</span><span class="pln">type</span><span class="pun">=</span><span class="str">"email"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">-</span><span class="pln">right</span><span class="pun">-</span><span class="pln">radius</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">-</span><span class="pln">left</span><span class="pun">-</span><span class="pln">radius</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">017572</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="pun">.</span><span class="pln">form</span><span class="pun">-</span><span class="pln">signin input</span><span class="pun">[</span><span class="pln">type</span><span class="pun">=</span><span class="str">"password"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">top</span><span class="pun">-</span><span class="pln">left</span><span class="pun">-</span><span class="pln">radius</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">top</span><span class="pun">-</span><span class="pln">right</span><span class="pun">-</span><span class="pln">radius</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">017572</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         h4</span><span class="pun">{</span><span class="pln">
            text</span><span class="pun">-</span><span class="pln">align</span><span class="pun">:</span><span class="pln"> center</span><span class="pun">;</span><span class="pln">
            color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#017572;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">Enter Username and Password</span><span class="tag">&lt;/h4&gt;</span><span class="pln"> 
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"container form-signin"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="pun">&lt;?</span><span class="pln">php
            $msg </span><span class="pun">=</span><span class="pln"> </span><span class="str">''</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">isset</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">'login'</span><span class="pun">])</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="pln"> </span><span class="pun">!</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">'username'</span><span class="pun">])</span><span class="pln"> 
               </span><span class="pun">&amp;&amp;</span><span class="pln"> </span><span class="pun">!</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">'password'</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
				
               </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">'username'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">'tutorialspoint'</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="pln"> 
                  $_POST</span><span class="pun">[</span><span class="str">'password'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">'1234'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  $_SESSION</span><span class="pun">[</span><span class="str">'valid'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
                  $_SESSION</span><span class="pun">[</span><span class="str">'timeout'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> time</span><span class="pun">();</span><span class="pln">
                  $_SESSION</span><span class="pun">[</span><span class="str">'username'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">'tutorialspoint'</span><span class="pun">;</span><span class="pln">
                  
                  echo </span><span class="str">'You have entered valid use name and password'</span><span class="pun">;</span><span class="pln">
               </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  $msg </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Wrong username or password'</span><span class="pun">;</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">?&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln"> </span><span class="com">&lt;!-- /container --&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"container"</span><span class="tag">&gt;</span><span class="pln">
      
         &lt;form class = "form-signin" role = "form" 
            action = "</span><span class="pun">&lt;?</span><span class="pln">php echo htmlspecialchars</span><span class="pun">(</span><span class="pln">$_SERVER</span><span class="pun">[</span><span class="str">'PHP_SELF'</span><span class="pun">]);</span><span class="pln"> 
            </span><span class="pun">?&gt;</span><span class="pln">" method = "post"&gt;
            </span><span class="tag">&lt;h4</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-signin-heading"</span><span class="tag">&gt;</span><span class="pun">&lt;?</span><span class="pln">php echo $msg</span><span class="pun">;</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> 
               </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"username"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"username = tutorialspoint"</span><span class="pln"> 
               </span><span class="atn">required</span><span class="pln"> </span><span class="atn">autofocus</span><span class="tag">&gt;&lt;/br&gt;</span><span class="pln">
            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"password"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln">
               </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"password"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"password = 1234"</span><span class="pln"> </span><span class="atn">required</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-lg btn-primary btn-block"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> 
               </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"login"</span><span class="tag">&gt;</span><span class="pln">Login</span><span class="tag">&lt;/button&gt;</span><span class="pln">
         </span><span class="tag">&lt;/form&gt;</span><span class="pln">
			
         Click here to clean </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"logout.php"</span><span class="pln"> </span><span class="atn">tite</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Logout"</span><span class="tag">&gt;</span><span class="pln">Session.
         
      </span><span class="tag">&lt;/div&gt;</span><span class="pln"> 
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Logout.php</h4>
<p>It will erase the session data.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   session_start</span><span class="pun">();</span><span class="pln">
   unset</span><span class="pun">(</span><span class="pln">$_SESSION</span><span class="pun">[</span><span class="str">"username"</span><span class="pun">]);</span><span class="pln">
   unset</span><span class="pun">(</span><span class="pln">$_SESSION</span><span class="pun">[</span><span class="str">"password"</span><span class="pun">]);</span><span class="pln">
   
   echo </span><span class="str">'You have cleaned session'</span><span class="pun">;</span><span class="pln">
   header</span><span class="pun">(</span><span class="str">'Refresh: 2; URL = login.php'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>It will produce the following result −</p>
<img src="images/login_example.jpg" alt="Login Example">















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="133_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="135_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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