<div class="view">

<?php $this->layout = "admin"; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('idclanci')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idclanci), array('view', 'id'=>$data->idclanci)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('naslov')); ?>:</b>
	<?php echo CHtml::encode($data->naslov); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:</b>
	<?php echo CHtml::encode($data->autor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datum')); ?>:</b>
	<?php echo CHtml::encode($data->datum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clanak')); ?>:</b>
	<?php echo CHtml::encode($data->clanak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('baner')); ?>:</b>
	<?php echo CHtml::encode($data->baner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slika')); ?>:</b>
	<?php echo CHtml::encode($data->slika); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('kategorija')); ?>:</b>
	<?php echo CHtml::encode($data->kategorija); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sekcija')); ?>:</b>
	<?php echo CHtml::encode($data->sekcija); ?>
	<br />

	

</div>