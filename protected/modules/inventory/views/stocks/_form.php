<?php
/* @var $this StocksController */
/* @var $model Stocks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'stocks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'chemical_name'); ?>
		<?php echo $form->textField($model,'chemical_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'chemical_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAS'); ?>
		<?php echo $form->textField($model,'CAS',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_number'); ?>
		<?php echo $form->textField($model,'product_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'product_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'container_barcode'); ?>
		<?php echo $form->textField($model,'container_barcode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'container_barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location'); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer'); ?>
		<?php echo $form->error($model,'manufacturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier'); ?>
		<?php echo $form->textField($model,'supplier'); ?>
		<?php echo $form->error($model,'supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit'); ?>
		<?php echo $form->error($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty_remaining'); ?>
		<?php echo $form->textField($model,'qty_remaining'); ?>
		<?php echo $form->error($model,'qty_remaining'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'container_type'); ?>
		<?php echo $form->textField($model,'container_type'); ?>
		<?php echo $form->error($model,'container_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exp_date'); ?>
		<?php echo $form->textField($model,'exp_date'); ?>
		<?php echo $form->error($model,'exp_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_acquired'); ?>
		<?php echo $form->textField($model,'date_acquired'); ?>
		<?php echo $form->error($model,'date_acquired'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_opened'); ?>
		<?php echo $form->textField($model,'date_opened'); ?>
		<?php echo $form->error($model,'date_opened'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->