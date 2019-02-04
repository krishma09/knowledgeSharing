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
	$sid=326;
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
<p>Implementing security in a site has the following aspects:</p>
<ul class="list">
<li><p><b>Authentication</b> : It is the process of ensuring the user's identity and authenticity. ASP.NET allows four types of authentications:</p>
<ul class="list">
<li>Windows Authentication</li>
<li>Forms Authentication</li>
<li>Passport Authentication</li>
<li>Custom Authentication</li>
</ul>
</li>
<li><p><b>Authorization</b> : It is the process of defining and allotting specific roles to specific users.</p></li>
<li><p><b>Confidentiality</b> : It involves encrypting the channel between the client browser and the web server.</p></li>
<li><p><b>Integrity</b> : It involves maintaining the integrity of data. For example, implementing digital signature.</p></li>
</ul>
<h4>Forms-Based Authentication</h4>
<p>Traditionally, forms-based authentication involves editing the web.config file and adding a login page with appropriate authentication code.</p>
<p>The web.config file could be edited and the following codes written on it:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;configuration&gt;</span><span class="pln">

</span><span class="tag">&lt;system.web&gt;</span><span class="pln">
   </span><span class="tag">&lt;authentication</span><span class="pln"> </span><span class="atn">mode</span><span class="pun">=</span><span class="atv">"Forms"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;forms</span><span class="pln"> </span><span class="atn">loginUrl</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"login.aspx"</span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/authentication&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;authorization&gt;</span><span class="pln">
      </span><span class="tag">&lt;deny</span><span class="pln"> </span><span class="atn">users</span><span class="pun">=</span><span class="atv">"?"</span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;/authorization&gt;</span><span class="pln">
