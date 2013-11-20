<?php

/**
* LOT 1
* Dire si l'heure actuelle correspond à une heure pour aller au cinéma
* + phrase "drôles"
* + partages sociaux
*
* LOT 2
* Afficher des horaires de cinémas / Sur paris
*
* LOT 3
* Afficher des horaires de cinémas avec séances correspondantes / sur paris
*
* LOT 4
* Afficher des horaires de cinéma avec geoloc + correspondant à l'horaire / france
*
**/

	$time = date('I') ? date('G') : intval(date('G')) + 1;

	$sequence = array(
						'too_early'	=> 'Hmmm, c\'est un peu tôt là. Y\'a moyen de dormir encore un peu !', // Tu peux aussi choisir ton film
						'soon'		=> 'Carrément ! A toi la première séance de la journée', // Voici les prochaines séances...
						'ok'		=> 'Bien sûr', // Voici les prochaines séances...
						'too_late'	=> 'Là, ça va être tendu quand même...', // par contre demain tu peux aller voir...
	);

    switch( $time )  {

        default :
	        $data = $sequence['ok'];
	        $data = $sequence[ array_rand( $sequence, 1 ) ];
        	break;

        case $time > 22 :
	        $data = $sequence['too_late'];
	        break;

        case $time < 10 :
	        $data = $sequence['soon'];
	        break;

        case $time < 9 :
	        $data = $sequence['too_early'];
	        break;

    }

?>


<!doctype html>
<html>

	<head>
		<meta charset="UTF-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<title>L'instant Cinéma - estcequecestlheuredalleraucinema.fr</title>
		<meta name="description" content="Savoir s'il est encore temps d'aller au cinéma" />
		<meta http-equiv="content-language" content="fr">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="L'instant Cinéma - estcequecestlheuredalleraucinema.fr"/>
		<meta property="og:description" content="Savoir s'il est encore temps d'aller au cinéma"/>
		<meta property="og:url" content="http://estcequecestlheuredalleraucinema.fr/"/>
		<meta property="og:image" content="http://estcequecestlheuredalleraucinema.fr/img/logo_estcequecestlheuredalleraucinema.jpg"/>
		<meta property="og:site_name" content="estcequecestlheuredalleraucinema"/>

		<!--<base href="http://estcequecestlheuredalleraucinema.fr/" />-->
		<link rel="shortcut icon" href="/img/favicon.ico" />

		<link href="./css/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="./css/custom.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<!--[if IE]>
			<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<![endif]-->

		<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	</head>

	<body>


		<header>
			<h1>Est-ce que c'est l'heure d'aller au Cinéma ?</h1>
		</header>

		<section id="data">
			<span class="quote"></span> <?php echo $data; ?>
		</section>

		<section class="social_share">
			<a href="http://twitter.com/?status=Est-ce+que+c%27est+l%27heure+d%27aller+au+Cinéma+%3f%20http://estcequecestlheuredalleraucinema.fr">Partagez sur Twitter</a>
			<a href="http://www.facebook.com/sharer/sharer.php?u=http://estcequecestlheuredalleraucinema.fr">Partagez sur Facebook</a>
			<a href="https://plus.google.com/share?url=http://estcequecestlheuredalleraucinema.fr/">Partagez sur Google+</a>
		</section>

		<footer>
			© estcequecestlheuredalleraucinema.fr 2013
		</footer>

	</body>

</html>