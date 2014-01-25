<?php
include_once ('protected/config/osnovna_podesavanja.php');
 ?>
<div id="slider_wrapper">
	<div id="bigPic">
		<span id="loader"></span>
		<?php $images_path = '/media/images/slider/nov2013/'; ?>
		<?php $tekst[1][1] = $this -> linija[6] -> naslov; ?>
		<?php $tekst[1][2] = $this -> linija[6] -> sadrzaj; ?>
		<?php $tekst[2][1] = $this -> linija[1] -> naslov; ?>
		<?php $tekst[2][2] = $this -> linija[1] -> sadrzaj; ?>
		<?php $tekst[3][1] = $this -> linija[0] -> naslov; ?>
		<?php $tekst[3][2] = $this -> linija[0] -> sadrzaj; ?>
		<?php $tekst[4][1] = $this -> linija[2] -> naslov; ?>
		<?php $tekst[4][2] = $this -> linija[2] -> sadrzaj; ?>
		<?php $tekst[5][1] = $this -> linija[5] -> naslov; ?>
		<?php $tekst[5][2] = $this -> linija[5] -> sadrzaj; ?>
		<?php $tekst[6][1] = $this -> linija[7] -> naslov; ?>
		<?php $tekst[6][2] = $this -> linija[7] -> sadrzaj; ?>
		<?php $tekst[7][1] = $this -> linija[8] -> naslov; ?>
		<?php $tekst[7][2] = $this -> linija[8] -> sadrzaj; ?>
		<?php $tekst[8][1] = $this -> linija[9] -> naslov; ?>
		<?php $tekst[8][2] = $this -> linija[9] -> sadrzaj; ?>
		<?php $tekst[9][1] = $this -> linija[10] -> naslov; ?>
		<?php $tekst[9][2] = $this -> linija[10] -> sadrzaj; ?>
		<?php $tekst[10][1] = $this -> linija[11] -> naslov; ?>
		<?php $tekst[10][2] = $this -> linija[11] -> sadrzaj; ?> 
		

		<?php
		for ($i = 1; $i < 11; $i++) {
			$naslov = $tekst[$i][1];
			if (array_key_exists(2, $tekst[$i])) {
				$podnaslov = $tekst[$i][2];
			} else {
				$podnaslov = '';
			}
            if($i==13 || $i==14)
            {
                echo '<div class="slide"> <img src="' . $images_path . $i . '.jpg" alt="" /> <div class="" > <h1>' . $naslov . '</h1> <p>' . $podnaslov . '</p> </div> <div class="promotivna_slika"></div>  </div>';
		
             }
            else                            
                       
			echo '<div class="slide"> <img src="' . $images_path . $i . '.jpg" alt="" /> <div class="natpis_slider" > <h1>' . $naslov . '</h1> <p>' . $podnaslov . '</p> </div> <div class="promotivna_slika"></div>  </div>';
		}
		?>
	</div>


</div>
<?php podesavanja::inc('_ponude.php'); ?>
