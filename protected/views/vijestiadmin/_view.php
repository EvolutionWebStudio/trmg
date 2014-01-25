
	<article class="sadrzaj_vijesti view">
		<h2><?php echo CHtml::encode($data->naslov); ?></h2>
		
		<div class="sadrzaj_clanka">
			<?php echo CHtml::encode($data->sadrzaj); ?>
		</div>
		
		<div class="podaci_o_clanku">
			<b><?php echo CHtml::encode($data->getAttributeLabel('autor')); ?>:</b>
			<?php echo CHtml::encode($data->autor); ?>
			<br />
		
			<b><?php echo CHtml::encode($data->getAttributeLabel('datum')); ?>:</b>
			<?php echo CHtml::encode($data->datum); ?>
			<br />
		
			<b><?php echo CHtml::encode($data->getAttributeLabel('jezik')); ?>:</b>
			<?php echo CHtml::encode($data->jezik); ?>
			<br />
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
			<?php echo CHtml::encode($data->meta_title); ?>
			<br />
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
			<?php echo CHtml::encode($data->meta_description); ?>
			<br />
			
			<b><?php echo CHtml::encode($data->getAttributeLabel('meta_keywords')); ?>:</b>
			<?php echo CHtml::encode($data->meta_keywords); ?>
			
			
		</div>
	</article>

