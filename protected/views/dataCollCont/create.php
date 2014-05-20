<?php
/* @var $this DataCollContController */
/* @var $model DataCollCont */

$this->breadcrumbs=array(
	'Data Collection Contracts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contracts', 'url'=>array('index')),
	array('label'=>'Manage Contracts', 'url'=>array('admin')),
);
?>

<h1>Create DataCollCont</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>