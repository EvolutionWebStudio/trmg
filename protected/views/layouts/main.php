<?php
include_once ('protected/config/osnovna_podesavanja.php');
if($this->kamera == true) { 
        
        // Create DOM from URL or file
         }
 ?>

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="sr"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="sr"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="sr"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="sr"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="sr"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-hoteltermag-com" data-template-set="html5" xmlns:fb="http://ogp.me/ns/fb#">

	<title><?php
	if ($this -> metaTitle == "")
	{
		if (isset($this -> naslovStranice))
		{
			echo $this -> naslovStranice;
		}
	}
	else
	{
		echo $this -> metaTitle;
	}
	?></title>
	
	<?php podesavanja::inc('_meta.php'); ?>

	<link rel="shortcut icon" href="/favicon.png"/>

	<link rel="stylesheet" href="/css/style.css"/>
	<link rel="stylesheet"  href="/css/slider.css"/>
	<link rel="stylesheet"  href="/css/ui-lightness/jquery-ui-1.8.16.custom.css"  />
	
	<link rel="image_src" type="image/gif" href="http://termaghotel.com/img/facebook-thumb.gif" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="/js/jquery.ui.datepicker-sr-SR.js"></script>
   
    <script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
    <link rel="stylesheet" href="/css/jcarousel.css"/>
    <?php if($this->pocetna == true) {  ?>
	<script type="text/javascript">
		function mycarousel_initCallback(carousel) {
			// Disable autoscrolling if the user clicks the prev or next button.
			carousel.buttonNext.bind('click', function() {
				carousel.startAuto(0);
			});
			carousel.buttonPrev.bind('click', function() {
				carousel.startAuto(0);
			});
			// Pause autoscrolling if the user moves with the cursor over the clip.
			carousel.clip.hover(function() {
				carousel.stopAuto();
			}, function() {
				carousel.startAuto();
			});
		};

		jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel({

				auto : 3,
				wrap : 'circular',

				initCallback : mycarousel_initCallback
			});
		});
    </script>
    <?php    } ?>
    
    
    
	<script src="/js/modernizr-1.7.min.js"></script>
    
    
    <script>var image1 = $('<img />').attr('src', '/img/ajax-loader.gif');</script>
    
	
	<script>
		( function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
	</script>
	 
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-32622008-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();

</script>
     
</head>

<body>
	<div class="newsletter-signup">
		
			<script language='javascript' src='http://echo7.bluehornet.com/phase2/bhecho_files/smartlists/check_entry.js'></script>
			<script language="javascript">
				<!--
					function check_cdfs(form) {
						return true;
					}
				-->
			</script>
			<script language='javascript' type='text/javascript'>
				<!--
    				function doSubmit() {
        				if (check_cdfs(document.survey)) {
							window.open('','signup','resizable=1,scrollbars=0,width=300,height=150');
            				return true;
        			}
        				else { 
        					return false; 
        				}
    				}
				-->
			</script>
			
			<div class="newsletter-button"><span>NEWSLETTER</span></div>
			
			<div class="newsletter-form">
				<form action="http://echo7.bluehornet.com/phase2/bullseye/contactupdate1.php3" method="post" name="bullseye" id="bullseye" onsubmit="return doSubmit();" target="signup">
		  			<p class="newsletter-opis">Hotel Termag šalje elektronske novine sa vijestima, događajima i specijalnim ponudama. Pošaljite nam svoj email ukoliko želite da primate informacije od nas.</p>	
		  			
		  			<input type='hidden' name="cid" value="8eaf404f263309cfc92ff5b241d73b71" />
		    				
		    		<label for="email">Email:</lebel>
					<input type="email" name="email" />
						
					<input type="submit" name="SubmitBullsEye" value="<?php echo $this -> langArray['submit_posalji']; ?>" />
					     
					<input type='hidden' name='message' value="Thank you.">
				</form>
			</div>
	</div>
	
	<div class="wrapper">
    
    
    
        <div class="bg_wrapper">
	       <div class="kadar">
	
	       <?php podesavanja::inc('_header.php'); ?>
	
	           <div class="sadrzaj clearfix">
	               <?php echo $content; ?>
	           </div> <!-- kraj sadrzaj -->

            </div> <!-- kraj kadar -->
        </div> <!-- kraj bg_wrapper -->	
	
        <?php podesavanja::inc('_footer.php'); ?>
	
    </div> <!-- kraj wrapper -->

<?php if($this->pocetna == true) { podesavanja::inc('_slider_javascript.php'); ?>
<script type="text/javascript">
	$(function() {
		var idag = new Date();

		$("#arrival").datepicker();
		$("#arrival").datepicker("option", "dateFormat", "yy-mm-dd");
		$("#arrival").datepicker("setDate", idag);

	}); 
</script>
<?php    } ?>

<?php if($this->rezervacije == true) { ?>
	<script type="text/javascript">
		$(function() {
			$.datepicker.setDefaults($.datepicker.regional["sr-SR"]);

			var dates = $("#datum_dolaska, #datum_odlaska").datepicker({
				defaultDate : "+1w",
				changeMonth : true,
				numberOfMonths : 1,
				onSelect : function(selectedDate) {
					var option = this.id == "datum_dolaska" ? "minDate" : "maxDate", instance = $(this).data("datepicker"), date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
					dates.not(this).datepicker("option", option, date);
				},
			});

			var dates2 = $("#alt_datum_dolaska, #alt_datum_odlaska").datepicker({
				defaultDate : "+1w",
				changeMonth : true,
				numberOfMonths : 1,

				onSelect : function(selectedDate) {
					var option = this.id == "alt_datum_dolaska" ? "minDate" : "maxDate", instance = $(this).data("datepicker"), date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
					dates2.not(this).datepicker("option", option, date);
				}
			});
		});
     </script>
     <?php } if($this->jahorinaZimi == true) { ?>
     
    <script type="text/javascript">
		function mapaSkiStaza() {
			window.open('/img/mapaSkiStazeJahorina.jpg', 'Mapa Ski staza - Termag Hotel Jahorina', 'width=1000,height=700,resizable=yes');
		}
	</script>
    <?php } if($this->lokacija == true) { ?>
    <script type="text/javascript">
		function lokacijaHotela() {
			window.open('http://wikimapia.org/#lat=43.7352669&lon=18.5678333&z=18&l=0&m=b', 'Lokacija - Termag Hotel Jahorina', 'width=1000,height=700,resizable=yes');
		}
    </script>
     
    
    <?php } if($this->koliba == true) { ?>
    <script type="text/javascript">
		/*var prethodniDan = "";
		var trenutniDan = ["ponedeljak", "utorak", "srijeda", "cetvrtak", "petak", "subota", "nedelja"];
		var indexDana = -1;
		var timerKolibaAnimacija;

		function setHeaderImage(dan) {
			$('div.koliba_promo > img' + prethodniDan).fadeOut(1000, function() {
				$('div.koliba_promo > img').css({
					"display" : "none"
				});
				$('div.koliba_promo > img.' + dan).fadeIn(1000, function() {
					prethodniDan = "." + dan;
				});
			});
		}

		function headerImage(dan) {
			clearTimeout(timerKolibaAnimacija);
			setHeaderImage(dan);
		}

		function animateHeaderImage() {
			if (indexDana < 6) {
				timerKolibaAnimacija = setTimeout("animateHeaderImage()", 7000);
				indexDana++;
				setHeaderImage(trenutniDan[indexDana]);
			} else {
				indexDana = -1;
				animateHeaderImage();
			}
		}


		$(window).load(function() {
			animateHeaderImage();

		});*/

	</script>	
		
	<?php } ?>
	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28119457-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
	<script src="/js/functions.js" type="text/javascript"></script>
	
</body>
</html>