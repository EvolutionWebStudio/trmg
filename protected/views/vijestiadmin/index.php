<?php

$this->menu=array(
	array('label'=>'Create Vijesti', 'url'=>array('create')),
	array('label'=>'Manage Vijesti', 'url'=>array('admin')),
);
?>

<h1>Spisak svih postojećih vijesti</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
