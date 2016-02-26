<?php
/* @var $this InventoriesController */
/* @var $model Inventories */

$this->breadcrumbs=array(
	'Inventories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inventories', 'url'=>array('index')),
	array('label'=>'Manage Inventories', 'url'=>array('admin')),
);
?>

<h1>Create Inventories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>