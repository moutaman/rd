<?php
/* @var $this MaintinaceContController */
/* @var $model MaintinaceCont */

$this->breadcrumbs=array(
	'Maintinace Conts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MaintinaceCont', 'url'=>array('index')),
	array('label'=>'Create MaintinaceCont', 'url'=>array('create')),
	array('label'=>'Update MaintinaceCont', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MaintinaceCont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MaintinaceCont', 'url'=>array('admin')),
);
?>

<h1>View MaintinaceCont #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'SN',
		'start_date',
		'end_date',
	),
)); ?>
