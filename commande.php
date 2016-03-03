<!DOCTYPE html>
<html>
	
	<head>
		<title>Commandez chez Buena Onda</title>
		
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
		<link rel="stylesheet" media="screen" type="text/css" href="css/commande.css" />
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
		$page = "commande";
		include('includes/header.php');
	?>
	
	<section id="body">
		
		<ul id="card-content">
			<li class="see-more" data-content-id="empanada">FORMULES EMPANADAS</li>
			<p id="empanada" class="content-toggle">
				Chico
				2 empanadas, salade, boisson, dessert
				11,50 €<br />
				Chango
				3 empanadas, salade, boisson, dessert
				13,50 €<br />
				Gaucho
				4 empanadas, salade, boisson, dessert
				15,50 €<br />
				Degustación (2 personnes)
				Nos 8 empanadas différentes, salades, 2 boissons, 2 desserts
				34,00 €
			</p>
			<li class="see-more" data-content-id="salade">FORMULE SALADE</li>
			<p id="salade" class="content-toggle">
				Formule Salade
				Salade composée autour du quinoa, boisson, dessert
				13,50 €
			</p>
			<li class="see-more" data-content-id="empanalade">EMPANADAS & SALADES</li>
			<p id="empanalade" class="content-toggle">
				Nos empanadas sont préparées quotidiennement dans nos cuisines, à base de produits frais. Nos viandes sont d'origine française excepté le chorizo argentin<br /><br />
				Bœuf
				Boeuf haché maison, oignons, épices argentines, oeuf, olives
				3,50 €<br />
				Thon
				Thon, oignons, tomates, mimosa d'œuf dur, olives
				3,50 €<br />
				Veau
				Sauté de veau haché maison, coriandre, tomates, citrons confis, ail
				3,50 €<br />
				Jambon & Fromage
				Jambon blanc, emmental, mozzarella
				3,50 €<br />
				Légumes
				Poivrons, oignons, tomates, confis dans du velouté de balsamique
				3,50 €<br />
				Épinards & Ricotta
				Épinards, ricotta, mozzarella, muscade
				3,50 €<br />
				Choriempa
				Chorizo argentin grillé
				4,50 €<br />
				Empanada Du Moment
				Boeuf haché, bacon, cheddar, oignons rouges, pickles, sauce moutarde, ketchup
				3,50 €<br />
				Salade Quinoa Mozzarella Di Buffala
				9,50 €<br />
				Salade Quinoa Poulet Mariné Au Chimichuri
				9,50 €<br />
				Soupe Du Moment Maison
				4,00 €
			</p>
			<li class="see-more" data-content-id="dessert">DESSERTS</li>
			<p id="dessert" class="content-toggle">
				Cookie
				3,50 €<br />
				Fromage Blanc Au Dulce De Leche
				4,50 €<br />
				Compote De Pommes Au Spéculoos
				4,50 €<br />
				Crème Au Dulce De Leche
				6,00 €<br />
				Pâtisserie
				6,00 €
			</p>
			<li class="see-more" data-content-id="soft">SOFTS</li>
			<p id="soft" class="content-toggle">
				Coca 33cl
				2,50 €<br />
				Coca Zéro 33cl
				2,50 €<br />
				Ice Tea Pêche 33cl
				2,50 €<br />
				Minute Maid Pomme 33cl
				2,50 €<br />
				Seven Up 33cl
				2,50 €<br />
				Orangina 33cl
				2,50 €<br />
				Eau Gazeuse 33cl
				2,50 €<br />
				Eau Minérale 50cl
				2,50 €<br />
				Gota Plate 50cl
				Eau argentine
				4,50 €<br />
				Gota pétillante 50cl
				Eau argentine
				5,00 €
			</p>
			<li class="see-more" data-content-id="beer">BIÈRE</li>
			<p id="beer" class="content-toggle">
				Quilmes 34cl
				Bière argentine
				5,00 €
			</p>
			<li class="see-more" data-content-id="wine">VINS</li>
			<p id="wine" class="content-toggle">
				Trapiche Chardonnay - Vin Blanc
				18,00 €<br />
				Alta Cumbres Torrontes - Vin Blanc
				22,00 €<br />
				Nieto Senetiner Malbec - Vin Rouge
				18,00 €<br />
				Alta Cumbres Cabernet - Vin Blanc
				22,00 €<br />
				Rutini Cabernet & Malbec - Vin Rouge
				26,00 €<br />
				Piedra Negra Rosado Pinot Gris - Vin Rosé
				18,00 €
			</p>
		</ul>	
		
	</section>
	
	<?php include('includes/footer.html'); ?>

<!-- JAVASCRIPTS -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.content-toggle').slideToggle();
	    $('.see-more').click(function(){
	        //var container = $(this);
	        $('#'+$(this)[0].getAttribute('data-content-id')).slideToggle(function() {
	            if($(this).is(":visible")) {
	                //container.css('padding', '40px 3.3% 50px');
	            }else{
	                //container.css('padding', '40px 3.3%');
	            }        
	        });     
	    });
	});
</script>

<!-- Simple Slide Menu -->
<script type="text/javascript" src="js/menu.js"></script>

</body>

</html>