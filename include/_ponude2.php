<div class="ponude clearfix">
	<?php
	$i=1;
	$imagesPathPonude = '/media/images/slider/ponude/';
	$ponudeLinkovi = array(1 => "porodicni_vikend", 
						   2 => "relax_vikend", 
						   3 => "romanticni_vikend", 
						   4 => "antistress_vikend", 
						   5 => "extreme_vikend", 
						   6 => "zivot_je_igra",
						   7 => "seminari",
						   8 => "team_building",
						   9 => "ljeto_na_jahorini");
						   
	
	$ponudeNaslovi = array(1 => $this->langArray['porodicni_vikend'], 
						   2 => $this->langArray['relax_vikend'], 
						   3 => $this->langArray['romanticni_vikend'], 
						   4 => $this->langArray['antistress_vikend'], 
						   5 => $this->langArray['extreme_vikend'], 
						   6 => $this->langArray['zivot_je_igra'],
						   7 => $this->langArray['seminari'],
						   8 => $this->langArray['team_building'],
						   9 => $this->langArray['ljeto_na_jahorini']);
	
	$ponudeTekstovi = array(1 => $this->langArray['ponude_porodicni'],
							2 => $this->langArray['ponude_relax'],
							3 => $this->langArray['ponude_romanticni'],
							4 => $this->langArray['ponude_antistress'],
							5 => $this->langArray['ponude_extreme'],
							6 => $this->langArray['ponude_zivot_je_igra'],
							7 => $this->langArray['ponude_seminari'],
							8 => $this->langArray['ponude_team_building'],
							9 => $this->langArray['ponude_ljeto']);
								
	?>
	<div class="jcarousel-skin-tango">
		<div class="jcarousel-container">
			<div class="jcarousel-clip">
				<ul id="mycarousel" class="jcarousel-list">
					<?php  	for($i=1; $i<=9; $i++) {
					?>
					<li class="jcarousel-item  jcarousel-item-<?php echo $i ?>">
						<?php
						echo '<div class=""><img src="' . $imagesPathPonude . $i . '.jpg" alt="" /></div>';
						echo CHtml::link('<div class="jcarousel-item-text  jcarousel-item-text-'.$i.'"><h2>'.$ponudeNaslovi[$i].'</h2><div class="jcs-txt"><p>'.$ponudeTekstovi[$i].'</p></div></div>', array('termag/' . $ponudeLinkovi[$i]));
						?>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="jcarousel-prev jcarousel-prev-horizontal"></div>
			<div class="jcarousel-next jcarousel-next-horizontal"></div>
		</div>
	</div>
</div>
<!-- kraj ponude -->