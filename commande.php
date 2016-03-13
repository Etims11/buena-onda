<?php session_start(); ?>

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
			
			<img src="img/commande/background-title-commander.png" alt="Commandez à emporter ou en livraison chez Buena Onda" width="100%" />
			<h1 id="titleCommande">Commander</h1>
			
			<div id="livraison">
				<img src="img/commande/bandeau-livraison.png" alt="Commandez en livraison chez Buena Onda" width="100%" />
				<h2 class="vagRounded blue">En livraison</h2>
				<p>
					<span class="vagRounded"><span class="blue">Et si les empanadas arrivaient directement chez vous !</span><br />
					Et en 30 minutes environ!</span><br /><br />
					Vous souhaitez être livré et pouvoir savourer nos empanadas chez vous ou à votre travail.<br />
					Allez directement sur le site Internet de notre partenaire et choisissez quels seront les délicieux 
					chaussons «faits maison» qui partageront votre repas aujourd’hui.<br /><br />
					<span class="vagRounded"><span class="blue">Pour se faire livrer,</span> c’est par ici ...</span>
				</p>
				<a href="https://deliveroo.fr/menu/paris/courcelles-wagram/buena-onda" target="_blank" id="deliverooLink">
					<img src="img/commande/deliveroo-pointillers.png" alt="Commander Buena Onda via Deliveroo" />
				</a>
			</div>
			
			<div class="clear"></div>
			
			<div id="aEmporter">
				<img src="img/commande/big-bag.png" alt="Commandez à emporter chez Buena Onda" width="33%" id="bigBag" />
				<img src="img/commande/bandeau-emporter.png" alt="Commandez à emporter chez Buena Onda" width="100%" />
				<h2 class="vagRounded blue">À Emporter</h2>
				<ul id="card-content">
					<p id="intro">
						<span class="vagRounded"><span class="blue">Vous êtes dans le coin et vous avez un petit creux...</span><br />
						Commandez ici et venez chercher votre repas dans notre restaurant le plus proche.</span>
					</p>
					<li>FORMULES EMPANADAS</li>
					<div id="empanada">
						<span class="title titleChico">Chico</span>
						<span class="description descriptionChico">2 empanadas, salade, boisson, dessert</span>
						<div class="notifAndLink">
							<img src="img/commande/bag.png" alt="Sélectionner ce menu" width="100%" class="see-more bag" data-content-id="formChico" />
                            <?php if(count($_SESSION['formuleChico']) != 0) { echo '<div class="notif"><span>'.count($_SESSION['formuleChico']).'</span></div>'; } ?>
						</div>
						<span class="prix prixChico">10,50 €</span>
						
							<form action="includes/chico.php" method="post" id="formChico" class="content-toggle">
								<h3>Choisissez vos 2 empanadas</h3>
								<label>Première empanada : </label>
								<select name="firstEmpanadaChico">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Seconde empanada : </label>
								<select name="secondEmpanadaChico">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Choisissez votre boisson : </label>
								<select name="boissonChico">
									<?php include('includes/boissons.html'); ?>
								</select><br />
								<label>Choisissez votre dessert : </label>
								<select name="dessertChico">
									<?php include('includes/desserts.html'); ?>
								</select>
								<input type="submit" name="submitChico" value="Valider ma formule" />
							</form>
							<div class="clear"></div>
				
						<span class="title">Chango</span>
						<span class="description">3 empanadas, salade, boisson, dessert</span>
						<div class="notifAndLink">
							<img src="img/commande/bag.png" alt="Sélectionner ce menu" width="100%" class="see-more bag" data-content-id="formChango" />
                            <?php if(count($_SESSION['formuleChango']) != 0) { echo '<div class="notif"><span>'.count($_SESSION['formuleChango']).'</span></div>'; } ?>
						</div>
						<span class="prix prixChango">12,50 €</span>
						
							<form action="includes/chango.php" method="post" id="formChango" class="content-toggle">
								<h3>Choisissez vos 3 empanadas</h3>
								<label>Première empanada : </label>
								<select name="firstEmpanadaChango">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Deuxième empanada : </label>
								<select name="secondEmpanadaChango">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Troisième empanada : </label>
								<select name="thirdEmpanadaChango">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Choisissez votre boisson : </label>
								<select name="boissonChango">
									<?php include('includes/boissons.html'); ?>
								</select><br />
								<label>Choisissez votre dessert : </label>
								<select name="dessertChango">
									<?php include('includes/desserts.html'); ?>
								</select>
								<input type="submit" name="submitChango" value="Valider ma formule" />
							</form>
							<div class="clear"></div>
							
						<span class="title">Gaucho</span>
						<span class="description">4 empanadas, salade, boisson, dessert</span>
						<div class="notifAndLink">
							<img src="img/commande/bag.png" alt="Sélectionner ce menu" width="100%" class="see-more bag" data-content-id="formGaucho" />
                            <?php if(count($_SESSION['formuleGaucho']) != 0) { echo '<div class="notif"><span>'.count($_SESSION['formuleGaucho']).'</span></div>'; } ?>
						</div>
						<span class="prix prixGaucho">14,50 €</span>
				
							<form action="includes/gaucho.php" method="post" id="formGaucho" class="content-toggle">
								<h3>Choisissez vos 3 empanadas</h3>
								<label>Première empanada : </label>
								<select name="firstEmpanadaGaucho">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Deuxième empanada : </label>
								<select name="secondEmpanadaGaucho">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Troisième empanada : </label>
								<select name="thirdEmpanadaGaucho">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Quatrième empanada : </label>
								<select name="fourthEmpanadaGaucho">
									<?php include('includes/empanadas.html'); ?>
								</select><br />
								<label>Choisissez votre boisson : </label>
								<select name="boissonGaucho">
									<?php include('includes/boissons.html'); ?>
								</select><br />
								<label>Choisissez votre dessert : </label>
								<select name="dessertGaucho">
									<?php include('includes/desserts.html'); ?>
								</select>
								<input type="submit" name="submitGaucho" value="Valider ma formule" />
							</form>
							<div class="clear"></div>
				
						<span class="title">Degustación (2 personnes)</span>
						<span class="description clearLeft">Nos 8 empanadas différentes, salades,<br />2 boissons(Soda ou bière Argentine), 2 desserts</span>
						<div class="notifAndLink">
							<img src="img/commande/bag.png" alt="Sélectionner ce menu" width="100%" class="see-more bag" data-content-id="formDegustacion" />
                            <?php if(count($_SESSION['formuleDegustacion']) != 0) { echo '<div class="notif"><span>'.count($_SESSION['formuleDegustacion']).'</span></div>'; } ?>
						</div>
						<span class="prix prixDegustacion">34,00 €</span>
				
							<form action="includes/degustacion.php" method="post" id="formDegustacion" class="content-toggle">
								<label>Choisissez votre première boisson : </label>
								<select name="boissonDegustacion">
									<?php include('includes/boissons.html'); ?>
								</select><br />
								<label>Choisissez votre seconde boisson : </label>
								<select name="boissonDegustacion2">
									<?php include('includes/boissons.html'); ?>
								</select><br />
								<label>Choisissez votre premier dessert : </label>
								<select name="dessertDegustacion">
									<?php include('includes/desserts.html'); ?>
								</select><br />
								<label>Choisissez votre second dessert : </label>
								<select name="dessertDegustacion2">
									<?php include('includes/desserts.html'); ?>
								</select><br />
								<input type="submit" name="submitDegustacion" value="Valider ma formule" />
							</form>
							<div class="clear"></div>
							
					</div>
					
					<li class="see-more mt30">FORMULE SALADE QUINOA</li>
					<div id="salade">
						<span class="title">Quinoa, Mozzarella, tomates, maïs sauce chimichurri</span>
						<span class="description clearLeft">Quinoa, tomates, maïs, poulet mariné chimichurri</span>
						<div class="notifAndLink">
							<img src="img/commande/bag.png" alt="Sélectionner ce menu" width="100%" class="see-more bag" data-content-id="formSalade" />
                            <?php if(count($_SESSION['formuleSalade']) != 0) { echo '<div class="notif"><span>'.count($_SESSION['formuleSalade']).'</span></div>'; } ?>
						</div>
						<span class="prix prixSalade">12,50 €</span>
							
							<form action="includes/salade.php" method="post" id="formSalade" class="content-toggle">
								<label>Choisissez votre boisson : </label>
								<select name="boissonSalade">
									<?php include('includes/boissons.html'); ?>
								</select><br />
								<label>Choisissez votre dessert : </label>
								<select name="dessertSalade">
									<?php include('includes/desserts.html'); ?>
								</select>
								<input type="submit" name="submitSalade" value="Valider ma formule" />
							</form>
							<div class="clear"></div>
							
					</div>
					
					<form action="includes/form.php" method="post" id="formGeneral">
					
					<li class="see-more mt30" data-content-id="empanalade">EMPANADAS</li>
					<div id="empanalade" class="content-toggle">
						<p >
							Nos empanadas sont préparées quotidiennement dans nos cuisines, à base de produits frais. 
							Nos viandes sont d'origine française excepté le chorizo argentin.
						</p>
						<span class="title">B&oelig;uf</span>
						<span class="description">B&oelig;uf haché maison, oignons, épices argentines, &oelig;uf, olives</span>
						<select class="numberOf" name="empBoeuf"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Burger</span>
						<span class="description">B&oelig;uf haché, cheddar, sauce moutarde, miel, ketchup, pickles, oignons rouges</span>
						<select class="numberOf" name="empBurger"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Thon</span>
						<span class="description">Thon, oignons, tomates, mimosa d'&oelig;uf dur, olives</span>
						<select class="numberOf" name="empThon"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Veau</span>
						<span class="description">Sauté de veau haché maison, coriandre, tomates, citrons confits, ail</span>
						<select class="numberOf" name="empVeau"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Jambon & Fromage</span>
						<span class="description">Jambon blanc, emmental, mozzarella</span>
						<select class="numberOf" name="empJambon"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Légumes</span>
						<span class="description">Poivrons, oignons, tomates, confits dans du velouté de balsamique</span>
						<select class="numberOf" name="empLegume"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Épinards & Ricotta</span>
						<span class="description">Épinards, ricotta, mozzarella, muscade</span>
						<select class="numberOf" name="empSpinash"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="title">Choriempa</span>
						<span class="description">Chorizo argentin grillé</span>
						<select class="numberOf" name="empChoriempa"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">4,50 €</span>
						<span class="title">Empanada Du Moment</span>
						<span class="description">B&oelig;uf haché, bacon, cheddar, oignons rouges, pickles, sauce moutarde, ketchup</span>
						<select class="numberOf" name="empMoment"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<div class="clear"></div>
					</div>
					
					<li class="see-more" data-content-id="dessert">DESSERTS</li>
					<div id="dessert" class="content-toggle">
						<span class="description noTitle">Cookie</span>
						<select class="numberOf" name="dessCookie"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">3,50 €</span>
						<span class="description noTitle">Fromage Blanc Au Dulce De Leche</span>
						<select class="numberOf" name="dessDulce"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">4,50 €</span>
						<span class="description noTitle">Compote De Pommes Au Spéculoos</span>
						<select class="numberOf" name="dessCompote"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">4,50 €</span>
						<span class="description noTitle">Crème Au Dulce De Leche</span>
						<select class="numberOf" name="dessDulcream"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">6,00 €</span>
						<span class="description noTitle">Pâtisserie</span>
						<select class="numberOf" name="dessPatiss"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">6,00 €</span>
						<div class="clear"></div>
					</div>
					
					<li class="see-more" data-content-id="soft">SOFTS</li>
					<div id="soft" class="content-toggle">
						<span class="description noTitle">Coca 33cl</span>
						<select class="numberOf" name="coke"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Coca Zéro 33cl</span>
						<select class="numberOf" name="coke0"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Ice Tea Pêche 33cl</span>
						<select class="numberOf" name="iceT"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Minute Maid Pomme 33cl</span>
						<select class="numberOf" name="maidApple"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Seven Up 33cl</span>
						<select class="numberOf" name="sevenUp"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Orangina 33cl</span>
						<select class="numberOf" name="orangina"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Eau Gazeuse 33cl</span>
						<select class="numberOf" name="gaz"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Eau Minérale 50cl</span>
						<select class="numberOf" name="minetRale"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">2,50 €</span>
						<span class="description noTitle">Gota Plate 50cl, Eau argentine</span>
						<select class="numberOf" name="gotaPlate"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">4,50 €</span>
						<span class="description noTitle">Gota pétillante 50cl, Eau argentine</span>
						<select class="numberOf" name="gotaPetill"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">5,00 €</span>
						<div class="clear"></div>
					</div>
					
					<li class="see-more" data-content-id="beer">BIÈRE</li>
					<div id="beer" class="content-toggle">
						<span class="description noTitle">Quilmes 34cl, Bière argentine</span>
						<select class="numberOf" name="quilmes"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">5,00 €</span>
						<div class="clear"></div>
					</div>
					
					<li class="see-more" data-content-id="wine">VINS</li>
					<div id="wine" class="content-toggle">
						<span class="description noTitle">Trapiche Chardonnay - Vin Blanc</span>
						<select class="numberOf" name="vin1"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">18,00 €</span>
						<span class="description noTitle">Alta Cumbres Torrontes - Vin Blanc</span>
						<select class="numberOf" name="vin2"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">22,00 €</span>
						<span class="description noTitle">Nieto Senetiner Malbec - Vin Rouge</span>
						<select class="numberOf" name="vin3"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">18,00 €</span>
						<span class="description noTitle">Alta Cumbres Cabernet Sauvignon - Vin Rouge</span>
						<select class="numberOf" name="vin4"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">22,00 €</span>
						<span class="description noTitle">Rutini Cabernet & Malbec - Vin Rouge</span>
						<select class="numberOf" name="vin5"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">26,00 €</span>
						<span class="description noTitle">Piedra Negra Rosado Pinot Gris - Vin Rosé</span>
						<select class="numberOf" name="vin6"><?php for($i=0; $i<11; $i++){ echo '<option value="'.$i.'">'.$i.'</option>'; } ?></select>
						<span class="prix">18,00 €</span>
						<div class="clear"></div>
					</div>
					<input type="submit" name="submitGeneral" value="Valider ma commande" class="clearLeft" />
					</form>
				</ul>
								
			</div>
			
			<div id="adressesMaps">
				<div class="adresse">
					<img src="img/commande/cadre.png" alt="cadre" width="100%" />
					<h4 class="blue">Pour le déjeuner</h4>
					<h5>BUENA ONDA PRONY</h5>
					<p>
						<span class="blue">Du lundi au vendredi de 12h à 14h30</span><br />
						55, rue de Prony - 75017 Paris<br />
						<span class="blue">01 77 15 82 25</span>
					</p>
				</div>
				<img src="img/commande/map-prony.png" alt="Retrouvez Buena Onda Prony" width="100%" />
				<div class="adresse">
					<img src="img/commande/cadre.png" alt="cadre" width="100%" />
					<h4 class="blue">Pour le dîner</h4>
					<h5>BUENA ONDA BATIGNOLLES</h5>
					<p>
						<span class="blue">Du lundi au samedi de 18h30 à minuit</span><br />
						75, rue Legendre - 75017 Paris<br />
						<span class="blue">01 45 89 20 90</span>
					</p>
				</div>
				<img src="img/commande/map-batignolles.png" alt="Retrouvez Buena Onda Batignolles" width="100%" />
			</div>
			
			<div class="clear"></div>
			
			<?php //session_destroy(); ?>
				
	</section>
	
	<?php include('includes/footer.html'); ?>

<!-- JAVASCRIPTS -->
<!-- jQuery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
	/* Effet Slide Toggle sur les éléments de la commande */
	$(document).ready(function(){
		$('.content-toggle').css('display', 'none');
	    $('.see-more').click(function(){
	        $('#'+$(this)[0].getAttribute('data-content-id')).slideToggle();     
	    });
	});
</script>

<!-- Simple Slide Menu -->
<script type="text/javascript" src="js/menu.js"></script>

</body>

</html>