<?php
/* @var $this UnitTypesController */
/* @var $model UnitTypes */

$this->breadcrumbs=array(
	'Unit Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UnitTypes', 'url'=>array('index')),
	array('label'=>'Manage UnitTypes', 'url'=>array('admin')),
);
?>

<h1>Create UnitTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>