<?php
/* @var $this AccedentController */
/* @var $model Accedent */

$this->breadcrumbs=array(
	'Accedents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Accedent', 'url'=>array('index')),
	array('label'=>'Manage Accedent', 'url'=>array('admin')),
);
?>

<h1>Create Accedent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>