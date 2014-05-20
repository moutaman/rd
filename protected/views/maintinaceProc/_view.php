<?php
/* @var $this MaintinaceProcController */
/* @var $data MaintinaceProc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SN')); ?>:</b>
	<?php echo CHtml::encode($data->SN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mpu')); ?>:</b>
	<?php echo CHtml::encode($data->mpu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventination')); ?>:</b>
	<?php echo CHtml::encode($data->ventination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensor')); ?>:</b>
	<?php echo CHtml::encode($data->sensor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('internel')); ?>:</b>
	<?php echo CHtml::encode($data->internel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cleaning')); ?>:</b>
	<?php echo CHtml::encode($data->cleaning); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	*/ ?>

</div>