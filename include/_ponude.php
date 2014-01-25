<div class="ponude clearfix">
		
		<div class="ponuda_lijevo">
			<div class="crveno">
				<h1><?php echo $this->langArray['ponuda_objasnjenje']; ?></h1>
			</div>
			<p class="objasnjenje"><?php echo $this->langArray['ponuda_potrebno']; ?></p>
			<p class="number"> <?php echo $this->langArray['ponuda_broj']; ?><br /></p>
			 <p><?php echo $this->langArray['ponuda_ili_mail']." "; ?><br /> <a class="rezervacija-mail" href="mailto:termag@teol.net">termag@teol.net</a></p>
			
			
		</div> <!-- kraj ponuda_lijevo -->
	
		
		<div class="ponuda_sredina">
			<h1><?php echo $this->langArray['ponuda_sredina_naslov']; ?></h1> 
			<p><?php echo $this->langArray['ponuda_sredina_text']; ?> <?php echo CHtml::link($this->langArray['porodicni_rezervacije'].'<span class="read_more"> &gt; </span>',array('termag/seminari')); ?></p>
		</div> <!-- kraj ponuda_sredina -->
		
		<div class="ponuda_desno">
		<table>
			<tr><td style="padding: 0 5px 0 0;"><h1><?php echo $this->langArray['naslov_koliba']; ?><p><?php echo $this->langArray['tekst_koliba']; ?> <?php echo CHtml::link('<span class="read_more"> &gt; </span>',array('termag/porodicni_vikend')); ?></p></h1></td>
			    
				<td id="koliba_slider" rowspan="2">
				
				<?php 
				$imagesPathKoliba = '/media/images/slider/vikend/';
                $linkovi = array(1=>"porodicni_vikend", 2=>"relax_vikend", 3=>"romanticni_vikend", 4=>"antistress_vikend", 5=>"extreme_vikend", 6=>"zivot_je_igra");
				for($i=1; $i<7; $i++) 
			    {
								
				echo CHtml::link('<div class=""> <img src="'.$imagesPathKoliba.$i.'.jpg" alt="" /></div>',array('termag/'.$linkovi[$i])); 
				
				}
				
				?>
				
				</td>
				
			</tr>
            
		</table>
		</div> <!-- kraj ponuda_desno -->
	
	</div> <!-- kraj ponude -->