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
<title>HTML Tutorials | knowledge.com</title>
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
	$sid=28;
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




<p>HTML Forms are required when you want to collect some data from the site visitor. For example during user registration you would like to collect information such as name, email address, credit card, etc.</p>
<p>A form will take input from the site visitor and then will post it to a back-end application such as CGI, ASP Script or PHP script etc. The back-end application will perform required processing on the passed data based on defined business logic inside the application.</p>
<p>There are various form elements available like text fields, textarea fields, drop-down menus, radio buttons, checkboxes, etc.</p> 
<p>The HTML <b>&lt;form&gt;</b> tag is used to create an HTML form and it has following syntax:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">action</span><span class="pun">=</span><span class="atv">"Script URL"</span><span class="pln"> </span><span class="atn">method</span><span class="pun">=</span><span class="atv">"GET|POST"</span><span class="tag">&gt;</span><span class="pln">
    form elements like input, textarea etc.
</span><span class="tag">&lt;/form&gt;</span></pre>
<h4>Form Attributes</h4>
<p>Apart from common attributes, following is a list of the most frequently used form attributes:</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>action</td><td>Backend script ready to process your passed data.</td></tr>
<tr><td>method</td><td>Method to be used to upload data. The most frequently used are GET and POST methods.</td></tr>
<tr><td>target</td><td>Specify the target window or frame where the result of the script will be displayed. It takes values like _blank, _self, _parent etc.</td></tr>
<tr><td>enctype</td><td><p>You can use the enctype attribute to specify how the browser encodes the data before it sends it to the server. Possible values are:</p>
	<ul class="list">
	<li><p><b>application/x-www-form-urlencoded</b> - This is the standard method most forms use in simple scenarios.</p></li>
	<li><p><b>mutlipart/form-data</b> - This is used when you want to upload binary data in the form of files like image, word file etc.</p></li>
	</ul>
