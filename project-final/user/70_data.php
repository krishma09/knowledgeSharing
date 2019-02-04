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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=70;
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



<h4>What are Cookies ?</h4>
<p>Web Browsers and Servers use HTTP protocol to communicate and HTTP is a stateless protocol. But for a commercial website, it is required to maintain session information among different pages. For example, one user registration ends after completing many pages. But how to maintain users' session information across all the web pages.</p>
<p>In many situations, using cookies is the most efficient method of remembering and tracking preferences, purchases, commissions, and other information required for better visitor experience or site statistics.</p>
<h4>How It Works ?</h4>
<p>Your server sends some data to the visitor's browser in the form of a cookie. The browser may accept the cookie. If it does, it is stored as a plain text record on the visitor's hard drive. Now, when the visitor arrives at another page on your site, the browser sends the same cookie to the server for retrieval. Once retrieved, your server knows/remembers what was stored earlier.</p>
<p>Cookies are a plain text data record of 5 variable-length fields −</p>
<ul class="list">
<li><p><b>Expires</b> − The date the cookie will expire. If this is blank, the cookie will expire when the visitor quits the browser.</p></li>
<li><p><b>Domain</b> − The domain name of your site.</p></li>
<li><p><b>Path</b> − The path to the directory or web page that set the cookie. This may be blank if you want to retrieve the cookie from any directory or page.</p></li>
<li><p><b>Secure</b> − If this field contains the word "secure", then the cookie may only be retrieved with a secure server. If this field is blank, no such restriction exists.</p></li>
<li><p><b>Name=Value</b> − Cookies are set and retrieved in the form of key-value pairs</p></li>
</ul>
<p>Cookies were originally designed for CGI programming. The data contained in a cookie is automatically transmitted between the web browser and the web server, so CGI scripts on the server can read and write cookie values that are stored on the client.</p>
<p>JavaScript can also manipulate cookies using the <b>cookie</b> property of the <b>Document</b> object. JavaScript can read, create, modify, and delete the cookies that apply to the current web page.</p>
<h4>Storing Cookies</h4>
<p>The simplest way to create a cookie is to assign a string value to the document.cookie object, which looks like this.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">document</span><span class="pun">.</span><span class="pln">cookie </span><span class="pun">=</span><span class="pln"> </span><span class="str">"key1=value1;key2=value2;expires=date"</span><span class="pun">;</span></pre>
<p>Here the <b>expires</b> attribute is optional. If you provide this attribute with a valid date or time, then the cookie will expire on a given date or time and thereafter, the cookies' value will not be accessible.</p>
<p><b>Note</b> − Cookie values may not include semicolons, commas, or whitespace. For this reason, you may want to use the JavaScript <b>escape()</b> function to encode the value before storing it in the cookie. If you do this, you will also have to use the corresponding <b>unescape()</b> function when you read the cookie value.</p>
<h5>Example</h5>
<p>Try the following. It sets a customer name in an input cookie.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">WriteCookie</span><span class="pun">()</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">myform</span><span class="pun">.</span><span class="pln">customer</span><span class="pun">.</span><span class="pln">value </span><span class="pun">==</span><span class="pln"> </span><span class="str">""</span><span class="pln"> </span><span class="pun">){</span><span class="pln">
                  alert</span><span class="pun">(</span><span class="str">"Enter some value!"</span><span class="pun">);</span><span class="pln">
                  </span><span class="kwd">return</span><span class="pun">;</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
               cookievalue</span><span class="pun">=</span><span class="pln"> escape</span><span class="pun">(</span><span class="pln">document</span><span class="pun">.</span><span class="pln">myform</span><span class="pun">.</span><span class="pln">customer</span><span class="pun">.</span><span class="pln">value</span><span class="pun">)</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">";"</span><span class="pun">;</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">cookie</span><span class="pun">=</span><span class="str">"name="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> cookievalue</span><span class="pun">;</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Setting Cookies : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"name="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> cookievalue </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"myform"</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">
         Enter name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"customer"</span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Set Cookie"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">WriteCookie</span><span class="pun">();</span><span class="atv">"</span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Now your machine has a cookie called <b>name</b>. You can set multiple cookies using multiple key=value pairs separated by comma.</p>
<h4>Reading Cookies</h4>
<p>Reading a cookie is just as simple as writing one, because the value of the document.cookie object is the cookie. So you can use this string whenever you want to access the cookie. The document.cookie string will keep a list of name=value pairs separated by semicolons, where <b>name</b> is the name of a cookie and value is its string value.</p>
<p>You can use strings' <b>split()</b> function to break a string into key and values as follows −</p>
<h5>Example</h5>
<p>Try the following example to get all the cookies.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">ReadCookie</span><span class="pun">()</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> allcookies </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">cookie</span><span class="pun">;</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"All Cookies : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> allcookies </span><span class="pun">);</span><span class="pln">
               
               </span><span class="com">// Get all the cookies pairs in an array</span><span class="pln">
               cookiearray </span><span class="pun">=</span><span class="pln"> allcookies</span><span class="pun">.</span><span class="pln">split</span><span class="pun">(</span><span class="str">';'</span><span class="pun">);</span><span class="pln">
               
               </span><span class="com">// Now take key value pair out of this array</span><span class="pln">
               </span><span class="kwd">for</span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> i</span><span class="pun">=</span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">&lt;</span><span class="pln">cookiearray</span><span class="pun">.</span><span class="pln">length</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++){</span><span class="pln">
                  name </span><span class="pun">=</span><span class="pln"> cookiearray</span><span class="pun">[</span><span class="pln">i</span><span class="pun">].</span><span class="pln">split</span><span class="pun">(</span><span class="str">'='</span><span class="pun">)[</span><span class="lit">0</span><span class="pun">];</span><span class="pln">
                  value </span><span class="pun">=</span><span class="pln"> cookiearray</span><span class="pun">[</span><span class="pln">i</span><span class="pun">].</span><span class="pln">split</span><span class="pun">(</span><span class="str">'='</span><span class="pun">)[</span><span class="lit">1</span><span class="pun">];</span><span class="pln">
                  document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Key is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> name </span><span class="pun">+</span><span class="pln"> </span><span class="str">" and Value is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> value</span><span class="pun">);</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"myform"</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln"> click the following button and see the result:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Get Cookie"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">ReadCookie</span><span class="pun">()</span><span class="atv">"</span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p><b>Note</b> − Here <b>length</b> is a method of <b>Array</b> class which returns the length of an array. We will discuss Arrays in a separate chapter. By that time, please try to digest it.</p>
<p><b>Note</b> − There may be some other cookies already set on your machine. The above code will display all the cookies set on your machine.</p>
<h4>Setting Cookies Expiry Date</h4>
<p>You can extend the life of a cookie beyond the current browser session by setting an expiration date and saving the expiry date within the cookie. This can be done by setting the <b>‘expires’</b> attribute to a date and time.</p>
<h5>Example</h5>
<p>Try the following example. It illustrates how to extend the expiry date of a cookie by 1 Month.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">WriteCookie</span><span class="pun">()</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> now </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">();</span><span class="pln">
               now</span><span class="pun">.</span><span class="pln">setMonth</span><span class="pun">(</span><span class="pln"> now</span><span class="pun">.</span><span class="pln">getMonth</span><span class="pun">()</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
               cookievalue </span><span class="pun">=</span><span class="pln"> escape</span><span class="pun">(</span><span class="pln">document</span><span class="pun">.</span><span class="pln">myform</span><span class="pun">.</span><span class="pln">customer</span><span class="pun">.</span><span class="pln">value</span><span class="pun">)</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">";"</span><span class="pln">
               
               document</span><span class="pun">.</span><span class="pln">cookie</span><span class="pun">=</span><span class="str">"name="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> cookievalue</span><span class="pun">;</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">cookie </span><span class="pun">=</span><span class="pln"> </span><span class="str">"expires="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> now</span><span class="pun">.</span><span class="pln">toUTCString</span><span class="pun">()</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">";"</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Setting Cookies : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"name="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> cookievalue </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"myform"</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">
         Enter name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"customer"</span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Set Cookie"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">WriteCookie</span><span class="pun">()</span><span class="atv">"</span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Deleting a Cookie</h4>
<p>Sometimes you will want to delete a cookie so that subsequent attempts to read the cookie return nothing. To do this, you just need to set the expiry date to a time in the past.</p>
<h5>Example</h5>
<p>Try the following example. It illustrates how to delete a cookie by setting its expiry date to one month behind the current date.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">WriteCookie</span><span class="pun">()</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> now </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Date</span><span class="pun">();</span><span class="pln">
               now</span><span class="pun">.</span><span class="pln">setMonth</span><span class="pun">(</span><span class="pln"> now</span><span class="pun">.</span><span class="pln">getMonth</span><span class="pun">()</span><span class="pln"> </span><span class="pun">-</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
               cookievalue </span><span class="pun">=</span><span class="pln"> escape</span><span class="pun">(</span><span class="pln">document</span><span class="pun">.</span><span class="pln">myform</span><span class="pun">.</span><span class="pln">customer</span><span class="pun">.</span><span class="pln">value</span><span class="pun">)</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">";"</span><span class="pln">
               
               document</span><span class="pun">.</span><span class="pln">cookie</span><span class="pun">=</span><span class="str">"name="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> cookievalue</span><span class="pun">;</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">cookie </span><span class="pun">=</span><span class="pln"> </span><span class="str">"expires="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> now</span><span class="pun">.</span><span class="pln">toUTCString</span><span class="pun">()</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">";"</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Setting Cookies : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"name="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> cookievalue </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
          </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"myform"</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">
         Enter name: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"customer"</span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Set Cookie"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">WriteCookie</span><span class="pun">()</span><span class="atv">"</span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="69_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="71_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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