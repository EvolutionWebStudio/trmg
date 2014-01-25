<?php include_once('protected/config/osnovna_podesavanja.php'); ?>



<!DOCTYPE html>



<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="sr"> <![endif]-->

<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="sr"> <![endif]-->

<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="sr"> <![endif]-->

<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="sr"> <![endif]-->

<!--[if gt IE 9]><!--><html class="no-js admin" lang="sr"><!--<![endif]-->

<!-- the "no-js" class is for Modernizr. -->



<head id="www-hoteltermag-com" data-template-set="html5">



	<title><?php echo CHtml::encode($this->pageTitle); ?> - Administracija - Hotel Termag Jahorina</title>

	

	<?php podesavanja::inc('_meta.php'); ?>



	<link rel="shortcut icon" href="/favicon.ico">



	<link rel="stylesheet" href="/css/style.css">

	<link rel="stylesheet"  href="/css/slider.css">

	<link rel="stylesheet"  href="/css/ui-lightness/jquery-ui-1.8.16.custom.css"  />

	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

	<script type="text/javascript" src="/js/jquery-ui-1.8.16.custom.min.js"></script>

	<script type="text/javascript" src="/js/jquery.ui.datepicker-sr-SR.js"></script>

	

	<script src="/js/modernizr-1.7.min.js"></script>

    

    <script src="/js/tiny_mce/tiny_mce.js"></script>

	<script type="text/javascript">

    tinyMCE.init({

        // General options

        mode : "textareas",

        theme : "advanced",

		editor_selector : "mceEditor",

        editor_deselector : "mceNoEditor",

        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",



        // Theme options

        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",

        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",

        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",

        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",

        theme_advanced_toolbar_location : "top",

        theme_advanced_toolbar_align : "left",

        theme_advanced_statusbar_location : "bottom",

        theme_advanced_resizing : true,



        // Skin options

        skin : "o2k7",

        skin_variant : "silver",



        // Example content CSS (should be your site CSS)

        content_css : "css/example.css",



        // Drop lists for link/image/media/template dialogs

        template_external_list_url : "js/template_list.js",

        external_link_list_url : "js/link_list.js",

        external_image_list_url : "js/image_list.js",

        media_external_list_url : "js/media_list.js",



        // Replace values for the template plugin

        template_replace_values : {

                username : "Some User",

                staffid : "991234"

        }

    });

    </script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32622008-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>



