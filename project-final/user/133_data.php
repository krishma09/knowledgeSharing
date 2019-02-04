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
	$sid=133;
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



<p>Required field will check whether the field is filled or not in the proper way. Most of cases we will use the <b>*</b> symbol for required field.</p>
<h4>What is Validation ?</h4>
<p>Validation means check the input submitted by the user. There are two types of validation are available in PHP. They are as follows −</p>
<ul class="list">
<li><p><b>Client-Side Validation</b> − Validation is performed on the client machine web browsers.</p></li>
<li><p><b>Server Side Validation</b> − After submitted by data, The data has sent to a server and perform validation checks in server machine.</p></li>
</ul>
<h4>Some of Validation rules for field</h4>
<table class="table table-bordered">
<tbody><tr>
<th>Field</th>
<th>Validation Rules</th>
</tr>
<tr>
<td>Name</td>
<td>Should required letters and white-spaces</td>
</tr>
<tr>
<td>Email</td>
<td>Should required <b>@</b> and <b>.</b></td>
</tr>
<tr>
<td>Website</td>
<td>Should required a valid URL</td>
</tr>
<tr>
<td>Radio</td>
<td>Must be selectable at least once</td>
</tr>
<tr>
<td>Check Box</td>
<td>Must be checkable at least once</td>
</tr>
<tr>
<td>Drop Down menu</td>
<td>Must be selectable at least once</td>
</tr>
</tbody></table>
<h4>Valid URL</h4>
<p>Below code shows validation of URL</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$website </span><span class="pun">=</span><span class="pln"> input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"site"</span><span class="pun">]);</span><span class="pln">

</span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">preg_match</span><span class="pun">(</span><span class="str">"/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i"</span><span class="pun">,</span><span class="pln">$website</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $websiteErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Invalid URL"</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">}</span></pre>
<p>Above syntax will verify whether a given URL is valid or not. It should allow some keywords as https, ftp, www, a-z, 0-9,..etc..</p>
<h4>Valid Email</h4>
<p>Below code shows validation of Email address</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$email </span><span class="pun">=</span><span class="pln"> input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"email"</span><span class="pun">]);</span><span class="pln">

