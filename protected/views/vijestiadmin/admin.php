<?php


$this->menu=array(
	array('label'=>'List Vijesti', 'url'=>array('index')),
	array('label'=>'Create Vijesti', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vijesti-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Mjenjajte i Brišite Vijesti</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vijesti-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'naslov',
		'sadrzaj',
		'autor',
		'datum',
		'jezik',
        'meta_keywords',
        'meta_title',
        'meta_description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
