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
<title>AJAX Tutorials | knowledge.com</title>
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
	$sid=391;
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
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<p>To clearly illustrate how easy it is to access information from a database using AJAX, we are going to build MySQL queries on the fly and display the results on "ajax.html". But before we proceed, let us do the ground work. Create a table using the following command.</p>
<p><b>NOTE</b>: We are assuming you have sufficient privilege to perform the following MySQL operations</p>
<pre class="result notranslate">CREATE TABLE 'ajax_example' (
   'name' varchar(50) NOT NULL,
   'age' int(11) NOT NULL,
   'sex' varchar(1) NOT NULL,
   'wpm' int(11) NOT NULL,
   PRIMARY KEY  ('name')
) 
</pre>
<p>Now dump the following data into this table using the following SQL statements:</p>
<pre class="result notranslate">INSERT INTO 'ajax_example' VALUES ('Jerry', 120, 'm', 20);
INSERT INTO 'ajax_example' VALUES ('Regis', 75, 'm', 44);
INSERT INTO 'ajax_example' VALUES ('Frank', 45, 'm', 87);
INSERT INTO 'ajax_example' VALUES ('Jill', 22, 'f', 72);
INSERT INTO 'ajax_example' VALUES ('Tracy', 27, 'f', 0);
INSERT INTO 'ajax_example' VALUES ('Julie', 35, 'f', 90);
</pre>
<h4>Client Side HTML File</h4>
<p>Now let us have our client side HTML file, which is ajax.html, and it will have the following code:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln"> 
</span><span class="com">//Browser Support Code</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> ajaxFunction</span><span class="pun">(){</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> ajaxRequest</span><span class="pun">;</span><span class="pln">  </span><span class="com">// The variable that makes Ajax possible!</span><span class="pln">
   </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
   
      </span><span class="com">// Opera 8.0+, Firefox, Safari</span><span class="pln">
      ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">XMLHttpRequest</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
      
      </span><span class="com">// Internet Explorer Browsers</span><span class="pln">
      </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
         ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Msxml2.XMLHTTP"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         
         </span><span class="kwd">try</span><span class="pun">{</span><span class="pln">
            ajaxRequest </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">ActiveXObject</span><span class="pun">(</span><span class="str">"Microsoft.XMLHTTP"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">){</span><span class="pln">
         
            </span><span class="com">// Something went wrong</span><span class="pln">
            alert</span><span class="pun">(</span><span class="str">"Your browser broke!"</span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">// Create a function that will receive data</span><span class="pln">
   </span><span class="com">// sent from the server and will update</span><span class="pln">
   </span><span class="com">// div section in the same page.</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">onreadystatechange </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){</span><span class="pln">
   
      </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">ajaxRequest</span><span class="pun">.</span><span class="pln">readyState </span><span class="pun">==</span><span class="pln"> </span><span class="lit">4</span><span class="pun">){</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> ajaxDisplay </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'ajaxDiv'</span><span class="pun">);</span><span class="pln">
         ajaxDisplay</span><span class="pun">.</span><span class="pln">innerHTML </span><span class="pun">=</span><span class="pln"> ajaxRequest</span><span class="pun">.</span><span class="pln">responseText</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">// Now get the value from user and pass it to</span><span class="pln">
   </span><span class="com">// server script.</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> age </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'age'</span><span class="pun">).</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> wpm </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'wpm'</span><span class="pun">).</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> sex </span><span class="pun">=</span><span class="pln"> document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'sex'</span><span class="pun">).</span><span class="pln">value</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">var</span><span class="pln"> queryString </span><span class="pun">=</span><span class="pln"> </span><span class="str">"?age="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> age </span><span class="pun">;</span><span class="pln">
   
   queryString </span><span class="pun">+=</span><span class="pln">  </span><span class="str">"&amp;wpm="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> wpm </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&amp;sex="</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> sex</span><span class="pun">;</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">open</span><span class="pun">(</span><span class="str">"GET"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"ajax-example.php"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> queryString</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">);</span><span class="pln">
   ajaxRequest</span><span class="pun">.</span><span class="pln">send</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">);</span><span class="pln"> 
</span><span class="pun">}</span><span class="pln">
</span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">

</span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">'myForm'</span><span class="tag">&gt;</span><span class="pln">

   Max Age: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'text'</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'age'</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   Max WPM: </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'text'</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'wpm'</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln"> </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   Sex: 
   </span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'sex'</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"m"</span><span class="tag">&gt;</span><span class="pln">m</span><span class="tag">&lt;/option&gt;</span><span class="pln">
      </span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"f"</span><span class="tag">&gt;</span><span class="pln">f</span><span class="tag">&lt;/option&gt;</span><span class="pln">
   </span><span class="tag">&lt;/select&gt;</span><span class="pln">
   </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">'button'</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">'</span><span class="pln">ajaxFunction</span><span class="pun">()</span><span class="atv">'</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">'Query MySQL'</span><span class="tag">/&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">'ajaxDiv'</span><span class="tag">&gt;</span><span class="pln">Your result will display here</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p><b>NOTE</b>: The way of passing variables in the Query is according to HTTP standard and have formA.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">URL</span><span class="pun">?</span><span class="pln">variable1</span><span class="pun">=</span><span class="pln">value1</span><span class="pun">;&amp;</span><span class="pln">variable2</span><span class="pun">=</span><span class="pln">value2</span><span class="pun">;</span></pre>
<p>The above code will give you a screen as given below:</p>
<p><b>NOTE</b>: This is dummy screen and would not work</p>
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
   var ajaxRequest;  // The variable that makes Ajax possible!
   try{
   
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
   
      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
      
            // Something went wrong
            alert("Your browser broke!");
            return false;
        }
     }
  }

   // Create a function that will receive data 
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function(){
   
      if(ajaxRequest.readyState == 4){
         var ajaxDisplay = document.getElementById('ajaxDiv');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
   }
   // Now get the value from user and pass it to
   // server script.
   var age = document.getElementById('age').value;
   var wpm = document.getElementById('wpm').value;
   var sex = document.getElementById('sex').value;
   var queryString = "?age=" + age ;

   queryString +=  "&wpm=" + wpm + "&sex=" + sex;
   ajaxRequest.open("GET", "/ajax/ajax-example.php" + queryString, true);
   ajaxRequest.send(null); 
}
//-->
</script>
<form name="myForm0">
<p>Max Age:&nbsp; <input type="text" id="age0"></p>
<p>Max WPM: <input type="text" id="wpm0"></p>
<p>Sex: <select id="sex0">
<option value="m">m</option>
<option value="f">f</option>
</select></p>
<input type="button" onclick="" value="Query MySQL">
</form>
<p>Your result will display here in this section after you have made your entry.</p>
<p><b>NOTE</b>: This is a dummy screen.</p>
<h4>Server Side PHP File</h4>
<p>Your client-side script is ready. Now, we have to write our server-side script, which will fetch age, wpm, and sex from the database and will send it back to the client. Put the following code into the file "ajax-example.php".</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
$dbhost </span><span class="pun">=</span><span class="pln"> </span><span class="str">"localhost"</span><span class="pun">;</span><span class="pln">
$dbuser </span><span class="pun">=</span><span class="pln"> </span><span class="str">"dbusername"</span><span class="pun">;</span><span class="pln">
$dbpass </span><span class="pun">=</span><span class="pln"> </span><span class="str">"dbpassword"</span><span class="pun">;</span><span class="pln">
$dbname </span><span class="pun">=</span><span class="pln"> </span><span class="str">"dbname"</span><span class="pun">;</span><span class="pln">
	
