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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=298;
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
<p>In this chapter, let us study the following concepts:</p>
<ul class="list">
<li><p>Adding menus and sub menus in an application</p></li>
<li><p>Adding the cut, copy and paste functionalities in a form</p></li>
<li><p>Anchoring and docking controls in a form</p></li>
<li><p>Modal forms</p></li>
</ul>
<h4>Adding Menus and Sub Menus in an Application</h4>
<p>Traditionally, the <i>Menu</i>, <i>MainMenu</i>, <i>ContextMenu</i>, and <i>MenuItem</i> classes were used for adding menus, sub-menus and context menus in a Windows application. </p>
<p>Now, the <b>MenuStrip</b>, the <b>ToolStripMenuItem</b>, <b>ToolStripDropDown</b> and <b>ToolStripDropDownMenu</b> controls replace and add functionality to the Menu-related controls of previous versions. However, the old control classes are retained for both backward compatibility and future use.</p>
<p>Let us create a typical windows main menu bar and sub menus using the old version controls first since these controls are still much used in old applications. </p>
<p>Following is an example, which shows how we create a menu bar with menu items: File, Edit, View and Project. The File menu has the sub menus New, Open and Save.</p>
<p>Let's double click on the Form and put the following code in the opened window.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Form1</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Form1_Load</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> </span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">MyBase</span><span class="pun">.</span><span class="typ">Load</span><span class="pln">
      </span><span class="str">'defining the main menu bar
      Dim mnuBar As New MainMenu()
      '</span><span class="pln">defining the menu items </span><span class="kwd">for</span><span class="pln"> the main menu bar
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemFile </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;File"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemEdit </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;Edit"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemView </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;View"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemProject </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;Project"</span><span class="pun">)</span><span class="pln">

      </span><span class="str">'adding the menu items to the main menu bar
      mnuBar.MenuItems.Add(myMenuItemFile)
      mnuBar.MenuItems.Add(myMenuItemEdit)
      mnuBar.MenuItems.Add(myMenuItemView)
      mnuBar.MenuItems.Add(myMenuItemProject)

     '</span><span class="pln"> defining some </span><span class="kwd">sub</span><span class="pln"> menus
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemNew </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;New"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemOpen </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;Open"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> myMenuItemSave </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">MenuItem</span><span class="pun">(</span><span class="str">"&amp;Save"</span><span class="pun">)</span><span class="pln">

      </span><span class="str">'add sub menus to the File menu
      myMenuItemFile.MenuItems.Add(myMenuItemNew)
      myMenuItemFile.MenuItems.Add(myMenuItemOpen)
      myMenuItemFile.MenuItems.Add(myMenuItemSave)

      '</span><span class="pln">add the main menu to the form
      </span><span class="typ">Me</span><span class="pun">.</span><span class="typ">Menu</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> mnuBar
     
      </span><span class="str">' Set the caption bar text of the form.  
      Me.Text = "tutorialspoint.com"
   End Sub
