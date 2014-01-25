<div class="wide form">
<?php $this->layout = "admin"; ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idclanci'); ?>
		<?php echo $form->textField($model,'idclanci'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'naslov'); ?>
		<?php echo $form->textArea($model,'naslov',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autor'); ?>
		<?php echo $form->textField($model,'autor',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datum'); ?>
		<?php echo $form->textField($model,'datum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clanak'); ?>
		<?php echo $form->textArea($model,'clanak',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'baner'); ?>
		<?php echo $form->textArea($model,'baner',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'slika'); ?>
		<?php echo $form->textArea($model,'slika',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategorija'); ?>
		<?php echo $form->textArea($model,'kategorija',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->