<?php
/* @var $this CheckInHistoryController */
/* @var $model CheckInHistory */

$this->breadcrumbs=array(
	'Check In Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CheckInHistory', 'url'=>array('index')),
	array('label'=>'Manage CheckInHistory', 'url'=>array('admin')),
);
?>

<h1>Create CheckInHistory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>