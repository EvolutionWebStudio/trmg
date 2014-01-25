<?php
$this->layout = "admin";

$this->menu=array(
	array('label'=>'List Cjenovnik', 'url'=>array('index')),
	array('label'=>'Manage Cjenovnik', 'url'=>array('admin')),
);
?>

<h1>Create Cjenovnik</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>