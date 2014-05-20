<?php
/* @var $this DeviceInfoController */
/* @var $model DeviceInfo */

$this->breadcrumbs=array(
	'Device Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DeviceInfo', 'url'=>array('index')),
	array('label'=>'Create DeviceInfo', 'url'=>array('create')),
	array('label'=>'Update DeviceInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DeviceInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DeviceInfo', 'url'=>array('admin')),
);
?>

<h1>View DeviceInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'number',
		'manufacturer',
		'country_of_origin',
		'provider',
		'speed',
		'type',
		'status',
		'safety_pole',
		'warrenty',
		'insurance',
		'comment',
		'street',
		'longLocation',
		'latLocation',
	),
)); ?>
