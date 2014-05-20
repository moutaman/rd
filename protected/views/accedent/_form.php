<?php
/* @var $this AccedentController */
/* @var $model Accedent */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'accedent-form',
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
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_id'); ?>
		<?php echo $form->textField($model,'car_id',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'car_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'car_insurance'); ?>
		<?php echo $form->textField($model,'car_insurance',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'car_insurance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'driver_id'); ?>
		<?php echo $form->textField($model,'driver_id',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'driver_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->