End Class</span></pre>
<p>When the above code is executed and run using Start button available at the Microsoft Visual Studio tool bar, it will show the following window:</p>
<img src="images/vb.net_advanced_forms1.jpg" alt="VB.Net Menu Example">
<p>Windows Forms contain a rich set of classes for creating your own custom menus with modern appearance, look and feel. The <b>MenuStrip</b>, <b>ToolStripMenuItem</b>, <b>ContextMenuStrip</b> controls are used to create menu bars and context menus efficiently. </p>
<p>Click the following links to check their details:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N.</th>
<th>Control &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p>MenuStrip</a></p>
<p>It provides a menu system for a form.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p>ToolStripMenuItem</a></p>
<p>It represents a selectable option displayed on a <b>MenuStrip</b> or <b>ContextMenuStrip</b>. The ToolStripMenuItem control replaces and adds functionality to the MenuItem control of previous versions.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p>ContextMenuStrip </a></p>
<p>It represents a shortcut menu.</p>
</td>
</tr>
</tbody></table>
<h4>Adding the Cut, Copy and Paste Functionalities in a Form</h4>
<p>The methods exposed by the <b>ClipBoard</b> class are used for adding the cut, copy and paste functionalities in an application. The ClipBoard class provides methods to place data on and retrieve data from the system Clipboard.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Method Name &amp; Description</th></tr>
<tr>
<td>1</td>
<td>
<p><b>Clear</b></p>
<p>Removes all data from the Clipboard.</p></td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>ContainsData</b></p>
<p>Indicates whether there is data on the Clipboard that is in the specified format or can be converted to that format.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>ContainsImage</b></p>
<p>Indicates whether there is data on the Clipboard that is in the Bitmap format or can be converted to that format.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>ContainsText</b></p>
<p>Indicates whether there is data on the Clipboard in the Text or UnicodeText format, depending on the operating system.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>GetData</b></p>
<p>Retrieves data from the Clipboard in the specified format.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>GetDataObject</b></p>
<p>Retrieves the data that is currently on the system Clipboard.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>GetImage</b></p>
<p>Retrieves an image from the Clipboard.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>GetText</b></p>
<p>Retrieves text data from the Clipboard in the Text or UnicodeText format, depending on the operating system.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>GetText(TextDataFormat)</b></p>
<p>Retrieves text data from the Clipboard in the format indicated by the specified TextDataFormat value.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>SetData</b></p>
<p>Clears the Clipboard and then adds data in the specified format.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>SetText(String)</b></p>
<p>Clears the Clipboard and then adds text data in the Text or UnicodeText format, depending on the operating system.</p>
</td>
</tr>
</tbody></table>
<p>Following is an example, which shows how we cut, copy and paste data using methods of the Clipboard class. Take the following steps:</p>
<ul class="list">
<li><p>Add a rich text box control and three button controls on the form. </p></li>
<li><p>Change the text property of the buttons to Cut, Copy and Paste, respectively. </p></li>
<li><p>Double click on the buttons to add the following code in the code editor:</p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Form1</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Form1_Load</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> _ 
    </span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">MyBase</span><span class="pun">.</span><span class="typ">Load</span><span class="pln">
      </span><span class="str">' Set the caption bar text of the form.  
      Me.Text = "tutorialspoint.com"
   End Sub
   Private Sub Button1_Click(sender As Object, e As EventArgs) _ 
      Handles Button1.Click
      Clipboard.SetDataObject(RichTextBox1.SelectedText)
      RichTextBox1.SelectedText = ""
   End Sub
   Private Sub Button2_Click(sender As Object, e As EventArgs) _
       Handles Button2.Click
      Clipboard.SetDataObject(RichTextBox1.SelectedText)
   End Sub
   Private Sub Button3_Click(sender As Object, e As EventArgs) _
    Handles Button3.Click
      Dim iData As IDataObject
      iData = Clipboard.GetDataObject()
      If (iData.GetDataPresent(DataFormats.Text)) Then
          RichTextBox1.SelectedText = iData.GetData(DataFormats.Text)
      Else
          RichTextBox1.SelectedText = " "
      End If
   End Sub
