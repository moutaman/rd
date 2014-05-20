<?php
/* @var $this WarrentyContController */
/* @var $model WarrentyCont */

$this->breadcrumbs=array(
	'Warrenty Conts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List WarrentyCont', 'url'=>array('index')),
	array('label'=>'Manage WarrentyCont', 'url'=>array('admin')),
);
?>

<h1>Create WarrentyCont</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>