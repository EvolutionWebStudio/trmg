<?php include_once('protected/config/osnovna_podesavanja.php'); 
$this->layout='main'; ?>	

<div class="clanak clearfix">
 
	<div class="slika_iznad_clanka">
		<img src="<?php podesavanja::m_sliku($this->baner); ?>" alt="" class=""/>
	
    		
		<div class="natpis"> 
			<a href="rezervacija"><p><?php echo $this->langArray['planirajte_svoj_boravak']; ?> </p>   
			<p><?php echo $this->langArray['pozovite_broj']; ?> <?php echo $this->langArray['rezervisite']; ?> <?php echo $this->langArray['online']; ?></p></a>
		</div>
	</div>
	
 <div class="wrapper_clanak clearfix">
 
	<div class="slika_pored_clanka">
		<img src="<?php podesavanja::m_sliku($this->slika); ?>" alt="" class=""/><br />
       
	</div>
	
	<article class="sadrzaj_clanka">
		
		<h2><?php echo $this->naslov; ?></h2>
		<p><?php echo $this->sadrzaj;  ?></p>
        
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
