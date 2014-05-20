<?php
/* @var $this InsuranceContController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Insurance Conts',
);

$this->menu=array(
	array('label'=>'Create InsuranceCont', 'url'=>array('create')),
	array('label'=>'Manage InsuranceCont', 'url'=>array('admin')),
);
?>

<h1>Insurance Conts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
