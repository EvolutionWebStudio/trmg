<?php
$this->breadcrumbs=array(
	'Cjenovniks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cjenovnik', 'url'=>array('index')),
	array('label'=>'Create Cjenovnik', 'url'=>array('create')),
	array('label'=>'Update Cjenovnik', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cjenovnik', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cjenovnik', 'url'=>array('admin')),
);
?>

<h1>View Cjenovnik #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'period_od',
		'period_do',
		'tip',
		'cjena_km_soba',
		'cjena_eur_soba',
		'cjena_km_apartman',
		'cjena_eur_apartman',
		'cjena_km_mali',
		'cjena_eur_mali',
		'cjena_km_veliki',
		'cjena_eur_veliki',
	),
)); ?>
