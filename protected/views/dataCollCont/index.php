<?php
/* @var $this DataCollContController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Collection Contracts',
);

$this->menu=array(
	array('label'=>'Add Data Collection Contract', 'url'=>array('create')),
	array('label'=>'Manage Data Collection Contracts', 'url'=>array('admin')),
);
?>

<h1>Data Coll Conts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
