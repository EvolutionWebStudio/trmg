<?php


$this->menu=array(
	array('label'=>'List Vijesti', 'url'=>array('index')),
	array('label'=>'Create Vijesti', 'url'=>array('create')),
	array('label'=>'View Vijesti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vijesti', 'url'=>array('admin')),
);
?>

<h1>Izmjenite Vijest <?php echo $model->id; ?></h1>
<br/>
<br/>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>