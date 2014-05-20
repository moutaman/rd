<?php
/* @var $this CheckInHistoryController */
/* @var $data CheckInHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SN')); ?>:</b>
	<?php echo CHtml::encode($data->SN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check_date')); ?>:</b>
	<?php echo CHtml::encode($data->check_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checker')); ?>:</b>
	<?php echo CHtml::encode($data->checker); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('checked_comp')); ?>:</b>
	<?php echo CHtml::encode($data->checked_comp); ?>
	<br />


</div>