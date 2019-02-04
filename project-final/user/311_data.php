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
<title>ASP.NET Tutorials | knowledge.com</title>
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
	$sid=311;
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
<p>ASP.NET validation controls validate the user input data to ensure that useless, unauthenticated, or contradictory data don't get stored.</p>
<p>ASP.NET provides the following validation controls:</p>
<ul class="list">
<li>RequiredFieldValidator</li>
<li>RangeValidator</li>
<li>CompareValidator</li>
<li>RegularExpressionValidator</li>
<li>CustomValidator</li>
<li>ValidationSummary</li>
</ul>
<h4>BaseValidator Class</h4>
<p>The validation control classes are inherited from the BaseValidator class hence they inherit its properties and methods. Therefore, it would help to take a look at the properties and the methods of this base class, which are common for all the validation controls:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Members</th>
<th>Description</th>
</tr>
<tr>
<td>ControlToValidate</td>
<td>Indicates the input control to validate.</td>
</tr>
<tr>
<td>Display</td>
<td>Indicates how the error message is shown.</td>
</tr>
<tr>
<td>EnableClientScript</td>
<td>Indicates whether client side validation will take.</td>
</tr>
<tr>
<td>Enabled</td>
<td>Enables or disables the validator.</td>
</tr>
<tr>
<td>ErrorMessage</td>
<td>Indicates error string.</td>
</tr>
<tr>
<td>Text</td>
<td>Error text to be shown if validation fails.</td>
</tr>
<tr>
<td>IsValid</td>
<td>Indicates whether the value of the control is valid.</td>
</tr>
<tr>
<td>SetFocusOnError</td>
<td>It indicates whether in case of an invalid control, the focus should switch to the related input control.</td>
</tr>
<tr>
<td>ValidationGroup</td>
<td>The logical group of multiple validators, where this control belongs.</td>
</tr>
<tr>
<td>Validate()</td>
<td>This method revalidates the control and updates the IsValid property.</td>
</tr>
</tbody></table>
<h4>RequiredFieldValidator Control</h4>
<p>The RequiredFieldValidator control ensures that the required field is not empty. It is generally tied to a text box to force input into the text box.</p>
<p>The syntax of the control is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:RequiredFieldValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"rfvcandidate"</span><span class="pln"> 
   </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">ControlToValidate</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"ddlcandidate"</span><span class="pln">
   </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"Please choose a candidate"</span><span class="pln"> 
   </span><span class="atn">InitialValue</span><span class="pun">=</span><span class="atv">"Please choose a candidate"</span><span class="tag">&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:RequiredFieldValidator&gt;</span></pre>
<h4>RangeValidator Control</h4>
<p>The RangeValidator control verifies that the input value falls within a predetermined range.</p>
<p>It has three specific properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Type</td>
<td>It defines the type of the data. The available values are: Currency, Date, Double, Integer, and String.</td>
</tr>
<tr>
<td>MinimumValue</td>
<td>It specifies the minimum value of the range.</td>
</tr>
<tr>
<td>MaximumValue</td>
<td>It specifies the maximum value of the range.</td>
</tr>
</tbody></table>
<p>The syntax of the control is as given:</p>

<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:RangeValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"rvclass"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">ControlToValidate</span><span class="pun">=</span><span class="atv">"txtclass"</span><span class="pln"> 
   </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"Enter your class (6 - 12)"</span><span class="pln"> </span><span class="atn">MaximumValue</span><span class="pun">=</span><span class="atv">"12"</span><span class="pln"> 
   </span><span class="atn">MinimumValue</span><span class="pun">=</span><span class="atv">"6"</span><span class="pln"> </span><span class="atn">Type</span><span class="pun">=</span><span class="atv">"Integer"</span><span class="tag">&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:RangeValidator&gt;</span></pre>
<h4>CompareValidator Control</h4>
<p>The CompareValidator control compares a value in one control with a fixed value or a value in another control.</p>
<p>It has the following specific properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Properties</th>
<th>Description</th>
</tr>
<tr>
<td>Type</td>
<td>It specifies the data type.</td>
</tr>
<tr>
<td>ControlToCompare</td>
<td>It specifies the value of the input control to compare with.</td>
</tr>
<tr>
<td>ValueToCompare</td>
<td>It specifies the constant value to compare with.</td>
</tr>
<tr>
<td>Operator</td>
<td>It specifies the comparison operator, the available values are: Equal, NotEqual, GreaterThan, GreaterThanEqual, LessThan, LessThanEqual, and DataTypeCheck.</td>
</tr>
</tbody></table>
<p>The basic syntax of the control is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:CompareValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"CompareValidator1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
   </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"CompareValidator"</span><span class="tag">&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:CompareValidator&gt;</span></pre>
