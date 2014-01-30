<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period_od'); ?>
		<?php echo $form->textField($model,'period_od'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'period_do'); ?>
		<?php echo $form->textField($model,'period_do'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tip'); ?>
		<?php echo $form->textField($model,'tip',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_km_soba'); ?>
		<?php echo $form->textField($model,'cjena_km_soba',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_eur_soba'); ?>
		<?php echo $form->textField($model,'cjena_eur_soba',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_km_apartman'); ?>
		<?php echo $form->textField($model,'cjena_km_apartman',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_eur_apartman'); ?>
		<?php echo $form->textField($model,'cjena_eur_apartman',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_km_mali'); ?>
		<?php echo $form->textField($model,'cjena_km_mali',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_eur_mali'); ?>
		<?php echo $form->textField($model,'cjena_eur_mali',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_km_veliki'); ?>
		<?php echo $form->textField($model,'cjena_km_veliki',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cjena_eur_veliki'); ?>
		<?php echo $form->textField($model,'cjena_eur_veliki',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->