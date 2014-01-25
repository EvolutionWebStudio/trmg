<?php
include_once ('protected/config/osnovna_podesavanja.php');
 ?>
<div id="slider_wrapper">
	<div id="bigPic">
		<span id="loader"></span>
		<?php $images_path = '/media/images/slider/novo/'; ?>
		<?php $tekst[1][1] = $this -> linija[1] -> naslov; ?>
		<?php $tekst[1][2] = $this -> linija[1] -> sadrzaj; ?>
		<?php $tekst[2][1] = $this -> linija[6] -> naslov; ?>
		<?php $tekst[2][2] = $this -> linija[6] -> sadrzaj; ?>
		<?php $tekst[3][1] = $this -> linija[3] -> naslov; ?>
		<?php $tekst[3][2] = $this -> linija[3] -> sadrzaj; ?>
		<?php $tekst[4][1] = $this -> linija[2] -> naslov; ?>
		<?php $tekst[4][2] = $this -> linija[2] -> sadrzaj; ?>
		<?php $tekst[5][1] = $this -> linija[2] -> naslov; ?>
		<?php $tekst[5][2] = $this -> linija[2] -> sadrzaj; ?>
		<?php $tekst[6][1] = $this -> linija[2] -> naslov; ?>
		<?php $tekst[6][2] = $this -> linija[2] -> sadrzaj; ?>
		<?php $tekst[7][1] = $this -> linija[4] -> naslov; ?>
		<?php $tekst[7][2] = $this -> linija[4] -> sadrzaj; ?>
		<?php $tekst[8][1] = $this -> linija[0] -> naslov; ?>
		<?php $tekst[8][2] = $this -> linija[0] -> sadrzaj; ?>
		<?php $tekst[9][1] = $this -> linija[5] -> naslov; ?>
		<?php $tekst[9][2] = $this -> linija[5] -> sadrzaj; ?>
		<?php $tekst[10][1] = $this -> linija[5] -> naslov; ?>
		<?php $tekst[10][2] = $this -> linija[5] -> sadrzaj; ?>

		<?php
		for ($i = 1; $i < 11; $i++) {
			$naslov = $tekst[$i][1];
			if (array_key_exists(2, $tekst[$i])) {
				$podnaslov = $tekst[$i][2];
			} else {
				$podnaslov = '';
			}
			echo '<div class="slide"> <img src="' . $images_path . $i . '.jpg" alt="" /> <div class="natpis_slider" > <h3>' . $naslov . '</h3> <p>' . $podnaslov . '</p> </div> <div class="promotivna_slika"></div>  </div>';
		}
		?>
	</div>

	<div class="rezervacija-widget-wrapper">
		<div class="rezervacija-widget-button">
			<p><?php echo $this -> langArray['rezervisite_pocetna']; ?></p>
		</div>
		
		<div class="rezervacija-widget-info">
			<form id="sform" name="sform" method="post" action="https://www.myfidelio.net/webui/AvailabilitySearch.aspx?chain=IQ&property=CTHT" target="_self">
    		<table class="booking_widget">
    		<tbody>
        		<tr>
		            <td>
		                <label for="arrival"><?php echo $this -> langArray['dolazak']; ?></label>
		            </td>
		            <td>
		                <input id="arrival" name="arrival" type="edit" value="">
		            </td>
		            <td>
		                <label for="adults"><?php echo $this -> langArray['odrasli']; ?></label>
		            </td>
		            <td>
		            	<input id="adults" name="adults" type="edit" value="1">
		            </td>
		        </tr>
		        <tr>
		            <td>
		                <label for="nights"><?php echo $this -> langArray['nocenje']; ?></label>
		            </td>
		            <td>
		                <input id="nights" name="nights" type="edit" value="1">
		            </td>
		            <td>
		                <label for="children"><?php echo $this -> langArray['djece']; ?></label>
		            </td>
		            <td>
		                <input id="children" name="children" type="edit" value="0">
		            </td>
        		</tr>
	    	</tbody>
		    </table>
		    
		    <input id="style" name="style" type="hidden">
		    <input id="language" name="language" type="hidden" value="en-GB">
		    <input id="submitter" name="submitter" type="submit" value="<?php echo $this -> langArray['rezervisite_booking']; ?>">
		    
			</form>
		</div>
		
	</div>
</div>
<?php podesavanja::inc('_ponude.php'); ?>
