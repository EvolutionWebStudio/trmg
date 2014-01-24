<header>
	<nav>	
		<ul id="precice">
            <li><a class="vijesti_link" href="/termag/vijesti"><?php echo $this->langArray['vijesti'] ?></a></li>
			<li><?php echo CHtml::link($this->langArray['virtual_tour'],array('termag/virtual_tour')); ?></li>
			<li><?php echo CHtml::link($this->langArray['galerija_slika'],array('termag/galerija')); ?></li>
			<li><?php echo CHtml::link($this->langArray['web_kamera'],array('termag/web_camera'),array('class'=>'ikonica kamera_ikonica', 'title'=>'Kamera na Jahorini')); ?></li>
			<li><?php echo CHtml::link($this->langArray['vremenska_prognoza'],array('termag/vrijeme'),array('class'=>'ikonica vrijeme_ikonica', 'title'=>'Vrijeme na Jahorini')); ?></li>
             
		</ul> <!-- kraj precice -->
		
		<a href="http://termaghotel.com" title="Hotel Termag Jahorina"><h1 id="logo" >Hotel Termag Jahorina | Jahorina Hoteli | Jahorina Smjestaj | Jahorina Apartmani</h1></a>
		<?php //echo CHtml::link('<h1 id="logo" >Hotel Termag Jahorina | Jahorina Hoteli | Jahorina Smjestaj | Jahorina Apartmani</h1>',array('index')); ?>
		
		<ul id="social">
        <li>
            <ul class="languages"> 
                <li><a  href="/index.php?lang=sr" class="ikonica serbian_flag" title="Srpski">SR</a></li>
                <li><a  href="/index.php?lang=en" class="ikonica english_flag" title="English">EN</a></li>
                <li><a  href="/index.php?lang=ru" class="ikonica russian_flag" title="Pуски">RU</a></li>
            </ul>
        </li>
		<!--	<li><a href="#">Knjiga utisaka</a></li> -->
            <li><?php echo CHtml::link($this->langArray['kontaktirajte_nas'],array('termag/kontaktirajte_nas')); ?></li>
			<li><a target="_blank" title="Facebook" class="ikonica facebook_icon" href="http://www.facebook.com/HotelTermagJahorina">Facebook</a></li>
			<li><a target="_blank" title="Twitter" class="ikonica twitter_icon" href="http://twitter.com/#!/TermagHotel">Twitter</a></li>
            <li><a target="_blank" title="You Tube" class="ikonica youtube_icon" href="http://www.youtube.com/user/HotelTermag">You Tube</a></li>
            <li><?php echo CHtml::link($this->langArray['prijatelji'],array('termag/prijatelji_hotela'), array('class'=>'ikonica prijatelji_ikonica', 'title'=>'Prijatelji Hotela Termag')); ?></li>
		</ul> <!-- kraj social -->
		
		<div class="clear"></div> <!-- clear float -->
		
		<div class="clearfix main_menu">
			<ul class="navigacija navigacija-lijevo clearfix">
				<li><a href="JavaScript:void(0)"><?php echo $this->langArray['termag']; ?> </a>
					<ul>
						<li><?php echo CHtml::link($this->langArray['o_hotelu'],array('termag/o_hotelu')); ?></li>
						<li><?php echo CHtml::link($this->langArray['jahorina_zimi'],array('termag/jahorina_zimi')); ?></li>
						<li><?php echo CHtml::link($this->langArray['jahorina_ljeti'],array('termag/jahorina_ljeti')); ?></li>
                        <li><?php echo CHtml::link($this->langArray['klima'],array('termag/klima')); ?></li>
						<li><?php echo CHtml::link($this->langArray['lokacija'],array('termag/lokacija')); ?></li>
						<li><?php echo CHtml::link($this->langArray['galerija_slika'],array('termag/galerija')); ?></li>
						<li><?php echo CHtml::link($this->langArray['prijatelji'],array('termag/prijatelji_hotela')); ?></li>
						<li><?php echo CHtml::link($this->langArray['vijesti'],array('termag/vijesti')); ?></li>
					</ul> <!-- kraj drugi nivo -->
				</li>
				
				<li><a href="JavaScript:void(0)"><?php echo $this->langArray['smjestaj']; ?></a>
					<ul>
						<li><?php echo CHtml::link($this->langArray['sobe'],array('termag/sobe')); ?></li>
						<li><?php echo CHtml::link($this->langArray['apartmani'],array('termag/apartmani')); ?></li>
						<li><?php echo CHtml::link($this->langArray['villa_termag'],array('termag/villa_termag')); ?></li>
						<li><?php echo CHtml::link($this->langArray['virtuelna_setnja'],array('termag/virtual_tour')); ?></li>
						<li><?php echo CHtml::link($this->langArray['rezervacije'],array('termag/rezervacija')); ?></li>
                        <li><?php echo CHtml::link($this->langArray['kontakt_forma'],array('termag/kontakt_forma')); ?></li>
                        <li><?php echo CHtml::link($this->langArray['cjenovnik'],array('termag/cjenovnik_ljeto')); ?></li>
                         <li><?php echo CHtml::link($this->langArray['cjenovnik-zima'],array('termag/cjenovnik')); ?></li>
                        <li><?php echo CHtml::link($this->langArray['igraonica'],array('termag/igraonica')); ?></li>
					</ul> <!-- kraj drugi nivo -->
				</li>	
				
				<li><a href="JavaScript:void(0)"><?php echo $this->langArray['spa_and_wellness']; ?></a>
					<ul>
						<li><?php echo CHtml::link($this->langArray['spa_centar'],array('termag/spa_centar')); ?></li>
						<li><?php echo CHtml::link($this->langArray['masaze_i_tretmani'],array('termag/masaze_i_tretmani')); ?></li>
						<li><?php echo CHtml::link($this->langArray['vanpansionska_ponuda'],array('termag/vanpensionska_ponuda')); ?></li>
					</ul> <!-- kraj drugi nivo -->
				</li>
			</ul>
			
			<ul class="navigacija navigacija-desno clearfix">
				<li><a href="JavaScript:void(0)"><?php echo $this->langArray['restorani'];?></a>
					<ul>
						<li><?php echo CHtml::link($this->langArray['hotelski_restoran'],array('termag/hotelski_restoran')); ?></li>
						<li><?php echo CHtml::link($this->langArray['kamin_sala'],array('termag/kamin_sala')); ?></li>
						<li><?php echo CHtml::link($this->langArray['koliba'],array('termag/koliba')); ?></li>
					</ul> <!-- kraj drugi nivo -->
				</li>	
				
				<li><a href="JavaScript:void(0)"><?php echo $this->langArray['specijalne_ponude'];?></a>
					<ul>
						<li><?php echo CHtml::link($this->langArray['porodicni_vikend'],array('termag/porodicni_vikend')); ?></li>
						<li><?php echo CHtml::link($this->langArray['relax_vikend'],array('termag/relax_vikend')); ?></li>
						<li><?php echo CHtml::link($this->langArray['romanticni_vikend'],array('termag/romanticni_vikend')); ?></li>
						<li><?php echo CHtml::link($this->langArray['antistress_vikend'],array('termag/antistress_vikend')); ?></li>
						<li><?php echo CHtml::link($this->langArray['extreme_vikend'],array('termag/extreme_vikend')); ?></li>
						<li><?php echo CHtml::link($this->langArray['zivot_je_igra'],array('termag/zivot_je_igra')); ?></li>
						<li><?php echo CHtml::link($this->langArray['poklon_vaucer'],array('termag/poklon_vaucer')); ?></li>
					</ul> <!-- kraj drugi nivo -->
				</li>	
				
				<li><a href="JavaScript:void(0)"><?php echo $this->langArray['business']; ?></a>
					<ul>
						<li><?php echo CHtml::link($this->langArray['seminari'],array('termag/seminari')); ?></li>
						<li><?php echo CHtml::link($this->langArray['ponuda'],array('termag/ponuda')); ?></li>
						<li><?php echo CHtml::link($this->langArray['team_building'],array('termag/team_building')); ?></li>
						<li><?php echo CHtml::link($this->langArray['rezervacije'],array('termag/rezervacije')); ?></li>
					</ul> <!-- kraj drugi nivo -->
				</li>
				
			</ul>  <!-- kraj prvi nivo navigacije -->
		</div>
	</nav>
</header> <!-- kraj header -->