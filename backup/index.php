<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="sr"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="sr"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="sr"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="sr"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="sr"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset">

	<meta charset="utf-8"/>
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title></title>
	
	<meta name="title" content="">
	<meta name="description" content="">
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport Fix
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
	-->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->

	<link rel="shortcut icon" href="_/img/favicon.ico">
		 
	<link rel="stylesheet" href="css/style.css">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="js/modernizr-1.7.min.js"></script>

</head>

<body>

<div class="wrapper">
	<div class="stranica">
	<header>
		
		<ul id="precice">
			<li><a href="#">Web kamera</a></li>
			<li><a href="#">Vremenska prognoza</a></li>
			<li><a href="#">Kontaktirajte nas</a></li>
			<li><a href="#">Galerija slika</a></li>
		</ul> <!-- kraj precice -->
		
		<h1 id="logo" ><a href="/Termag/">Hotel Termag Jahorina</a></h1>
		
		<ul id="social">
			<li><a href="#">Knjiga utisaka: Recenzije gostiju</a></li>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
		</ul> <!-- kraj social -->
		
		<div class="clear"></div> <!-- clear float -->
		
		<nav class="clearfix">
			<ul class="navigacija navigacija-lijevo clearfix">
				<li><a href="">Termag</a>
					<ul>
						<li><a href="#">O Hotelu</a></li>
						<li><a href="#">Jahorina zimi</a></li>
						<li><a href="#">Jahorina ljeti</a></li>
						<li><a href="#">Lokacija</a></li>
						<li><a href="#">Galerija slika</a></li>
					</ul> <!-- kraj drugi nivo -->
				</li>
				
				<li><a href="">Smještaj</a>
					<ul>
						<li><a href="#">Sobe</a></li>
						<li><a href="#">Apartmani</a></li>
						<li><a href="#">Villa Termag</a></li>
						<li><a href="#">Virtuelna šetnja</a></li>
						<li><a href="#">Rezervacija online</a></li>
						<li><a href="#">Cjenovnik</a></li>
					</ul> <!-- kraj drugi nivo -->
				</li>	
				
				<li><a href="">Spa&amp;Welness</a>
					<ul>
						<li><a href="#">SPA Centar</a></li>
						<li><a href="#">Masaže i tretmani</a></li>
						<li><a href="#">Vanpansionska ponuda</a></li>
					</ul> <!-- kraj drugi nivo -->
				</li>
			</ul>
			
			<ul class="navigacija navigacija-desno clearfix">
				<li><a href="">Restorani</a>
					<ul>
						<li><a href="#">Hotelski restoran</a></li>
						<li><a href="#">Kamin sala</a></li>
						<li><a href="#">Koliba</a></li>
					</ul> <!-- kraj drugi nivo -->
				</li>	
				
				<li><a href="">Specijalne ponude</a>
					<ul>
						<li><a href="#">Porodični vikend</a></li>
						<li><a href="#">Relax vikend</a></li>
						<li><a href="#">Romantični vikend</a></li>
						<li><a href="#">Antistress vikend</a></li>
						<li><a href="#">Extreme vikend</a></li>
						<li><a href="#">Život je igra</a></li>
						<li><a href="#">Poklon vaučer</a></li>
					</ul> <!-- kraj drugi nivo -->
				</li>	
				
				<li><a href="">Business</a>
					<ul>
						<li><a href="#">Seminari</a></li>
						<li><a href="#">Ponuda</a></li>
						<li><a href="#">Team building</a></li>
						<li><a href="#">Rezervacije</a></li>
					</ul> <!-- kraj drugi nivo -->
				</li>
				
			</ul>  <!-- kraj prvi nivo navigacije -->
		</nav>
	
	</header> <!-- kraj header -->
	
	
	<div class="sadrzaj clearfix">
	
	<?php
$xml = simplexml_load_file('http://www.google.com/ig/api?weather=jahorina, republika srpska&hl=en');
$information = $xml->xpath("/xml_api_reply/weather/forecast_information");
$current = $xml->xpath("/xml_api_reply/weather/current_conditions");
$forecast_list = $xml->xpath("/xml_api_reply/weather/forecast_conditions");
?>

    <div>
        <h1><?php echo $information[0]->city['data']; ?></h1>
        <h2>Danas</h2>
        <div class="weather">
            <img src="<?php 'http://www.google.com' . $current[0]->icon['data']?>" alt="weather"?>
            <span class="condition">
            <?php echo $current[0]->temp_c['data'] ?>&deg; C,
            <?php echo $current[0]->condition['data'] ?>
            </span>
        </div>
        <h2>Prognoza</h2>
        <?php foreach ($forecast_list as $forecast) : ?>
        <div class="weather">
            <img src="<?= 'http://www.google.com'.$forecast->icon['data']?>" alt="weather"?>
            <div><?php $forecast->day_of_week['data']; ?></div>
            <span class="condition">
                <?php echo $forecast->low['data'] ?>&deg; F - <?php echo $forecast->high['data'] ?>&deg; F,
                <?php echo $forecast->condition['data'] ?>
            </span>
        </div>
        <?php endforeach ?>
</div>
	
	</div> <!-- kraj prezentacija -->
	
	<div class="ponude clearfix">
		
		<div class="ponuda_lijevo">
			<h3>Planirajte svoj boravak</h3>
			<p>Pozovite +381 57 272 100
			ili <a href="#">rezervišite online</a></p>
		</div> <!-- kraj ponuda_lijevo -->
		
		<div class="ponuda_sredina">
			<h3>Specijalna Ponuda</h3> 
			<p>Porodični vikend
			Dvije noći od petka do nedelje na bazi polupansiona,
			Djeca do 10 godina gratis.
			Ponuda važi u dane vikenda od aprila do decembra.
			Cijena je za kompletan paket (2 odraslih plus 2 djece do 10 godina)
			APARTMAN 500 KM (256 EUR)</p>
		</div> <!-- kraj ponuda_sredina -->
		<?php CC ?>
		<div class="ponuda_desno">
			<h3>Koliba - najbolja zabava na Jahorini!</h3>
			<p>Koliba bla bla bla</p>
		</div> <!-- kraj ponuda_desno -->
	
	</div> <!-- kraj ponude -->
	
	</div> <!-- kraj sadrzaj -->
	
	<div class="clear"></div> <!-- clear float -->

	</div>
	
	<footer>
		
		<ul>
			<li><a href="#">kontakt</a></li>
			<li><a href="#">lokacija</a></li>
			<li><a href="#">kako do nas</a></li>
			<li><a href="#">početna</a></li>
			<li><a href="#">termag</a></li>
			<li><a href="#">smještaj</a></li>
		</ul> <!-- kraj footer meni -->
		
		<p>Hotel Termag Jahorina, Poljice bb, Bosna i Hercegovina | Telefoni: +387 57 270 422, +387 57 272 100; Faks: +387 57 270 423, +387 57 272 072</p>
		
		
	</footer> <!-- kraj footer -->
	
</div>

<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='_/js/jquery-1.5.1.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<script src="_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->
  
</body>
</html>