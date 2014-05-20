<?php
/* @var $this CheckInHistoryController */
/* @var $model CheckInHistory */

$this->breadcrumbs=array(
	'Check In Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CheckInHistory', 'url'=>array('index')),
	array('label'=>'Create CheckInHistory', 'url'=>array('create')),
	array('label'=>'View CheckInHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CheckInHistory', 'url'=>array('admin')),
);
?>

<h1>Update CheckInHistory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>