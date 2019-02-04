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
	$sid=135;
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



<p>We can use Facebook login to allow the users to get access into the websites. This page will explain you about login with facebook PHP SDK.</p>
<h4>Login With Facebook</h4> 

<ul class="list">
<li><p>Need to go <a rel="nofollow" target="_blank" href="https://developers.facebook.com/apps/">https://developers.facebook.com/apps/</a> and click on add a new group button to make the app ID.</p></li>
<li><p>Choose Website</p></li>
<li><p>Give an app name and click on Create New Facebook App ID</p></li>
<li><p>Click on Create app ID</p></li>
<li><p>Click on Skip Quick Test</p></li>
</ul>
<p>On Final stage, it will show as below shown image.</p>
<img src="images/facebook.jpg" alt="facebook">
<h4>fbconfig.php file overview</h4>

<ul class="list">
<li><p>Now download zip from <a href="/php/facebook.zip">here</a></p></li>
<li><p>Now open fbconfig.php file and add you app ID and app Secrete</p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">FacebookSession</span><span class="pun">::</span><span class="pln">setDefaultApplication</span><span class="pun">(</span><span class="pln"> </span><span class="str">'your app ID'</span><span class="pun">,</span><span class="str">'App Secrete '</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
</span><span class="com">// login helper with redirect_uri</span><span class="pln">
   $helper </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">FacebookRedirectLoginHelper</span><span class="pun">(</span><span class="str">'You web address'</span><span class="pln"> </span><span class="pun">);</span></pre>
   <p>Finally fbconfig.php file as shown below −</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   
   session_start</span><span class="pun">();</span><span class="pln">
   
   </span><span class="com">// added in v4.0.0</span><span class="pln">
   require_once </span><span class="str">'autoload.php'</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookSession</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookRedirectLoginHelper</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookRequest</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookResponse</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookSDKException</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookRequestException</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\FacebookAuthorizationException</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\GraphObject</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\Entities\AccessToken</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\HttpClients\FacebookCurlHttpClient</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">use</span><span class="pln"> </span><span class="typ">Facebook</span><span class="pln">\HttpClients\FacebookHttpable</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com">// init app with app id and secret</span><span class="pln">
   </span><span class="typ">FacebookSession</span><span class="pun">::</span><span class="pln">setDefaultApplication</span><span class="pun">(</span><span class="pln"> </span><span class="str">'496544657159182'</span><span class="pun">,</span><span class="str">'e6d239655aeb3e496e52fabeaf1b1f93'</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
   
   </span><span class="com">// login helper with redirect_uri</span><span class="pln">
   $helper </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">FacebookRedirectLoginHelper</span><span class="pun">(</span><span class="str">'http://www.tutorialspoint.com/'</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
   
   </span><span class="kwd">try</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $session </span><span class="pun">=</span><span class="pln"> $helper</span><span class="pun">-&gt;</span><span class="pln">getSessionFromRedirect</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pun">(</span><span class="pln"> </span><span class="typ">FacebookRequestException</span><span class="pln"> $ex </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// When Facebook returns an error</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Exception</span><span class="pln"> $ex </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// When validation fails or other local issues</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">// see if we have a session</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> isset</span><span class="pun">(</span><span class="pln"> $session </span><span class="pun">)</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// graph api request for user data</span><span class="pln">
      $request </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">FacebookRequest</span><span class="pun">(</span><span class="pln"> $session</span><span class="pun">,</span><span class="pln"> </span><span class="str">'GET'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'/me'</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      $response </span><span class="pun">=</span><span class="pln"> $request</span><span class="pun">-&gt;</span><span class="pln">execute</span><span class="pun">();</span><span class="pln">
      
      </span><span class="com">// get response</span><span class="pln">
      $graphObject </span><span class="pun">=</span><span class="pln"> $response</span><span class="pun">-&gt;</span><span class="pln">getGraphObject</span><span class="pun">();</span><span class="pln">
      $fbid </span><span class="pun">=</span><span class="pln"> $graphObject</span><span class="pun">-&gt;</span><span class="pln">getProperty</span><span class="pun">(</span><span class="str">'id'</span><span class="pun">);</span><span class="pln">           </span><span class="com">// To Get Facebook ID</span><span class="pln">
      $fbfullname </span><span class="pun">=</span><span class="pln"> $graphObject</span><span class="pun">-&gt;</span><span class="pln">getProperty</span><span class="pun">(</span><span class="str">'name'</span><span class="pun">);</span><span class="pln">   </span><span class="com">// To Get Facebook full name</span><span class="pln">
      $femail </span><span class="pun">=</span><span class="pln"> $graphObject</span><span class="pun">-&gt;</span><span class="pln">getProperty</span><span class="pun">(</span><span class="str">'email'</span><span class="pun">);</span><span class="pln">      </span><span class="com">// To Get Facebook email ID</span><span class="pln">
      
      </span><span class="com">/* ---- Session Variables -----*/</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'FBID'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> $fbid</span><span class="pun">;</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'FULLNAME'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> $fbfullname</span><span class="pun">;</span><span class="pln">
      $_SESSION</span><span class="pun">[</span><span class="str">'EMAIL'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln">  $femail</span><span class="pun">;</span><span class="pln">
      
      </span><span class="com">/* ---- header location after session ----*/</span><span class="pln">
      header</span><span class="pun">(</span><span class="str">"Location: index.php"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      $loginUrl </span><span class="pun">=</span><span class="pln"> $helper</span><span class="pun">-&gt;</span><span class="pln">getLoginUrl</span><span class="pun">();</span><span class="pln">
      header</span><span class="pun">(</span><span class="str">"Location: "</span><span class="pun">.</span><span class="pln">$loginUrl</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<h4>Login page Overview</h4>
<p>Login page is used to login into FB</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   session_start</span><span class="pun">();</span><span class="pln">
   session_unset</span><span class="pun">();</span><span class="pln">
   
   $_SESSION</span><span class="pun">[</span><span class="str">'FBID'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> NULL</span><span class="pun">;</span><span class="pln">
   $_SESSION</span><span class="pun">[</span><span class="str">'FULLNAME'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> NULL</span><span class="pun">;</span><span class="pln">
   $_SESSION</span><span class="pun">[</span><span class="str">'EMAIL'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln">  NULL</span><span class="pun">;</span><span class="pln">
   header</span><span class="pun">(</span><span class="str">"Location: index.php"</span><span class="pun">);</span><span class="pln">        
</span><span class="pun">?&gt;</span></pre>
<h4>Index.php</h4>
<p>Index page is as shown below.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   session_start</span><span class="pun">();</span><span class="pln"> 
</span><span class="pun">?&gt;</span><span class="pln">
</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">xmlns:fb</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://www.facebook.com/2008/fbml"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Login with Facebook</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;link</span><span class="pln"> 
         </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css"</span><span class="pln"> 
         </span><span class="atn">rel</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"stylesheet"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="pun">&lt;?</span><span class="pln">php </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$_SESSION</span><span class="pun">[</span><span class="str">'FBID'</span><span class="pun">]):</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">      </span><span class="com">&lt;!--  After user login  --&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"container"</span><span class="tag">&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"hero-unit"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;h1&gt;</span><span class="pln">Hello </span><span class="pun">&lt;?</span><span class="pln">php echo $_SESSION</span><span class="pun">[</span><span class="str">'USERNAME'</span><span class="pun">];</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
               </span><span class="tag">&lt;p&gt;</span><span class="pln">Welcome to "facebook login" tutorial</span><span class="tag">&lt;/p&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"span4"</span><span class="tag">&gt;</span><span class="pln">
				
               </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav nav-list"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav-header"</span><span class="tag">&gt;</span><span class="pln">Image</span><span class="tag">&lt;/li&gt;</span><span class="pln">
						
                  </span><span class="tag">&lt;li&gt;</span><span class="pln">&lt;img src = "https://graph.facebook.com/</span><span class="pun">&lt;?</span><span class="pln">php 
                     echo $_SESSION</span><span class="pun">[</span><span class="str">'FBID'</span><span class="pun">];</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">/picture"&gt;</span><span class="tag">&lt;/li&gt;</span><span class="pln">
                  
                  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav-header"</span><span class="tag">&gt;</span><span class="pln">Facebook ID</span><span class="tag">&lt;/li&gt;</span><span class="pln">
                  </span><span class="tag">&lt;li&gt;</span><span class="pun">&lt;?</span><span class="pln">php echo  $_SESSION</span><span class="pun">[</span><span class="str">'FBID'</span><span class="pun">];</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="tag">&lt;/li&gt;</span><span class="pln">
               
                  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav-header"</span><span class="tag">&gt;</span><span class="pln">Facebook fullname</span><span class="tag">&lt;/li&gt;</span><span class="pln">
						
                  </span><span class="tag">&lt;li&gt;</span><span class="pun">&lt;?</span><span class="pln">php echo $_SESSION</span><span class="pun">[</span><span class="str">'FULLNAME'</span><span class="pun">];</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="tag">&lt;/li&gt;</span><span class="pln">
               
                  </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav-header"</span><span class="tag">&gt;</span><span class="pln">Facebook Email</span><span class="tag">&lt;/li&gt;</span><span class="pln">
						
                  </span><span class="tag">&lt;li&gt;</span><span class="pun">&lt;?</span><span class="pln">php echo $_SESSION</span><span class="pun">[</span><span class="str">'EMAIL'</span><span class="pun">];</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="tag">&lt;/li&gt;</span><span class="pln">
               
                  </span><span class="tag">&lt;div&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"logout.php"</span><span class="tag">&gt;</span><span class="pln">Logout</span><span class="tag">&lt;/a&gt;&lt;/div&gt;</span><span class="pln">
						
               </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
					
            </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
         </span><span class="pun">&lt;?</span><span class="pln">php </span><span class="kwd">else</span><span class="pun">:</span><span class="pln"> </span><span class="pun">?&gt;</span><span class="pln">     </span><span class="com">&lt;!-- Before login --&gt;</span><span class="pln"> 
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"container"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;h1&gt;</span><span class="pln">Login with Facebook</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
            Not Connected
            
            </span><span class="tag">&lt;div&gt;</span><span class="pln">
               </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"fbconfig.php"</span><span class="tag">&gt;</span><span class="pln">Login with Facebook</span><span class="tag">&lt;/a&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;div&gt;</span><span class="pln">
               </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"http://www.tutorialspoint.com"</span><span class="pln">  
                  </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Login with facebook"</span><span class="tag">&gt;</span><span class="pln">More information about Tutorialspoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         
      </span><span class="pun">&lt;?</span><span class="pln">php endif </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the result. Before trying this example, please logout your face book account in your browser.</p>
<img src="images/facebook_login.jpg" alt="Facebook Login">

<h4>Logout Facebook</h4>

<p>Below code is used to logout facebook.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php 
   session_start</span><span class="pun">();.</span><span class="pln">
   session_unset</span><span class="pun">();</span><span class="pln">
   
   $_SESSION</span><span class="pun">[</span><span class="str">'FBID'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> NULL</span><span class="pun">;</span><span class="pln">
   $_SESSION</span><span class="pun">[</span><span class="str">'FULLNAME'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> NULL</span><span class="pun">;</span><span class="pln">
   $_SESSION</span><span class="pun">[</span><span class="str">'EMAIL'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln">  NULL</span><span class="pun">;</span><span class="pln">
   header</span><span class="pun">(</span><span class="str">"Location: index.php"</span><span class="pun">);</span><span class="pln">        
</span><span class="pun">?&gt;</span></pre>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="134_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

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