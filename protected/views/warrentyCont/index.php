<?php
/* @var $this WarrentyContController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Warrenty Conts',
);

$this->menu=array(
	array('label'=>'Create WarrentyCont', 'url'=>array('create')),
	array('label'=>'Manage WarrentyCont', 'url'=>array('admin')),
);
?>

<h1>Warrenty Conts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
