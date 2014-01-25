<?php
$this->layout = "admin";

$this->menu=array(
	array('label'=>'List Cjenovnik', 'url'=>array('index')),
	array('label'=>'Create Cjenovnik', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('cjenovnik-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cjenovniks</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cjenovnik-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'period_od',
		'period_do',
		'tip',
		'cjena_km_soba',
		'cjena_eur_soba',
		/*
		'cjena_km_apartman',
		'cjena_eur_apartman',
		'cjena_km_mali',
		'cjena_eur_mali',
		'cjena_km_veliki',
		'cjena_eur_veliki',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
