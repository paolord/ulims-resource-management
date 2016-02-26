<?php
/* @var $this UnitTypesController */
/* @var $model UnitTypes */

$this->breadcrumbs=array(
	'Unit Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UnitTypes', 'url'=>array('index')),
	array('label'=>'Create UnitTypes', 'url'=>array('create')),
	array('label'=>'View UnitTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UnitTypes', 'url'=>array('admin')),
);
?>

<h1>Update UnitTypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>