</span><span class="tag">&lt;/system.web&gt;</span><span class="pln">
...
...
</span><span class="tag">&lt;/configuration&gt;</span></pre>
<p>The login.aspx page mentioned in the above code snippet could have the following code behind file with the usernames and passwords for authentication hard coded into it.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">bool</span><span class="pln"> authenticate</span><span class="pun">(</span><span class="typ">String</span><span class="pln"> uname</span><span class="pun">,</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="kwd">pass</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">uname </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Tom"</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pun">(</span><span class="kwd">pass</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">"tom123"</span><span class="pun">)</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">uname </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Dick"</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pun">(</span><span class="kwd">pass</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">"dick123"</span><span class="pun">)</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">uname </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Harry"</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">if</span><span class="pun">(</span><span class="kwd">pass</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">"har123"</span><span class="pun">)</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">OnLogin</span><span class="pun">(</span><span class="typ">Object</span><span class="pln"> src</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">authenticate</span><span class="pun">(</span><span class="pln">txtuser</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">,</span><span class="pln"> txtpwd</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">))</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">FormsAuthentication</span><span class="pun">.</span><span class="typ">RedirectFromLoginPage</span><span class="pun">(</span><span class="pln">txtuser</span><span class="pun">.</span><span class="typ">Text</span><span class="pun">,</span><span class="pln"> chkrem</span><span class="pun">.</span><span class="typ">Checked</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">Response</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Invalid user name or password"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Observe that the FormsAuthentication class is responsible for the process of authentication.</p>
<p>However, Visual Studio allows you to implement user creation, authentication, and authorization with seamless ease without writing any code, through the Web Site Administration tool. This tool allows creating users and roles.</p>
<p>Apart from this, ASP.NET comes with readymade login controls set, which has controls performing all the jobs for you.</p>
<h4>Implementing Forms-Based Security</h4>
<p>To set up forms-based authentication, you need the following:</p>
<ul class="list">
<li>A database of users to support the authentication process</li>
<li>A website that uses the database</li>
<li>User accounts</li>
<li>Roles</li>
<li>Restriction of users and group activities</li>
<li>A default page, to display the login status of the users and other information.</li>
<li>A login page, to allow users to log in, retrieve password, or change password</li>
</ul>
<p>To create users, take the following steps:</p>
<p><b>Step (1)</b> : Choose Website -&gt; ASP.NET Configuration to open the Web Application Administration Tool.</p>
<p><b>Step (2)</b> : Click on the Security tab.</p>
<img src="images/security_tab.jpg" alt="Security tab">
<p><b>Step (3)</b> : Select the authentication type to 'Forms based authentication' by selecting the  'From the Internet' radio button.</p>
<img src="images/authentication_type.jpg" alt="Authentication Type">
<p><b>Step (4)</b> : Click on 'Create Users' link to create some users. If you already had created roles, you could assign roles to the user, right at this stage.</p>
<img src="images/create_users_link.jpg" alt="Create Users link ">
<p><b>Step (5)</b> : Create a web site and add the following pages:</p>
<ul class="list">
<li>Welcome.aspx</li>
<li>Login.aspx</li>
<li>CreateAccount.aspx</li>
<li>PasswordRecovery.aspx</li>
<li>ChangePassword.aspx</li>
</ul>
<p><b>Step (6)</b> : Place a LoginStatus control on the Welcome.aspx from the login section of the toolbox. It has two templates: LoggedIn and LoggedOut.</p>
<p>In LoggedOut template, there is a login link and in the LoggedIn template, there is a logout link on the control. You can change the login and logout text properties of the control from the Properties window.</p>
<img src="images/login_status_control.jpg" alt="Login Status control">
<p><b>Step (7)</b> : Place a LoginView control from the toolbox below the LoginStatus control. Here,	 you can put texts and other controls (hyperlinks, buttons etc.), which are displayed based on whether the user is logged in or not.</p>
<p>This control has two view templates: Anonymous template and LoggedIn template. Select each view and write some text for the users to be displayed for each template. The text should be placed on the area marked red.</p>
<img src="images/login_view_control.jpg" alt="Login View control">
<p><b>Step (8)</b> : The users for the application are created by the developer. You might want to allow a visitor to create a user account. For this, add a link beneath the LoginView control, which should link to the CreateAccount.aspx page. </p>

<p><b>Step (9)</b> : Place a CreateUserWizard control on the create account page. Set the ContinueDestinationPageUrl property of this control to Welcome.aspx.</p>
<img src="images/createuserwizard_control.jpg" alt="CreateUserWizard control">
<p><b>Step (10)</b> : Create the Login page. Place a Login control on the page. The LoginStatus control automatically links to the Login.aspx. To change this default, make the following changes in the web.config file.</p>
<p>For example, if you want to name your log in page as signup.aspx, add the following lines to the &lt;authentication&gt; section of the web.config:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;configuration&gt;</span><span class="pln">
   </span><span class="tag">&lt;system.web&gt;</span><span class="pln">
      </span><span class="tag">&lt;authentication</span><span class="pln"> </span><span class="atn">mode</span><span class="pun">=</span><span class="atv">"Forms"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;forms</span><span class="pln"> </span><span class="atn">loginUrl</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"signup.aspx"</span><span class="pln"> </span><span class="atn">defaultUrl</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">â€œWelcome.aspxâ€</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/authentication&gt;</span><span class="pln">
   </span><span class="tag">&lt;/system.web&gt;</span><span class="pln">
</span><span class="tag">&lt;/configuration&gt;</span></pre>
<p><b>Step (11)</b> : Users often forget passwords. The PasswordRecovery control helps the user gain access to the account. Select the Login control. Open its smart tag and click 'Convert to Template'.</p>
<p>Customize the UI of the control to place a hyperlink control under the login button, which should link to the PassWordRecovery.aspx.</p>
<img src="images/passwordrecovery_control.jpg" alt="PasswordRecovery control">
<p><b>Step (12)</b> : Place a PasswordRecovery control on the password recovery page. This control needs an email server to send the passwords to the users.</p>
<img src="images/passwordrecovery_control2.jpg" alt="PasswordRecovery control2">
<p><b>Step (13)</b> : Create a link to the ChangePassword.aspx page in the LoggedIn template of the LoginView control in Welcome.aspx.</p>
<img src="images/changepassword_control.jpg" alt="ChangePassword control">
<p><b>Step (14)</b> : Place a ChangePassword control on the change password page. This control also has two views.</p>
<img src="images/changepassword_control2.jpg" alt="ChangePassword control2">
<p>Now run the application and observe different security operations.</p>
<p>To create roles, go back to the Web Application Administration Tools and click on the Security tab. Click on 'Create Roles' and create some roles for the application.</p>
<img src="images/web_application_administration.jpg" alt="Web Application Administration">
<p>Click on the 'Manage Users' link and assign roles to the users.</p>
<img src="images/manage_users.jpg" alt="Manage Users">
<h4>IIS Authentication: SSL</h4>
<p>The Secure Socket Layer or SSL is the protocol used to ensure a secure connection. With SSL enabled, the browser encrypts all data sent to the server and decrypts all data coming from the server. At the same time, the server encrypts and decrypts all data to and from browser.</p>
<p>The URL for a secure connection starts with HTTPS instead of HTTP. A small lock is displayed by a browser using a secure connection. When a browser makes an initial attempt to communicate with a server over a secure connection using SSL, the server authenticates itself by sending its digital certificate.</p>
<p>To use the SSL, you need to buy a digital secure certificate from a trusted Certification Authority (CA) and install it in the web server. Following are some of the trusted and reputed certification authorities:</p>
<ul class="list">
<li>www.verisign.com</li>
<li>www.geotrust.com</li>
<li>www.thawte.com</li>
</ul>
<p>SSL is built into all major browsers and servers. To enable SSL, you need to install the digital certificate. The strength of various digital certificates varies depending upon the length of the key generated during encryption. More the length, more secure is the certificate, hence the connection.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Strength</th>
<th>Description</th>
</tr>
<tr>
<td>40 bit</td>
<td>Supported by most browsers but easy to break.</td>
</tr>
<tr>
<td>56 bit</td>
<td>Stronger than 40-bit.</td>
</tr>
<tr>
<td>128 bit</td>
<td>Extremely difficult to break but all the browsers do not support it.</td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="325_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="327_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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