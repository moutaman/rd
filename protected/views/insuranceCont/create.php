<?php
/* @var $this InsuranceContController */
/* @var $model InsuranceCont */

$this->breadcrumbs=array(
	'Insurance Conts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InsuranceCont', 'url'=>array('index')),
	array('label'=>'Manage InsuranceCont', 'url'=>array('admin')),
);
?>

<h1>Create InsuranceCont</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>