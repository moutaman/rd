<?php
/* @var $this AccedentController */
/* @var $model Accedent */

$this->breadcrumbs=array(
	'Accedents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accedent', 'url'=>array('index')),
	array('label'=>'Create Accedent', 'url'=>array('create')),
	array('label'=>'View Accedent', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Accedent', 'url'=>array('admin')),
);
?>

<h1>Update Accedent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>