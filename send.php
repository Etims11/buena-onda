<?php
session_start();
function redirige($url)
	{
	die('<meta http-equiv="refresh" content="5; URL='.$url.'">');
	}
?>
<!DOCTYPE html>
<html>
	
	<head>
		<title>Buena Onda - Contact</title>
		
		<!-- METAS -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-title" content="Studio Pilates 16" />
		<meta charset="utf-8" />
		<meta name="description" content="Situé en plein coeur du 16ème arrondissement de Paris le Studio Pilates 16 est une salle entièrement équipée de machines Pilates." />
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
		<link rel="stylesheet" media="screen" type="text/css" href="css/loading.css" />
	</head>

<body>

<?php
	/*
		********************************************************************************************
		CONFIGURATION
		********************************************************************************************
	*/

	// Messages de confirmation du mail
	$message_envoye = "Votre message nous est bien parvenu, vous allez être redirigé vers la page d'accueil.";
	$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer s'il vous plait.";

	// Messages d'erreur du formulaire
	$message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.php\">envoyer le formulaire</a>.";
	$message_formulaire_invalide = "Vérifiez que le formulaire soit bien rempli et que l'email soit sans erreur.";

	/*
		********************************************************************************************
		FIN DE LA CONFIGURATION
		********************************************************************************************
	*/

	// on teste si le formulaire a été soumis
	if (!isset($_POST['submit']))
	{
		// formulaire non envoyé
		echo "<p class='traitements'>
				".$message_erreur_formulaire."<br /><br /><br />
				<ul class='bokeh'>
		    		<li></li>
		    		<li></li>
		    		<li></li>
		    		<li></li>
				</ul>
			</p>"."\n";
		redirige("contact.php");
	}
	else
	{
		/*
		 * cette fonction sert à nettoyer et enregistrer un texte
		 */
		function Rec($text)
		{
			$text = trim($text); // delete white spaces after & before text
			if (1 === get_magic_quotes_gpc())
			{
				$stripslashes = create_function('$txt', 'return stripslashes($txt);');
			}
			else
			{
				$stripslashes = create_function('$txt', 'return $txt;');
			}

			// magic quotes ?
			$text = $stripslashes($text);
			$text = htmlspecialchars($text, ENT_QUOTES); // converts to string with " and ' as well
			$text = nl2br($text);
			return $text;
		};

		/*
		 * Cette fonction sert à vérifier la syntaxe d'un email
		 */
		function IsEmail($email)
		{
			$pattern = "^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,7}$";
			return (mb_eregi($pattern,$email)) ? true : false;
		};

		// formulaire envoyé, on récupère tous les champs.
		$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
		$email   = (isset($_POST['mail']))   ? Rec($_POST['mail'])   : '';
		$comment = (isset($_POST['comment'])) ? Rec($_POST['comment']) : '';
		
		// On va vérifier les variables et l'email ...
		$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré

		if (($nom != '') && ($email != '') && ($comment != ''))
			{
			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email))
				{
				$passage_ligne = "\r\n";
				}else
					{
					$passage_ligne = "\n";
					}

			//=====Déclaration des messages au format texte et au format HTML.
			$sMailContent = file_get_contents('mails/mail-contact.html');
			
			$sMailContent = str_replace('##nom##', $nom, $sMailContent);
			$sMailContent = str_replace('##mail##', $email, $sMailContent);
			$sMailContent = str_replace('##comment##', $comment, $sMailContent);
			
			$message_html = $sMailContent;
				
			// les 5 variables des 5 champs obligatoires sont remplies, on génère puis envoie le mail
			$boundary = "-----=".md5(rand());
			
			$header = "From: Studio Pilates 16 <contact@studiopilates16.com>".$passage_ligne;
			$header.= "Bcc: Studio Pilates 16 <contact@studiopilates16.com>".$passage_ligne;
			$header.= "Reply-to: <$email>".$passage_ligne;
			$header.= "MIME-Version: 1.0".$passage_ligne;
			$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
			
			//=====Définition du sujet.
			$sujet = 'Contact Studio Pilates 16';
			
			// Remplacement de certains caractères spéciaux
			$comment = str_replace("&#039;","'",$comment);
			$comment = str_replace("&#8217;","'",$comment);
			$comment = str_replace("&quot;",'"',$comment);
			$comment = str_replace('<br>','',$comment);
			$comment = str_replace('<br />','',$comment);
			$comment = str_replace("&lt;","<",$comment);
			$comment = str_replace("&gt;",">",$comment);
			$comment = str_replace("&amp;","&",$comment);
			$comment = $passage_ligne."--".$boundary.$passage_ligne;
			$comment .= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
			$comment .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$comment .= "...";

			//=====Création du message.
			$comment.= $passage_ligne."--".$boundary.$passage_ligne;
			//=====Ajout du message au format HTML
			$comment.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
			$comment.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
			$comment.= $passage_ligne.$message_html.$passage_ligne;
			//==========
			$comment.= $passage_ligne."--".$boundary."--".$passage_ligne;
			$comment.= $passage_ligne."--".$boundary."--".$passage_ligne;
			
			// Envoi du mail
			if (mail($email,$sujet,$comment,$header))
			{
				echo "<p class='traitements'>".$message_envoye."<br /><br /><br />
						<ul class='bokeh'>
							<li></li>
		    				<li></li>
		    				<li></li>
		    				<li></li>
						</ul>
					</p>"."\n";
				redirige("index.php");
			}
			else
			{
				echo "<p class='traitements'>
						".$message_non_envoye."<br /><br /><br />
						<ul class='bokeh'>
							<li></li>
		    				<li></li>
		    				<li></li>
		    				<li></li>
						</ul>
					</p>"."\n";
				redirige("contact.php");
			};
		}
		else
		{
			// une des 4 variables (ou plus) est vide ...
			echo "<p class='traitements'>
					".$message_formulaire_invalide."<br /><br /><br />
						<ul class='bokeh'>
							<li></li>
		    				<li></li>
		    				<li></li>
		    				<li></li>
						</ul>
				</p>"."\n";
			redirige("contact.php");
		};
	}; // fin du if (!isset($_POST['envoi']))
?>

</body>

</html>