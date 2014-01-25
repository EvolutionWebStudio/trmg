<?php
$this->layout = "admin";

$this->menu=array(
	array('label'=>'List Cjenovnik', 'url'=>array('index')),
	array('label'=>'Create Cjenovnik', 'url'=>array('create')),
	array('label'=>'View Cjenovnik', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cjenovnik', 'url'=>array('admin')),
);
?>

<h1>Update Cjenovnik <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>