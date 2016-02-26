<?php
/* @var $this ContainerTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Container Types',
);

$this->menu=array(
	array('label'=>'Create ContainerTypes', 'url'=>array('create')),
	array('label'=>'Manage ContainerTypes', 'url'=>array('admin')),
);
?>

<h1>Container Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
