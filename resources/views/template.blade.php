<!DOCTYPE html>
<!--[if lt IE 7]><html dir="ltr" lang="en-US" class="ie6"><![endif]-->
<!--[if IE 7]><html dir="ltr" lang="en-US" class="ie7"><![endif]-->
<!--[if IE 8]><html dir="ltr" lang="en-US" class="ie8"><![endif]-->
<!--[if gt IE 8]><!--><html dir="ltr" lang="en-US"><!--<![endif]-->
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="themerex responsive template html5 and css3" />
		<meta name="keywords" content="html5, css3, themerex, template, responsive, adaptive" />

		<link rel="stylesheet" href="template/css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="template/css/fonts.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="template/css/shortcodes.css" type="text/css" media="all" />
        <link rel="stylesheet" href="template/css/responsive.css" type="text/css" media="all" />
        
        <link rel="stylesheet" href="template/js/revslider/css/settings.css" type="text/css" media="all" />
		<link rel="stylesheet" href="template/js/revslider/css/captions.css" type="text/css" media="all" />

		<link rel="stylesheet" href="template/js/prettyphoto/css/prettyPhoto.css" type="text/css" media="all" />
		<link rel="stylesheet" href="template/js/mediaplayer/mediaelementplayer.css" type="text/css" media="all" />

		<link rel="stylesheet" href="template/js/colorpicker/colorpicker.css" type="text/css" media="all" />

		<link rel="stylesheet" href="template/js/jreject/css/jquery.reject.css" type="text/css" media="all" />
	
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script type="text/javascript" src="template/js/jquery-migrate.js"></script>
		
		<!--[if lt IE 9]>
			<script src="js/html5.js" type="text/javascript"></script>
		<![endif]-->
        @yield('head')
</head>

<body>
	<!--[if lt IE 9]>
		<div class="sc_infobox sc_infobox_style_error">
			<div style="text-align:center;">It looks like you're using an old version of Internet Explorer. For the best WordPress experience, please <a href="http://microsoft.com" style="color:#191919">update your browser</a> or learn how to <a href="http://browsehappy.com" style="color:#191919">browse happy</a>!</div>
		</div>
    <![endif]-->
    <div class="info_uvci" style="background-color:#f4f4f4; height:40px;">
        <p style="font-family:Segoe Print; color:black; padding-top:6px; padding-left:120px;">Mon université avec moi, partout et à tout moment.</p>
    </div>
	<div id="page">
		<header id="header" class="site_header" role="banner">
            									
			<div id="header_middle_wrapper">
				<div id="header_middle">
					<div id="header_middle_inner">
						<div class="logo_default"><a href="index"><img src="template/images/logo_uvci.png" style="margin-top:-15px;"></a></div>
						<nav id="mainmenu_area" class="mainmenu_area" role="navigation">
							<ul id="mainmenu" class="sf-js-enabled">
								<li class="menu-item"><a href="index">Accueil</a>	
								</li>
								<li class="menu-item"><a href="#">Activités</a>
									<ul style="display: none;" class="sub-menu">
										<li class="menu-item"><a href="numerisation">numerisation de these</a></li>
										<li class="menu-item"><a href="formation">formation bibliothequaire, enseignent chercheur</a></li>
										<li class="menu-item"><a href="oaw">semaine open access week</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="#">Bibliothèque Virtuelle</a>
									<ul style="display: none;" class="sub-menu">
										<li class="menu-item"><a href="bibliotheque">presentation historique comment y acceder</a></li>
										<li class="menu-item"><a href="espace_membre">espace membre</a></li>
										<li class="menu-item"><a href="be">Bibliothèque educative</a></li>
									</ul>
								</li>
                                <li class="menu-item"><a href="contact">Contact Us</a></li>
								
							</ul>
                        </nav>
                    </div>
                </div>
			</div>
            <div id="header_middle_fixed"></div>
		</header>

        
		@yield('contenu')
