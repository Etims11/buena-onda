<!DOCTYPE html>
<html>
	
	<head>
		<title>Buena Onda</title>
		
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
		<link rel="stylesheet" media="screen" type="text/css" href="css/camera.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/menu.css" />
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
		$page = "home";
		include('includes/header.php');
	?>
	
    <!-- Slider -->
    <section id="slider">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-src="img/slider/slide-1.jpg"></div>
            <div data-src="img/slider/slide-2.jpg"></div>
            <div data-src="img/slider/slide-3.jpg"></div>
        </div>
        <div class="clear"></div>
    </section>
    
    <section id="youAndUs">
	    
	    <div class="oneOfThree regal">
		    <h2>
			    <span class="line"></span>
			    <span class="title">Régalez-vous</span>
			    <span class="line"></span>
			</h2>
			<img src="img/home/home-vignette-regale.jpg" alt="Régalez-vous chez Buena Onda" width="100%" />
			<h2 class="blueTitle">
			    <span class="line lineBlue"></span>
			    <span class="title">Notre carte</span>
			    <span class="line lineBlue"></span>
			    <div class="clear"></div>
			</h2>
			<p>
				Lors de périples argentins, nous avons découvert des spécialités gourmandes, pétries des influences espagnoles et italiennes, 
				pratiques à emporter et délicieuses à déguster.
			</p>
			<p class="link"><a href="carte.php">Pour un avant goût, c’est par ici...</a></p>
	    </div>
	    
	    <div class="oneOfThree invite">
		    <h2>
			    <span class="line"></span>
			    <span class="title">Invitez-vous</span>
			    <span class="line"></span>
			</h2>
			<img src="img/home/home-vignette-invite.jpg" alt="Invitez-vous chez Buena Onda" width="100%" />
			<h2 class="blueTitle">
			    <span class="line lineBlue"></span>
			    <span class="title">Sur place ou à emporter</span>
			    <span class="line lineBlue"></span>
			    <div class="clear"></div>
			</h2>
			<p>
				Notre cuisine fraiche et faite maison peut se déguster sur place ou à l’extérieur ! Nous mettons à votre disposition tout le 
				nécessaire pour vos commandes à emporter.
			</p>
			<p class="link"><a href="commande-reserve.php">Pour organiser votre prochain repas, c’est par là... </a></p>
	    </div>
	    
	    <div class="oneOfThree voyage">
		    <h2>
			    <span class="line"></span>
			    <span class="title">Voyagez avec nous</span>
			    <span class="line"></span>
			</h2>
			<img src="img/home/home-vignette-voyage.jpg" alt="Voyagez avec Buena Onda" width="100%" />
			<h2 class="blueTitle">
			    <span class="line lineBlue"></span>
			    <span class="title">Bueno, Bonito & barato</span>
			    <span class="line lineBlue"></span>
			    <div class="clear"></div>
			</h2>
			<p>
				Bon, Beau et Bon marché». Nous faisons nôtre cette devise typiquement Argentine en vous accueillant chez Buena Onda. 
			</p>
			<p class="link"><a href="https://www.facebook.com/BUENA-ONDA-396951310405054/timeline" target="_blank">Pour suivre notre actualité, suivez nous sur Facebook...</a></p>
	    </div>
	    
	    <div class="clear"></div>
	    
    </section>
    
    <div class="clear"></div>
    
	<?php include('includes/footer.php'); ?>

<!-- JAVASCRIPTS -->
<!-- Slider -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script type="text/javascript" src="js/camera.js"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery('#camera_wrap_1').camera({
            thumbnails: false,
            height: '39%'
        });
    });
</script>

<!-- Simple Slide Menu -->
<script type="text/javascript" src="js/menu.js"></script>

</body>

</html>