<h4>RegularExpressionValidator</h4>
<p>The RegularExpressionValidator allows validating the input text by matching against a pattern of a regular expression. The regular expression is set in the ValidationExpression property.</p>
<p>The following table summarizes the commonly used syntax constructs for regular expressions:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Character Escapes</th>
<th>Description</th>
</tr>
<tr>
<td>\b</td>
<td>Matches a backspace.</td>
</tr>
<tr>
<td>\t</td>
<td>Matches a tab.</td>
</tr>
<tr>
<td>\r</td>
<td>Matches a carriage return.</td>
</tr>
<tr>
<td>\v</td>
<td>Matches a vertical tab.</td>
</tr>
<tr>
<td>\f</td>
<td>Matches a form feed.</td>
</tr>
<tr>
<td>\n</td>
<td>Matches a new line.</td>
</tr>
<tr>
<td>\</td>
<td>Escape character.</td>
</tr>
</tbody></table>
<p>Apart from single character match, a class of characters could be specified that can be matched, called the metacharacters.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Metacharacters</th>
<th>Description</th>
</tr>
<tr>
<td>.</td>
<td>Matches any character except \n.</td>
</tr>
<tr>
<td>[abcd]</td>
<td>Matches any character in the set.</td>
</tr>
<tr>
<td>[^abcd]</td>
<td>Excludes any character in the set.</td>
</tr>
<tr>
<td>[2-7a-mA-M]</td>
<td>Matches any character specified in the range.</td>
</tr>
<tr>
<td>\w</td>
<td>Matches any alphanumeric character and underscore.</td>
</tr>
<tr>
<td>\W</td>
<td>Matches any non-word character.</td>
</tr>
<tr>
<td>\s</td>
<td>Matches whitespace characters like, space, tab, new line etc.</td>
</tr>
<tr>
<td>\S</td>
<td>Matches any non-whitespace character.</td>
</tr>
<tr>
<td>\d</td>
<td>Matches any decimal character.</td>
</tr>
<tr>
<td>\D</td>
<td>Matches any non-decimal character.</td>
</tr>
</tbody></table>
<p>Quantifiers could be added to specify number of times a character could appear.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Quantifier</th>
<th>Description</th>
</tr>
<tr>
<td>*</td>
<td>Zero or more matches.</td>
</tr>
<tr>
<td>+</td>
<td>One or more matches.</td>
</tr>
<tr>
<td>?</td>
<td>Zero or one matches.</td>
</tr>
<tr>
<td>{N}</td>
<td>N matches.</td>
</tr>
<tr>
<td>{N,}</td>
<td>N or more matches.</td>
</tr>
<tr>
<td>{N,M}</td>
<td>Between N and M matches.</td>
</tr>
</tbody></table>
<p>The syntax of the control is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:RegularExpressionValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"string"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"string"</span><span class="pln">
   </span><span class="atn">ValidationExpression</span><span class="pun">=</span><span class="atv">"string"</span><span class="pln"> </span><span class="atn">ValidationGroup</span><span class="pun">=</span><span class="atv">"string"</span><span class="tag">&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:RegularExpressionValidator&gt;</span></pre>
<h4>CustomValidator</h4>
<p>The CustomValidator control allows writing application specific custom validation routines for both the client side and the server side validation.</p>
<p>The client side validation is accomplished through the ClientValidationFunction property. The client side validation routine should be written in a scripting language, such as JavaScript or VBScript, which the browser can understand.</p>
<p>The server side validation routine must be called from the control's ServerValidate event handler. The server side validation routine should be written in any .Net language, like C# or VB.Net.</p>
<p>The basic syntax for the control is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:CustomValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"CustomValidator1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
   </span><span class="atn">ClientValidationFunction</span><span class="pun">=</span><span class="atv">.cvf_func.</span><span class="pln"> </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"CustomValidator"</span><span class="tag">&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/asp:CustomValidator&gt;</span></pre>
