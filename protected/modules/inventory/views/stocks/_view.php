<?php
/* @var $this StocksController */
/* @var $data Stocks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chemical_name')); ?>:</b>
	<?php echo CHtml::encode($data->chemical_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAS')); ?>:</b>
	<?php echo CHtml::encode($data->CAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_number')); ?>:</b>
	<?php echo CHtml::encode($data->product_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('container_barcode')); ?>:</b>
	<?php echo CHtml::encode($data->container_barcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier')); ?>:</b>
	<?php echo CHtml::encode($data->supplier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_remaining')); ?>:</b>
	<?php echo CHtml::encode($data->qty_remaining); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('container_type')); ?>:</b>
	<?php echo CHtml::encode($data->container_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exp_date')); ?>:</b>
	<?php echo CHtml::encode($data->exp_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_acquired')); ?>:</b>
	<?php echo CHtml::encode($data->date_acquired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_opened')); ?>:</b>
	<?php echo CHtml::encode($data->date_opened); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>