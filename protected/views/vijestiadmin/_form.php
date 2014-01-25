<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vijesti-form',
	'enableAjaxValidation'=>true,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<table class="vijesti_forma">
		<tbody>
			<tr>
				<td>
					<?php echo $form->labelEx($model,'naslov'); ?>
					<?php echo $form->textField($model,'naslov',array('size'=>60,'maxlength'=>120)); ?>
					<?php echo $form->error($model,'naslov'); ?>
				</td>
			</tr>
			
			<tr>
				<td>		
					<?php echo $form->textArea($model,'sadrzaj',array('rows'=>6, 'cols'=>50, 'class'=>'mceEditor')); ?>
					<?php echo $form->error($model,'sadrzaj'); ?>
				</td>
			</tr>
		<!--
			<tr>
				<td>
					<?php echo $form->labelEx($model,'autor'); ?>
					<?php echo $form->textField($model,'autor',array('size'=>45,'maxlength'=>45, 'value'=>'Administrator')); ?>
					<?php echo $form->error($model,'autor'); ?>
				</td>
			</tr>
		
			<tr>
				<td>
					<?php //echo $form->labelEx($model,'datum'); ?>
					<?php //echo $form->textField($model,'datum'); ?>
					<?php //echo $form->error($model,'datum'); ?>
				</td>
			</tr>
		-->
			<tr>
				<td>
					<?php echo $form->labelEx($model,'jezik'); ?>
					<?php echo $form->dropDownList($model,'jezik',array('sr'=>'Srpski','en'=>'Engleski','ru'=>'Ruski')); ?>
					<?php echo $form->error($model,'jezik'); ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<br />
					<br />
					<p>
						Meta informacije
					</p>
				</td>
			</tr>
					
			<tr>
				<td>
					<hr />
				</td>
				
			<tr>
				<td>
					<?php echo $form->labelEx($model,'meta_title'); ?>
				</td>
			</tr>
				
			<tr>
				<td>
					<?php echo $form->textField($model,'meta_title', array('size'=>100,'maxlength'=>255)); ?> 
					<?php echo $form->error($model,'meta_title'); ?>
				</td>
			</tr>
				
			<tr>
				<td>
					<?php echo $form->labelEx($model,'meta_description'); ?>
				</td>
			</tr>
				
			<tr>
				<td>
					<?php echo $form->textArea($model,'meta_description', array('rows'=>4, 'cols'=>98)); ?> 
					<?php echo $form->error($model,'meta_description'); ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<?php echo $form->labelEx($model,'meta_keywords'); ?>
				</td>
			</tr>
				
			<tr>
				<td>
					
					<?php echo $form->textField($model,'meta_keywords', array('size'=>100,'maxlength'=>255)); ?> 
					<?php echo $form->error($model,'meta_keywords'); ?>
				</td>
			</tr>
				
				<td>
					<hr />
				</td>
			</tr>
			
			<tr>
				<td class="buttons">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Objavite vijest' : 'Snimite promjene'); ?>
				</td>
			</tr>
		</tbody>
	</table>
	
<?php $this->endWidget(); ?>

</div><!-- form -->