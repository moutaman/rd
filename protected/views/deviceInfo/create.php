<?php
/* @var $this DeviceInfoController */
/* @var $model DeviceInfo */

$this->breadcrumbs=array(
	'Device Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DeviceInfo', 'url'=>array('index')),
	array('label'=>'Manage DeviceInfo', 'url'=>array('admin')),
);
?>

<h1>Create DeviceInfo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>