<?php
$this->layout = "admin";


$this->menu=array(
	array('label'=>'Create Clanci', 'url'=>array('create')),
	array('label'=>'Manage Clanci', 'url'=>array('admin')),
);
?>

<h1>Clancis</h1>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
