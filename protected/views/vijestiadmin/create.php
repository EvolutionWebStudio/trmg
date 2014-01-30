<?php


$this->menu=array(
	array('label'=>'List Vijesti', 'url'=>array('index')),
	array('label'=>'Manage Vijesti', 'url'=>array('admin')),
);
?>

<h1>Napišite novu vijest</h1>
<br/>
<br/>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>