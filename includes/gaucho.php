<?php
	session_start();
	function redirige($url) {
		die('<meta http-equiv="refresh" content="4; URL='.$url.'">');
	}
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Gaucho Validation</title>
		
		<!-- METAS -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-title" content="Buena Onda" />
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="msapplication-TileImage" content="../img/favicon/mstile-144x144.png" />
		<meta name="theme-color" content="#ffffff ">	
		
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
	
	// Formule Gaucho
	if(isset($_POST['submitGaucho'])) {
	   $prixGaucho = 14.5;
		$firstEmpanadaGaucho = $_POST['firstEmpanadaGaucho'];
		if($firstEmpanadaGaucho == "Choriempa (+1,00 €)") { $prixGaucho++; }
		$secondEmpanadaGaucho = $_POST['secondEmpanadaGaucho'];
		if($secondEmpanadaGaucho == "Choriempa (+1,00 €)") { $prixGaucho++; }
		$thirdEmpanadaGaucho = $_POST['thirdEmpanadaGaucho'];
		if($thirdEmpanadaGaucho == "Choriempa (+1,00 €)") { $prixGaucho++; }
		$fourthEmpanadaGaucho = $_POST['fourthEmpanadaGaucho'];
		if($fourthEmpanadaGaucho == "Choriempa (+1,00 €)") { $prixGaucho++; }
		$boissonGaucho = $_POST['boissonGaucho'];
		if($boissonGaucho == "Gota Plate 50cl (+2,50 €)" || $boissonGaucho == "Quilmes 34cl (+2,50 €)") { $prixGaucho+=2.5; }
		if($boissonGaucho == "Gota pétillante 50cl (+3,00 €)") { $prixGaucho+=3; }
		$dessertGaucho = $_POST['dessertGaucho'];
		$formuleGaucho = '
		<div class="formule formuleGaucho">
			<ul>
				<li>Première empanada : '.$firstEmpanadaGaucho.'</li>
				<li>Deuxième empanada : '.$secondEmpanadaGaucho.'</li>
				<li>Troisième empanada : '.$thirdEmpanadaGaucho.'</li>
				<li>Quatrième empanada : '.$fourthEmpanadaGaucho.'</li>
				<li>La boisson : '.$boissonGaucho.'</li>
				<li>Le dessert : '.$dessertGaucho.'</li>
			</ul>
		</div>';
		$_SESSION['formuleGaucho'][] = $formuleGaucho;
        $_SESSION['prixFormulesGaucho'] += $prixGaucho;
        $_SESSION['prixTotal'] += $prixGaucho;
	}
	
?>
	
	<p class="treatment">
		<span class="blue">Formule Gaucho !</span> Je vois qu'on a très faim !
	</p>
	
	<ul class='bokeh'>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
	<?php redirige("../commande.php#aEmporter"); ?>

</body>

</html>