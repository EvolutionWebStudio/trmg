<div class="cjenovnik_wrapper">
    
<h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_za_sezonu']; ?> 2013/2014</h2>

	<table class="tbl_cjenovnik tabela1" >
		<tr>
			<th class="kolona kolona1">&nbsp;</td>
			<th colspan="2" class="kolona kolona2"><span class="table_caption"><?php echo $this->langArray['dvokrevetna_soba']; ?></span></th>
			<th colspan="2" class="kolona kolona3"><span class="table_caption"><?php echo $this->langArray['dvokrevetni_apartman']; ?></span></th>
		</tr>
		<tr>
			<td><span class="table_caption"><?php echo $this->langArray['period']; ?></span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
		</tr>
		<?php foreach($this->red as $one_row) { ?>
		
		<tr>
			<?php if($one_row->tip == 'hotel'){ ?>
			<td class="kolona1"><?php echo '<span>'.' '.$this->langArray['od'].' '.date(" d. M.",strtotime($one_row->period_od)).' '.$this->langArray['do'].' '.date("d.M",strtotime($one_row->period_do)).'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_soba,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_soba,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_apartman,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_apartman,2).'</span>'; ?></td>
				
		</tr>
		<?php }} ?>
	</table>
	
    <?php echo $this->red1[0]->tekst; ?>
    
    <h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_villa']; ?></h2>
    
	<table class="tbl_cjenovnik tabela1">
		<tr>
			<th class="kolona kolona1">&nbsp;</th>
			<th colspan="2" class="kolona kolona2"><span class="table_caption"><?php echo $this->langArray['mali_apartman_villa']; ?></span></th>
			<th colspan="2" class="kolona kolona3"><span class="table_caption"><?php echo $this->langArray['veliki_apartman_villa']; ?></span></th>
		</tr>
		<tr>
			<td><span class="table_caption"><?php echo $this->langArray['period']; ?></span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
		</tr>
		<?php foreach($this->red as $one_row) { ?>

		<tr>
			<?php if($one_row->tip == 'vila'){ ?>
			<td class="kolona1"><?php echo '<span>'.' '.$this->langArray['od'].' '.date(" d. M. ",strtotime($one_row->period_od)).' '.$this->langArray['do'].' '.date(" d. M. ",strtotime($one_row->period_do)).'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_mali,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_mali,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_veliki,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_veliki,2).'</span>'; ?></td>
			
		</tr>
		<?php }} ?>
	</table>
    
    <?php echo $this->red1[1]->tekst; ?>
    
</div>