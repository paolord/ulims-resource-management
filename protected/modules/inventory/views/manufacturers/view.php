<?php
/* @var $this ManufacturersController */
/* @var $model Manufacturers */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Manufacturers', 'url'=>array('index')),
	array('label'=>'Create Manufacturers', 'url'=>array('create')),
	array('label'=>'Update Manufacturers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Manufacturers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Manufacturers', 'url'=>array('admin')),
);
?>

<h1>View Manufacturers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
