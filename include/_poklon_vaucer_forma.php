<div class="forma_wrapper">
	<form action="/mail/send_mail.php" method="post">

	
	<div class="dio_forme">

					<div class="forma_header">
						<p class="naslov" ><?php echo $this->langArray['kupac_caption']; ?></p>
						<p class="napomena" ><?php echo $this->langArray['obavezna_polja']; ?></p>
					</div>
					
			<table>	
				<tr>
					<td class="label"><label for="ime_i_prezime_pos"><?php echo $this->langArray['ime_i_prezime_label']; ?>*</label></td>
					<td><input type="text" name="ime_i_prezime_pos" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="kompanija_pos"><?php echo $this->langArray['kompanija_label']; ?></label></td>
					<td><input type="text" name="kompanija_pos" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="adresa_pos"><?php echo $this->langArray['adresa_label']; ?>*</label></td>
					<td><input type="text" name="adresa_pos" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="grad_pos"><?php echo $this->langArray['grad_label']; ?>*</label></td>
					<td><input type="text" name="grad_pos" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="drzava_pos"><?php echo $this->langArray['drzava_label']; ?>*</label></td>
					<td>
					<select name="drzava_pos">
						<option>BiH</option>
						<option>Srbija</option>
						<option>Hrvatska</option>
						<option>Crna Gora</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td class="label"><label for="postanski_broj_pos"><?php echo $this->langArray['postanski_broj_label']; ?>*</label></td>
					<td><input type="text" name="postanski_broj_pos" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="telefon_pos"><?php echo $this->langArray['telefon_label']; ?>*</label></td>
					<td><input type="text" name="telefon_pos" /></td>
				</tr>
					
				<tr>	
					<td class="label"><label for="email_pos"><?php echo $this->langArray['email_label']; ?>*</label></td>
					<td><input type="text" name="email_pos" /></td>
				</tr>
			</table>
				
			
				<div class="forma_header">
					<p class="naslov" ><?php echo $this->langArray['primaoc_caption']; ?></p>
					<p class="napomena" ><?php echo $this->langArray['obavezna_polja']; ?></p>
				</div>
				
			<table>
				<tr>
					<td class="label"><label for="ime_i_prezime_prim"><?php echo $this->langArray['ime_i_prezime_label']; ?>*</label></td>
					<td><input type="text" name="ime_i_prezime_prim" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="kompanija_prim"><?php echo $this->langArray['kompanija_label']; ?></label></td>
					<td><input type="text" name="kompanija_prim" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="adresa_prim"><?php echo $this->langArray['adresa_label']; ?>*</label></td>
					<td><input type="text" name="adresa_prim" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="grad_prim"><?php echo $this->langArray['grad_label']; ?>*</label></td>
					<td><input type="text" name="grad_prim" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="drzava_prim"><?php echo $this->langArray['drzava_label']; ?>*</label></td>
					<td>
					<select name="drzava_prim">
						<option>BiH</option>
						<option>Srbija</option>
						<option>Hrvatska</option>
						<option>Crna Gora</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td class="label"><label for="postanski_broj_prim"><?php echo $this->langArray['postanski_broj_label']; ?>*</label></td>
					<td><input type="text" name="postanski_broj_prim" /></td>
				</tr>
			</table>
	
				
		
	</div>

<div class="dio_forme">
<div class="forma_header">
<p class="naslov" ><?php echo $this->langArray['poklon_vaucer_caption']; ?></p>
</div>

		<table>
			<tr>
					<td class="label"><label for="iznos"><?php echo $this->langArray['iznos_label']; ?></label><p class="napomena" ><?php echo $this->langArray['iznos_napomena']; ?></p></td>
					<td><input type="text" name="iznos" /></td>
				</tr>
				
				<tr>
					<td class="label"><label for="opcije_dostave"><?php echo $this->langArray['dostava_label']; ?></label><p class="napomena" ><?php echo $this->langArray['dostava_napomena']; ?></p></td>
					<td>
					<select name="opcije_dostave">
						<option>FedEx Ground - $8</option>
						<option>FedEx Two Day - $20</option>
						<option>FedEx Overnight - $30</option>
					</select>
					</td>
				</tr>

		</table>

</div>

<div class="dio_forme">
<div class="forma_header">
<p class="naslov" ><?php echo $this->langArray['placanje_caption']; ?></p>
</div>
		<table>
			<tr>
				<td><p><?php echo $this->langArray['placanje_napomena']; ?></p></td>
				<td class="submit"><input type="submit" value="<?php echo $this->langArray['submit_posalji']; ?>" /></td>
			</tr>
		</table>
</div>
<input type="hidden" name="ime_forme" value="poklon_vaucer"/>
</form>

</div> <!-- kraj forma_wrapper -->