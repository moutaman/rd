<?php
/* @var $this MaintinaceContController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maintinace Conts',
);

$this->menu=array(
	array('label'=>'Create MaintinaceCont', 'url'=>array('create')),
	array('label'=>'Manage MaintinaceCont', 'url'=>array('admin')),
);
?>

<h1>Maintinace Conts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
