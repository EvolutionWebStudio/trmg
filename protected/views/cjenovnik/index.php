<?php
$this->layout = "admin";

$this->menu=array(
	array('label'=>'Create Cjenovnik', 'url'=>array('create')),
	array('label'=>'Manage Cjenovnik', 'url'=>array('admin')),
);
?>

<h1>Cjenovniks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
