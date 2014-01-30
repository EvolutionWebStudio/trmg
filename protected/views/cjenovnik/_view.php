<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_od')); ?>:</b>
	<?php echo CHtml::encode($data->period_od); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('period_do')); ?>:</b>
	<?php echo CHtml::encode($data->period_do); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip')); ?>:</b>
	<?php echo CHtml::encode($data->tip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_km_soba')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_km_soba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_eur_soba')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_eur_soba); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_km_apartman')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_km_apartman); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_eur_apartman')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_eur_apartman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_km_mali')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_km_mali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_eur_mali')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_eur_mali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_km_veliki')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_km_veliki); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cjena_eur_veliki')); ?>:</b>
	<?php echo CHtml::encode($data->cjena_eur_veliki); ?>
	<br />

	*/ ?>

</div>