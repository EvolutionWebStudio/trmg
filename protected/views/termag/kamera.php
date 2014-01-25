<?php include_once('protected/config/osnovna_podesavanja.php'); 
$this->layout='main'; 
   
   $slikaKamere = 'media/kamera/cam.jpg';
   $novaSlikaKamere1 = 'media/kamera/kamera-hotel-termag-jahorina.jpg';
   $novaSlikaKamere2 = 'media/kamera/kamera-hotel-termag-jahorina1.jpg';
   
   //include('classes/SimpleImage.class.php');
   include('classes/CropImage.class.php');
   //Promjena sirine slike da bi mogli da je popolovimo kako treba
   //$image = new SimpleImage();
   //$image->load('media/kamera/cam.jpg');
   //$image->resizeToWidth(1840);
   //$image->save($slikaKamere);
   //presjecanje slike po pola
   $image = new cropImage();
   if(file_exists($slikaKamere))
   {
   		$image->setImage($slikaKamere);
   		$image->createImages();
   		$image->renderImage($novaSlikaKamere1, $novaSlikaKamere2);
   }
   
?>


<div class="web_camera_wrapper">
	
	<div class="web_camera">
		<?php if (file_exists($novaSlikaKamere1) && file_exists($novaSlikaKamere2)) //stampanje dvije slike sa kamere
		{ ?>
			<img src="<?php echo "/".$novaSlikaKamere1 ?>" alt="Prva kamera sa ski staze na Jahorini ispred hotela Termag" class="kamera"/>
			<img src="<?php echo "/".$novaSlikaKamere2 ?>" alt="Druga kamera sa ski staze na Jahorini ispred hotela Termag" class="kamera"/>
		<?php }
   		else 
   		{?>
   			<div class="camera_error">Kamera trenutno nije dostupna. <br /> Molimo Vas da pokušate posle.</div>
   		<?php } ?>
	</div>
	
	
	<?php if (file_exists($novaSlikaKamere1) && file_exists($novaSlikaKamere2)) { //stampanje teksta i linka za serovanje kamere?>
	<div class="web_camera_clanak">
		<p>
			Prikažite kameru na Vašem sajtu <span class="dugme webmasters_otvori" onclick="embedCodeShow()">&lt; / &gt;</span>
		</p>
	</div>
	<?php } ?>
	
	<div class="popbox_fade" onclick="embedCodeHide()"></div>
	<div class="popbox embed_code_popbox">
		<p>
			Podesite parametre i kliknite Generate. Dobijeni kod kopirajte na mjesto gdje želite da prikazete kameru.<br /> <br />
			<strong>Molimo Vas da ne brišete link na Hotel Termag jer to je uslov za besplatno korištenje kamere.</strong>
		</p>
		<form>
			<table class="embed_code_podesavanja">
				<tr>
					<th colspan="2">Izaberite layout:</th>
				</tr>
				
				<tr>
					<td><input type="radio" name="layout" value="horizontal" checked="" class="layout" onChange="embedCodeProportion('x')"/><label for="layout">Horizontalni</label></td>
					<td><input type="radio" name="layout" value="vertical" class="layout" onChange="embedCodeProportion('x')"/> <label for="layout">Vertikalni</label></td>
				</tr>
				
				<tr>
					<th colspan="2">Unesite dimenzije:</th>
				</tr>
				
				<tr>
					<td><label for="width">Širina</label></td>
					<td><input type="text" name="width" value="1840" class="dimenzije_x" onkeyup="embedCodeProportion('x');" maxlength="4"/>&nbsp;px</td>
				</tr>
				
				<tr>
					<td><label for="width" >Visina</label></td>
					<td><input type="text" name="height" value="730" class="dimenzije_y" onkeyup="embedCodeProportion('y');" maxlength="4"/>&nbsp;px</td>
				</tr>
				
	
				<tr>
					<th colspan="2">Boja pozadine:</th> 
				</tr>
				
				<tr>
					<td><label for="color">Kod boje:</label></td>
					<td><input type="text" name="color" value="#ffffff" maxlength="7" class="color_hex"/></td>
				</tr>
				
				<tr>
					<td colspan="2"><span class="dugme generate_podesavanja" onclick="embedCodeUpdate();">Generate</span></td>
				</tr>
				
			</table>
		</form>
		
		<textarea class="embedding_code" readonly="true"></textarea>
		<!-- <span class="dugme webmasters_zatvori" onclick="embedCodeHide()">Close</span> -->
	</div>
</div>