<h4>ValidationSummary</h4>
<p>The ValidationSummary control does not perform any validation but shows a summary of all errors in the page. The summary displays the values of the ErrorMessage property of all validation controls that failed validation.</p>
<p>The following two mutually inclusive properties list out the error message:</p>
<ul class="list">
<li><p><b>ShowSummary</b> : shows the error messages in specified format.</p></li>
<li><p><b>ShowMessageBox</b> : shows the error messages in a separate window.</p></li>
</ul>
<p>The syntax for the control is as given:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;asp:ValidationSummary</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ValidationSummary1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
   </span><span class="atn">DisplayMode</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"BulletList"</span><span class="pln"> </span><span class="atn">ShowSummary</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"true"</span><span class="pln"> </span><span class="atn">HeaderText</span><span class="pun">=</span><span class="atv">"Errors:"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
   <h4>Validation Groups</h4>
   <p>Complex pages have different groups of information provided in different panels. In such situation, a need might arise for performing validation separately for separate group. This kind of situation is handled using validation groups.</p>
   <p>To create a validation group, you should put the input controls and the validation controls into the same logical group by setting their <i>ValidationGroup</i> property.</p>
   <h4>Example</h4>
   <p>The following example describes a form to be filled up by all the students of a school, divided into four houses, for electing the school president. Here, we use the validation controls to validate the user input.</p>
   <p>This is the form in design view:</p>
   <img src="images/form_in_design_view.jpg" alt="form in Design view">
   <p>The content file code is as given:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"form1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">66</span><span class="pun">%;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style1"</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"3"</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"center"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;asp:Label</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"lblmsg"</span><span class="pln"> 
            </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"President Election Form : Choose your president"</span><span class="pln"> 
            </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style3"</span><span class="tag">&gt;</span><span class="pln">
            Candidate:
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:DropDownList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ddlcandidate"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln">  </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">239px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Please Choose a Candidate</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">M H Kabir</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Steve Taylor</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">John Abraham</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Venus Williams</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:DropDownList&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:RequiredFieldValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"rfvcandidate"</span><span class="pln"> 
               </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">ControlToValidate</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"ddlcandidate"</span><span class="pln">
               </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"Please choose a candidate"</span><span class="pln"> 
               </span><span class="atn">InitialValue</span><span class="pun">=</span><span class="atv">"Please choose a candidate"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:RequiredFieldValidator&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style3"</span><span class="tag">&gt;</span><span class="pln">
            House:
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:RadioButtonList</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"rblhouse"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">RepeatLayout</span><span class="pun">=</span><span class="atv">"Flow"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Red</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Blue</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Yellow</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
               </span><span class="tag">&lt;asp:ListItem&gt;</span><span class="pln">Green</span><span class="tag">&lt;/asp:ListItem&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:RadioButtonList&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:RequiredFieldValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"rfvhouse"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
               </span><span class="atn">ControlToValidate</span><span class="pun">=</span><span class="atv">"rblhouse"</span><span class="pln"> </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"Enter your house name"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:RequiredFieldValidator&gt;</span><span class="pln">
            </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style3"</span><span class="tag">&gt;</span><span class="pln">
            Class:
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtclass"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="tag">&gt;&lt;/asp:TextBox&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:RangeValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"rvclass"</span><span class="pln"> 
               </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">ControlToValidate</span><span class="pun">=</span><span class="atv">"txtclass"</span><span class="pln"> 
               </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"Enter your class (6 - 12)"</span><span class="pln"> </span><span class="atn">MaximumValue</span><span class="pun">=</span><span class="atv">"12"</span><span class="pln"> 
               </span><span class="atn">MinimumValue</span><span class="pun">=</span><span class="atv">"6"</span><span class="pln"> </span><span class="atn">Type</span><span class="pun">=</span><span class="atv">"Integer"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:RangeValidator&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style3"</span><span class="tag">&gt;</span><span class="pln">
            Email:
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style2"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:TextBox</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"txtemail"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">250px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:TextBox&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">

         </span><span class="tag">&lt;td&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:RegularExpressionValidator</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"remail"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
               </span><span class="atn">ControlToValidate</span><span class="pun">=</span><span class="atv">"txtemail"</span><span class="pln"> </span><span class="atn">ErrorMessage</span><span class="pun">=</span><span class="atv">"Enter your email"</span><span class="pln"> 
               </span><span class="atn">ValidationExpression</span><span class="pun">=</span><span class="atv">"\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/asp:RegularExpressionValidator&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">

      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"style3"</span><span class="pln"> </span><span class="atn">align</span><span class="pun">=</span><span class="atv">"center"</span><span class="pln"> </span><span class="atn">colspan</span><span class="pun">=</span><span class="atv">"3"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;asp:Button</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"btnsubmit"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">btnsubmit_Click</span><span class="atv">"</span><span class="pln"> 
               </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">align</span><span class="pun">:</span><span class="pln"> center</span><span class="atv">"</span><span class="pln"> </span><span class="atn">Text</span><span class="pun">=</span><span class="atv">"Submit"</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">140px</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
         </span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;/table&gt;</span><span class="pln">
   </span><span class="tag">&lt;asp:ValidationSummary</span><span class="pln"> </span><span class="atn">ID</span><span class="pun">=</span><span class="atv">"ValidationSummary1"</span><span class="pln"> </span><span class="atn">runat</span><span class="pun">=</span><span class="atv">"server"</span><span class="pln"> 
      </span><span class="atn">DisplayMode</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"BulletList"</span><span class="pln"> </span><span class="atn">ShowSummary</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"true"</span><span class="pln"> </span><span class="atn">HeaderText</span><span class="pun">=</span><span class="atv">"Errors:"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<p>The code behind the submit button:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> btnsubmit_Click</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="typ">Page</span><span class="pun">.</span><span class="typ">IsValid</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      lblmsg</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Thank You"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      lblmsg</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Fill up all the fields"</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="310_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="312_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
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