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
<title>JQuery Tutorials | knowledge.com</title>
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
	$sid=168;
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




<p>The jQuery library harnesses the power of Cascading Style Sheets (CSS) selectors to let us quickly and easily access elements or groups of elements in the Document Object Model (DOM).</p>
<p>A jQuery Selector is a function which makes use of expressions to find out matching elements from a DOM based on the given criteria. Simply you can say, selectors are used to select one or more HTML elements using jQuery. Once an element is selected then we can perform various operations on that selected element.</p>
<h4>The $() factory function</h4>
<p>jQuery selectors start with the dollar sign and parentheses − <b>$()</b>. The factory function <b>$()</b> makes use of following three building blocks while selecting elements in a given document −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Selector &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<b>Tag Name</b>
<p>Represents a tag name available in the DOM. For example <b>$('p')</b> selects all paragraphs &lt;p&gt; in the document.</p></td>
</tr>
<tr>
<td>2</td>
<td>
<b>Tag ID</b>
<p>Represents a tag available with the given ID in the DOM. For example <b>$('#some-id')</b> selects the single element in the document that has an ID of some-id.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<b>Tag Class</b>
<p>Represents a tag available with the given class in the DOM. For example <b>$('.some-class')</b> selects all elements in the document that have a class of some-class.</p></td>
</tr>
</tbody></table>
<p>All the above items can be used either on their own or in combination with other selectors. All the jQuery selectors are based on the same principle except some tweaking.</p>
<p><b>NOTE</b> − The factory function <b>$()</b> is a synonym of <b>jQuery()</b> function. So in case you are using any other JavaScript library where <b>$</b> sign is conflicting with some thing else then you can replace <b>$</b> sign by <b>jQuery</b> name and you can use function <b>jQuery()</b> instead of <b>$()</b>.</p>
<h5>Example</h5>
<p>Following is a simple example which makes use of Tag Selector. This would select all the elements with a tag name <b>p</b> and will set their background to "yellow".</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">

      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"p"</span><span class="pun">).</span><span class="pln">css</span><span class="pun">(</span><span class="str">"background-color"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"yellow"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"myclass"</span><span class="tag">&gt;</span><span class="pln">This is a paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"myid"</span><span class="tag">&gt;</span><span class="pln">This is second paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;p&gt;</span><span class="pln">This is third paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<h4>How to use Selectors?</h4>
<p>The selectors are very useful and would be required at every step while using jQuery. They get the exact element that you want from your HTML document.</p>
<p>The selectors are very useful and would be required at every step while using jQuery. They get the exact element that you want from your HTML document.</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Selector &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<a href="/jquery/selector-element-name.htm">Name</a>
<p>Selects all elements which match with the given element <b>Name</b>.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/selector-element-id.htm">#ID</a>
<p>Selects a single element which matches with the given <b>ID</b>.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/selector-element-class.htm">.Class</a>
<p>Selects all elements which match with the given <b>Class</b>.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/selector-universal.htm">Universal (*)</a>
<p>Selects all elements available in a DOM.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/selector-multiple-elements.htm">Multiple Elements E, F, G</a>
<p>Selects the combined results of all the specified selectors <b>E, F</b> or <b>G</b>.</p></td>
</tr>
</tbody></table>
<h4>Selectors Examples</h4>
<p>Similar to above syntax and examples, following examples would give you understanding on using different type of other useful selectors −</p>
<section class="toggle">
<label><i class="icon icon-minus"></i><i class="icon icon-plus"></i>Here, you have different type of other useful selectors −</label>
<div class="toggle-content">
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Selector &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>$('*')</b>
<p>This selector selects all elements in the document.</p></td>
</tr>
<tr>
<td>2</td>
<td><b>$("p &gt; *")</b>
<p>This selector selects all elements that are children of a paragraph element.</p></td>
</tr>
<tr>
<td>3</td>
<td><b>$("#specialID")</b>
<p>This selector function gets the element with id="specialID".</p></td>
</tr>
<tr>
<td>4</td>
<td><b>$(".specialClass")</b>
<p>This selector gets all the elements that have the class of <i>specialClass</i>.</p></td>
</tr>
<tr>
<td>5</td>
<td><b>$("li:not(.myclass)")</b>
<p>Selects all elements matched by &lt;li&gt; that do not have class = "myclass".</p></td>
</tr>
<tr>
<td>6</td>
<td><b>$("a#specialID.specialClass")</b>
<p>This selector matches links with an id of <i>specialID</i> and a class of <i>specialClass</i>.</p></td>
</tr>
<tr>
<td>7</td>
<td><b>$("p a.specialClass")</b>
<p>This selector matches links with a class of <i>specialClass</i> declared within &lt;p&gt; elements.</p></td>
</tr>
<tr>
<td>8</td>
<td><b>$("ul li:first")</b>
<p>This selector gets only the first &lt;li&gt; element of the &lt;ul&gt;.</p></td>
</tr>
<tr>
<td>9</td>
<td><b>$("#container p")</b>
<p>Selects all elements matched by &lt;p&gt; that are descendants of an element that has an id of <i>container</i>.</p></td>
</tr>
<tr>
<td>10</td>
<td><b>$("li &gt; ul")</b>
<p>Selects all elements matched by &lt;ul&gt; that are children of an element matched by &lt;li&gt;</p></td>
</tr>
<tr>
<td>11</td>
<td><b>$("strong + em")</b>
<p>Selects all elements matched by &lt;em&gt; that immediately follow a sibling element matched by &lt;strong&gt;.</p></td>
</tr>
<tr>
<td>12</td>
<td><b>$("p ~ ul")</b>
<p>Selects all elements matched by &lt;ul&gt; that follow a sibling element matched by &lt;p&gt;.</p></td>
</tr>
<tr>
<td>13</td>
<td><b>$("code, em, strong")</b>
<p>Selects all elements matched by &lt;code&gt; or &lt;em&gt; or &lt;strong&gt;.</p></td>
</tr>
<tr>
<td>14</td>
<td><b>$("p strong, .myclass")</b>
<p>Selects all elements matched by &lt;strong&gt; that are descendants of an element matched by &lt;p&gt; as well as all elements that have a class of <i>myclass</i>.</p></td>
</tr>
<tr>
<td>15</td>
<td><b>$(":empty")</b>
<p>Selects all elements that have no children.</p></td>
</tr>
<tr>
<td>16</td>
<td><b>$("p:empty")</b>
<p>Selects all elements matched by &lt;p&gt; that have no children.</p></td>
</tr>
<tr>
<td>17</td>
<td><b>$("div[p]")</b>
<p>Selects all elements matched by &lt;div&gt; that contain an element matched by &lt;p&gt;.</p></td>
</tr>
<tr>
<td>18</td>
<td><b>$("p[.myclass]")</b>
<p>Selects all elements matched by &lt;p&gt; that contain an element with a class of <i>myclass</i>.</p></td>
</tr>
<tr>
<td>19</td>
<td><b>$("a[@rel]")</b>
<p>Selects all elements matched by &lt;a&gt; that have a rel attribute.</p></td>
</tr>
<tr>
<td>20</td>
<td><b>$("input[@name = myname]")</b>
<p>Selects all elements matched by &lt;input&gt; that have a name value exactly equal to <i>myname.</i></p></td>
</tr>
<tr>
<td>21</td>
<td><b>$("input[@name^=myname]")</b>
<p>Selects all elements matched by &lt;input&gt; that have a name value beginning with <i>myname</i>.</p></td>
</tr>
<tr>
<td>22</td>
<td><b>$("a[@rel$=self]")</b>
<p>Selects all elements matched by &lt;a&gt; that have <b>rel</b> attribute value ending with <i>self</i>.</p></td>
</tr>
<tr>
<td>23</td>
<td><b>$("a[@href*=domain.com]")</b>
<p>Selects all elements matched by &lt;a&gt; that have an href value containing domain.com.</p></td>
</tr>
<tr>
<td>24</td>
<td><b>$("li:even")</b>
<p>Selects all elements matched by &lt;li&gt; that have an even index value.</p></td>
</tr>
<tr>
<td>25</td>
<td><b>$("tr:odd")</b>
<p>Selects all elements matched by &lt;tr&gt; that have an odd index value.</p></td>
</tr>
<tr>
<td>26</td>
<td><b>$("li:first")</b>
<p>Selects the first &lt;li&gt; element.</p></td>
</tr>
<tr>
<td>27</td>
<td><b>$("li:last")</b>
<p>Selects the last &lt;li&gt; element.</p></td>
</tr>
<tr>
<td>28</td>
<td><b>$("li:visible")</b>
<p>Selects all elements matched by &lt;li&gt; that are visible.</p></td>
</tr>
<tr>
<td>29</td>
<td><b>$("li:hidden")</b>
<p>Selects all elements matched by &lt;li&gt; that are hidden.</p></td>
</tr>
<tr>
<td>30</td>
<td><b>$(":radio")</b>
<p>Selects all radio buttons in the form.</p></td>
</tr>
<tr>
<td>31</td>
<td><b>$(":checked")</b>
<p>Selects all checked box in the form.</p></td>
</tr>
<tr>
<td>32</td>
<td><b>$(":input")</b>
<p>Selects only form elements (input, select, textarea, button).</p></td>
</tr>
<tr>
<td>33</td>
<td><b>$(":text")</b>
<p>Selects only text elements (input[type = text]).</p></td>
</tr>
<tr>
<td>34</td>
<td><b>$("li:eq(2)")</b>
<p>Selects the third &lt;li&gt; element.</p></td>
</tr>
<tr>
<td>35</td>
<td><b>$("li:eq(4)")</b>
<p>Selects the fifth &lt;li&gt; element.</p></td>
</tr>
<tr>
<td>36</td>
<td><b>$("li:lt(2)")</b>
<p>Selects all elements matched by &lt;li&gt; element before the third one; in other words, the first two &lt;li&gt; elements.</p></td>
</tr>
<tr>
<td>37</td>
<td><b>$("p:lt(3)")</b>
<p>selects all elements matched by &lt;p&gt; elements before the fourth one; in other words the first three &lt;p&gt; elements.</p></td>
</tr>
<tr>
<td>38</td>
<td><b>$("li:gt(1)")</b>
<p>Selects all elements matched by &lt;li&gt; after the second one.</p></td>
</tr>
<tr>
<td>39</td>
<td><b>$("p:gt(2)")</b>
<p>Selects all elements matched by &lt;p&gt; after the third one.</p></td>
</tr>
<tr>
<td>40</td>
<td><b>$("div/p")</b>
<p>Selects all elements matched by &lt;p&gt; that are children of an element matched by &lt;div&gt;.</p></td>
</tr>
<tr>
<td>41</td>
<td><b>$("div//code")</b>
<p>Selects all elements matched by &lt;code&gt;that are descendants of an element matched by &lt;div&gt;.</p></td>
</tr>
<tr>
<td>42</td>
<td><b>$("//p//a")</b>
<p>Selects all elements matched by &lt;a&gt; that are descendants of an element matched by &lt;p&gt;</p></td>
</tr>
<tr>
<td>43</td>
<td><b>$("li:first-child")</b>
<p>Selects all elements matched by &lt;li&gt; that are the first child of their parent.</p></td>
</tr>
<tr>
<td>44</td>
<td><b>$("li:last-child")</b>
<p>Selects all elements matched by &lt;li&gt; that are the last child of their parent.</p></td>
</tr>
<tr>
<td>45</td>
<td><b>$(":parent")</b>
<p>Selects all elements that are the parent of another element, including text.</p></td>
</tr>
<tr>
<td>46</td>
<td><b>$("li:contains(second)")</b>
<p>Selects all elements matched by &lt;li&gt; that contain the text second.</p></td></tr>
</tbody></table>
</div>
</section>
<p>You can use all the above selectors with any HTML/XML element in generic way. For example if selector <b>$("li:first")</b> works for &lt;li&gt; element then <b>$("p:first")</b> would also work for &lt;p&gt; element.</p>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="167_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="169_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'jquery_header.php'; ?>
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