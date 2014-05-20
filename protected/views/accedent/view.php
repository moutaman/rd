<?php
/* @var $this AccedentController */
/* @var $model Accedent */

$this->breadcrumbs=array(
	'Accedents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Accedent', 'url'=>array('index')),
	array('label'=>'Create Accedent', 'url'=>array('create')),
	array('label'=>'Update Accedent', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Accedent', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Accedent', 'url'=>array('admin')),
);
?>

<h1>View Accedent #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'number',
		'date',
		'car_id',
		'car_insurance',
		'driver_id',
	),
)); ?>
