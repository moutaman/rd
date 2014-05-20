<?php
/* @var $this MaintinaceContController */
/* @var $model MaintinaceCont */

$this->breadcrumbs=array(
	'Maintinace Conts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MaintinaceCont', 'url'=>array('index')),
	array('label'=>'Manage MaintinaceCont', 'url'=>array('admin')),
);
?>

<h1>Create MaintinaceCont</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>