End Class</span></pre>
<p>When the above code is executed and run using <b>Start</b> button available at the Microsoft Visual Studio tool bar, it will show the following window:</p>
<img src="images/vb.net_advanced_forms2.jpg" alt="VB.Net Cut, Paste, Copy Example">
<p>Enter some text and check how the buttons work.</p>
<h4>Anchoring and Docking Controls in a Form</h4>
<p><b>Anchoring</b> allows you to set an anchor position for a control to the edges of its container control, for example, the form. The <b>Anchor</b> property of the Control class allows you to set values of this property. The Anchor property gets or sets the edges of the container to which a control is bound and determines how a control is resized with its parent. </p>
<p>When you anchor a control to a form, the control maintains its distance from the edges of the form and its anchored position, when the form is resized.</p>
<p>You can set the Anchor property values of a control from the Properties window:</p>
<img src="images/vb.net_advanced_forms3.jpg" alt="VB.Net Anchoring of Controls">
<p>For example, let us add a Button control on a form and set its anchor property to Bottom, Right. Run this form to see the original position of the Button control with respect to the form.</p>
<img src="images/vb.net_advanced_forms4.jpg" alt="VB.Net Anchoring Example">
<p>Now, when you stretch the form, the distance between the Button and the bottom right corner of the form remains same.</p>
<img src="images/vb.net_advanced_forms5.jpg" alt="VB.Net Anchoring Example">
<p><b>Docking</b> of a control means docking it to one of the edges of its container. In docking, the control fills certain area of the container completely.</p>
<p>The <b>Dock</b> property of the Control class does this. The Dock property gets or sets which control borders are docked to its parent control and determines how a control is resized with its parent.</p>
<p>You can set the Dock property values of a control from the Properties window:</p>
<img src="images/vb.net_advanced_forms6.jpg" alt="VB.Net Docking of Controls">
<p>For example, let us add a Button control on a form and set its Dock property to Bottom. Run this form to see the original position of the Button control with respect to the form.</p>
<img src="images/vb.net_advanced_forms7.jpg" alt="VB.Net Docking Example">
<p>Now, when you stretch the form, the Button resizes itself with the form.</p>
<img src="images/vb.net_advanced_forms8.jpg" alt="VB.Net Docking Example">
<h4>Modal Forms</h4>
<p><b>Modal Forms</b> are those forms that need to be closed or hidden before you can continue working with the rest of the application. All dialog boxes are modal forms. A MessageBox is also a modal form.</p>
<p>You can call a modal form by two ways:</p>
<ul class="list">
<li><p>Calling the <b>ShowDialog</b> method</p></li>
<li><p>Calling the <b>Show</b> method</p></li>
</ul>
<p>Let us take up an example in which we will create a modal form, a dialog box. Take the following steps:</p>
<ul class="list">
<li><p>Add a form, Form1 to your application, and add two labels and a button control to Form1</p></li>
<li><p>Change the text properties of the first label and the button to 'Welcome to Tutorials Point' and 'Enter your Name', respectively. Keep the text properties of the second label as blank.</p>
<img src="images/vb.net_advanced_forms9.jpg" width="282" height="248" border="0" alt="VB.Net Modal Form Example">
</li>
<li><p>Add a new Windows Form, Form2, and add two buttons, one label, and a text box to Form2. </p></li>
<li><p>Change the text properties of the buttons to OK and Cancel, respectively. Change the text properties of the label to 'Enter your name:'.</p></li>
<li><p>Set the <i>FormBorderStyle</i> property of Form2 to <i>FixedDialog</i>, for giving it a dialog box border. </p></li>
<li><p>Set the <i>ControlBox</i> property of Form2 to False.</p></li>
<li><p>Set the <i>ShowInTaskbar</i> property of Form2 to False. </p></li>
<li><p>Set the <i>DialogResult</i> property of the OK button to OK and the Cancel button to Cancel. </p></li>
</ul>
<img src="images/vb.net_advanced_forms10.jpg" alt="VB.Net Modal Form Example">
<p>Add the following code snippets in the Form2_Load method of Form2:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Form2_Load</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> _
   </span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">MyBase</span><span class="pun">.</span><span class="typ">Load</span><span class="pln">
   </span><span class="typ">AcceptButton</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Button1</span><span class="pln">
   </span><span class="typ">CancelButton</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Button2</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
<p>Add the following code snippets in the Button1_Click method of Form1:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Private</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Button1_Click</span><span class="pun">(</span><span class="pln">sender </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pun">,</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pun">)</span><span class="pln"> _
   </span><span class="typ">Handles</span><span class="pln"> </span><span class="typ">Button1</span><span class="pun">.</span><span class="typ">Click</span><span class="pln">
   </span><span class="typ">Dim</span><span class="pln"> frmSecond </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Form2</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Form2</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">If</span><span class="pln"> frmSecond</span><span class="pun">.</span><span class="typ">ShowDialog</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">DialogResult</span><span class="pun">.</span><span class="pln">OK </span><span class="typ">Then</span><span class="pln">
      </span><span class="typ">Label2</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> frmSecond</span><span class="pun">.</span><span class="typ">TextBox1</span><span class="pun">.</span><span class="typ">Text</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
<p>When the above code is executed and run using <b>Start</b> button available at the Microsoft Visual Studio tool bar, it will show the following window:</p>
<img src="images/vb.net_advanced_forms11.jpg" alt="VB.Net Modal Form Example">
<p>Clicking on the 'Enter your Name' button displays the second form:</p>
<img src="images/vb.net_advanced_forms12.jpg" alt="VB.Net Modal Form Example">
<p>Clicking on the OK button takes the control and information back from the modal form to the previous form:</p>
<img src="images/vb.net_advanced_forms13.jpg" alt="VB.Net Modal Form Example">





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="297_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="299_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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