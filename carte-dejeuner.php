<!DOCTYPE html>
<html>
	
	<head>
		<title>Buena Onda - Carte Déjeuner</title>
		
		<!-- METAS -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-title" content="Buena Onda" />
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
		<meta name="theme-color" content="#ffffff ">	
		
		<!-- FAVICON -->
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="manifest" href="img/favicon/manifest.json" />
		<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#00aeef" />
		
		<!-- STYLES -->
		<link rel="stylesheet" media="screen" type="text/css" href="css/resetCSS.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/cartes.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/menu.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/animsition.min.css" />
	</head>

<body>

<!--[if lt IE 8]>
<div style='border: 1px solid #F7941D; background: #FEEFDA; text-align: center; clear: both; height: 75px; position: relative;'>
	<div style='position: absolute; right: 3px; top: 3px; font-family: courier new; font-weight: bold;'>
		<a href='#' onclick='javascript:this.parentNode.parentNode.style.display="none"; return false;'>
			<img src='http://www.ie6nomore.com/files/theme/ie6nomore-cornerx.jpg' style='border: none;' alt='Close this notice'/>
		</a>
	</div>
	<div style='width: 640px; margin: 0 auto; text-align: left; padding: 0; overflow: hidden; color: black;'>
		<div style='width: 75px; float: left;'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-warning.jpg' alt='Warning!'/></div>
		<div style='width: 275px; float: left; font-family: Arial, sans-serif;'>
			<div style='font-size: 14px; font-weight: bold; margin-top: 12px;'>Vous utilisez un navigateur dépassé depuis 5 ans!</div>
			<div style='font-size: 12px; margin-top: 6px; line-height: 12px;'>Pour une meilleure expérience web, prenez le temps de mettre votre navigateur à jour.</div>
		</div>
		<div style='width: 75px; float: left;'>
			<a href='http://fr.www.mozilla.com/fr/' target='_blank'><img src='http://www.ie6nomore.com/files/theme/ie6nomore-firefox.jpg' style='border: none;' alt='Get Firefox 3.5'/></a>
		</div>
		<div style='width: 75px; float: left;'>
			<a href='http://www.microsoft.com/downloads/details.aspx?FamilyID=341c2ad5-8c3d-4347-8c03-08cdecd8852b&DisplayLang=fr' target='_blank'>
				<img src='http://www.ie6nomore.com/files/theme/ie6nomore-ie8.jpg' style='border: none;' alt='Get Internet Explorer 8'/>
			</a>
		</div>
		<div style='width: 73px; float: left;'>
			<a href='http://www.apple.com/fr/safari/download/' target='_blank'>
				<img src='http://www.ie6nomore.com/files/theme/ie6nomore-safari.jpg' style='border: none;' alt='Get Safari 4'/>
			</a>
		</div>
		<div style='float: left;'>
			<a href='http://www.google.com/chrome?hl=fr' target='_blank'>
				<img src='http://www.ie6nomore.com/files/theme/ie6nomore-chrome.jpg' style='border: none;' alt='Get Google Chrome'/>
			</a>
		</div>
	</div>
</div>
<![endif]-->
	
	<?php
		$page = "carte-dej";
		include('includes/header.php');
	?>
	
	<section id="body">
		
		<?php include('includes/links-cards.php'); ?>
		
		<div class="animsition" data-animsition-in-class="fade-in-left" data-animsition-in-duration="1500" data-animsition-out-class="fade-out-left" data-animsition-out-duration="800">
			
			<div id="title-card">
				
			</div>
			
		</div>
		
	</section>
	
	<?php include('includes/footer.html'); ?>

<!-- JAVASCRIPTS -->
<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- animsition.js -->
<script type="text/javascript" src="js/animsition.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	  $(".animsition").animsition({
	    inClass: 'fade-in-left',
	    outClass: 'fade-out-left',
	    inDuration: 1500,
	    outDuration: 800,
	    linkElement: '.animsition-link',
	    // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
	    loading: true,
	    loadingParentElement: 'body', //animsition wrapper element
	    loadingClass: 'animsition-loading',
	    loadingInner: '', // e.g '<img src="loading.svg" />'
	    timeout: false,
	    timeoutCountdown: 5000,
	    onLoadEvent: true,
	    browser: [ 'animation-duration', '-webkit-animation-duration'],
	    // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
	    // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
	    overlay : false,
	    overlayClass : 'animsition-overlay-slide',
	    overlayParentElement : 'body',
	    transition: function(url){ window.location.href = url; }
	  });
	});
</script>

<!-- Simple Slide Menu -->
<script type="text/javascript" src="js/menu.js"></script>

</body>

</html>