<?php
/* @var $this UnitTypesController */
/* @var $model UnitTypes */

$this->breadcrumbs=array(
	'Unit Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UnitTypes', 'url'=>array('index')),
	array('label'=>'Create UnitTypes', 'url'=>array('create')),
	array('label'=>'Update UnitTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UnitTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UnitTypes', 'url'=>array('admin')),
);
?>

<h1>View UnitTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'unit_name',
		'unit_symbol',
		'type_of_quantity',
	),
)); ?>
