<?php
/* @var $this UnitTypesController */
/* @var $data UnitTypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_name')); ?>:</b>
	<?php echo CHtml::encode($data->unit_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_symbol')); ?>:</b>
	<?php echo CHtml::encode($data->unit_symbol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->type_of_quantity); ?>
	<br />


</div>