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
<title>UNIX Tutorials | knowledge.com</title>
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
	$sid=353;
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



<h3 class="widget_title" style="text-align:center"><?php echo $sname; ?></h3>
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<p>In this chapter, we will discuss in detail about file permission and access modes in Unix. File ownership is an important component of Unix that provides a secure method for storing files. Every file in Unix has the following attributes −</p>
<ul class="list">
<li><p><b>Owner permissions</b> − The owner's permissions determine what actions the owner of the file can perform on the file.</p></li>
<li><p><b>Group permissions</b> − The group's permissions determine what actions a user, who is a member of the group that a file belongs to, can perform on the file.</p></li>
<li><p><b>Other (world) permissions</b> − The permissions for others indicate what action all other users can perform on the file.</p></li>
</ul>
<h4>The Permission Indicators</h4>
<p>While using <b>ls -l</b> command, it displays various information related to file permission as follows −</p>
<pre class="result notranslate">$ls -l /home/amrood
-rwxr-xr--  1 amrood   users 1024  Nov 2 00:10  myfile
drwxr-xr--- 1 amrood   users 1024  Nov 2 00:10  mydir
</pre>
<p>Here, the first column represents different access modes, i.e., the permission associated with a file or a directory.</p>
<p>The permissions are broken into groups of threes, and each position in the group denotes a specific permission, in this order: read (r), write (w), execute (x) −</p>
<ul class="list">
<li><p>The first three characters (2-4) represent the permissions for the file's owner. For example, <b>-rwxr-xr--</b> represents that the owner has read (r), write (w) and execute (x) permission.</p></li>
<li><p>The second group of three characters (5-7) consists of the permissions for the group to which the file belongs. For example, <b>-rwxr-xr--</b> represents that the group has read (r) and execute (x) permission, but no write permission.</p></li>
<li><p>The last group of three characters (8-10) represents the permissions for everyone else. For example, <b>-rwxr-xr--</b> represents that there is <b>read (r)</b> only permission.</p></li>
</ul>
<h4>File Access Modes</h4>
<p>The permissions of a file are the first line of defense in the security of a Unix system. The basic building blocks of Unix permissions are the <b>read</b>, <b>write</b>, and <b>execute</b> permissions, which have been described below −</p>
<h5>Read</h5>
<p>Grants the capability to read, i.e., view the contents of the file.</p>
<h5>Write</h5>
<p>Grants the capability to modify, or remove the content of the file.</p>
<h5>Execute</h5>
<p>User with execute permissions can run a file as a program.</p>
<h4>Directory Access Modes</h4>
<p>Directory access modes are listed and organized in the same manner as any other file. There are a few differences that need to be mentioned −</p>
<h5>Read</h5>
<p>Access to a directory means that the user can read the contents. The user can look at the <b>filenames</b> inside the directory.</p>
<h5>Write</h5>
<p>Access means that the user can add or delete files from the directory.</p>
<h5>Execute</h5>
<p>Executing a directory doesn't really make sense, so think of this as a traverse permission.</p>
<p>A user must have <b>execute</b> access to the <b>bin</b> directory in order to execute the <b>ls</b> or the <b>cd</b> command.</p>
<h4>Changing Permissions</h4>
<p>To change the file or the directory permissions, you use the <b>chmod</b> (change mode) command. There are two ways to use chmod — the symbolic mode and the absolute mode.</p>
<h5>Using chmod in Symbolic Mode</h5>
<p>The easiest way for a beginner to modify file or directory permissions is to use the symbolic mode. With symbolic permissions you can add, delete, or specify the permission set you want by using the operators in the following table.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.No.</th>
<th style="text-align:center;">Chmod operator &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>
<p><b>+</b></p>
<p>Adds the designated permission(s) to a file or directory.</p>
</td>
</tr>
<tr>
<td class="ts">2</td>
<td>
<p><b>-</b></p>
<p>Removes the designated permission(s) from a file or directory.</p>
</td>
</tr>
<tr>
<td class="ts">3</td>
<td>
<p><b>=</b></p>
<p>Sets the designated permission(s).</p>
</td>
</tr>
</tbody></table>
<p>Here's an example using <b>testfile</b>. Running <b>ls -1</b> on the testfile shows that the file's permissions are as follows −</p>
<pre class="result notranslate">$ls -l testfile
-rwxrwxr--  1 amrood   users 1024  Nov 2 00:10  testfile
</pre>
<p>Then each example <b>chmod</b> command from the preceding table is run on the testfile, followed by <b>ls –l</b>, so you can see the permission changes −</p>
<pre class="result notranslate">$chmod o+wx testfile
$ls -l testfile
-rwxrwxrwx  1 amrood   users 1024  Nov 2 00:10  testfile
$chmod u-x testfile
$ls -l testfile
-rw-rwxrwx  1 amrood   users 1024  Nov 2 00:10  testfile
$chmod g = rx testfile
$ls -l testfile
-rw-r-xrwx  1 amrood   users 1024  Nov 2 00:10  testfile
</pre>
<p>Here's how you can combine these commands on a single line −</p>
<pre class="result notranslate">$chmod o+wx,u-x,g = rx testfile
$ls -l testfile
-rw-r-xrwx  1 amrood   users 1024  Nov 2 00:10  testfile
</pre>
<h4>Using chmod with Absolute Permissions</h4>
<p>The second way to modify permissions with the chmod command is to use a number to specify each set of permissions for the file.</p>
<p>Each permission is assigned a value, as the following table shows, and the total of each set of permissions provides a number for that set.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Number</th>
<th style="text-align:center;">Octal Permission Representation</th>
<th style="text-align:center;width:15%">Ref</th>
</tr>
<tr>
<td style="text-align:center;"><b>0</b></td>
<td>No permission</td>
<td style="text-align:center;">---</td>
</tr>
<tr>
<td style="text-align:center;"><b>1</b></td>
<td>Execute permission</td>
<td style="text-align:center;">--x</td>
</tr>
<tr>
<td style="text-align:center;"><b>2</b></td>
<td>Write permission</td>
<td style="text-align:center;">-w-</td>
</tr>
<tr>
<td style="text-align:center;"><b>3</b></td>
<td>Execute and write permission: 1 (execute) + 2 (write) = 3</td>
<td style="text-align:center;">-wx</td>
</tr>
<tr>
<td style="text-align:center;"><b>4</b></td>
<td>Read permission</td>
<td style="text-align:center;">r--</td>
</tr>
<tr>
<td style="text-align:center;"><b>5</b></td>
<td>Read and execute permission: 4 (read) + 1 (execute) = 5 </td>
<td style="text-align:center;">r-x</td>
</tr>
<tr>
<td style="text-align:center;"><b>6</b></td>
<td>Read and write permission: 4 (read) + 2 (write) = 6</td>
<td style="text-align:center;">rw-</td>
</tr>
<tr>
<td style="text-align:center;"><b>7</b></td>
<td>All permissions: 4 (read) + 2 (write) + 1 (execute) = 7</td>
<td style="text-align:center;">rwx</td>
</tr>
</tbody></table>
<p>Here's an example using the testfile. Running <b>ls -1</b> on the testfile shows that the file's permissions are as follows −</p>
<pre class="result notranslate">$ls -l testfile
-rwxrwxr--  1 amrood   users 1024  Nov 2 00:10  testfile
</pre>
<p>Then each example <b>chmod</b> command from the preceding table is run on the testfile, followed by <b>ls –l</b>, so you can see the permission changes −</p>
<pre class="result notranslate">$ chmod 755 testfile
$ls -l testfile
-rwxr-xr-x  1 amrood   users 1024  Nov 2 00:10  testfile
$chmod 743 testfile
$ls -l testfile
-rwxr---wx  1 amrood   users 1024  Nov 2 00:10  testfile
$chmod 043 testfile
$ls -l testfile
----r---wx  1 amrood   users 1024  Nov 2 00:10  testfile
</pre>
<h4>Changing Owners and Groups</h4>
<p>While creating an account on Unix, it assigns a <b>owner ID</b> and a <b>group ID</b> to each user. All the permissions mentioned above are also assigned based on the Owner and the Groups.</p>
<p>Two commands are available to change the owner and the group of files −</p>
<ul class="list">
<li><p><b>chown</b> − The <b>chown</b> command stands for <b>"change owner"</b> and is used to change the owner of a file.</p></li>
<li><p><b>chgrp</b> − The <b>chgrp</b> command stands for <b>"change group"</b> and is used to change the group of a file.</p></li>
</ul>
<h4>Changing Ownership</h4>
<p>The <b>chown</b> command changes the ownership of a file. The basic syntax is as follows −</p>
<pre class="result notranslate">$ chown user filelist
</pre>
<p>The value of the user can be either the <b>name of a user</b> on the system or the <b>user id (uid)</b> of a user on the system.</p>
<p>The following example will help you understand the concept −</p>
<pre class="result notranslate">$ chown amrood testfile
$
</pre>
<p>Changes the owner of the given file to the user <b>amrood</b>.</p>
<p><b>NOTE</b> − The super user, root, has the unrestricted capability to change the ownership of any file but normal users can change the ownership of only those files that they own.</p>

