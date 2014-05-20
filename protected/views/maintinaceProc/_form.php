<?php
/* @var $this MaintinaceProcController */
/* @var $model MaintinaceProc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maintinace-proc-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SN'); ?>
		<?php echo $form->textField($model,'SN',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mpu'); ?>
		<?php echo $form->textField($model,'mpu',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'mpu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ventination'); ?>
		<?php echo $form->textField($model,'ventination',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'ventination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sensor'); ?>
		<?php echo $form->textField($model,'sensor',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sensor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'internel'); ?>
		<?php echo $form->textField($model,'internel',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'internel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cleaning'); ?>
		<?php echo $form->textField($model,'cleaning',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'cleaning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textField($model,'comment',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->