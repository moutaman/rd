<?php
/* @var $this DeviceInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Device Infos',
);

$this->menu=array(
	array('label'=>'Add Device', 'url'=>array('create')),
	array('label'=>'Manage Devices', 'url'=>array('admin')),
);
?>

<h1>Devices Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
