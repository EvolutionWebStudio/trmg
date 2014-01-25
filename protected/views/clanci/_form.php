<div class="form">
<?php $this->layout = "admin"; ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clanci-form',
	'enableAjaxValidation'=>false,
)); 

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'naslov'); ?>
		<?php echo $form->textArea($model,'naslov',array('rows'=>1, 'cols'=>45)); ?>
		<?php echo $form->error($model,'naslov'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'autor'); ?>
		<?php echo $form->textField($model,'autor',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'autor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datum'); ?>
		<?php echo $form->textField($model,'datum'); ?>
		<?php echo $form->error($model,'datum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clanak'); ?>
		<?php echo $form->textArea($model,'clanak',array('rows'=>6, 'cols'=>50, 'class'=>'mceEditor')); ?>
		<?php echo $form->error($model,'clanak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'baner'); ?>
		<?php echo $form->textArea($model,'baner',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'baner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slika'); ?>
		<?php echo $form->textArea($model,'slika',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'slika'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategorija'); ?>
		<?php echo $form->textArea($model,'kategorija',array('rows'=>1, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kategorija'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sekcija'); ?>
		<?php echo $form->textArea($model,'sekcija',array('rows'=>1, 'cols'=>50,)); ?>
		<?php echo $form->error($model,'sekcija'); ?>
	</div> 
	
	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textArea($model,'alias',array('rows'=>1, 'cols'=>50,)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'jezik'); ?>
		<?php echo $form->textArea($model,'jezik',array('rows'=>1, 'cols'=>50,)); ?>
		<?php echo $form->error($model,'jezik'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textArea($model,'meta_title',array('rows'=>1, 'cols'=>50,)); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'meta_keywords'); ?>
		<?php echo $form->textArea($model,'meta_keywords',array('rows'=>1, 'cols'=>50,)); ?>
		<?php echo $form->error($model,'meta_keywords'); ?>
	</div>
    
    <div class="row">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textArea($model,'meta_description',array('rows'=>1, 'cols'=>50,)); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->