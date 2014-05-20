<?php
/* @var $this MaintinaceProcController */
/* @var $model MaintinaceProc */

$this->breadcrumbs=array(
	'Maintinace Procs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MaintinaceProc', 'url'=>array('index')),
	array('label'=>'Create MaintinaceProc', 'url'=>array('create')),
	array('label'=>'View MaintinaceProc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MaintinaceProc', 'url'=>array('admin')),
);
?>

<h1>Update MaintinaceProc <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>