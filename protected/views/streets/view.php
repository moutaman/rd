<?php
/* @var $this StreetsController */
/* @var $model Streets */

$this->breadcrumbs=array(
	'Streets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Streets', 'url'=>array('index')),
	array('label'=>'Create Streets', 'url'=>array('create')),
	array('label'=>'Update Streets', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Streets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Streets', 'url'=>array('admin')),
);
?>

<h1>View Streets #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'region',
	),
)); ?>
