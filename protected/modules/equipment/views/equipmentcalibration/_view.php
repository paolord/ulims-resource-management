<?php
/* @var $this EquipmentcalibrationController */
/* @var $data Equipmentcalibration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usageID')); ?>:</b>
	<?php echo CHtml::encode($data->usageID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calibrationdata')); ?>:</b>
	<?php echo CHtml::encode($data->calibrationdata); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />


</div>