<?php
/* @var $this ComponentsController */
/* @var $model Components */

$this->breadcrumbs=array(
	'Components'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Components', 'url'=>array('index')),
	array('label'=>'Create Components', 'url'=>array('create')),
	array('label'=>'Update Components', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Components', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Components', 'url'=>array('admin')),
);
?>

<h1>View Components #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'loop',
		'laser',
		'ethernet',
		'fiber_optic',
		'flash',
		'CCTV',
		'resolution',
		'ventination',
		'ph_cam_resolution',
		'op_system',
		'mpu',
	),
)); ?>
