<?php
/* @var $this AccedentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Accedents',
);

$this->menu=array(
	array('label'=>'Create Accedent', 'url'=>array('create')),
	array('label'=>'Manage Accedent', 'url'=>array('admin')),
);
?>

<h1>Accedents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