<h4>Changing Group Ownership</h4>
<p>The <b>chgrp</b> command changes the group ownership of a file. The basic syntax is as follows −</p>
<pre class="result notranslate">$ chgrp group filelist
</pre>
<p>The value of group can be the <b>name of a group</b> on the system or <b>the group ID (GID)</b> of a group on the system.</p>
<p>Following example helps you understand the concept −</p>
<pre class="result notranslate">$ chgrp special testfile
$
</pre>
<p>Changes the group of the given file to <b>special</b> group.</p>
<h4>SUID and SGID File Permission</h4>
<p>Often when a command is executed, it will have to be executed with special privileges in order to accomplish its task.</p>
<p>As an example, when you change your password with the <b>passwd</b> command, your new password is stored in the file <b>/etc/shadow</b>.</p>
<p>As a regular user, you do not have <b>read</b> or <b>write</b> access to this file for security reasons, but when you change your password, you need to have the write permission to this file. This means that the <b>passwd</b> program has to give you additional permissions so that you can write to the file <b>/etc/shadow</b>.</p>
<p>Additional permissions are given to programs via a mechanism known as the <b>Set User ID (SUID)</b> and <b>Set Group ID (SGID)</b> bits.</p>
<p>When you execute a program that has the SUID bit enabled, you inherit the permissions of that program's owner. Programs that do not have the SUID bit set are run with the permissions of the user who started the program.</p>
<p>This is the case with SGID as well. Normally, programs execute with your group permissions, but instead your group will be changed just for this program to the group owner of the program.</p>
<p>The SUID and SGID bits will appear as the letter <b>"s"</b> if the permission is available. The SUID <b>"s"</b> bit will be located in the permission bits where the owners’ <b>execute</b> permission normally resides.</p>
<p>For example, the command −</p>
<pre class="result notranslate">$ ls -l /usr/bin/passwd
-r-sr-xr-x  1   root   bin  19031 Feb 7 13:47  /usr/bin/passwd*
$
</pre>
<p>Shows that the SUID bit is set and that the command is owned by the root. A capital letter <b>S</b> in the execute position instead of a lowercase <b>s</b> indicates that the execute bit is not set.</p>
<p>If the sticky bit is enabled on the directory, files can only be removed if you are one of the following users −</p>
<ul class="list">
<li>The owner of the sticky directory</li>
<li>The owner of the file being removed</li>
<li>The super user, root</li>
</ul>
<p>To set the SUID and SGID bits for any directory try the following command −</p>
<pre class="result notranslate">$ chmod ug+s dirname
$ ls -l
drwsr-sr-x 2 root root  4096 Jun 19 06:45 dirname
$
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="351_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="354_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'unix_header.php'; ?></aside>
 
  
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