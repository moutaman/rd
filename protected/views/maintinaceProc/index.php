<?php
/* @var $this MaintinaceProcController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maintinace Procs',
);

$this->menu=array(
	array('label'=>'Create MaintinaceProc', 'url'=>array('create')),
	array('label'=>'Manage MaintinaceProc', 'url'=>array('admin')),
);
?>

<h1>Maintinace Procs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
