<?php
/* @var $this WarrentyContController */
/* @var $model WarrentyCont */

$this->breadcrumbs=array(
	'Warrenty Conts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List WarrentyCont', 'url'=>array('index')),
	array('label'=>'Create WarrentyCont', 'url'=>array('create')),
	array('label'=>'View WarrentyCont', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage WarrentyCont', 'url'=>array('admin')),
);
?>

<h1>Update WarrentyCont <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>