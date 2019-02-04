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
	$sid=377;
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

<p>To send the digital data over an analog media, it needs to be converted into analog signal.There can be two cases according to data formatting.</p>
<p><b>Bandpass:</b>The filters are used to filter and pass frequencies of interest.  A bandpass is a band of frequencies which can pass the filter.</p>
<p><b>Low-pass:</b> Low-pass is a filter that passes low frequencies signals.</p>
<p>When digital data is converted into a bandpass analog signal, it is called digital-to-analog conversion.  When low-pass analog signal is converted into bandpass analog signal, it is called analog-to-analog conversion.</p>
<h4>Digital-to-Analog Conversion</h4>
<p>When data from one computer is sent to another via some analog carrier, it is first converted into analog signals.  Analog signals are modified to reflect digital data.</p>
<p>An analog signal is characterized by its amplitude, frequency, and phase.  There are three kinds of digital-to-analog conversions:</p>
<ul class="list">
<li><p><b>Amplitude Shift Keying</b></p>
<p>In this conversion technique, the amplitude of analog carrier signal is modified to reflect binary data.</p>
<img src="images/amplitude_shift_keying.jpg" alt="Amplitude Shift Keying">
<p>When binary data represents digit 1, the amplitude is held; otherwise it is set to 0.  Both frequency and phase remain same as in the original carrier signal.</p></li>
<li><p><b>Frequency Shift Keying</b></p>
<p>In this conversion technique, the frequency of the analog carrier signal is modified to reflect binary data.</p>
<img src="images/frequency_shift_keying.jpg" alt="Frequency Shift Keying">
<p>This technique uses two frequencies, f1 and f2.  One of them, for example f1, is chosen to represent binary digit 1 and the other one is used to represent binary digit 0.  Both amplitude and phase of the carrier wave are kept intact.</p></li>
<li><p><b>Phase Shift Keying</b></p>
<p>In this conversion scheme, the phase of the original carrier signal is altered to reflect the binary data.</p>
<img src="images/phase_shift_keying.jpg" alt="Phase Shift Keying">
<p>When a new binary symbol is encountered, the phase of the signal is altered.  Amplitude and frequency of the original carrier signal is kept intact.</p>
</li><li><p><b>Quadrature Phase Shift Keying</b></p>
<p>QPSK alters the phase to reflect two binary digits at once.  This is done in two different phases.  The main stream of binary data is divided equally into two sub-streams.  The serial data is converted in to parallel in both sub-streams and then each stream is converted to digital signal using NRZ technique.  Later, both the digital signals are merged together.</p></li>
</ul>
<h4>Analog-to-Analog Conversion</h4>
<p>Analog signals are modified to represent analog data.  This conversion is also known as Analog Modulation.  Analog modulation is required when bandpass is used.  Analog to analog conversion can be done in three ways:</p>
<img src="images/analog_modulation.jpg" alt="Analog Modulation">
<ul class="list">
<li><p><b>Amplitude Modulation</b></p>
<p>In this modulation, the amplitude of the carrier signal is modified to reflect the analog data.</p>
<img src="images/amplitude_modulation.jpg" alt="Amplitude Modulation">
<p>Amplitude modulation is implemented by means of a multiplier.  The amplitude of modulating signal (analog data) is multiplied by the amplitude of carrier frequency, which then reflects analog data.</p>
<p>The frequency and phase of carrier signal remain unchanged.</p></li>
<li><p><b>Frequency Modulation</b></p>
<p>In this modulation technique, the frequency of the carrier signal is modified to reflect the change in the voltage levels of the modulating signal (analog data).</p>
<img src="images/frequency_modulation.jpg" alt="Frequency Modulation">
<p>The amplitude and phase of the carrier signal are not altered.</p></li>
<li><p><b>Phase Modulation</b></p>
<p>In the modulation technique, the phase of carrier signal is modulated in order to reflect the change in voltage (amplitude) of analog data signal.</p>
<img src="images/phase_modulation.jpg" alt="Phase Modulation">
<p>Phase modulation is practically similar to Frequency Modulation, but in Phase modulation frequency of the carrier signal is not increased.  Frequency of carrier is signal is changed (made dense and sparse) to reflect voltage change in the amplitude of modulating signal.</p></li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="376_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="378_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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