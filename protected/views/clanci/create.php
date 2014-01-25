<?php
$this->layout = "admin";

$this->menu=array(
	array('label'=>'List Clanci', 'url'=>array('index')),
	array('label'=>'Manage Clanci', 'url'=>array('admin')),
);
?>
	

<h1>Create Clanci</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