</span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">filter_var</span><span class="pun">(</span><span class="pln">$email</span><span class="pun">,</span><span class="pln"> FILTER_VALIDATE_EMAIL</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   $emailErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Invalid format and please re-enter valid email"</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">}</span></pre>
<p>Above syntax will verify whether given Email address is well-formed or not.if it is not, it will show an error message.</p>
<h3>Example</h3>
<p>Example below shows the form with required field validation</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">error </span><span class="pun">{</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#FF0000;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><span class="com">// define variables and set to empty values</span><span class="pln">
         $nameErr </span><span class="pun">=</span><span class="pln"> $emailErr </span><span class="pun">=</span><span class="pln"> $genderErr </span><span class="pun">=</span><span class="pln"> $websiteErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
         $name </span><span class="pun">=</span><span class="pln"> $email </span><span class="pun">=</span><span class="pln"> $gender </span><span class="pun">=</span><span class="pln"> $comment </span><span class="pun">=</span><span class="pln"> $website </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$_SERVER</span><span class="pun">[</span><span class="str">"REQUEST_METHOD"</span><span class="pun">]</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">"POST"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $nameErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Name is required"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $name </span><span class="pun">=</span><span class="pln"> test_input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"name"</span><span class="pun">]);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"email"</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $emailErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Email is required"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $email </span><span class="pun">=</span><span class="pln"> test_input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"email"</span><span class="pun">]);</span><span class="pln">
               
               </span><span class="com">// check if e-mail address is well-formed</span><span class="pln">
               </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">filter_var</span><span class="pun">(</span><span class="pln">$email</span><span class="pun">,</span><span class="pln"> FILTER_VALIDATE_EMAIL</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  $emailErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Invalid email format"</span><span class="pun">;</span><span class="pln"> 
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"website"</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $website </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $website </span><span class="pun">=</span><span class="pln"> test_input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"website"</span><span class="pun">]);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"comment"</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $comment </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $comment </span><span class="pun">=</span><span class="pln"> test_input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"comment"</span><span class="pun">]);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">empty</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"gender"</span><span class="pun">]))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $genderErr </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Gender is required"</span><span class="pun">;</span><span class="pln">
            </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $gender </span><span class="pun">=</span><span class="pln"> test_input</span><span class="pun">(</span><span class="pln">$_POST</span><span class="pun">[</span><span class="str">"gender"</span><span class="pun">]);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">function</span><span class="pln"> test_input</span><span class="pun">(</span><span class="pln">$data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $data </span><span class="pun">=</span><span class="pln"> trim</span><span class="pun">(</span><span class="pln">$data</span><span class="pun">);</span><span class="pln">
            $data </span><span class="pun">=</span><span class="pln"> stripslashes</span><span class="pun">(</span><span class="pln">$data</span><span class="pun">);</span><span class="pln">
            $data </span><span class="pun">=</span><span class="pln"> htmlspecialchars</span><span class="pun">(</span><span class="pln">$data</span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> $data</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
     
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">Absolute classes registration</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
     
      </span><span class="tag">&lt;p&gt;&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"error"</span><span class="tag">&gt;</span><span class="pln">* required field.</span><span class="tag">&lt;/span&gt;&lt;/p&gt;</span><span class="pln">
     
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">method</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"post"</span><span class="pln"> </span><span class="atn">action</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"&gt;</span><span class="pln">?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);</span><span class="pun">?&gt;</span><span class="pln">"&gt;
         </span><span class="tag">&lt;table&gt;</span><span class="pln">
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Name:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"error"</span><span class="tag">&gt;</span><span class="pln">* </span><span class="pun">&lt;?</span><span class="pln">php echo $nameErr</span><span class="pun">;?&gt;</span><span class="tag">&lt;/span&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
           
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">E-mail: </span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"email"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"error"</span><span class="tag">&gt;</span><span class="pln">* </span><span class="pun">&lt;?</span><span class="pln">php echo $emailErr</span><span class="pun">;?&gt;</span><span class="tag">&lt;/span&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
           
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Time:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln"> </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"website"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"error"</span><span class="tag">&gt;</span><span class="pun">&lt;?</span><span class="pln">php echo $websiteErr</span><span class="pun">;?&gt;</span><span class="tag">&lt;/span&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Classes:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln"> </span><span class="tag">&lt;textarea</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"comment"</span><span class="pln"> </span><span class="atn">rows</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"5"</span><span class="pln"> </span><span class="atn">cols</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"40"</span><span class="tag">&gt;&lt;/textarea&gt;&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;tr&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">Gender:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
               </span><span class="tag">&lt;td&gt;</span><span class="pln">
                  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"gender"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"female"</span><span class="tag">&gt;</span><span class="pln">Female
                  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"gender"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"male"</span><span class="tag">&gt;</span><span class="pln">Male
                  </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"error"</span><span class="tag">&gt;</span><span class="pln">* </span><span class="pun">&lt;?</span><span class="pln">php echo $genderErr</span><span class="pun">;?&gt;</span><span class="tag">&lt;/span&gt;</span><span class="pln">
               </span><span class="tag">&lt;/td&gt;</span><span class="pln">
            </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
				
            </span><span class="tag">&lt;td&gt;</span><span class="pln">
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Submit"</span><span class="tag">&gt;</span><span class="pln"> 
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">
				
         </span><span class="tag">&lt;/table&gt;</span><span class="pln">
			
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         echo </span><span class="str">"&lt;h4&gt;Your given values are as:&lt;/h4&gt;"</span><span class="pun">;</span><span class="pln">
         echo $name</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
         
         echo $email</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
         
         echo $website</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
         
         echo $comment</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"&lt;br&gt;"</span><span class="pun">;</span><span class="pln">
         
         echo $gender</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p> 
<img src="images/validation_example.jpg" alt="Validation Example">

















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="132_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="134_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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