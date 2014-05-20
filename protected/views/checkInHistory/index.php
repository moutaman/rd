<?php
/* @var $this CheckInHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Check In Histories',
);

$this->menu=array(
	array('label'=>'Create CheckInHistory', 'url'=>array('create')),
	array('label'=>'Manage CheckInHistory', 'url'=>array('admin')),
);
?>

<h1>Check In Histories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