</span><span class="com">//Connect to MySQL Server</span><span class="pln">
mysql_connect</span><span class="pun">(</span><span class="pln">$dbhost</span><span class="pun">,</span><span class="pln"> $dbuser</span><span class="pun">,</span><span class="pln"> $dbpass</span><span class="pun">);</span><span class="pln">
	
</span><span class="com">//Select Database</span><span class="pln">
mysql_select_db</span><span class="pun">(</span><span class="pln">$dbname</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">or</span><span class="pln"> </span><span class="kwd">die</span><span class="pun">(</span><span class="pln">mysql_error</span><span class="pun">());</span><span class="pln">
	
</span><span class="com">// Retrieve data from Query String</span><span class="pln">
$age </span><span class="pun">=</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'age'</span><span class="pun">];</span><span class="pln">
$sex </span><span class="pun">=</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'sex'</span><span class="pun">];</span><span class="pln">
$wpm </span><span class="pun">=</span><span class="pln"> $_GET</span><span class="pun">[</span><span class="str">'wpm'</span><span class="pun">];</span><span class="pln">
	
</span><span class="com">// Escape User Input to help prevent SQL Injection</span><span class="pln">
$age </span><span class="pun">=</span><span class="pln"> mysql_real_escape_string</span><span class="pun">(</span><span class="pln">$age</span><span class="pun">);</span><span class="pln">
$sex </span><span class="pun">=</span><span class="pln"> mysql_real_escape_string</span><span class="pun">(</span><span class="pln">$sex</span><span class="pun">);</span><span class="pln">
$wpm </span><span class="pun">=</span><span class="pln"> mysql_real_escape_string</span><span class="pun">(</span><span class="pln">$wpm</span><span class="pun">);</span><span class="pln">
	
