<?php
/* @var $this EquipmentcalibrationController */
/* @var $model Equipmentcalibration */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipmentcalibration-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usageID'); ?>
		<?php echo $form->textField($model,'usageID'); ?>
		<?php echo $form->error($model,'usageID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calibrationdata'); ?>
		<?php echo $form->textArea($model,'calibrationdata',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'calibrationdata'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->