<?php include_once('protected/config/osnovna_podesavanja.php'); 
$this->layout='main'; ?>	

<div class="clanak clearfix">
 
	<div class="slika_iznad_clanka">
		<img src="<?php podesavanja::m_sliku($this->baner); ?>" alt="" class=""/>
	
    <?php if($this->koliba == true) { ?>
		<div class="koliba_promo">
	
			<img src="/media/images/koliba-ponedeljak.png" class="ponedeljak koliba_promo"/>
			<img src="/media/images/koliba-utorak.png" class="utorak koliba_promo"/>
			<img src="/media/images/koliba-srijeda.png" class="srijeda koliba_promo"/>
			<img src="/media/images/koliba-cetvrtak.png" class="cetvrtak koliba_promo"/>
			<img src="/media/images/koliba-petak.png" class="petak koliba_promo"/>
			<img src="/media/images/koliba-subota.png" class="subota koliba_promo"/>
			<img src="/media/images/koliba-nedelja.png" class="nedelja koliba_promo"/> 
		
		</div>
	<?php } ?>		
		<div class="natpis"> 
			<a href="rezervacija"><p><?php echo $this->langArray['planirajte_svoj_boravak']; ?> </p>   
			<p><?php echo $this->langArray['pozovite_broj']; ?> <?php echo $this->langArray['rezervisite']; ?> <?php echo $this->langArray['online']; ?></p></a>
		</div>
	</div>
	
 <div class="wrapper_clanak clearfix">
 
	<div class="slika_pored_clanka">
		<img src="<?php podesavanja::m_sliku($this->slika); ?>" alt="" class=""/>
	</div>
	
	<article class="sadrzaj_clanka">
		<?php if($this->forma != '' and $this->forma_i_clanak == 'ne' )
		{
			podesavanja::inc($this->forma);
			$this->forma = 0;
			
		}
		else if($this->forma_i_clanak == 'da') 
		{ ?>
		<h2><?php echo $this->naslov; ?></h2>
		<p><?php echo $this->sadrzaj; ?></p>
		 <?php 
		   podesavanja::inc($this->forma);
			$this->forma = 0;
		
		} 
		else {?>
		<h2><?php echo $this->naslov; ?></h2>
		<p><?php echo $this->sadrzaj;  ?></p>
		<?php } ?>
		
		
	</article>
	
    <aside class="podmeni">
		<ul>
			<?php if($this->sekcija == 'meni-gore')	{?>
			<li class='active'><?php echo CHtml::link($this->kategorija,array('termag/'.$this->alias));?></li>
			<?php } ?>

			<?php foreach($this->rows as $one_row){//print_r(array_keys($this->objekat));?>
			<li><?php if($one_row->naslov != $this->naslov){
			echo CHtml::link($one_row->kategorija,array('termag/'.$one_row->alias)); }
			else{?>
			<li class='active'><?php echo CHtml::link($one_row->kategorija,array('termag/'.$one_row->alias));?></li>
			<?php } }?></li>

		</ul>
    </aside>
  </div> <!-- kraj wrapper_clanak -->
 </div>
