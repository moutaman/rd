<?php
/* @var $this MaintinaceProcController */
/* @var $model MaintinaceProc */

$this->breadcrumbs=array(
	'Maintinace Procs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MaintinaceProc', 'url'=>array('index')),
	array('label'=>'Create MaintinaceProc', 'url'=>array('create')),
	array('label'=>'Update MaintinaceProc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MaintinaceProc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MaintinaceProc', 'url'=>array('admin')),
);
?>

<h1>View MaintinaceProc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'mpu',
		'ventination',
		'sensor',
		'internel',
		'cleaning',
		'comment',
	),
)); ?>
