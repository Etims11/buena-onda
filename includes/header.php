	<header>
		<h1 id="logo">BUENA<span>ONDA</span></h1>
		<h2>L'empanada dans tous ses états!</h2>
		<div id="social">
			<a class="icon facebook" href="https://www.facebook.com/BUENA-ONDA-396951310405054/timeline" target="_blank"></a>
			<a class="icon instagram" href="" target="_blank"></a>
			<a class="icon twitter" href="" target="_blank"></a>
			<a class="icon gplus" href="" target="_blank"></a>
		</div>
	</header>
	
	<nav class="menu menu--adrian">
		<ul class="menu__list">
			<li class="menu__item<?php if($page == "home"){echo " menu__item--current";} ?>"><a href="index.php" class="menu__link"><span class="menu__helper">Accueil</span></a></li>
			<li class="menu__item<?php if($page == "carte"){echo " menu__item--current";} ?>"><a href="carte.php" class="menu__link"><span class="menu__helper">Carte</span></a></li>
			<li class="menu__item<?php if($page == "comserve"){echo " menu__item--current";} ?>"><a href="commande-reserve.php" class="menu__link"><span class="menu__helper">Réserver</span></a></li>
			<li class="menu__item<?php if($page == "comserve"){echo " menu__item--current";} ?>"><a href="commande-reserve.php" class="menu__link"><span class="menu__helper">Commander</span></a></li>
			<li class="menu__item<?php if($page == "more"){echo " menu__item--current";} ?>"><a href="more-of-buenaonda.php" class="menu__link"><span class="menu__helper">BO c'est aussi</span></a></li>
			<li class="menu__item<?php if($page == "contact"){echo " menu__item--current";} ?>"><a href="contact.php" class="menu__link"><span class="menu__helper">Contact</span></a></li>
		</ul>
	</nav>