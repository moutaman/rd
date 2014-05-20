<?php
/* @var $this DeviceInfoController */
/* @var $model DeviceInfo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'device-info-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		<table>
			<tr><td>
			<?php echo $form->labelEx($model,'SN'); ?>
			<?php echo $form->textField($model,'SN',array('size'=>20,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'SN'); ?>
			</td>
	
			<td>
			<?php echo $form->labelEx($model,'number'); ?>
			<?php echo $form->textField($model,'number',array('size'=>20,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'number'); ?>
			</td>
			
			<tr><td>
			<?php echo $form->labelEx($model,'manufacturer'); ?>
			<?php echo $form->textField($model,'manufacturer',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'manufacturer'); ?>
			</td>
	
			<td>
			<?php echo $form->labelEx($model,'country_of_origin'); ?>
			<?php echo $form->textField($model,'country_of_origin',array('size'=>20,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'country_of_origin'); ?>
			</td>
			</tr>
		
			<tr>
			<td>
				<?php echo $form->labelEx($model,'provider'); ?>
				<?php echo $form->textField($model,'provider',array('size'=>20,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'provider'); ?>
			</td>
			</tr>
			<tr><td> <h1> Technical Specifications:</h1> </td></tr>
			<tr><td>
				<?php echo $form->labelEx($model,'speed'); ?>
				<?php echo $form->textField($model,'speed',array('size'=>20,'maxlength'=>5)); ?>
				<?php echo $form->error($model,'speed'); ?>
				</td>

				<td>
				<?php echo $form->labelEx($model,'type'); ?>
				<?php echo $form->textField($model,'type',array('size'=>20,'maxlength'=>10)); ?>
				<?php echo $form->error($model,'type'); ?>
				</td>
	
				</tr><tr><td>
				<?php echo $form->labelEx($model,'safety_pole'); ?>
				<?php echo $form->textField($model,'safety_pole',array('size'=>20,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'safety_pole'); ?>
				</td>
			</tr>
			<tr><td><h1>Contracts:</h1></td></tr>
			<tr><td>
				<?php echo $form->labelEx($model,'warrenty'); ?>
				<?php echo $form->textField($model,'warrenty',array('size'=>20,'maxlength'=>1)); ?>
				<?php echo $form->error($model,'warrenty'); ?>
				</td>
				<td>
				<?php echo $form->labelEx($model,'insurance'); ?>
				<?php echo $form->textField($model,'insurance',array('size'=>20,'maxlength'=>1)); ?>
				<?php echo $form->error($model,'insurance'); ?>
				</td>
			</tr>
			<tr><td><h1>Working Status:</h1></td>
			</tr>
			<tr>
				<td>
				<?php echo $form->labelEx($model,'status'); ?>
				<?php echo $form->textField($model,'status',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'status'); ?>
				</td>
			</tr>
			<tr><td><h1>Geographical Location:</h1></td>
			</tr>
			<tr><td>
				<?php echo $form->labelEx($model,'street'); ?>
				<?php echo $form->dropDownList($model, 'street',$this->getStreet(), array('prompt'=>'Select Street')); ?>
				<?php echo $form->error($model,'street'); ?>
				</td>
			</tr>
			<tr><td>

				<?php echo $form->labelEx($model,'longLocation'); ?>
				<?php echo $form->textField($model,'longLocation',array('size'=>20,'maxlength'=>18)); ?>
				<?php echo $form->error($model,'longLocation'); ?>
				</td>
				<td>
				<?php echo $form->labelEx($model,'latLocation'); ?>
				<?php echo $form->textField($model,'latLocation',array('size'=>20,'maxlength'=>18)); ?>
				<?php echo $form->error($model,'latLocation'); ?>
				</td>
			</tr>
			<tr><td>
				<?php echo $form->labelEx($model,'comment'); ?>
				<?php echo $form->textArea($model,'comment',array('size'=>20,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'comment'); ?>
				</td>
			</tr>
			</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
