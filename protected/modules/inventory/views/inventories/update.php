<?php
/* @var $this InventoriesController */
/* @var $model Inventories */

$this->breadcrumbs=array(
	'Inventories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inventories', 'url'=>array('index')),
	array('label'=>'Create Inventories', 'url'=>array('create')),
	array('label'=>'View Inventories', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Inventories', 'url'=>array('admin')),
);
?>

<h1>Update Inventories <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>