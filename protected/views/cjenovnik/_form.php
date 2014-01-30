<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cjenovnik-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'period_od'); ?>
		<?php echo $form->textField($model,'period_od'); ?>
		<?php echo $form->error($model,'period_od'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'period_do'); ?>
		<?php echo $form->textField($model,'period_do'); ?>
		<?php echo $form->error($model,'period_do'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tip'); ?>
		<?php echo $form->textField($model,'tip',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'tip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_km_soba'); ?>
		<?php echo $form->textField($model,'cjena_km_soba',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_km_soba'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_eur_soba'); ?>
		<?php echo $form->textField($model,'cjena_eur_soba',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_eur_soba'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_km_apartman'); ?>
		<?php echo $form->textField($model,'cjena_km_apartman',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_km_apartman'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_eur_apartman'); ?>
		<?php echo $form->textField($model,'cjena_eur_apartman',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_eur_apartman'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_km_mali'); ?>
		<?php echo $form->textField($model,'cjena_km_mali',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_km_mali'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_eur_mali'); ?>
		<?php echo $form->textField($model,'cjena_eur_mali',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_eur_mali'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_km_veliki'); ?>
		<?php echo $form->textField($model,'cjena_km_veliki',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_km_veliki'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cjena_eur_veliki'); ?>
		<?php echo $form->textField($model,'cjena_eur_veliki',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cjena_eur_veliki'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->