<?php
/* @var $this StocksController */
/* @var $model Stocks */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chemical_name'); ?>
		<?php echo $form->textField($model,'chemical_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAS'); ?>
		<?php echo $form->textField($model,'CAS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_number'); ?>
		<?php echo $form->textField($model,'product_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'container_barcode'); ?>
		<?php echo $form->textField($model,'container_barcode',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturer'); ?>
		<?php echo $form->textField($model,'manufacturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier'); ?>
		<?php echo $form->textField($model,'supplier'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit'); ?>
		<?php echo $form->textField($model,'unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'qty_remaining'); ?>
		<?php echo $form->textField($model,'qty_remaining'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'container_type'); ?>
		<?php echo $form->textField($model,'container_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exp_date'); ?>
		<?php echo $form->textField($model,'exp_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_acquired'); ?>
		<?php echo $form->textField($model,'date_acquired'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_opened'); ?>
		<?php echo $form->textField($model,'date_opened'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->