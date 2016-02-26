<?php
/* @var $this UnitTypesController */
/* @var $model UnitTypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'unit-types-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_name'); ?>
		<?php echo $form->textField($model,'unit_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'unit_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit_symbol'); ?>
		<?php echo $form->textField($model,'unit_symbol',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'unit_symbol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_of_quantity'); ?>
		<?php echo $form->textField($model,'type_of_quantity',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'type_of_quantity'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->