<?php
$this->layout = "admin";


$this->menu=array(
	array('label'=>'List Clanci', 'url'=>array('index')),
	array('label'=>'Create Clanci', 'url'=>array('create')),
	array('label'=>'View Clanci', 'url'=>array('view', 'id'=>$model->idclanci)),
	array('label'=>'Manage Clanci', 'url'=>array('admin')),
);
?>

<h1>Update Clanci <?php echo $model->idclanci; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>