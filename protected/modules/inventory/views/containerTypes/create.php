<?php
/* @var $this ContainerTypesController */
/* @var $model ContainerTypes */

$this->breadcrumbs=array(
	'Container Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContainerTypes', 'url'=>array('index')),
	array('label'=>'Manage ContainerTypes', 'url'=>array('admin')),
);
?>

<h1>Create ContainerTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>