<?php
/* @var $this DataCollContController */
/* @var $model DataCollCont */

$this->breadcrumbs=array(
	'Data Collection Contracts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contracts', 'url'=>array('index')),
	array('label'=>'Add Contract', 'url'=>array('create')),
	array('label'=>'View Contracts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Contracts', 'url'=>array('admin')),
);
?>

<h1>Update Contracts <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>