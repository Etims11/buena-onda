<?php
	session_start();
	function redirige($url) {
		die('<meta http-equiv="refresh" content="4; URL='.$url.'">');
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
	
	// Formule Salade
	if(isset($_POST['submitSalade'])) {
		$prixSalade = 12.5;
		$boissonSalade = $_POST['boissonSalade'];
		if($boissonSalade == "Gota Plate 50cl (+2,50 €)" || $boissonSalade == "Quilmes 34cl (+2,50 €)") { $prixSalade+=2.5; }
		if($boissonSalade == "Gota pétillante 50cl (+3,00 €)") { $prixSalade+=3; }
		$dessertSalade = $_POST['dessertSalade'];
		$formuleSalade = '
		<div class="formule formuleSalade">
			<ul>
				<li>Salade composée autour du Quinoa</li>
				<li>Votre boisson : '.$boissonSalade.'</li>
				<li>Votre dessert : '.$dessertSalade.'</li>
			</ul>
		</div>';
		$_SESSION['formuleSalade'][] = $formuleSalade;
        $_SESSION['prixFormulesSalade'] += $prixSalade;
        $_SESSION['prixTotal'] += $prixSalade;
	}
	
?>
	
	<p class="treatment">
		<span class="blue">Formule Salade Quinoa !</span> Régalez-vous !
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