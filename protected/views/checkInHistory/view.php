<?php
/* @var $this CheckInHistoryController */
/* @var $model CheckInHistory */

$this->breadcrumbs=array(
	'Check In Histories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CheckInHistory', 'url'=>array('index')),
	array('label'=>'Create CheckInHistory', 'url'=>array('create')),
	array('label'=>'Update CheckInHistory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CheckInHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CheckInHistory', 'url'=>array('admin')),
);
?>

<h1>View CheckInHistory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'check_date',
		'checker',
		'checked_comp',
	),
)); ?>
