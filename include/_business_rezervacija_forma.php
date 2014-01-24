<div class="forma_wrapper">
	<form action="/mail/send_mail.php" method="post">

	
	<div class="dio_forme">

			<div class="forma_header">
				<p class="naslov" ><?php echo $this -> langArray['kontakt_informacije_caption']; ?></p>
				<p class="napomena" ><?php echo $this -> langArray['obavezna_polja']; ?></p>
			</div>
					
			<table>	
				<tr>
					<td class="half-width">
						<span class="label"><label for="ime"><?php echo $this -> langArray['ime_label']; ?>*</label></span>
						<span><input type="text" name="ime" /></span>
					</td>
					<td class="half-width">
						<span class="label"><label for="prezime"><?php echo $this -> langArray['prezime_label']; ?>*</label></span>
						<span><input type="text" name="prezime" /></span>
					</td>
				</tr>
				
				<tr>
					<td class="half-width">
						<span class="label"><label for="kompanija"><?php echo $this -> langArray['kompanija_label']; ?></label></span>
						<span><input type="text" name="kompanija" /></span>
					</td>
					<td class="half-width">
						<span class="label"><label for="email"><?php echo $this -> langArray['email_label']; ?>*</label></span>
						<span><input type="text" name="email" /></span>
					</td>
				</tr>
				
				<tr>
					<td class="half-width">
						<span class="label"><label for="adresa"><?php echo $this -> langArray['adresa_label']; ?>*</label></span>
						<span><input type="text" name="adresa" /></span>
					</td>
					<td class="half-width">					
						<span class="label"><label for="adresa2"><?php echo $this -> langArray['adresa_2_label']; ?></label></span>
						<span><input type="text" name="adresa2" /></span>
					</td>
				</tr>
				
				<tr>
					<td class="half-width">
						<span class="label"><label for="grad"><?php echo $this -> langArray['grad_label']; ?>*</label></span>
						<span><input type="text" name="grad" /></span>
					</td>
					<td class="half-width">
						<span class="label"><label for="drzava"><?php echo $this -> langArray['drzava_label']; ?>*</label></span>
						<span><input type="text" name="drzava" /></span>
					</td>
				</tr>
				
				<tr>
					<td class="half-width">
						<span class="label"><label for="postanski_broj"><?php echo $this -> langArray['postanski_broj_label']; ?>*</label></span>
						<span><input type="text" name="postanski_broj" /></span>
					</td>
					<td class="half-width">
						<span class="label"><label for="telefon"><?php echo $this -> langArray['telefon_label']; ?>*</label></span>
						<span><input type="text" name="telefon" /></span>
					</td>
				</tr>

				<tr>
					<td class="half-width">
					<span class="label"><label for="nacin_kontakta"><?php echo $this -> langArray['kontakt_putem_label']; ?></label></span>
					<span>
					<select name="nacin_kontakta">
						<option>Email</option>
						<option>Telefon</option>
						<option>Pošta</option>
					</select>
					</span></td>
					<td class="half-width"><span>&nbsp;</span></td>
				</tr>
			</table>
	</div>
		
		<div class="dio_forme">
			<div class="forma_header">
				<p class="naslov" ><?php echo $this -> langArray['smjestaj_caption']; ?></p>
			</div>
				
			<table>
				<tr>
					<td class="half-width">
						<div>
							<span class="label"><label for="dolazak"><?php echo $this -> langArray['dolazak_label']; ?>*</label></span>
							<span><input type="text" name="dolazak" id="datum_dolaska" /></span>
						</div>
						<div>
							<span class="label"><label for="odlazak"><?php echo $this -> langArray['odlazak_label']; ?>*</label></span>
							<span><input type="text" name="odlazak" id="datum_odlaska"/></span>
						</div>
					</td>
					
					<td class="half-width">
						<div>
							<span class="label"><label for="alternativni_dolazak"><?php echo $this -> langArray['alt_dolazak_label']; ?></label></span>
							<span><input type="text" name="alternativni_dolazak" id="alt_datum_dolaska"/></span>
						</div>
						<div>
							<span class="label"><label for="alternativni_odlazak"><?php echo $this -> langArray['alt_odlazak_label']; ?></label></span>
							<span><input type="text" name="alternativni_odlazak" id="alt_datum_odlaska"/></span>
						</div>
					</td>
				</tr>
			</table>
		</div>		
		
<div class="dio_forme">
<div class="forma_header">
<p class="naslov" ><?php echo $this -> langArray['dogadjaj_caption']; ?></p>
</div>
		<table>
			<tr>
				<td class="half-width">
					<span class="label"><label for="ime_grupe"><?php echo $this -> langArray['ime_grupe_label']; ?>*</label></span>
					<span><input type="text" name="ime_grupe" /></span>
				</td>
				<td class="half-width">
					<span class="label"><label for="broj_ucesnika"><?php echo $this -> langArray['broj_ucesnika_label']; ?>*</label></span>
					<span><input type="text" name="broj_ucesnika" /></span>
				</td>
			</tr>
		</table>
</div>

<div class="dio_forme">
<div class="forma_header">
<p class="naslov" ><?php echo $this -> langArray['komentar_caption']; ?></p>
<p class="napomena"><?php echo $this -> langArray['komentar_napomena']; ?></p>
</div>
		<table class="full-width">
			<tr>
				
				<td><textarea name="dodatni_zahtjevi"> </textarea></td>
			</tr>
			<tr>
				<td class="submit"><input type="submit" value="<?php echo $this -> langArray['submit_posalji']; ?>" /></td>
			</tr>
		</table>
</div>
<input type="hidden" name="ime_forme" value="business_rezervacija">
</form>

</div> <!-- kraj forma_wrapper -->