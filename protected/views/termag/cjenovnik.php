<div class="cjenovnik_wrapper">
    
<h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_za_sezonu']; ?> 2013/2014</h2>
<h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_stari_dio']; ?></h2>
	<table class="tbl_cjenovnik tabela1" >
		<tr>
			<td><span class="table_caption">&nbsp;</span></td>
			<td><span class="table_caption">21.12.-28.12.</span></td>
			<td><span class="table_caption">28.12.-02.01.</span></td>
			<td><span class="table_caption">02.01.-12.01</span></td>
			<td><span class="table_caption">12.01.-23.02.</span></td>
            <td><span class="table_caption">23.02.-16.03.</span></td>
		</tr>
		<?php $i=0; foreach($this->red as $one_row) {
			if($one_row->tip == 'stari'){ ?>
		<tr>
			
			<td class="kolona1"><?php echo '<span>'.' '.$this->tipSobe[$i++].'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_soba,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_soba,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_apartman,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_apartman,2).'</span>'; ?></td>
            <td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_km_mali,2).'</span>'; ?></td>
				
		</tr>
		<?php }} ?>
	</table>
  <!--  <p class="bold space_top"><?php echo $this->langArray['napomena_cjenovnik']; ?></p> -->
<?php echo $this->red1[0]->tekst; ?>

<h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_novi_dio']; ?></h2>
	<table class="tbl_cjenovnik tabela1" >
		<tr>
			<td><span class="table_caption">&nbsp;</span></td>
			<td><span class="table_caption">21.12.-28.12.</span></td>
			<td><span class="table_caption">28.12.-02.01.</span></td>
			<td><span class="table_caption">02.01.-12.01</span></td>
			<td><span class="table_caption">12.01.-23.02.</span></td>
            <td><span class="table_caption">23.02.-16.03.</span></td>
		</tr>
		<?php $i=0; foreach($this->red as $one_row) {
			 if($one_row->tip == 'novi'){ ?>
		<tr>
			<td class="kolona1"><?php echo '<span>'.' '.$this->tipApartmana[$i++].'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_soba,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_soba,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_apartman,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_apartman,2).'</span>'; ?></td>
            <td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_km_mali,2).'</span>'; ?></td>
				
		</tr>
		<?php }} ?>
	</table>
	
    <?php echo '<span class="cjenovnik-napomena">'.' '.$this->langArray['cijene_po_osobi'].'</span>'; ?>
    	<table class="tbl_cjenovnik tabela3" >
		<tr>
			<td><span class="table_caption">&nbsp;</span></td>
			<td><span class="table_caption">21.12.-28.12.</span></td>
			<td><span class="table_caption">28.12.-02.01.</span></td>
			<td><span class="table_caption">02.01.-12.01</span></td>
			<td><span class="table_caption">12.01.-23.02.</span></td>
            <td><span class="table_caption">23.02.-16.03.</span></td>
		</tr>
        <tr>
            <td class="kolona1"><?php echo '<span>'.' '.$this->langArray['porodicne_sobe'].'</span>'; ?></td>
            <td class="kolona2"><?php echo '<span>'.number_format(450,2).'</span>'; ?></td>
            <td class="kolona3"><?php echo '<span>'.number_format(665,2).'</span>'; ?></td>
            <td class="kolona4"><?php echo '<span>'.number_format(595,2).'</span>'; ?></td>
            <td class="kolona5"><?php echo '<span>'.number_format(470,2).'</span>'; ?></td>
            <td class="kolona6"><?php echo '<span>'.number_format(430,2).'</span>'; ?></td>
        </tr>
        <tr>
            <td class="kolona2"><?php echo '<span>'.' '.$this->langArray['porodicne_sobe1'].'</span>'; ?></td>
            <td class="kolona2"><?php echo '<span>'.number_format(360,2).'</span>'; ?></td>
            <td class="kolona3"><?php echo '<span>'.number_format(665,2).'</span>'; ?></td>
            <td class="kolona4"><?php echo '<span>'.number_format(505,2).'</span>'; ?></td>
            <td class="kolona5"><?php echo '<span>'.number_format(380,2).'</span>'; ?></td>
            <td class="kolona6"><?php echo '<span>'.number_format(340,2).'</span>'; ?></td>
        </tr>
        </table>
        <?php echo '<span class="cjenovnik-napomena">'.' '.$this->langArray['termag_porodicne_sobe'].'</span>'; ?>
    <!--    <p class="bold space_top"><?php echo $this->langArray['napomena_cjenovnik']; ?></p> -->
<?php echo $this->red1[2]->tekst; ?>






<h2 class="heading_cjenovnik"><?php echo $this->langArray['cjenovnik_villa']; ?></h2>
    
	<table class="tbl_cjenovnik tabela4">
		<tr>
			<td class="kolona kolona1">&nbsp;</td>
			<td colspan="2" class="kolona kolona2"><span class="table_caption"><?php echo $this->langArray['mali_apartman_villa']; ?></span></td>
			<td colspan="2" class="kolona kolona3"><span class="table_caption"><?php echo $this->langArray['veliki_apartman_villa']; ?></span></td>
		</tr>
		<tr>
			<td><span class="table_caption"><?php echo $this->langArray['period']; ?></span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
			<td><span class="table_caption">KM</span></td>
			<td><span class="table_caption">EUR</span></td>
		</tr>
		<?php foreach($this->red as $one_row) {
			if($one_row->tip == 'vila'){ ?>

		<tr>
			<td class="kolona1"><?php echo '<span>'.' '.$this->langArray['od'].' '.date(" d. M. ",strtotime($one_row->period_od)).' '.$this->langArray['do'].' '.date(" d. M. ",strtotime($one_row->period_do)).'</span>'; ?></td>
			<td class="kolona2"><?php echo '<span>'.number_format($one_row->cjena_km_mali,2).'</span>'; ?></td>
			<td class="kolona3"><?php echo '<span>'.number_format($one_row->cjena_eur_mali,2).'</span>'; ?></td>
			<td class="kolona4"><?php echo '<span>'.number_format($one_row->cjena_km_veliki,2).'</span>'; ?></td>
			<td class="kolona5"><?php echo '<span>'.number_format($one_row->cjena_eur_veliki,2).'</span>'; ?></td>
			
		</tr>
		<?php }} ?>
	</table>
   <!-- <p class="bold space_top"><?php echo $this->langArray['napomena_cjenovnik']; ?></p> -->
    <?php echo $this->red1[1]->tekst; ?>
    
</div>