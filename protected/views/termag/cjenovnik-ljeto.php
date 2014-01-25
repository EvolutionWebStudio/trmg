<div class="cjenovnik_wrapper">
    
<h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_za_sezonu']; ?> 2014</h2>
<h2 class="heading_cjenovnik"> 17.03.2014. - 20.12.2014.</h2>
	<table class="tbl_cjenovnik tabela2" >
		<tr>
			<td class="kolona kolona1">&nbsp;</td>
			<td colspan="2" class="kolona kolona2"><span class="table_caption"><?php echo $this->langArray['polupansion']; ?></span></td>
			<td colspan="2" class="kolona kolona3"><span class="table_caption"><?php echo $this->langArray['nocenje_sa_doruckom']; ?></span></td>
		</tr>
		<tr>
			<td><span class="table_caption"><?php echo $this->langArray['sobe']; ?></span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
		</tr>
		<?php $i=0; foreach($this->red as $one_row) { ?>
		
		
			<?php if($one_row->tip == 'soba'){ ?>
		<tr>
			<td class="kolona1"><?php echo '<span>'.' '.$this->tipSobe[$i++].'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_soba,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_soba,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_apartman,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_apartman,2).'</span>'; ?></td>
				
		</tr>
		<?php }} ?>
	</table>
    <br/><br/>
	<table class="tbl_cjenovnik tabela2">
		<tr>
			<td class="kolona kolona1">&nbsp;</td>
			<td colspan="2" class="kolona kolona2"><span class="table_caption"><?php echo $this->langArray['polupansion']; ?></span></td>
			<td colspan="2" class="kolona kolona3"><span class="table_caption"><?php echo $this->langArray['nocenje_sa_doruckom']; ?></span></td>
		</tr>
		<tr>
			<td><span class="table_caption"><?php echo $this->langArray['apartmani']; ?></span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
		</tr>
		<?php $i=0; foreach($this->red as $one_row) { ?>

		
			<?php if($one_row->tip == 'apartman'){ ?>
		<tr>
			<td class="kolona1"><?php echo '<span>'.$this->tipApartmana[$i++].'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_mali,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_mali,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_veliki,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_veliki,2).'</span>'; ?></td>
			
		</tr>
		<?php }} ?>
	</table>
    
    <?php// echo $this->red1[2]->tekst; ?>
    
</div>