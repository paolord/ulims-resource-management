<?php
/* @var $this InventoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inventories',
);

$this->menu=array(
	array('label'=>'Create Inventories', 'url'=>array('create')),
	array('label'=>'Manage Inventories', 'url'=>array('admin')),
);
?>

<h1>Inventories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
