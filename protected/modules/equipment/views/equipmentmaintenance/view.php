<?php
/* @var $this EquipmentmaintenanceController */
/* @var $model Equipmentmaintenance */

$this->breadcrumbs=array(
	'Equipmentmaintenances'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Equipmentmaintenance', 'url'=>array('index')),
	array('label'=>'Create Equipmentmaintenance', 'url'=>array('create')),
	array('label'=>'Update Equipmentmaintenance', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Equipmentmaintenance', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Equipmentmaintenance', 'url'=>array('admin')),
);
?>

<h1>View Equipmentmaintenance #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'user_id',
		'equipmentID',
		'date',
		'type',
		'isdone',
		'maintenancedata',
	),
)); ?>
