<?php
	session_start();
	function redirige($url) {
		die('<meta http-equiv="refresh" content="5; URL='.$url.'">');
	}
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Salade Validation</title>
		
		<!-- METAS -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-title" content="Buena Onda" />
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="msapplication-TileImage" content="../img/favicon/mstile-144x144.png" />
		<meta name="theme-color" content="#ffffff " />	
		
		<!-- FAVICON -->
		<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon-180x180.png" />
		<link rel="icon" type="image/png" href="../img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="../img/favicon/android-chrome-192x192.png" sizes="192x192" />
		<link rel="icon" type="image/png" href="../img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="../img/favicon/favicon-16x16.png" sizes="16x16" />
		<link rel="manifest" href="../img/favicon/manifest.json" />
		<link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#00aeef" />
		
		<!-- STYLES -->
		<link rel="stylesheet" media="screen" type="text/css" href="../css/resetCSS.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="../css/commande.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="../css/loading.css" />
	</head>

<body>
	
<?php
	
	// Formulaire Général
	if (isset($_POST['submitGeneral'])) {        
		// Empanadas
		$empBoeuf = $_POST['empBoeuf'];
		$empBurger = $_POST['empBurger'];
		$empThon = $_POST['empThon'];
		$empVeau = $_POST['empVeau'];
		$empJambon = $_POST['empJambon'];
		$empLegume = $_POST['empLegume'];
		$empSpinash = $_POST['empSpinash'];
		$empChoriempa = $_POST['empChoriempa'];
		$empMoment = $_POST['empMoment'];
		$_SESSION['empanadas'] = '<ul class="empanadas">';
		if($empBoeuf != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empBoeuf.'x Empanada Boeuf</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empBoeuf);
        }
		if($empBurger != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empBurger.'x Empanada Burger</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empBurger);
        }
		if($empThon != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empThon.'x Empanada Thon</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empThon);
        }
		if($empVeau != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empVeau.'x Empanada Veau</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empVeau);
        }
		if($empJambon != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empJambon.'x Empanada Jambon & Fromage</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empJambon);
        }
		if($empLegume != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empLegume.'x Empanada Légumes</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empLegume);
        }
		if($empSpinash != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empSpinash.'x Empanada Épinards & Riccota</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empSpinash);
        }
		if($empChoriempa != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empChoriempa.'x Empanada Choriempa (+1€)</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (4.5 * $empChoriempa);
        }
		if($empMoment != '0') {
            $_SESSION['empanadas'] .= '<li>'.$empMoment.'x Empanada Du Moment</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $empMoment);
        }
		
		// Desserts
		$dessCookie = $_POST['dessCookie'];
		$dessDulce = $_POST['dessDulce'];
		$dessCompote = $_POST['dessCompote'];
		$dessDulcream = $_POST['dessDulcream'];
		$dessPatiss = $_POST['dessPatiss'];
        $_SESSION['desserts'] = '<ul class="desserts">';
		$atLeastOneDessert = false;
        if($dessCookie != '0') {
            $_SESSION['desserts'] .= '<li>'.$dessCookie.'x Cookie</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (3.5 * $dessCookie);
        }
        if($dessDulce != '0') {
            $_SESSION['desserts'] .= '<li>'.$dessDulce.'x Fromage Blanc Au Dulce De Leche</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (4.5 * $dessDulce);
        }
        if($dessCompote != '0') {
            $_SESSION['desserts'] .= '<li>'.$dessCompote.'x Compote De Pommes Au Spéculoos</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (4.5 * $dessCompote);
        }
        if($dessDulcream != '0') {
            $_SESSION['desserts'] .= '<li>'.$dessDulcream.'x Crème Au Dulce De Leche</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (6 * $dessDulcream);
        }
        if($dessPatiss != '0') {
            $_SESSION['desserts'] .= '<li>'.$dessPatiss.'x Pâtisserie</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (6 * $dessPatiss);
        }
        $_SESSION['desserts'] .= '</ul>';

		// Softs
		$coke = $_POST['coke'];
		$coke0 = $_POST['coke0'];
		$iceT = $_POST['iceT'];
		$maidApple = $_POST['maidApple'];
		$sevenUp = $_POST['sevenUp'];
		$orangina = $_POST['orangina'];
		$gaz = $_POST['gaz'];
		$minetRale = $_POST['minetRale'];
		$gotaPlate = $_POST['gotaPlate'];
		$gotaPetill = $_POST['gotaPetill'];
        $_SESSION['softs'] = '<ul class="softs">';
        if($coke != '0') {
            $_SESSION['softs'] .= '<li>'.$coke.'x Coca 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $coke);
        }
        if($coke0 != '0') {
            $_SESSION['softs'] .= '<li>'.$coke0.'x Coca Zéro 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $coke0);
        }
        if($iceT != '0') {
            $_SESSION['softs'] .= '<li>'.$iceT.'x Ice Tea Pêche 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $iceT);
        }
        if($maidApple != '0') {
            $_SESSION['softs'] .= '<li>'.$maidApple.'x Minute Maid Pomme 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $maidApple);
        }
        if($sevenUp != '0') {
            $_SESSION['softs'] .= '<li>'.$sevenUp.'x Seven Up 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $sevenUp);
        }
        if($orangina != '0') {
            $_SESSION['softs'] .= '<li>'.$orangina.'x Orangina 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $orangina);
        }
        if($gaz != '0') {
            $_SESSION['softs'] .= '<li>'.$gaz.'x Eau Gazeuse 33cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $gaz);
        }
        if($minetRale != '0') {
            $_SESSION['softs'] .= '<li>'.$minetRale.'x Eau Minérale 50cl</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (2.5 * $minetRale);
        }
        if($gotaPlate != '0') {
            $_SESSION['softs'] .= '<li>'.$gotaPlate.'x Gota Plate 50cl, Eau argentine</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (4.5 * $gotaPlate);
        }
        if($gotaPetill != '0') {
            $_SESSION['softs'] .= '<li>'.$gotaPetill.'x Gota pétillante 50cl, Eau argentine</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (5 * $gotaPetill);
        }
        $_SESSION['softs'] .= '</ul>';
        
		// Bière
		$quilmes = $_POST['quilmes'];
        $_SESSION['beer'] = '<ul class="beer">';
        if($quilmes != '0') {
            $_SESSION['beer'] .= '<li>'.$quilmes.'x Quilmes 34cl, Bière argentine</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (5 * $quilmes);
        }
        $_SESSION['beer'] .= '</ul>';
		
		// Vins
		$vin1 = $_POST['vin1'];
		$vin2 = $_POST['vin2'];
		$vin3 = $_POST['vin3'];
		$vin4 = $_POST['vin4'];
		$vin5 = $_POST['vin5'];
		$vin6 = $_POST['vin6'];
        $_SESSION['wine'] = '<ul class="vins">';
        if($vin1 != '0') {
            $_SESSION['wine'] .= '<li>'.$vin1.'x Trapiche Chardonnay - Vin Blanc</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (18 * $vin1);
            $atLeastOneWine = true;
        }
        if($vin2 != '0') {
			$_SESSION['wine'] .= '<li>'.$vin2.'x Alta Cumbres Torrontes - Vin Blanc</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (22 * $vin2);
            $atLeastOneWine = true;
        }
        if($vin3 != '0') {
            $_SESSION['wine'] .= '<li>'.$vin3.'x Nieto Senetiner Malbec - Vin Rouge</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (18 * $vin3);
            $atLeastOneWine = true;
        }
        if($vin4 != '0') {
            $_SESSION['wine'] .= '<li>'.$vin4.'x Alta Cumbres Cabernet Sauvignon - Vin Rouge</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (22 * $vin4);
            $atLeastOneWine = true;
        }
        if($vin5 != '0') {
            $_SESSION['wine'] .= '<li>'.$vin5.'x Rutini Cabernet & Malbec - Vin Rouge</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (26 * $vin5);
            $atLeastOneWine = true;
        }
        if($vin6 != '0') {
            $_SESSION['wine'] .= '<li>'.$vin6.'x Piedra Negra Rosado Pinot Gris - Vin Rosé</li>';
            $_SESSION['prixTotal'] = $_SESSION['prixTotal'] + (18 * $vin6);
            $atLeastOneWine = true;
        }
        $_SESSION['wine'] .= '</ul>';
	}
						