<!-- FOOTER SECTION -->

		<footer id="footer" class="site_footer" role="contentinfo">
        
			<!-- Footer sidebar -->
			<div id="footer_sidebar" class="widget_area sidebar_footer" role="complementary">
				<div id="footer_sidebar_inner">
					
					<aside class="widget-number-2 widget widget_contact_form">
						<h3 class="widget_title">Liens Utiles</h3>
						<p>
							<a href="http://www.uvci.edu.ci" target="_blank" title="site de l'uvci">Site officiel de l'UVCI</a><br/>
							<a href="http://www.campus.uvci.edu.ci" target="_blank" title="campus uvci">Site du campus de l'UVCI</a><br/>
							<a href="http://www.scolarite.uvci.edu.ci" target="_blank" title="scolarité uvci">Site la scolarité de l'UVCI</a><br/>
							<a href="http://www.biblio.edu.ci" target="_blank" title="bibliotheque virtuelle">Site de la bibliotheque virtuelle</a>
						</p><
					</aside>
					
					
					<aside class="widget-number-4 widget widget_flickr">
						<h3 class="widget_title">Liens externes</h3>	
					</aside>
					<aside class="widget-number-4 widget widget_flickr">
						<h3 class="widget_title">Liens externes</h3>	
					</aside>
					<aside class="widget-number-4 widget widget_flickr">
						<h3 class="widget_title">Contacts</h3>
						<p style="color:#000; font-weight:bold;">Addresse: Abidjan Cocody II plateaux,<br/>
						 Boite Postale: 28 BP 536 ABIDJAN 28<br/>
						 Téléphone: (+225) 22515147 / 42222200<br/>
						 Email: contact@example.com</p>	
					</aside>
				</div>
			</div>

			<div id="footer_copyright">
				<div id="footer_copyright_inner">Copyright 2019 &copy; All Rights Reserved</div>
			</div>
		
		</footer>
		
	</div><!-- #page -->


	<!-- Login Popup -->
	<!-- /Login Popup -->


	<!-- Registration Popup -->
	<!-- /Registration Popup -->


	<!-- Customizer -->
	<!-- <div id="custom_options">
		<div class="co_header">
			<a href="#" id="co_toggle" class="icon-cog"></a>
            <div class="co_title_wrapper"><h4 class="co_title">Choose Your Style</h4></div>
		</div>
		<div class="co_options">
			<form name="co_form">
				<input id="co_site_url" name="co_site_url" value="/" type="hidden">
				<div class="co_form_row first">
					<input name="co_theme_color" value="#ff5555" type="hidden">
					<span class="co_label">Basic color:</span>
					<div id="co_theme_color" class="colorSelector"><div style="background-color: rgb(255, 84, 84);"></div></div>
				</div>
				<div class="co_form_row">
					<input name="co_body_style" value="boxed" type="hidden">
					<span class="co_label">Background:</span>
					<div class="co_switch_box">
						<a href="#" class="stretched">Stretched</a>
						<div class="switcher"><a class="ui-draggable" style="left: 50px;" href="#"></a></div>
						<a href="#" class="boxed">Boxed</a>
					</div>
				</div>
				<div class="co_form_row">
					<input name="co_bg_pattern" value="5" type="hidden">
					<span class="co_label">Background pattern:</span>
                    <div id="co_bg_pattern_list">
                    	<a href="#" id="pattern_1" class="co_pattern_wrapper"><img src="images/bg/pattern_1.png" alt=""></a>
                    	<a href="#" id="pattern_2" class="co_pattern_wrapper"><img src="images/bg/pattern_2.png" alt=""></a>
                    	<a href="#" id="pattern_3" class="co_pattern_wrapper"><img src="images/bg/pattern_3.png" alt=""></a>
                    	<a href="#" id="pattern_4" class="co_pattern_wrapper"><img src="images/bg/pattern_4.png" alt=""></a>
                    	<a href="#" id="pattern_5" class="co_pattern_wrapper"><img src="images/bg/pattern_5.png" alt=""></a>
					</div>
				</div>
				<div class="co_form_row">
					<input name="co_bg_image" value="0" type="hidden">
					<span class="co_label">Background image:</span>
					<div id="co_bg_images_list">
                    	<a href="#" id="image_1" class="co_image_wrapper"><img src="images/bg/image_1_thumb.jpg" alt=""></a>
                    	<a href="#" id="image_2" class="co_image_wrapper"><img src="images/bg/image_2_thumb.jpg" alt=""></a>
                    	<a href="#" id="image_3" class="co_image_wrapper"><img src="images/bg/image_3_thumb.jpg" alt=""></a>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="js/colorpicker/colorpicker.js"></script> -->
	<!-- /Customizer -->


	<!-- Reject old browsers -->
	<script type="text/javascript" src="template/js/jreject/jquery.reject.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery.reject({
				reject : {
					all: false, // Nothing blocked
					msie5: true, msie6: true, msie7: true // Covers MSIE 5-7
					/*
					 * Possibilities are endless...
					 *
					 * // MSIE Flags (Global, 5-8)
					 * msie, msie5, msie6, msie7, msie8,
					 * // Firefox Flags (Global, 1-3)
					 * firefox, firefox1, firefox2, firefox3,
					 * // Konqueror Flags (Global, 1-3)
					 * konqueror, konqueror1, konqueror2, konqueror3,
					 * // Chrome Flags (Global, 1-4)
					 * chrome, chrome1, chrome2, chrome3, chrome4,
					 * // Safari Flags (Global, 1-4)
					 * safari, safari2, safari3, safari4,
					 * // Opera Flags (Global, 7-10)
					 * opera, opera7, opera8, opera9, opera10,
					 * // Rendering Engines (Gecko, Webkit, Trident, KHTML, Presto)
					 * gecko, webkit, trident, khtml, presto,
					 * // Operating Systems (Win, Mac, Linux, Solaris, iPhone)
					 * win, mac, linux, solaris, iphone,
					 * unknown // Unknown covers everything else
					 */
				},
				imagePath: "js/jreject/images/",
				header: "Your browser is out of date", // Header Text
				paragraph1: "You are currently using an unsupported browser", // Paragraph 1
				paragraph2: "Please install one of the many optional browsers below to proceed",
				closeMessage: "Close this window at your own demise!" // Message below close window link
			});
		});
	</script>
	<!-- /Reject old browsers -->

	<script type="text/javascript" src="template/js/jquery.easing.js"></script>
	<script type="text/javascript" src="template/js/jquery.cookie.js"></script>
	<script type="text/javascript" src="template/js/jquery.tools.min.js"></script>

	<script type="text/javascript" src="template/js/jquery.ui.core.min.js"></script>
	<script type="text/javascript" src="template/js/jquery.ui.widget.min.js"></script>
	<script type="text/javascript" src="template/js/jquery.ui.mouse.min.js"></script>
	<script type="text/javascript" src="template/js/jquery.ui.draggable.min.js"></script>

	<script type="text/javascript" src="template/js/jquery.mobilemenu.min.js"></script>
	<script type="text/javascript" src="template/js/superfish.js"></script>

	<script type="text/javascript" src="template/js/revslider/js/jquery.themepunch.revolution.js"></script>
	<script type="text/javascript" src="template/js/revslider/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="template/js/revslider/js/jquery.themepunch.plugins.min.js"></script>

	<script type="text/javascript" src="template/js/jquery.flexslider.min.js"></script>
	<script type="text/javascript" src="template/js/jquery.elastislide.js"></script>

	<script type="text/javascript" src="template/js/prettyphoto/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="template/js/mediaplayer/mediaelement-and-player.min.js"></script>

	<script type="text/javascript" src="template/js/skip-link-focus-fix.js"></script>

	<script type="text/javascript" src="template/js/_utils.js"></script>
	<script type="text/javascript" src="template/js/_front.js"></script>

	<script type="text/javascript" src="template/js/contact-form.js"></script>
</body>
</html>