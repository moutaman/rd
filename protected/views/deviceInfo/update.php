<?php
/* @var $this DeviceInfoController */
/* @var $model DeviceInfo */

$this->breadcrumbs=array(
	'Device Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DeviceInfo', 'url'=>array('index')),
	array('label'=>'Create DeviceInfo', 'url'=>array('create')),
	array('label'=>'View DeviceInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DeviceInfo', 'url'=>array('admin')),
);
?>

<h1>Update DeviceInfo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>