<body>



    <div class="wrapper">

        <div class="bg_wrapper">

	       <div class="kadar">

	

	       <header>



            <ul id="precice">

			<li><?php echo CHtml::link('Vremenska prognoza',array('termag/vrijeme')); ?></li>

			<li><?php echo CHtml::link('Kontaktirajte nas',array('termag/kontaktirajte_nas')); ?></li>

			

            </ul> <!-- kraj precice -->

		

		    <?php echo CHtml::link('<h1 id="logo" >Hotel Termag Jahorina</h1>',array('administrator/')); ?>

		

    		<ul id="social">

    			<li><?php echo CHtml::link('Logout',array('termag/logout')); ?></li>

    		</ul> <!-- kraj social -->

    		

    		<div class="clear"></div> <!-- clear float -->

		

            <nav class="clearfix">

			 <ul class="navigacija navigacija-lijevo clearfix">

				<li><?php echo CHtml::link('Podešavanja',array('administrator/index')); ?>

				<!--	<ul>

						<li><?php echo CHtml::link('O Hotelu',array('termag/o_hotelu')); ?></li>

						<li><?php echo CHtml::link('Jahorina zimi',array('termag/jahorina_zimi')); ?></li>

						<li><?php echo CHtml::link('Jahorina ljeti',array('termag/jahorina_ljeti')); ?></li>

						<li><?php echo CHtml::link('Lokacija',array('termag/lokacija')); ?></li>

						<li><?php echo CHtml::link('Galerija slika',array('termag/galerija')); ?></li>

					</ul> <!-- kraj drugi nivo -->

				</li>

				

				<li><a href="JavaScript:void()">Članci</a>

					<ul>

						<li><?php echo CHtml::link('Izlistaj',array('clanci/index')); ?></li>

						<li><?php echo CHtml::link('Kreiraj',array('clanci/create')); ?></li>

						<li><?php echo CHtml::link('Izmjeni',array('clanci/admin')); ?></li>

					</ul> <!-- kraj drugi nivo -->

				</li>	

				

				<li><a href="JavaScript:void()">Cjenovnik</a>

					<ul>

						<li><?php echo CHtml::link('Izlistaj',array('cjenovnik/index')); ?></li>

						<li><?php echo CHtml::link('Kreiraj',array('cjenovnik/create')); ?></li>

						<li><?php echo CHtml::link('Izmjeni',array('cjenovnik/admin')); ?></li>

					</ul> <!-- kraj drugi nivo -->

				</li>

			</ul>

			

			<ul class="navigacija navigacija-desno clearfix">

				<li><a href="JavaScript:void()">Galerija</a>

					<ul>

						<li><?php echo CHtml::link('Napravi Album',array('termag/hotelski_restoran')); ?></li>

						<li><?php echo CHtml::link('Izmjeni Album',array('termag/kamin_sala')); ?></li>

						<li><?php echo CHtml::link('Ubaci Slike',array('termag/koliba')); ?></li>

					</ul> <!-- kraj drugi nivo -->

				</li>	

				

				<li><a href="JavaScript:void()">Korisnici</a>

					<ul>

						<li><?php echo CHtml::link('Izlistaj',array('termag/porodicni_vikend')); ?></li>

						<li><?php echo CHtml::link('Kreiraj',array('termag/relax_vikend')); ?></li>

						<li><?php echo CHtml::link('Izmjeni',array('termag/romanticni_vikend')); ?></li>

						<li><?php echo CHtml::link('Privilegije',array('termag/antistress_vikend')); ?></li>

					</ul> <!-- kraj drugi nivo -->

				</li>	

				

				<li><a href="JavaScript:void()">Test</a>

					<ul>

						<li><?php echo CHtml::link('Seminari',array('termag/seminari')); ?></li>

						<li><?php echo CHtml::link('Ponuda',array('termag/ponuda')); ?></li>

						<li><?php echo CHtml::link('Team Building',array('termag/team_building')); ?></li>

						<li><?php echo CHtml::link('Rezervacije',array('termag/rezervacije')); ?></li>

					</ul> <!-- kraj drugi nivo -->

				</li>

				

			</ul>  <!-- kraj prvi nivo navigacije -->

		</nav>

	

	</header> <!-- kraj header -->

	

	           <div class="sadrzaj clearfix">

	               <?php echo $content; ?>

	           </div> <!-- kraj sadrzaj -->



            </div> <!-- kraj kadar -->

        </div> <!-- kraj bg_wrapper -->	

	

        <?php// podesavanja::inc('_footer.php'); ?>

	

    </div> <!-- kraj wrapper -->



<?php podesavanja::inc('_slider_javascript.php'); ?>



	<script type="text/javascript">

	$(function() {

		$.datepicker.setDefaults( $.datepicker.regional[ "sr-SR" ] );	

		

		var dates = $( "#datum_dolaska, #datum_odlaska" ).datepicker({

			defaultDate: "+1w",

			changeMonth: true,

			numberOfMonths: 1,

			onSelect: function( selectedDate ) {

				var option = this.id == "datum_dolaska" ? "minDate" : "maxDate",

					instance = $( this ).data( "datepicker" ),

					date = $.datepicker.parseDate(

						instance.settings.dateFormat ||

						$.datepicker._defaults.dateFormat,

						selectedDate, instance.settings );

				dates.not( this ).datepicker( "option", option, date );

			},

			

			

		});

		

		var dates2 = $( "#alt_datum_dolaska, #alt_datum_odlaska" ).datepicker({

			defaultDate: "+1w",

			changeMonth: true,

			numberOfMonths: 1,

			

			onSelect: function( selectedDate ) {

				var option = this.id == "alt_datum_dolaska" ? "minDate" : "maxDate",

					instance = $( this ).data( "datepicker" ),

					date = $.datepicker.parseDate(

						instance.settings.dateFormat ||

						$.datepicker._defaults.dateFormat,

						selectedDate, instance.settings );

				dates2.not( this ).datepicker( "option", option, date );

			}

		});

	});

	

	function mapaSkiStaza()

	{

		window.open('img/mapaSkiStazeJahorina.jpg','Mapa Ski staza - Termag Hotel Jahorina','width=1000,height=700,resizable=yes');

	} 

	

	function lokacijaHotela()

	{

		window.open('http://wikimapia.org/#lat=43.7352669&lon=18.5678333&z=18&l=0&m=b','Lokacija - Termag Hotel Jahorina','width=1000,height=700,resizable=yes');

	} 

	</script>



</body>

</html>