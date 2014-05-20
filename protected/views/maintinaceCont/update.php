<?php
/* @var $this MaintinaceContController */
/* @var $model MaintinaceCont */

$this->breadcrumbs=array(
	'Maintinace Conts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MaintinaceCont', 'url'=>array('index')),
	array('label'=>'Create MaintinaceCont', 'url'=>array('create')),
	array('label'=>'View MaintinaceCont', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MaintinaceCont', 'url'=>array('admin')),
);
?>

<h1>Update MaintinaceCont <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>