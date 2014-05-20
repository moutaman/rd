<?php
/* @var $this ComponentsController */
/* @var $model Components */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'components-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SN'); ?>
		<?php echo $form->dropDownList($model, 'SN',$this->getSN(), array('prompt'=>'Select Device')); ?>
		<?php echo $form->error($model,'SN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'loop'); ?>
		<?php echo $form->textField($model,'loop',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'loop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'laser'); ?>
		<?php echo $form->textField($model,'laser',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'laser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ethernet'); ?>
		<?php echo $form->textField($model,'ethernet',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ethernet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fiber_optic'); ?>
		<?php echo $form->textField($model,'fiber_optic',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'fiber_optic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flash'); ?>
		<?php echo $form->textField($model,'flash',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'flash'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CCTV'); ?>
		<?php echo $form->textField($model,'CCTV',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'CCTV'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resolution'); ?>
		<?php echo $form->textField($model,'resolution',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'resolution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventination'); ?>
		<?php echo $form->textField($model,'ventination',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ventination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ph_cam_resolution'); ?>
		<?php echo $form->textField($model,'ph_cam_resolution',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ph_cam_resolution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'op_system'); ?>
		<?php echo $form->textField($model,'op_system',array('size'=>20,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'op_system'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mpu'); ?>
		<?php echo $form->textField($model,'mpu',array('size'=>20,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'mpu'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->