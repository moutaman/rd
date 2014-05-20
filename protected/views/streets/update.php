<?php
/* @var $this StreetsController */
/* @var $model Streets */

$this->breadcrumbs=array(
	'Streets'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Streets', 'url'=>array('index')),
	array('label'=>'Create Streets', 'url'=>array('create')),
	array('label'=>'View Streets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Streets', 'url'=>array('admin')),
);
?>

<h1>Update Streets <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>