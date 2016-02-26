<?php
/* @var $this ContainerTypesController */
/* @var $model ContainerTypes */

$this->breadcrumbs=array(
	'Container Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContainerTypes', 'url'=>array('index')),
	array('label'=>'Create ContainerTypes', 'url'=>array('create')),
	array('label'=>'View ContainerTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ContainerTypes', 'url'=>array('admin')),
);
?>

<h1>Update ContainerTypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>