</span><span class="com">//build query</span><span class="pln">
$query </span><span class="pun">=</span><span class="pln"> </span><span class="str">"SELECT * FROM ajax_example WHERE sex = '$sex'"</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">if</span><span class="pun">(</span><span class="pln">is_numeric</span><span class="pun">(</span><span class="pln">$age</span><span class="pun">))</span><span class="pln">
   $query </span><span class="pun">.=</span><span class="pln"> </span><span class="str">" AND age &lt;= $age"</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">if</span><span class="pun">(</span><span class="pln">is_numeric</span><span class="pun">(</span><span class="pln">$wpm</span><span class="pun">))</span><span class="pln">
   $query </span><span class="pun">.=</span><span class="pln"> </span><span class="str">" AND wpm &lt;= $wpm"</span><span class="pun">;</span><span class="pln">
	
</span><span class="com">//Execute query</span><span class="pln">
$qry_result </span><span class="pun">=</span><span class="pln"> mysql_query</span><span class="pun">(</span><span class="pln">$query</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">or</span><span class="pln"> </span><span class="kwd">die</span><span class="pun">(</span><span class="pln">mysql_error</span><span class="pun">());</span><span class="pln">

</span><span class="com">//Build Result String</span><span class="pln">
$display_string </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;table&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;tr&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;Name&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;Age&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;Sex&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;th&gt;WPM&lt;/th&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;/tr&gt;"</span><span class="pun">;</span><span class="pln">

</span><span class="com">// Insert a new row in the table for each person returned</span><span class="pln">
</span><span class="kwd">while</span><span class="pun">(</span><span class="pln">$row </span><span class="pun">=</span><span class="pln"> mysql_fetch_array</span><span class="pun">(</span><span class="pln">$qry_result</span><span class="pun">)){</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;tr&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[name]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[age]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[sex]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;td&gt;$row[wpm]&lt;/td&gt;"</span><span class="pun">;</span><span class="pln">
   $display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;/tr&gt;"</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

echo </span><span class="str">"Query: "</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $query </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
$display_string </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;/table&gt;"</span><span class="pun">;</span><span class="pln">

echo $display_string</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="390_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="392_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'ajax_header.php'; ?></aside>
 
  
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