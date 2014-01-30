<?php
$this->layout = "admin";

$this->menu=array(
	array('label'=>'List Clanci', 'url'=>array('index')),
	array('label'=>'Create Clanci', 'url'=>array('create')),
	array('label'=>'Update Clanci', 'url'=>array('update', 'id'=>$model->idclanci)),
	array('label'=>'Delete Clanci', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idclanci),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clanci', 'url'=>array('admin')),
);
?>

<h1>View Clanci #<?php echo $model->idclanci; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'naslov',
		'clanak',
		'baner',
		'slika',
        'alias',
        'jezik'
	),
)); ?>
