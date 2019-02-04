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
	$sid=375;
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

<p>Physical layer in the OSI model plays the role of interacting with actual hardware and signaling mechanism.  Physical layer is the only layer of OSI network model which actually deals with the physical connectivity of two different stations.  This layer defines the hardware equipment, cabling, wiring, frequencies, pulses used to represent binary signals etc.</p>
<p>Physical layer provides its services to Data-link layer.  Data-link layer hands over frames to physical layer. Physical layer converts them to electrical pulses, which represent binary data.The binary data is then sent over the wired or wireless media.</p>
<h4>Signals</h4>
<p>When data is sent over physical medium, it needs to be first converted into electromagnetic signals.  Data itself can be analog such as human voice, or digital such as file on the disk.Both analog and digital data can be represented in digital or analog signals.</p>
<ul class="list">
<li><p><b>Digital Signals</b></p>
<p>Digital signals are discrete in nature and represent sequence of voltage pulses.  Digital signals are used within the circuitry of a computer system.</p></li>
<li><p><b>Analog Signals </b></p>
<p>Analog signals are in continuous wave form in nature and represented by continuous electromagnetic waves.</p></li>
</ul>
<h4>Transmission Impairment</h4>
<p>When signals travel through the medium they tend to deteriorate.  This may have many reasons as given:</p>
<ul class="list">
<li><p><b>Attenuation</b></p>
<p>For the receiver to interpret the data accurately, the signal must be sufficiently strong.When the signal passes through the medium, it tends to get weaker.As it covers distance, it loses strength.</p></li>
<li><p><b>Dispersion</b></p>
<p>As signal travels through the media, it tends to spread and overlaps.  The amount of dispersion depends upon the frequency used.</p></li>
<li><p><b>Delay distortion</b></p>
<p>Signals are sent over media with pre-defined speed and frequency.  If the signal speed and frequency do not match, there are possibilities that signal reaches destination in arbitrary fashion.  In digital media, this is very critical that some bits reach earlier than the previously sent ones.</p></li>
<li><p><b>Noise</b></p>
<p>Random disturbance or fluctuation in analog or digital signal is said to be Noise in signal, which may distort the actual information being carried.  Noise can be characterized in one of the following class:</p>
	<ul class="list">
	<li><p><b>Thermal Noise</b></p>
	<p>Heat agitates the electronic conductors of a medium which may introduce noise in the media.  Up to a certain level, thermal noise is unavoidable.</p></li>
	<li><p><b>Intermodulation</b></p>
	<p>When multiple frequencies share a medium, their interference can cause noise in the medium.  Intermodulation noise occurs if two different frequencies are sharing a medium and one of them has excessive strength or the component itself is not functioning properly, then the resultant frequency may not be delivered as expected.</p></li>
	<li><p><b>Crosstalk</b></p>
	<p>This sort of noise happens when a foreign signal enters into the media.  This is because signal in one medium affects the signal of second medium.</p></li>
	<li><p><b>Impulse</b></p>
	<p>This noise is introduced because of irregular disturbances such as lightening, electricity, short-circuit, or faulty components.  Digital data is mostly affected by this sort of noise.</p></li>
	</ul></li>
</ul>
<h4>Transmission Media</h4>
<p>The media over which the information between two computer systems is sent, called transmission media.  Transmission media comes in two forms.</p>
<ul class="list">
<li><p><b>Guided Media</b></p>
<p>All communication wires/cables are guided media, such as UTP, coaxial cables, and fiber Optics.  In this media, the sender and receiver are directly connected and the information is send (guided) through it.</p></li>
<li><p><b>Unguided Media</b></p>
<p>Wireless or open air space is said to be unguided media, because there is no connectivity between the sender and receiver.  Information is spread over the air, and anyone including the actual recipient may collect the information.</p></li>
</ul>
<h4>Channel Capacity</h4>
<p>The speed of transmission of information is said to be the channel capacity.  We count it as data rate in digital world.  It depends on numerous factors such as:</p>
<ul class="list">
<li><p><b>Bandwidth:</b>&nbsp; The physical limitation of underlying media.</p></li>
<li><p><b>Error-rate:</b>&nbsp; Incorrect reception of information because of noise.</p></li>
<li><p><b>Encoding:</b>&nbsp; The number of levels used for signaling.</p></li>
</ul>
<h4>Multiplexing</h4>
<p>Multiplexing is a technique to mix and send multiple data streams over a single medium.  This technique requires system hardware called multiplexer (MUX) for multiplexing the streams and sending them on a medium, and de-multiplexer (DMUX) which takes information from the medium and distributes to different destinations.</p>
<h4>Switching</h4>
<p>Switching is a mechanism by which data/information sent from source towards destination which are not directly connected.  Networks have interconnecting devices, which receives data from directly connected sources, stores data, analyze it and then forwards to the next interconnecting device closest to the destination.</p>
<p>Switching can be categorized as:</p>
<img src="images/switching.jpg" alt="Switching">




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="374_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="376_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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