<?php
/* @var $this ComponentsController */
/* @var $data Components */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SN')); ?>:</b>
	<?php echo CHtml::encode($data->SN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('loop')); ?>:</b>
	<?php echo CHtml::encode($data->loop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laser')); ?>:</b>
	<?php echo CHtml::encode($data->laser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ethernet')); ?>:</b>
	<?php echo CHtml::encode($data->ethernet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fiber_optic')); ?>:</b>
	<?php echo CHtml::encode($data->fiber_optic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flash')); ?>:</b>
	<?php echo CHtml::encode($data->flash); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CCTV')); ?>:</b>
	<?php echo CHtml::encode($data->CCTV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resolution')); ?>:</b>
	<?php echo CHtml::encode($data->resolution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ventination')); ?>:</b>
	<?php echo CHtml::encode($data->ventination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ph_cam_resolution')); ?>:</b>
	<?php echo CHtml::encode($data->ph_cam_resolution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('op_system')); ?>:</b>
	<?php echo CHtml::encode($data->op_system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mpu')); ?>:</b>
	<?php echo CHtml::encode($data->mpu); ?>
	<br />

	*/ ?>

</div>