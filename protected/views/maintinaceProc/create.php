<?php
/* @var $this MaintinaceProcController */
/* @var $model MaintinaceProc */

$this->breadcrumbs=array(
	'Maintinace Procs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MaintinaceProc', 'url'=>array('index')),
	array('label'=>'Manage MaintinaceProc', 'url'=>array('admin')),
);
?>

<h1>Create MaintinaceProc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>