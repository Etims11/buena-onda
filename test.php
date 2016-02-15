<!DOCTYPE html>
<html>
	
	<head>
		<title>Buena Onda</title>
		
		<!-- METAS -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-title" content="Buena Onda" />
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="msapplication-TileColor" content="#ffffff" />
		<meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
		<meta name="msapplication-square144x144logo" content="img/favicon/mstile-144x144.png" />
		<meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
		<meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
		<meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />	
		
		<!-- FAVICON -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" />
		<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-160x160.png" sizes="160x160" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
		
		<!-- STYLES -->
		<link rel="stylesheet" media="screen" type="text/css" href="css/resetCSS.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="css/menu.css" />
        
        <link rel='stylesheet' id='camera-css' media='all' type='text/css' href='css/camera.css'> 

        
        
        
        <!-- JS -->
        
        <script type='text/javascript' src='js/jquery.min.js'></script>
        <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
        <script type='text/javascript' src='js/camera.js'></script> 

        <script>
            jQuery(function(){

                jQuery('#camera_wrap_1').camera({
                    thumbnails: true
                });

                jQuery('#camera_wrap_2').camera({
                    height: '400px',
                    loader: 'bar',
                    pagination: false,
                    thumbnails: true
                });
            });
        </script>
        
        
        
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
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

	<header>
		<h1 id="logo">BUENA<span>ONDA</span></h1>
		<h2>L'empanada dans tous ses états!</h2>
	</header>
	
	<?php
		$page = "home";
		include('includes/menu.php');
	?>
	
	<section id="body">
		<h1>Accueil</h1>
	</section>
    
    <section id="slider">
        
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-src="img/slider/slides/slide-1.jpg">
                <!--<div class="camera_caption fadeFromBottom">
                    Soit on peut laisser les textes dans l'image mais on peut aussi en mettre là c'est sympa non ?</em>
                </div>-->
            </div>
            <div data-src="img/slider/slides/slide-1.jpg">
            </div>
            <div data-src="img/slider/slides/slide-1.jpg">
            </div>
        </div>
        
    </section>
	
	<footer>
		
	</footer>

<!-- JAVASCRIPTS -->
<!-- Menu -->
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript">
	(function() {
		[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
			var menuItems = menu.querySelectorAll('.menu__link'),
				setCurrent = function(ev) {
					ev.preventDefault();
	
					var item = ev.target.parentNode; // li
	
					// return if already current
					if (classie.has(item, 'menu__item--current')) {
						return false;
					}
					// remove current
					classie.remove(menu.querySelector('.menu__item--current'), 'menu__item--current');
					// set current
					classie.add(item, 'menu__item--current');
				};
	
			[].slice.call(menuItems).forEach(function(el) {
				el.addEventListener('click', setCurrent);
			});
		});
	
	})(window);
</script>

<!-- Simple Slide Menu -->
<script type="text/javascript" src="js/menu.js"></script>

</body>

</html>