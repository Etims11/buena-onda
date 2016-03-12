<?php
	
	// Formule Chico
	if(isset($_POST['submitChico'])) {
		$prixChico = 10.50;
		$firstEmpanadaChico = $_POST['firstEmpanadaChico'];
		if($firstEmpanadaChico == "Choriempa (+1,00 €)") { $prixChico++; }
		$secondEmpanadaChico = $_POST['secondEmpanadaChico'];
		if($secondEmpanadaChico == "Choriempa (+1,00 €)") { $prixChico++; }
		$boissonChico = $_POST['boissonChico'];
		if($boissonChico == "Gota Plate 50cl (+2,50 €)" || $boissonChico == "Quilmes 34cl (+2,50 €)") { $prixChico+=2.5; }
		if($boissonChico == "Gota pétillante 50cl (+3,00 €)") { $prixChico+=3; }
		$dessertChico = $_POST['dessertChico'];
		$formuleChico = $firstEmpanadaChico."<br />".$secondEmpanadaChico."<br />".$boissonChico."<br />".$dessertChico."<br />".$prixChico."€";
		$_SESSION['formuleChico'][] = $formuleChico;
	}
	
	// Formule Chango
	if(isset($_POST['submitChango'])) {
		$prixChango = 12.5;
		$firstEmpanadaChango = $_POST['firstEmpanadaChango'];
		if($firstEmpanadaChango == "Choriempa (+1,00 €)") { $prixChango++; }
		$secondEmpanadaChango = $_POST['secondEmpanadaChango'];
		if($secondEmpanadaChango == "Choriempa (+1,00 €)") { $prixChango++; }
		$thirdEmpanadaChango = $_POST['thirdEmpanadaChango'];
		if($thirdEmpanadaChango == "Choriempa (+1,00 €)") { $prixChango++; }
		$boissonChango = $_POST['boissonChango'];
		if($boissonChango == "Gota Plate 50cl (+2,50 €)" || $boissonChango == "Quilmes 34cl (+2,50 €)") { $prixChango+=2.5; }
		if($boissonChango == "Gota pétillante 50cl (+3,00 €)") { $prixChango+=3; }
		$dessertChango = $_POST['dessertChango'];
		$formuleChango = $firstEmpanadaChango."<br />".$secondEmpanadaChango."<br />".$thirdEmpanadaChango."<br />".$boissonChango."<br />".$dessertChango."<br />".$prixChango."€";
		$_SESSION['formuleChango'][] = $formuleChango;
	}
	
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
		$formuleGaucho = $firstEmpanadaGaucho."<br />".$secondEmpanadaGaucho."<br />".$thirdEmpanadaGaucho."<br />".$fourthEmpanadaGaucho."<br />".$boissonGaucho."<br />".$dessertGaucho."<br />".$prixGaucho."€";
		$_SESSION['formuleGaucho'][] = $formuleGaucho;
	}
	
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
		$formuleDegustacion = $boissonDegustacion."<br />".$dessertDegustacion."<br />".$boissonDegustacion2."<br />".$dessertDegustacion2."<br />".$prixDegustacion."€";
		$_SESSION['formuleDegustacion'][] = $formuleDegustacion;
	}
	
	// Formule Salade
	if(isset($_POST['submitSalade'])) {
		$prixSalade = 12.5;
		$boissonSalade = $_POST['boissonSalade'];
		if($boissonSalade == "Gota Plate 50cl (+2,50 €)" || $boissonSalade == "Quilmes 34cl (+2,50 €)") { $prixSalade+=2.5; }
		if($boissonSalade == "Gota pétillante 50cl (+3,00 €)") { $prixSalade+=3; }
		$dessertSalade = $_POST['dessertSalade'];
		$formuleSalade = $boissonSalade."<br />".$dessertSalade."<br />".$prixSalade."€";
		$_SESSION['formuleSalade'][] = $formuleSalade;
	}
	
	// Formulaire Général
	if (isset($_POST['submitGeneral'])) {
		
		
		
		$_SESSION = array();
		
	}
	
	print_r($_SESSION);
					
?>