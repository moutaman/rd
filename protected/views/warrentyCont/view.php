<?php
/* @var $this WarrentyContController */
/* @var $model WarrentyCont */

$this->breadcrumbs=array(
	'Warrenty Conts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List WarrentyCont', 'url'=>array('index')),
	array('label'=>'Create WarrentyCont', 'url'=>array('create')),
	array('label'=>'Update WarrentyCont', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete WarrentyCont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WarrentyCont', 'url'=>array('admin')),
);
?>

<h1>View WarrentyCont #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'start_date',
		'end_date',
	),
)); ?>
