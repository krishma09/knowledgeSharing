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
	$sid=124;
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

<p>PHP must be configured correctly in the <b>php.ini</b> file with the details of how your system sends email. Open php.ini file available in <b>/etc/</b> directory and find the section headed <b>[mail function]</b>.</p>
<p>Windows users should ensure that two directives are supplied. The first is called SMTP that defines your email server address. The second is called sendmail_from which defines your own email address.</p>
<p>The configuration for Windows should look something like this −</p>
<pre class="result notranslate">[mail function]
; For Win32 only.
SMTP = smtp.secureserver.net

; For win32 only
sendmail_from = webmaster@tutorialspoint.com
</pre>
<p>Linux users simply need to let PHP know the location of their <b>sendmail</b> application. The path and any desired switches should be specified to the sendmail_path directive.</p>
<p>The configuration for Linux should look something like this −</p>
<pre class="result notranslate">[mail function]
; For Win32 only.
SMTP = 

; For win32 only
sendmail_from = 

; For Unix only
sendmail_path = /usr/sbin/sendmail -t -i
</pre>
<p>Now you are ready to go −</p>
<h4>Sending plain text email</h4>
<p>PHP makes use of <b>mail()</b> function to send an email. This function requires three mandatory arguments that specify the recipient's email address, the subject of the the message and the actual message additionally there are other two optional parameters.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">mail</span><span class="pun">(</span><span class="pln"> to</span><span class="pun">,</span><span class="pln"> subject</span><span class="pun">,</span><span class="pln"> message</span><span class="pun">,</span><span class="pln"> headers</span><span class="pun">,</span><span class="pln"> parameters </span><span class="pun">);</span></pre>
<p>Here is the description for each parameters.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Sr.No</th>
<th width="80%">Parameter &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>to</b></p>
<p>Required. Specifies the receiver / receivers of the email</p></td>
</tr>
<tr>
<td>2</td>
<td><p><b>subject</b></p>
<p>Required. Specifies the subject of the email. This parameter cannot contain any newline characters</p></td>
</tr>
<tr>
<td>3</td>
<td><p><b>message</b></p>
<p>Required. Defines the message to be sent. Each line should be separated with a LF (\n). Lines should not exceed 70 characters</p></td>
</tr>
<tr>
<td>4</td>
<td><p><b>headers</b></p>
<p>Optional. Specifies additional headers, like From, Cc, and Bcc. The additional headers should be separated with a CRLF (\r\n)</p></td>
</tr>
<tr>
<td>5</td>
<td><p><b>parameters</b></p>
<p>Optional. Specifies an additional parameter to the send mail program</p></td>
</tr>
</tbody></table>
<p>As soon as the mail function is called PHP will attempt to send the email then it will return true if successful or false if it is failed.</p>
<p>Multiple recipients can be specified as the first argument to the mail() function in a comma separated list.</p>
<h4>Sending HTML email</h4>
<p>When you send a text message using PHP then all the content will be treated as simple text. Even if you will include HTML tags in a text message, it will be displayed as simple text and HTML tags will not be formatted according to HTML syntax. But PHP provides option to send an HTML message as actual HTML message.</p>
<p>While sending an email message you can specify a Mime version, content type and character set to send an HTML email.</p> 
<h5>Example</h5>
<p>Following example will send an HTML email message to xyz@somedomain.com copying it to afgh@somedomain.com. You can code this program in such a way that it should receive all content from the user and then it should send an email.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Sending HTML email using PHP</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $to </span><span class="pun">=</span><span class="pln"> </span><span class="str">"xyz@somedomain.com"</span><span class="pun">;</span><span class="pln">
         $subject </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This is subject"</span><span class="pun">;</span><span class="pln">
         
         $message </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;b&gt;This is HTML message.&lt;/b&gt;"</span><span class="pun">;</span><span class="pln">
         $message </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"&lt;h1&gt;This is headline.&lt;/h1&gt;"</span><span class="pun">;</span><span class="pln">
         
         $header </span><span class="pun">=</span><span class="pln"> </span><span class="str">"From:abc@somedomain.com \r\n"</span><span class="pun">;</span><span class="pln">
         $header </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"Cc:afgh@somedomain.com \r\n"</span><span class="pun">;</span><span class="pln">
         $header </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"MIME-Version: 1.0\r\n"</span><span class="pun">;</span><span class="pln">
         $header </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"Content-type: text/html\r\n"</span><span class="pun">;</span><span class="pln">
         
         $retval </span><span class="pun">=</span><span class="pln"> mail </span><span class="pun">(</span><span class="pln">$to</span><span class="pun">,</span><span class="pln">$subject</span><span class="pun">,</span><span class="pln">$message</span><span class="pun">,</span><span class="pln">$header</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $retval </span><span class="pun">==</span><span class="pln"> </span><span class="kwd">true</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="str">"Message sent successfully..."</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="str">"Message could not be sent..."</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Sending attachments with email</h4>
<p>To send an email with mixed content requires to set <b>Content-type</b> header to <b>multipart/mixed</b>. Then text and attachment sections can be specified within <b>boundaries</b>.</p>
<p>A boundary is started with two hyphens followed by a unique number which can not appear in the message part of the email. A PHP function <b>md5()</b> is used to create a 32 digit hexadecimal number to create unique number. A final boundary denoting the email's final section must also end with two hyphens.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   </span><span class="com">// request variables // important</span><span class="pln">
   $from </span><span class="pun">=</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">"from"</span><span class="pun">];</span><span class="pln">
   $emaila </span><span class="pun">=</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">"emaila"</span><span class="pun">];</span><span class="pln">
   $filea </span><span class="pun">=</span><span class="pln"> $_REQUEST</span><span class="pun">[</span><span class="str">"filea"</span><span class="pun">];</span><span class="pln">
   
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$filea</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> mail_attachment </span><span class="pun">(</span><span class="pln">$from </span><span class="pun">,</span><span class="pln"> $to</span><span class="pun">,</span><span class="pln"> $subject</span><span class="pun">,</span><span class="pln"> $message</span><span class="pun">,</span><span class="pln"> $attachment</span><span class="pun">){</span><span class="pln">
         $fileatt </span><span class="pun">=</span><span class="pln"> $attachment</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Path to the file</span><span class="pln">
         $fileatt_type </span><span class="pun">=</span><span class="pln"> </span><span class="str">"application/octet-stream"</span><span class="pun">;</span><span class="pln"> </span><span class="com">// File Type </span><span class="pln">
         
         $start </span><span class="pun">=</span><span class="pln"> strrpos</span><span class="pun">(</span><span class="pln">$attachment</span><span class="pun">,</span><span class="pln"> </span><span class="str">'/'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> 
            strrpos</span><span class="pun">(</span><span class="pln">$attachment</span><span class="pun">,</span><span class="pln"> </span><span class="str">'//'</span><span class="pun">)</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> strrpos</span><span class="pun">(</span><span class="pln">$attachment</span><span class="pun">,</span><span class="pln"> </span><span class="str">'/'</span><span class="pun">)+</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
				
         $fileatt_name </span><span class="pun">=</span><span class="pln"> substr</span><span class="pun">(</span><span class="pln">$attachment</span><span class="pun">,</span><span class="pln"> $start</span><span class="pun">,</span><span class="pln"> 
            strlen</span><span class="pun">(</span><span class="pln">$attachment</span><span class="pun">));</span><span class="pln"> </span><span class="com">// Filename that will be used for the </span><span class="pln">
            file </span><span class="kwd">as</span><span class="pln"> the attachment 
         
         $email_from </span><span class="pun">=</span><span class="pln"> $from</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Who the email is from</span><span class="pln">
         $subject </span><span class="pun">=</span><span class="pln"> </span><span class="str">"New Attachment Message"</span><span class="pun">;</span><span class="pln">
         
         $email_subject </span><span class="pun">=</span><span class="pln">  $subject</span><span class="pun">;</span><span class="pln"> </span><span class="com">// The Subject of the email </span><span class="pln">
         $email_txt </span><span class="pun">=</span><span class="pln"> $message</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Message that the email has in it </span><span class="pln">
         $email_to </span><span class="pun">=</span><span class="pln"> $to</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Who the email is to</span><span class="pln">
         
         $headers </span><span class="pun">=</span><span class="pln"> </span><span class="str">"From: "</span><span class="pun">.</span><span class="pln">$email_from</span><span class="pun">;</span><span class="pln">
         $file </span><span class="pun">=</span><span class="pln"> fopen</span><span class="pun">(</span><span class="pln">$fileatt</span><span class="pun">,</span><span class="str">'rb'</span><span class="pun">);</span><span class="pln"> 
         $data </span><span class="pun">=</span><span class="pln"> fread</span><span class="pun">(</span><span class="pln">$file</span><span class="pun">,</span><span class="pln">filesize</span><span class="pun">(</span><span class="pln">$fileatt</span><span class="pun">));</span><span class="pln"> 
         fclose</span><span class="pun">(</span><span class="pln">$file</span><span class="pun">);</span><span class="pln"> 
         
         $msg_txt</span><span class="pun">=</span><span class="str">"\n\n You have recieved a new attachment message from $from"</span><span class="pun">;</span><span class="pln">
         $semi_rand </span><span class="pun">=</span><span class="pln"> md5</span><span class="pun">(</span><span class="pln">time</span><span class="pun">());</span><span class="pln"> 
         $mime_boundary </span><span class="pun">=</span><span class="pln"> </span><span class="str">"==Multipart_Boundary_x{$semi_rand}x"</span><span class="pun">;</span><span class="pln"> 
         $headers </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"\nMIME-Version: 1.0\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"Content-Type: multipart/mixed;\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"
            boundary=\"{$mime_boundary}\""</span><span class="pun">;</span><span class="pln">
         
         $email_txt </span><span class="pun">.=</span><span class="pln"> $msg_txt</span><span class="pun">;</span><span class="pln">
			
         $email_message </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"This is a multi-part message in MIME format.\n\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> 
            </span><span class="str">"--{$mime_boundary}\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"Content-Type:text/html; 
            charset = \"iso-8859-1\"\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"Content-Transfer-Encoding: 7bit\n\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> 
            $email_txt </span><span class="pun">.</span><span class="pln"> </span><span class="str">"\n\n"</span><span class="pun">;</span><span class="pln">
				
         $data </span><span class="pun">=</span><span class="pln"> chunk_split</span><span class="pun">(</span><span class="pln">base64_encode</span><span class="pun">(</span><span class="pln">$data</span><span class="pun">));</span><span class="pln">
         
         $email_message </span><span class="pun">.=</span><span class="pln"> </span><span class="str">"--{$mime_boundary}\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"Content-Type: {$fileatt_type};\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln">
            </span><span class="str">" name = \"{$fileatt_name}\"\n"</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="com">//"Content-Disposition: attachment;\n" . </span><span class="pln">
            </span><span class="com">//" filename = \"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: </span><span class="pln">
            base64\n\n</span><span class="str">" . $data . "</span><span class="pln">\n\n</span><span class="str">" . "</span><span class="pun">--{</span><span class="pln">$mime_boundary</span><span class="pun">}--</span><span class="pln">\n</span><span class="str">";
				
         $ok = mail($email_to, $email_subject, $email_message, $headers);
         
         if($ok) {
            echo "</span><span class="typ">File</span><span class="pln"> </span><span class="typ">Sent</span><span class="pln"> </span><span class="typ">Successfully</span><span class="pun">.</span><span class="str">";
            unlink($attachment); // delete a file after attachment sent.
         }else {
            die("</span><span class="typ">Sorry</span><span class="pln"> but the email could </span><span class="kwd">not</span><span class="pln"> be sent</span><span class="pun">.</span><span class="pln"> </span><span class="typ">Please</span><span class="pln"> go back </span><span class="kwd">and</span><span class="pln"> </span><span class="kwd">try</span><span class="pln"> again</span><span class="pun">!</span><span class="str">");
         }
      }
      move_uploaded_file($_FILES["</span><span class="pln">filea</span><span class="str">"]["</span><span class="pln">tmp_name</span><span class="str">"],
         'temp/'.basename($_FILES['filea']['name']));
			
      mail_attachment("</span><span class="pln">$from</span><span class="str">", "</span><span class="pln">youremailaddress@gmail</span><span class="pun">.</span><span class="pln">com</span><span class="str">", 
         "</span><span class="pln">subject</span><span class="str">", "</span><span class="pln">message</span><span class="str">", ("</span><span class="pln">temp</span><span class="pun">/</span><span class="str">".$_FILES["</span><span class="pln">filea</span><span class="str">"]["</span><span class="pln">name</span><span class="str">"]));
   }
</span><span class="pun">?&gt;</span><span class="pln">

</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> </span><span class="typ">CheckData45</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">with</span><span class="pun">(</span><span class="pln">document</span><span class="pun">.</span><span class="pln">filepost</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">filea</span><span class="pun">.</span><span class="pln">value </span><span class="pun">!</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  document</span><span class="pun">.</span><span class="pln">getElementById</span><span class="pun">(</span><span class="str">'one'</span><span class="pun">).</span><span class="pln">innerText </span><span class="pun">=</span><span class="pln"> 
                     </span><span class="str">"Attaching File ... Please Wait"</span><span class="pun">;</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">width</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">height</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">border</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="pln"> 
         </span><span class="atn">cellpadding</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="pln"> </span><span class="atn">cellspacing</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;</span><span class="pln">
            </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">align</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"center"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"filepost"</span><span class="pln"> </span><span class="atn">method</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"post"</span><span class="pln"> 
                  </span><span class="atn">action</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"file.php"</span><span class="pln"> </span><span class="atn">enctype</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"multipart/form-data"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"file"</span><span class="tag">&gt;</span><span class="pln">
                  
                  </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">width</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"300"</span><span class="pln"> </span><span class="atn">border</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="pln"> </span><span class="atn">cellspacing</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="pln"> 
                     </span><span class="atn">cellpadding</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"0"</span><span class="tag">&gt;</span><span class="pln">
							
                     </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">valign</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">height</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"20"</span><span class="tag">&gt;</span><span class="pln">Your Name:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td&gt;&lt;input</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"from"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> 
                           </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"from"</span><span class="pln"> </span><span class="atn">size</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"30"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">valign</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">height</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"20"</span><span class="tag">&gt;</span><span class="pln">Your Email Address:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"frmtxt2"</span><span class="tag">&gt;&lt;input</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"emaila"</span><span class="pln">
                           </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"emaila"</span><span class="pln"> </span><span class="atn">size</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"30"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">height</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"20"</span><span class="pln"> </span><span class="atn">valign</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">Attach File:</span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr</span><span class="pln"> </span><span class="atn">valign</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">valign</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;&lt;input</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"filea"</span><span class="pln"> 
                           </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"file"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"filea"</span><span class="pln"> </span><span class="atn">size</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"16"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">height</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"40"</span><span class="pln"> </span><span class="atn">valign</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"middle"</span><span class="tag">&gt;&lt;input</span><span class="pln"> 
                           </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Reset2"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"reset"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Reset2"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Reset"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Submit2"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> 
                           </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Submit"</span><span class="pln"> </span><span class="atn">onClick</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">CheckData45</span><span class="pun">()</span><span class="atv">"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/table&gt;</span><span class="pln">
                  
               </span><span class="tag">&lt;/form&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;center&gt;</span><span class="pln">
                  </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">width</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"400"</span><span class="tag">&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;tr&gt;</span><span class="pln">
                        </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"one"</span><span class="tag">&gt;</span><span class="pln">
                        </span><span class="tag">&lt;/td&gt;</span><span class="pln">
                     </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
                     
                  </span><span class="tag">&lt;/table&gt;</span><span class="pln">
               </span><span class="tag">&lt;/center&gt;</span><span class="pln">
               
            </span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="123_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="125_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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