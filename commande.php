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
		<link rel="stylesheet" media="screen" type="text/css" href="css/magnific-popup.css" />
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
		
		<form action="" method="post">
			
			<ul id="card-content">
				<li class="see-more" data-content-id="empanada">FORMULES EMPANADAS</li>
				<div id="empanada" class="content-toggle">
					<span class="title">Chico</span>
					<span class="description">2 empanadas, salade, boisson, dessert</span>
					<a href="#popupChico" id="openPopupChico">
						<img class="bag" src="img/commande/bag.png" alt="Sélectionner ce menu" width="22" height="22" />
					</a>
					<span class="prix">11,50 €</span>
					<div id="popupChico" class="white-popup mfp-hide">
						<h1>Formule Chico</h1>
						
					</div>
					<span class="title">Chango</span>
					<span class="description">3 empanadas, salade, boisson, dessert</span>
					<a href="#popupChango" id="openPopupChango">
						<img class="bag" src="img/commande/bag.png" alt="Sélectionner ce menu" width="22" height="22" />
					</a>
					<span class="prix">13,50 €</span>
					<div id="popupChango" class="white-popup mfp-hide">
						<h1>Formule Chango</h1>
						
					</div>
					<span class="title">Gaucho</span>
					<span class="description">4 empanadas, salade, boisson, dessert</span>
					<a href="#popupGaucho" id="openPopupGaucho">
						<img class="bag" src="img/commande/bag.png" alt="Sélectionner ce menu" width="22" height="22" />
					</a>
					<span class="prix">15,50 €</span>
					<div id="popupGaucho" class="white-popup mfp-hide">
						<h1>Formule Gaucho</h1>
						
					</div>
					<span class="title">Degustación (2 personnes)</span>
					<span class="description clearLeft">Nos 8 empanadas différentes, salades, 2 boissons, 2 desserts</span>
					<a href="#popupDegustacion" id="openPopupDegustacion">
						<img class="bag" src="img/commande/bag.png" alt="Sélectionner ce menu" width="22" height="22" />
					</a>
					<span class="prix">34,00 €</span>
					<div id="popupDegustacion" class="white-popup mfp-hide">
						<h1>Formule Degustación</h1>
						
					</div>
					<div class="clear"></div>
				</div>
				
				<li class="see-more" data-content-id="salade">FORMULE SALADE</li>
				<div id="salade" class="content-toggle">
					<span class="title">Formule Salade</span>
					<span class="description">Salade composée autour du quinoa, boisson, dessert</span>
					<a href="#popupSalade" id="openPopupSalade">
						<img class="bag" src="img/commande/bag.png" alt="Sélectionner ce menu" width="22" height="22" />
					</a>
					<span class="prix">13,50 €</span>
					<div id="popupSalade" class="white-popup mfp-hide">
						<h1>Formule Salade</h1>
						
					</div>
					<div class="clear"></div>
				</div>
				
				<li class="see-more" data-content-id="empanalade">EMPANADAS & SALADES</li>
				<div id="empanalade" class="content-toggle">
					<p >
						Nos empanadas sont préparées quotidiennement dans nos cuisines, à base de produits frais. 
						Nos viandes sont d'origine française excepté le chorizo argentin.
					</p>
					<span class="title">B&oelig;uf</span>
					<span class="description">B&oelig;uf haché maison, oignons, épices argentines, &oelig;uf, olives</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="title">Thon</span>
					<span class="description">Thon, oignons, tomates, mimosa d'œuf dur, olives</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="title">Veau</span>
					<span class="description">Sauté de veau haché maison, coriandre, tomates, citrons confis, ail</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="title">Jambon & Fromage</span>
					<span class="description">Jambon blanc, emmental, mozzarella</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="title">Légumes</span>
					<span class="description">Poivrons, oignons, tomates, confis dans du velouté de balsamique</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="title">Épinards & Ricotta</span>
					<span class="description">Épinards, ricotta, mozzarella, muscade</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="title">Choriempa</span>
					<span class="description">Chorizo argentin grillé</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">4,50 €</span>
					<span class="title">Empanada Du Moment</span>
					<span class="description">B&oelig;uf haché, bacon, cheddar, oignons rouges, pickles, sauce moutarde, ketchup</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="description noTitle">Salade Quinoa Mozzarella Di Buffala</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">9,50 €</span>
					<span class="description noTitle">Salade Quinoa Poulet Mariné Au Chimichuri</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">9,50 €</span>
					<span class="description noTitle">Soupe Du Moment Maison</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">4,00 €</span>
					<div class="clear"></div>
				</div>
				
				<li class="see-more" data-content-id="dessert">DESSERTS</li>
				<div id="dessert" class="content-toggle">
					<span class="description noTitle">Cookie</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">3,50 €</span>
					<span class="description noTitle">Fromage Blanc Au Dulce De Leche</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">4,50 €</span>
					<span class="description noTitle">Compote De Pommes Au Spéculoos</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">4,50 €</span>
					<span class="description noTitle">Crème Au Dulce De Leche</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">6,00 €</span>
					<span class="description noTitle">Pâtisserie</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">6,00 €</span>
					<div class="clear"></div>
				</div>
				
				<li class="see-more" data-content-id="soft">SOFTS</li>
				<div id="soft" class="content-toggle">
					<span class="description noTitle">Coca 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Coca Zéro 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Ice Tea Pêche 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Minute Maid Pomme 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Seven Up 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Orangina 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Eau Gazeuse 33cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Eau Minérale 50cl</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">2,50 €</span>
					<span class="description noTitle">Gota Plate 50cl, Eau argentine</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">4,50 €</span>
					<span class="description noTitle">Gota pétillante 50cl, Eau argentine</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">5,00 €</span>
					<div class="clear"></div>
				</div>
				
				<li class="see-more" data-content-id="beer">BIÈRE</li>
				<div id="beer" class="content-toggle">
					<span class="description noTitle">Quilmes 34cl, Bière argentine</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">5,00 €</span>
					<div class="clear"></div>
				</div>
				
				<li class="see-more" data-content-id="wine">VINS</li>
				<div id="wine" class="content-toggle">
					<span class="description noTitle">Trapiche Chardonnay - Vin Blanc</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">18,00 €</span>
					<span class="description noTitle">Alta Cumbres Torrontes - Vin Blanc</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">22,00 €</span>
					<span class="description noTitle">Nieto Senetiner Malbec - Vin Rouge</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">18,00 €</span>
					<span class="description noTitle">Alta Cumbres Cabernet - Vin Blanc</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">22,00 €</span>
					<span class="description noTitle">Rutini Cabernet & Malbec - Vin Rouge</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">26,00 €</span>
					<span class="description noTitle">Piedra Negra Rosado Pinot Gris - Vin Rosé</span>
					<select class="numberOf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
					<span class="prix">18,00 €</span>
					<div class="clear"></div>
				</div>
			</ul>
			
			<div class="clear"></div>
			<input type="submit" name="submit" value="Valider ma commande" class="clearLeft" />
			
		</form>
		
		<div class="clear"></div>	
		
	</section>
	
	<?php include('includes/footer.html'); ?>

<!-- JAVASCRIPTS -->
<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.content-toggle').slideToggle();
	    $('.see-more').click(function(){
	        $('#'+$(this)[0].getAttribute('data-content-id')).slideToggle();     
	    });
	});
</script>

<!-- Magnific Popup -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
	$('#openPopupChico, #openPopupChango, #openPopupGaucho, #openPopupDegustacion, #openPopupSalade').magnificPopup({ type: 'inline' });
</script>

<!-- Simple Slide Menu -->
<script type="text/javascript" src="js/menu.js"></script>

</body>

</html>