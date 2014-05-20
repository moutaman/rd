<?php
/* @var $this InsuranceContController */
/* @var $model InsuranceCont */

$this->breadcrumbs=array(
	'Insurance Conts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InsuranceCont', 'url'=>array('index')),
	array('label'=>'Create InsuranceCont', 'url'=>array('create')),
	array('label'=>'View InsuranceCont', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InsuranceCont', 'url'=>array('admin')),
);
?>

<h1>Update InsuranceCont <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>