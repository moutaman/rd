<?php
/* @var $this DataCollContController */
/* @var $model DataCollCont */

$this->breadcrumbs=array(
	'Data Collection Contracts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contracts', 'url'=>array('index')),
	array('label'=>'Add Contract', 'url'=>array('create')),
	array('label'=>'Update Contract', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contract', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contracts', 'url'=>array('admin')),
);
?>

<h1>View DataCollCont #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'number',
		'start_date',
		'end_date',
		'comment',
	),
)); ?>
