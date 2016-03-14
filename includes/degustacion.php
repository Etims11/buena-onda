<?php
	session_start();
	function redirige($url) {
		die('<meta http-equiv="refresh" content="4; URL='.$url.'">');
	}
?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Degustacion Validation</title>
		
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
	
	// Formule Degustacion
	if(isset($_POST['submitDegustacion'])) {
		$prixDegustacion = 34;
		$boissonDegustacion = $_POST['boissonDegustacion'];
		if($boissonDegustacion == "Gota Plate 50cl (+2,50 €)" || $boissonDegustacion == "Quilmes 34cl (+2,50 €)") { $prixDegustacion+=2.5; }
		if($boissonDegustacion == "Gota pétillante 50cl (+3,00 €)") { $prixDegustacion+=3; }
		$boissonDegustacion2 = $_POST['boissonDegustacion2'];
		if($boissonDegustacion2 == "Gota Plate 50cl (+2,50 €)" || $boissonDegustacion2 == "Quilmes 34cl (+2,50 €)") { $prixDegustacion+=2.5; }
		if($boissonDegustacion2 == "Gota pétillante 50cl (+3,00 €)") { $prixDegustacion+=3; }
		$dessertDegustacion = $_POST['dessertDegustacion'];
		$dessertDegustacion2 = $_POST['dessertDegustacion2'];
		$formuleDegustacion = '
		<div class="formule formuleDegustacion">
			<ul>
				<li>Nos 8 empanada à déguster à deux</li>
				<li>Votre première boisson : '.$boissonDegustacion.'</li>
				<li>Votre premier dessert : '.$dessertDegustacion.'</li>
				<li>Votre seconde boisson : '.$boissonDegustacion2.'</li>
				<li>Votre second dessert : '.$dessertDegustacion2.'</li>
			</ul>
		</div>';
		$_SESSION['formuleDegustacion'][] = $formuleDegustacion;
        $_SESSION['prixFormulesDegustacion'] += $prixDegustacion;
        $_SESSION['prixTotal'] += $prixDegustacion;
	}
	
?>
	
	<p class="treatment">
		<span class="blue">Formule Degustación !</span> Vos papilles connaîtrons tout<br />
		sur les empanadas !
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