
<?php
	$root = "/";
	$images_path = 'media/images/galerija/';
	$album_path['hotel'] = $images_path.'Hotel/';
	$album_path['smjestaj'] = $images_path.'Smjestaj/';
	$album_path['koliba'] = $images_path.'Koliba/';
	$album_path['spa'] = $images_path.'Spa/';
	$album_path['villa_termag'] = $images_path.'Villa Termag/';
	$album_path['restorani'] = $images_path.'Restorani/';
	$album_path['jahorina'] = $images_path.'Jahorina/';
	$album_path['smjestaj_novi_dio'] = $images_path.'Smjestaj Novi Dio/';
	$album_path['konferencijska_sala'] = $images_path.'Konferencijska Sala/';
	
	$galerija_album = '';
    $klasa = array();
    $klasa['hotel'] = '';
    $klasa['smjestaj'] = '';
    $klasa['spa'] = '';
    $klasa['restorani'] = '';
    $klasa['koliba'] = '';
    $klasa['villa_termag'] = '';
    $klasa['jahorina'] = '';
    $klasa['smjestaj_novi_dio'] = '';
    $klasa['konferencijska_sala'] = '';
	
	$postojeci_albumi = array('hotel', 'smjestaj', 'spa', 'restorani', 'koliba', 'villa_termag', 'jahorina', 'smjestaj_novi_dio', 'konferencijska_sala');
	
	if(!isset($_GET['album']) || !in_array($_GET['album'], $postojeci_albumi))
		$galerija_album = 'hotel';
	else
		$galerija_album = $_GET['album'];
?>

	<div id='galerija_wrapper clearfix'>
		<div id='header'></div>
		<div id='body'>
			<div id="bigPic">

			
			<?php
			$firstAlbum = ''; 
	             $i=0;
				 $j=1;
	             if(file_exists($album_path[$galerija_album])) {
	               $klasa[$galerija_album] = 'active';
	                $files = array_slice(scandir($album_path[$galerija_album]), 2);  
	                if(count($files)) {
	                    natcasesort($files);
	                    foreach($files as $file) {
                        if($file != '.' && $file != '..') {
	                          	if($i===0)
                         		$firstAlbum = $file;
	                        	else
								{
									echo '<div class=""><img src="'.$root.$album_path[$galerija_album].$j.'.jpg" alt="" /></div> '; 
									$j++;
								}
	                     	 ++$i;
	                 	}
	           		}
	     		}
	     	}
	        ?>
			
			<div class="galerija_navigacija nav_nazad"></div>
				<div class="galerija_navigacija nav_naprijed"></div>
				
			</div>
			
			<div class="thumbs_bg">
			<div class="thumbs_wrapper">
			<ul id="thumbs">
			
				<?php
	             $firstAlbum = ''; 
	             $z=0;
				 $k=1;
	             if(file_exists($album_path[$galerija_album].'thumbs')) {
	                $files = array_slice(scandir($album_path[$galerija_album].'thumbs'), 2);
	                if(count($files)) {
	                    natcasesort($files);
	                    foreach($files as $file) {
							if($file != '.' && $file != '..') {
	                          	if($i===0)
									$firstAlbum = $file; 
	                        	else
								{
									echo '<li rel=" '.$k.' "><img src="'.$root.$album_path[$galerija_album].'thumbs/'.$k.'_thumb.jpg" alt="" /></li>';
									$k++;
								}
	                     	 ++$z;
	                 	}
	           		}
	     		}
	     	}
	        ?>

			</ul>
			</div>
			</div>
            
            <ul class="galerija_albumi">
            	
                <li><?php echo CHtml::link('Hotel', array('termag/galerija/hotel'),array('class'=>$klasa['hotel'])); ?></li>
                <li><?php echo CHtml::link('Smještaj stari dio',array('termag/galerija/smjestaj'),array('class'=>$klasa['smjestaj'])); ?></li>
                <li><?php echo CHtml::link('Smještaj novi dio',array('termag/galerija/smjestaj_novi_dio'),array('class'=>$klasa['smjestaj_novi_dio'])); ?></li>
                <li><?php echo CHtml::link('Spa&amp;Wellness',array('termag/galerija/spa'),array('class'=>$klasa['spa'])); ?></li>
                <li><?php echo CHtml::link('Restorani',array('termag/galerija/restorani'),array('class'=>$klasa['restorani'])); ?></li>
                <li><?php echo CHtml::link('Koliba',array('termag/galerija/koliba'),array('class'=>$klasa['koliba'])); ?></li>
                <li><?php echo CHtml::link('Villa Termag',array('termag/galerija/villa_termag'),array('class'=>$klasa['villa_termag'])); ?></li>
                <li><?php echo CHtml::link('Jahorina',array('termag/galerija/jahorina'),array('class'=>$klasa['jahorina'])); ?></li>
                <li><?php echo CHtml::link('Konferencijska sala',array('termag/galerija/konferencijska_sala'),array('class'=>$klasa['konferencijska_sala'])); ?></li>
            </ul>
		
		</div>
	</div>

	

