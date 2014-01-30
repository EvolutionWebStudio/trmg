<?php
/*
$this->menu=array(
	array('label'=>'List Vijesti', 'url'=>array('index')),
	array('label'=>'Create Vijesti', 'url'=>array('create')),
	array('label'=>'Update Vijesti', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vijesti', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vijesti', 'url'=>array('admin')),
);*/
?>

<h1>Provjerite Vijest #<?php echo $model->id; ?></h1>
<br/>
<br/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'naslov',
		'sadrzaj',
		'autor',
		'datum',
		'jezik',
		'meta_title',
		'meta_description',
		'meta_keywords',
		
		
	),
)); ?>
