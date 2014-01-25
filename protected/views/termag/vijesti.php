<?php   
        include_once('protected/config/osnovna_podesavanja.php'); 
        $this->layout='main';
        
        
 ?> 
<div class="vijesti clearfix">
	<div class="vijesti_banner"></div>
	<div class="vijesti_wrapper clearfix">
              
            <?php if($this->vijest>0){ //ako je setovan id odnosno odredjena vijest stampa se samo ta vijest ?> 
            	<article class="sadrzaj_vijesti"> 
                	<h2 class="vijesti_naslov"><?php echo $this->element->naslov; ?></h2>
                    <h5 class="vijesti_info"><?php echo  sprintf("Objavljeno %02s.%02s.%02s. u %02s:%02s", substr($this->element->datum,8,2), substr($this->element->datum,5,2), substr($this->element->datum,0,4), substr($this->element->datum,11,2),substr($this->element->datum,14,2));  ?></h5>
                	<p><?php echo $this->element->sadrzaj;  ?></p>
                	</br>
                	<fb:like href="http://termaghotel.com/termag/vijesti?vijest=<?php echo $this->element->id ?>" send="true" width="600" show_faces="false" font="arial"></fb:like>
                </article>
            <?php } elseif($this->vijest==-1){ ?>
            	<article class="arhiva_vijesti"> 
            		<ul>
                     <?php  foreach($this->models as $one_row){ 
                            if(strlen($one_row->naslov)<60)
                                 $naslov=$one_row->naslov;
                            else
                                $naslov=substr($one_row->naslov,0,56).'...'; ?>
                                 
                          <li> 
                          	<?php echo CHtml::link($naslov,array('termag/vijesti?vijest='.$one_row->id),array('title'=>$one_row->naslov));?> 
                          	<h5 class="vijesti_info"><?php echo  sprintf("Objavljeno %02s.%02s.%02s. u %02s:%02s", substr($one_row->datum,8,2), substr($one_row->datum,5,2), substr($one_row->datum,0,4), substr($one_row->datum,11,2),substr($one_row->datum,14,2));  ?></h5>
                          </li>
                            
                     <?php }?>
                    </ul>
                </article>
            <?php } else {  foreach($models as $model):  //ako nije izabrana odredjena vijest prikazi n vijesti?>
                <article class="sadrzaj_vijesti"> 
                	<h2 class="vijesti_naslov">	<?php echo CHtml::link($model->naslov,array('termag/vijesti?vijest='.$model->id),array('title'=>$model->naslov));?></h2>
                    <h5 class="vijesti_info"><?php echo sprintf("Objavljeno %02s.%02s.%02s. u %02s:%02s", substr($model->datum,8,2), substr($model->datum,5,2), substr($model->datum,0,4), substr($model->datum,11,2),substr($model->datum,14,2)); ?></h5>
                	<p><?php echo $model->sadrzaj; ?></p>
                	</br> 
                    <fb:like href="http://termaghotel.com/termag/vijesti?vijest=<?php echo $model->id; ?>" send="true" width="600" show_faces="false" font="arial"></fb:like>
                </article>
            <?php endforeach; } $this->widget('CLinkPager', array('pages' => $this->pages,)) ?>
    </div>
        
    <aside class="vijesti_linkovi">
        <h3>Ostale vijesti:</h3>
        <ul>
        <?php $j=0; foreach($this->elementi as $one_row){ 
            $j++; if($j>10) break; // prikazuje se 15 vijesti
            if(strlen($one_row->naslov)<35)
                 $naslov=$one_row->naslov;
            else
                $naslov=substr($one_row->naslov,0,31).'...';
             ?>
            <li> <?php echo CHtml::link($naslov,array('termag/vijesti?vijest='.$one_row->id),array('title'=>$one_row->naslov));?></li>     
        <?php }?>
            
        </ul>
        <?php echo CHtml::link('arhiva vijesti',array('termag/vijesti?vijest=-1'),array('title'=>'arhiva vijesti'));?>
    </aside>
</div>