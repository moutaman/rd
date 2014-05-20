<?php
/* @var $this InsuranceContController */
/* @var $model InsuranceCont */

$this->breadcrumbs=array(
	'Insurance Conts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List InsuranceCont', 'url'=>array('index')),
	array('label'=>'Create InsuranceCont', 'url'=>array('create')),
	array('label'=>'Update InsuranceCont', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete InsuranceCont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage InsuranceCont', 'url'=>array('admin')),
);
?>

<h1>View InsuranceCont #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'start_date',
		'end_date',
	),
)); ?>
