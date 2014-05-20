<?php
/* @var $this StreetsController */
/* @var $model Streets */

$this->breadcrumbs=array(
	'Streets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Streets', 'url'=>array('index')),
	array('label'=>'Manage Streets', 'url'=>array('admin')),
);
?>

<h1>Create Streets</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>