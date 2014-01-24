<div class="forma_wrapper">
<div class="dio_forme">
<div class="forma_header">
	<p class="naslov" ><?php echo $this->langArray['pitanje_caption']; ?></p>
	<p class="napomena" ><?php echo $this->langArray['pitanje_napomena']; ?></p>
</div>

	<form action="/mail/send_mail.php" method="post">

		<table>
			<tr>
				<td class="label"><label for="ime_i_prezime"><?php echo $this->langArray['ime_i_prezime_label']; ?></label></td>
				<td><input type="text" name="ime_i_prezime" /></td>
			</tr>
			
			<tr>
				<td class="label"><label for="telefon"><?php echo $this->langArray['telefon_label']; ?></label></td>
				<td><input type="text" name="telefon" /></td>
			</tr>
				
			<tr>	
				<td class="label"><label for="email"><?php echo $this->langArray['email_label']; ?></label></td>
				<td><input type="text" name="email" /></td>
			</tr>
				
			<tr>	
				<td class="label"><label for="poruka"><?php echo $this->langArray['pitanje_label']; ?></label></td>
				<td><textarea name="poruka" rows="10" cols="20"></textarea></td>
				<td class="submit"><input type="submit" value="<?php echo $this->langArray['submit_posalji']; ?>" /></td>
			</tr>

				
		</table>
		<input type="hidden" name="ime_forme" value="kontakt">
	</form>

</div>

<div class="dio_forme">
<div class="forma_header">
<p class="naslov" ><?php echo $this->langArray['mailing_lista_caption']; ?></p>
</div>

	<script language='javascript' src='http://echo7.bluehornet.com/phase2/bhecho_files/smartlists/check_entry.js'></script>
<script language="javascript">
	<!--
		function check_cdfs(form) {
			return true;
		}
	-->
</script><script language='javascript' type='text/javascript'>
<!--
    function doSubmit() {
        if (check_cdfs(document.survey)) {
			window.open('','signup','resizable=1,scrollbars=0,width=300,height=150');
            return true;
        }
        else { return false; }
    }
-->
</script><form action="http://echo7.bluehornet.com/phase2/bullseye/contactupdate1.php3" method="post" name="bullseye" id="bullseye"    onsubmit="return doSubmit();" target="signup">
  <table>
      <tr>
        <td class="label"><input type='hidden' name="cid" value="8eaf404f263309cfc92ff5b241d73b71" />
          <div align="right"><font face="Arial, Helvetica, sans-serif" size="1"><b><?php echo $this->langArray['email_label']; ?></b></font></div></td>
        <td><input  type="text" name="email2" /></td>
        <td class="submit"><input align="left"  type="submit" name="SubmitBullsEye" value="<?php echo $this->langArray['submit_posalji']; ?>" /></td>
      </tr>
    </table></td>
  </tr>
  </table>
  <input type='hidden' name='message' value="Thank you.">
</form>

</div>
</div> <!-- kraj forma_wrapper -->