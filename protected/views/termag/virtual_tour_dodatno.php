<div class="virtual_tour_wrapper">
<?php 

    $tip_smjestaja = '';
    if(!isset($_GET['tip']))
		$tip_smjestaja = 'index_Hotel.html';
	else
		$tip_smjestaja = 'index_'.$_GET['tip'].'.html';
        
  /*if(file_exists('/virtual/hotel/'.$tip_smjestaja)){*/?>
		<iframe src="/virtual/hotel/<?php echo $tip_smjestaja; ?>" width="920" height="640">
  <?php /*}else echo "Stranica ne postoji"; */?>


</iframe>
</div>