</td></tr>
</tbody></table><p><b>Note: </b>You can refer to <a href="/perl/perl_cgi_programming.htm"><b>Perl &amp; CGI</b></a> for a detail on how form data upload works.</p>
<h4>HTML Form Controls</h4>
<p>There are different types of form controls that you can use to collect data using HTML form:</p>
<ul class="list">
<li><p>Text Input Controls</p></li>
<li><p>Checkboxes Controls</p></li>
<li><p>Radio Box Controls</p></li>
<li><p>Select Box Controls</p></li>
<li><p>File Select boxes</p></li>
<li><p>Hidden Controls</p></li>
<li><p>Clickable Buttons</p></li>
<li><p>Submit and Reset Button</p></li>
</ul>
<h4>Text Input Controls</h4>
<p>There are three types of text input used on forms:</p>
<ul class="list">
<li><p><b>Single-line text input controls -</b> This control is used for items that require only one line of user input, such as search boxes or names. They are created using HTML <b>&lt;input&gt;</b> tag.</p></li>
<li><p><b>Password input controls -</b> This is also a single-line text input but it masks the character as soon as a user enters it. They are also created using HTMl &lt;input&gt; tag.</p></li>
<li><p><b>Multi-line text input controls -</b> This is used when the user is required to give details that may be longer than a single sentence. Multi-line input controls are created using HTML <b>&lt;textarea&gt;</b> tag.</p></li>
</ul>
<h4>Single-line text input controls</h4>
<p>This control is used for items that require only one line of user input, such as search boxes or names. They are created using HTML &lt;input&gt; tag.</p>
<h5>Example</h5>
<p>Here is a basic example of a single-line text input used to take first name and last name:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Text Input Control</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
First name:  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"first_name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;br&gt;</span><span class="pln">
Last name:  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"last_name"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
First name:  <input type="text" name="first_name">
<br>
Last name:  <input type="text" name="last_name">
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of attributes for &lt;input&gt; tag for creating text field.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>type</td><td>Indicates the type of input control and for text input control it will be set to <b>text</b>.</td></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>value</td><td>This can be used to provide an initial value inside the control.</td></tr>
<tr><td>size</td><td>Allows to specify the width of the text-input control in terms of characters.</td></tr>
<tr><td>maxlength</td><td>Allows to specify the maximum number of characters a user can enter into the text box.</td></tr>
</tbody></table>
<h4>Password input controls</h4>
<p>This is also a single-line text input but it masks the character as soon as a user enters it. They are also created using HTML &lt;input&gt; tag but type attribute is set to <b>password</b>.</p>
<h5>Example</h5>
<p>Here is a basic example of a single-line password input used to take user password:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Password Input Control</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
User ID :  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"user_id"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;br&gt;</span><span class="pln">
Password:  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"password"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"password"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
User ID :  &nbsp; <input type="text" name="user_id">
<br>
Password:   <input type="password" name="user_id">
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of attributes for &lt;input&gt; tag for creating password field.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>type</td><td>Indicates the type of input control and for password input control it will be set to <b>password</b>.</td></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>value</td><td>This can be used to provide an initial value inside the control.</td></tr>
<tr><td>size</td><td>Allows to specify the width of the text-input control in terms of characters.</td></tr>
<tr><td>maxlength</td><td>Allows to specify the maximum number of characters a user can enter into the text box.</td></tr>
</tbody></table>
<h4>Multiple-Line Text Input Controls</h4>
<p>This is used when the user is required to give details that may be longer than a single sentence. Multi-line input controls are created using HTML &lt;textarea&gt; tag.</p>
<h5>Example</h5>
<p>Here is a basic example of a multi-line text input used to take item description:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Multiple-Line Input Control</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form&gt;</span><span class="pln">
Description : </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;textarea</span><span class="pln"> </span><span class="atn">rows</span><span class="pun">=</span><span class="atv">"5"</span><span class="pln"> </span><span class="atn">cols</span><span class="pun">=</span><span class="atv">"50"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="tag">&gt;</span><span class="pln">
Enter description here...
</span><span class="tag">&lt;/textarea&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
Description : <br>
<textarea rows="5" cols="67" name="description">Enter description here...
</textarea>
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of attributes for &lt;textarea&gt; tag.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>rows</td><td>Indicates the number of rows of text area box.</td></tr>
<tr><td>cols</td><td>Indicates the number of columns of text area box</td></tr>
</tbody></table>
<h4>Checkbox Control</h4>
<p>Checkboxes are used when more than one option is required to be selected. They are also created using HTML &lt;input&gt; tag but type attribute is set to <b>checkbox</b>.</p>
<h5>Example</h5>
<p>Here is an example HTML code for a form with two checkboxes:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Checkbox Control</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"maths"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"on"</span><span class="tag">&gt;</span><span class="pln"> Maths
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"physics"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"on"</span><span class="tag">&gt;</span><span class="pln"> Physics
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
<input type="checkbox" name="maths" value="on"> Maths
<input type="checkbox" name="physics" value="on"> Physics
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of attributes for &lt;checkbox&gt; tag.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>type</td><td>Indicates the type of input control and for checkbox input control it will be set to <b>checkbox</b>.</td></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>value</td><td>The value that will be used if the checkbox is selected.</td></tr>
<tr><td>checked</td><td>Set to <i>checked</i> if you want to select it by default.</td></tr>
</tbody></table>
<h4>Radio Button Control</h4>
<p>Radio buttons are used when out of many options, just one option is required to be selected. They are also created using HTML &lt;input&gt; tag but type attribute is set to <b>radio</b>.</p>
<h5>Example</h5>
<p>Here is example HTML code for a form with two radio buttons:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Radio Box Control</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"subject"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"maths"</span><span class="tag">&gt;</span><span class="pln"> Maths
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"subject"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"physics"</span><span class="tag">&gt;</span><span class="pln"> Physics
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
<input type="radio" name="subject" value="maths"> Maths
<input type="radio" name="subject" value="physics"> Physics
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of attributes for radio button.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>type</td><td>Indicates the type of input control and for checkbox input control it will be set to <b>radio</b>.</td></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>value</td><td>The value that will be used if the radio box is selected.</td></tr>
<tr><td>checked</td><td>Set to <i>checked</i> if you want to select it by default.</td></tr>
</tbody></table>
<h4>Select Box Control</h4>
<p>A select box, also called drop down box which provides option to list down various options in the form of drop down list, from where a user can select one or more options.</p>
<h5>Example</h5>
<p>Here is example HTML code for a form with one drop down box</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Select Box Control</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form&gt;</span><span class="pln">
</span><span class="tag">&lt;select</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Maths"</span><span class="pln"> </span><span class="atn">selected</span><span class="tag">&gt;</span><span class="pln">Maths</span><span class="tag">&lt;/option&gt;</span><span class="pln">
</span><span class="tag">&lt;option</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Physics"</span><span class="tag">&gt;</span><span class="pln">Physics</span><span class="tag">&lt;/option&gt;</span><span class="pln">
</span><span class="tag">&lt;/select&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
<select name="dropdown">
<option value="Maths" selected="">Maths</option>
<option value="Physics">Physics</option>
</select>
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of important attributes of &lt;select&gt; tag:</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>size</td><td>This can be used to present a scrolling list box.</td></tr>
<tr><td>multiple</td><td>If set to "multiple" then allows a user to select multiple items from the menu.</td></tr>
</tbody></table>
<p>Following is the list of important attributes of &lt;option&gt; tag:</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>value</td><td>The value that will be used if an option in the select box box is selected.</td></tr>
<tr><td>selected</td><td>Specifies that this option should be the initially selected value when the page loads.</td></tr>
<tr><td>label</td><td>An alternative way of labeling options</td></tr>
</tbody></table>
<h4>File Upload Box</h4>
<p>If you want to allow a user to upload a file to your web site, you will need to use a file upload box, also known as a file select box. This is also created using the &lt;input&gt; element but type attribute is set to <b>file</b>.</p>
<h5>Example</h5>
<p>Here is example HTML code for a form with one file upload box:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">File Upload Box</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"file"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"fileupload"</span><span class="pln"> </span><span class="atn">accept</span><span class="pun">=</span><span class="atv">"image/*"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<form>
<input type="file" name="fileupload" accept="image/*">
</form>
</div>
<h5>Attributes</h5>
<p>Following is the list of important attributes of  file upload box:</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>name</td><td>Used to give a name to the control which is sent to the server to be recognized and get the value.</td></tr>
<tr><td>accept</td><td>Specifies the types of files that the server accepts.</td></tr>
</tbody></table>
<h4>Button Controls</h4>
<p>There are various ways in HTML to create clickable buttons. You can also create a clickable button using &lt;input&gt; tag by setting its type attribute to <b>button</b>. The type attribute can take the following values:</p>
<table class="table table-bordered">
<tbody><tr><th>Type</th><th>Description</th></tr>
<tr><td>submit</td><td>This creates a button that automatically submits a form.</td></tr>
<tr><td>reset</td><td>This creates a button that automatically resets form controls to their initial values.</td></tr>
<tr><td>button</td><td>This creates a button that is used to trigger a client-side script when the user clicks that button.</td></tr>
<tr><td>image</td><td>This creates a clickable button but we can use an image as background of the button.</td></tr>
</tbody></table>
<h5>Example</h5>
<p>Here is example HTML code for a form with three types of buttons:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">File Upload Box</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;form&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"reset"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"reset"</span><span class="pln">  </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Reset"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"ok"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"OK"</span><span class="pln">  </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"image"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"imagebutton"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/images/logo.png"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="27_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="29_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'html_header.php'; ?>
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