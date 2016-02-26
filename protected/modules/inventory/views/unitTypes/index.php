<?php
/* @var $this UnitTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unit Types',
);

$this->menu=array(
	array('label'=>'Create UnitTypes', 'url'=>array('create')),
	array('label'=>'Manage UnitTypes', 'url'=>array('admin')),
);
?>

<h1>Unit Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
