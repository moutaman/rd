<?php
/* @var $this CheckInHistoryController */
/* @var $model CheckInHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'check-in-history-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SN'); ?>
		<?php echo $form->textField($model,'SN',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'SN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check_date'); ?>
		<?php echo $form->textField($model,'check_date'); ?>
		<?php echo $form->error($model,'check_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checker'); ?>
		<?php echo $form->textField($model,'checker'); ?>
		<?php echo $form->error($model,'checker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checked_comp'); ?>
		<?php echo $form->textField($model,'checked_comp',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'checked_comp'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->