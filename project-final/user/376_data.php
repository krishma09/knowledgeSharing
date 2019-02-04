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
<title>DCN Tutorials | knowledge.com</title>
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
	$sid=376;
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

<p>Data or information can be stored in two ways, analog and digital.  For a computer to use the data, it must be in discrete digital form.Similar to data, signals can also be in analog and digital form. To transmit data digitally, it needs to be first converted to digital form.</p>
<h4>Digital-to-Digital Conversion</h4>
<p>This section explains how to convert digital data into digital signals.  It can be done in two ways, line coding and block coding.  For all communications, line coding is necessary whereas block coding is optional.</p>
<h4>Line Coding</h4>
<p>The process for converting digital data into digital signal is said to be Line Coding.  Digital data is found in binary format.It is represented (stored) internally as series of 1s and 0s.</p>
<img src="images/line_coding.jpg" alt="Line Coding">
<p>Digital signal is denoted by discreet signal, which represents digital data.There are three types of line coding schemes available:</p>
<img src="images/line_coding_schemes.jpg" alt="Line Coding">
<h5>Uni-polar Encoding</h5>
<p>Unipolar encoding schemes use single voltage level to represent data.  In this case, to represent binary 1, high voltage is transmitted and to represent 0, no voltage is transmitted.  It is also called Unipolar-Non-return-to-zero, because there is no rest condition i.e. it either represents 1 or 0.</p>
<img src="images/Unipolar_NRZ.jpg" alt="UniPolar NRZ Encoding">
<h5>Polar Encoding</h5>
<p>Polar encoding scheme uses multiple voltage levels to represent binary values.  Polar encodings is available in four types:</p>
<ul class="list">
<li><p>Polar Non-Return to Zero (Polar NRZ)</p>
<p>It uses two different voltage levels to represent binary values. Generally, positive voltage represents 1 and negative value represents 0.  It is also NRZ because there is no rest condition.</p>
<p>NRZ scheme has two variants: NRZ-L and NRZ-I.</p>
<img src="images/Polar_NRZ.jpg" alt="Unipolar NRZ">
<p>NRZ-L changes voltage level at when a different bit is encountered whereas NRZ-I changes voltage when a 1 is encountered.</p></li>
<li><p></p><h5>Return to Zero (RZ)</h5><p></p>
<p>Problem with NRZ is that the receiver cannot conclude when a bit ended and when the next bit is started, in case when sender and receiver’s clock are not synchronized.</p>
<img src="images/RZ.jpg" alt="Return-to-Zero">
<p>RZ uses three voltage levels, positive voltage to represent 1, negative voltage to represent 0 and zero voltage for none.  Signals change during bits not between bits.</p></li>
<li><p></p><h5>Manchester</h5><p></p>
<p>This encoding scheme is a combination of RZ and NRZ-L.  Bit time is divided into two halves. It transits in the middle of the bit and changes phase when a different bit is encountered.</p></li>
<li><p></p><h5>Differential Manchester</h5><p></p>
<p>This encoding scheme is a combination of RZ and NRZ-I.  It also transit at the middle of the bit but changes phase only when 1 is encountered.</p></li>
</ul>
<h5>Bipolar Encoding</h5>
<p>Bipolar encoding uses three voltage levels, positive, negative and zero.  Zero voltage represents binary 0 and bit 1 is represented by altering positive and negative voltages.</p>
<img src="images/bipolar.jpg" caption="Bipolar Encoding">
<h4>Block Coding</h4>
<p>To ensure accuracy of the received data frame redundant bits are used.  For example, in even-parity, one parity bit is added to make the count of 1s in the frame even.  This way the original number of bits is increased.  It is called Block Coding.</p>
<p>Block coding is represented by slash notation, mB/nB.Means, m-bit block is substituted with n-bit block where n &gt; m.  Block coding involves three steps:</p>
<ul class="list">
<li>Division,</li>
<li>Substitution</li>
<li>Combination.</li>
</ul>
<p>After block coding is done, it is line coded for transmission.</p>
<h4>Analog-to-Digital Conversion</h4>
<p>Microphones create analog voice and camera creates analog videos, which are treated is analog data.  To transmit this analog data over digital signals, we need analog to digital conversion.</p>
<p>Analog data is a continuous stream of data in the wave form whereas digital data is discrete.  To convert analog wave into digital data, we use Pulse Code Modulation (PCM).</p>
<p>PCM is one of the most commonly used method to convert analog data into digital form.  It involves three steps:</p>
<ul class="list">
<li>Sampling</li>
<li>Quantization</li>
<li>Encoding.</li>
</ul>
<h5>Sampling</h5>
<img src="images/sampling.jpg" alt="Sampling">
<p>The analog signal is sampled every T interval.  Most important factor in sampling is the rate at which analog signal is sampled.  According to Nyquist Theorem, the sampling rate must be at least two times of the highest frequency of the signal.</p>
<h5>Quantization</h5>
<img src="images/quantization.jpg" alt="Quantization">
<p>Sampling yields discrete form of continuous analog signal.  Every discrete pattern shows the amplitude of the analog signal at that instance.  The quantization is done between the maximum amplitude value and the minimum amplitude value.  Quantization is approximation of the instantaneous analog value.</p>
<h5>Encoding</h5>
<img src="images/encoding.jpg" alt="Encoding">
<p>In encoding, each approximated value is then converted into binary format.</p>
<h4>Transmission Modes</h4>
<p>The transmission mode decides how data is transmitted between two computers.The binary data in the form of 1s and 0s can be sent in two different modes:  Parallel and Serial.</p>
<h5>Parallel Transmission</h5>
<img src="images/parallel.jpg" alt="Parallel Transmission">
<p>The binary bits are organized in-to groups of fixed length.  Both sender and receiver are connected in parallel with the equal number of data lines.  Both computers distinguish between high order and low order data lines.  The sender sends all the bits at once on all lines.Because the data lines are equal to the number of bits in a group or data frame, a complete group of bits (data frame) is sent in one go.  Advantage of Parallel transmission is high speed and disadvantage is the cost of wires, as it is equal to the number of bits sent in parallel.</p>
<h5>Serial Transmission</h5>	
<p>In serial transmission, bits are sent one after another in a queue manner.  Serial transmission requires only one communication channel.</p>
<img src="images/serial.jpg" alt="Serial Transmission">
<p>Serial transmission can be either asynchronous or synchronous.</p>
<h5>Asynchronous Serial Transmission</h5>
<p>It is named so because there’is no importance of timing.  Data-bits have specific pattern and they help receiver recognize the start and end data bits.For example, a 0 is prefixed on every data byte and one or more 1s are added at the end. </p>
<p>Two continuous data-frames (bytes) may have a gap between them.</p>
<h5>Synchronous Serial Transmission</h5>
<p>Timing in synchronous transmission has importance as there is no mechanism followed to recognize  start and end data bits.There is no pattern or prefix/suffix method.  Data bits are sent in burst mode without maintaining gap between bytes (8-bits).  Single burst of data bits may contain a number of bytes.  Therefore, timing becomes very important.</p>
<p>It is up to the receiver to recognize and separate bits into bytes.The advantage of synchronous transmission is high speed, and it has no overhead of extra header and footer bits as in asynchronous transmission.</p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="375_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="377_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'dcn_header.php'; ?></aside>
 
  
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