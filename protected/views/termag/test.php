<div class="cjenovnik_wrapper">
    
        <?php foreach($models as $model): ?>
   <h2> <?php echo $model->naslov; ?></h2>
   <p> <?php echo $model->sadrzaj; ?></p>
        <?php endforeach; ?>


    <p><?php $this->widget('CLinkPager', array('pages' => $pages,)) ?></p>
</div>