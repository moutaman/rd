<?php
/* @var $this DeviceInfoController */
/* @var $data DeviceInfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SN')); ?>:</b>
	<?php echo CHtml::encode($data->SN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_of_origin')); ?>:</b>
	<?php echo CHtml::encode($data->country_of_origin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provider')); ?>:</b>
	<?php echo CHtml::encode($data->provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('speed')); ?>:</b>
	<?php echo CHtml::encode($data->speed); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('safety_pole')); ?>:</b>
	<?php echo CHtml::encode($data->safety_pole); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warrenty')); ?>:</b>
	<?php echo CHtml::encode($data->warrenty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insurance')); ?>:</b>
	<?php echo CHtml::encode($data->insurance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street')); ?>:</b>
	<?php echo CHtml::encode($data->street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longLocation')); ?>:</b>
	<?php echo CHtml::encode($data->longLocation); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('latLocation')); ?>:</b>
	<?php echo CHtml::encode($data->latLocation); ?>
	<br /> */ ?>
	
	<?php /* google maps view */ ?>
	<b><?php echo "GeoLocation"; ?>:</b>
	<?php 

		echo "<a href='http://maps.google.com/?q=$data->latLocation,$data->longLocation' target='_blank'>View On Gmap </a> ";
	 ?>
	<br />

	



	 

</div>