?>
	
	<p class="recap">
		Voici le <span class="blue">récapitulatif</span> de votre commande
	</p>
	
	<?php
        
        $_SESSION['presentation'] = '<div id="presentation">';
        
        // Présentation des formules
		if(count($_SESSION['formuleChico']) != 0 || count($_SESSION['formuleChango']) != 0 || count($_SESSION['formuleGaucho']) != 0 || 
		count($_SESSION['formuleDegustacion']) != 0 || count($_SESSION['formuleSalade']) != 0) {
			$_SESSION['presentation'] .= '<h1>Les <span class="blue">Formules</span></h1>';
			// Chico
			if(count($_SESSION['formuleChico']) != 0) {
				$_SESSION['presentation'] .= '<div id="formulesChico"><h2>Formules <span class="blue">Chico</span></h2>';
				for($iChico = 0; $iChico < count($_SESSION['formuleChico']); $iChico++) {
					$_SESSION['presentation'] .= '<h3>Formule Chico N°'.($iChico+1).'<h3>';
					$_SESSION['presentation'] .= $_SESSION['formuleChico'][$iChico];
				}
				$_SESSION['presentation'] .= '<p class="prix">Prix total des formules Chico : '.$_SESSION['prixFormulesChico'].'€</p></div>';
			}
			// Chango
			if(count($_SESSION['formuleChango']) != 0) {
				$_SESSION['presentation'] .= '<div id="formulesChango"><h2>Formules <span class="blue">Chango</span></h2>';
				for($iChango = 0; $iChango < count($_SESSION['formuleChango']); $iChango++) {
					$_SESSION['presentation'] .= '<h3>Formule Chango N°'.($iChango+1).'<h3>';
					$_SESSION['presentation'] .= $_SESSION['formuleChango'][$iChango];
				}
				$_SESSION['presentation'] .= '<p class="prix">Prix total des formules Chango : '.$_SESSION['prixFormulesChango'].'€</p></div>';
			}
			// Gaucho
			if(count($_SESSION['formuleGaucho']) != 0) {
				$_SESSION['presentation'] .= '<div id="formulesGaucho"><h2>Formules <span class="blue">Gaucho</span></h2>';
				for($iGaucho = 0; $iGaucho < count($_SESSION['formuleGaucho']); $iGaucho++) {
					$_SESSION['presentation'] .= '<h3>Formule Gaucho N°'.($iGaucho+1).'<h3>';
					$_SESSION['presentation'] .= $_SESSION['formuleGaucho'][$iGaucho];
				}
				$_SESSION['presentation'] .= '<p class="prix">Prix total des formules Gaucho : '.$_SESSION['prixFormulesGaucho'].'€</p></div>';
			}
			// Degustación
			if(count($_SESSION['formuleDegustacion']) != 0) {
				$_SESSION['presentation'] .= '<div id="formulesDegustacion"><h2>Formules <span class="blue">Degustación</span></h2>';
				for($iDegustacion = 0; $iDegustacion < count($_SESSION['formuleDegustacion']); $iDegustacion++) {
					$_SESSION['presentation'] .= '<h3>Formule Degustacion N°'.($iDegustacion+1).'<h3>';
					$_SESSION['presentation'] .= $_SESSION['formuleDegustacion'][$iDegustacion];
				}
				$_SESSION['presentation'] .= '<p class="prix">Prix total des formules Degustación : '.$_SESSION['prixFormulesDegustacion'].'€</p></div>';
			}
			// Salade & Quinoa
			if(count($_SESSION['formuleSalade']) != 0) {
				$_SESSION['presentation'] .= '<div id="formulesSalade"><h2>Formules <span class="blue">Salade et Quinoa</span></h2>';
				for($iSalade = 0; $iSalade < count($_SESSION['formuleSalade']); $iSalade++) {
					$_SESSION['presentation'] .= '<h3>Formule Salade N°'.($iSalade+1).'<h3>';
					$_SESSION['presentation'] .= $_SESSION['formuleSalade'][$iSalade];
				}
				$_SESSION['presentation'] .= '<p class="prix">Prix total des formules Salade et Quinoa : '.$_SESSION['prixFormulesSalade'].'€</p></div>';
			}
		}
		
		// Présentation des "À la carte"
		if($_SESSION['empanadas'] != "" || $_SESSION['desserts'] || $_SESSION['softs'] || $_SESSION['beer'] || $_SESSION['wine']) {
			$_SESSION['presentation'] .= '<h1 class="blue">À la carte</h1>';
			// Empanadas
			if($_SESSION['empanadas'] != "") {
				$_SESSION['presentation'] .= '<div id="empanadas"><h2 class="blue">Empanadas</h2>'.$_SESSION['empanadas'].'</div>';
			}
			// Desserts
			if($_SESSION['desserts'] != "") {
				$_SESSION['presentation'] .= '<div id="desserts"><h2 class="blue">Desserts</h2>'.$_SESSION['desserts'].'</div>';
			}
			// Softs
			if($_SESSION['softs'] != "") {
				$_SESSION['presentation'] .= '<div id="softs"><h2 class="blue">Softs</h2>'.$_SESSION['softs'].'</div>';
			}
			// Bière
			if($_SESSION['beer'] != "") {
				$_SESSION['presentation'] .= '<div id="beer"><h2 class="blue">Bière</h2>'.$_SESSION['beer'].'</div>';
			}
			// Vins
			if($_SESSION['wine'] != "") {
				$_SESSION['presentation'] .= '<div id="wine"><h2 class="blue">Vins</h2>'.$_SESSION['wine'].'</div>';
			}
		}
		
		$_SESSION['presentation'] .= '<p class="prix PrixTotal">Total de la commande : '.$_SESSION['prixTotal'].'€</p>';
		$_SESSION['presentation'] .= '</div>';
		
		echo $_SESSION['presentation'];
		//redirige("../commande.php");
	?>

</body>

</html>