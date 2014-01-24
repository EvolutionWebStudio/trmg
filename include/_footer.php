	<footer>
		
		<ul>
			<li><a href="http://termaghotel.com"><?php echo $this->langArray['pocetna_footer']; ?></a></li>
			<li><?php echo CHtml::link($this->langArray['lokacija_footer'],array('termag/lokacija')); ?></li>
			<li><?php echo CHtml::link($this->langArray['galerija_slika_footer'],array('termag/galerija')); ?></li>
			<li><?php echo CHtml::link($this->langArray['cjenovnik_footer'],array('termag/cjenovnik_ljeto')); ?></li>
			<li><?php echo CHtml::link($this->langArray['rezervacija_footer'],array('termag/rezervacija')); ?></li>
			<li><?php echo CHtml::link($this->langArray['kontaktirajte_nas_footer'],array('termag/kontaktirajte_nas')); ?></li>
                        <li><?php echo CHtml::link("download",array('termag/download')); ?></li>
		</ul> <!-- kraj footer meni -->
		
		<p class="info">Hotel Termag Jahorina, Poljice bb, Bosna i Hercegovina | Telefoni: +387 57 270 422, +387 57 272 100; Faks: +387 57 270 423, +387 57 272 072</p>
		
		
	</footer> <!-- kraj footer -->