<?php
/* @var $this InventoriesController */
/* @var $model Inventories */

$this->breadcrumbs=array(
	'Inventories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inventories', 'url'=>array('index')),
	array('label'=>'Create Inventories', 'url'=>array('create')),
	array('label'=>'Update Inventories', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inventories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inventories', 'url'=>array('admin')),
);
?>

<h1>View Inventories #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'reference',
		'creation_time',
	),
)); ?>

<h1>Import Data</h1>
<div class="form">
<?php $image=Yii::app()->baseUrl.('/images/ajax-loader.gif');?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>
	
	<div class="row">
		<?php echo CHtml::fileField('import_path',''); ?>
        <?php echo CHtml::submitButton('Load File', array('class'=>'btn btn-info')); ?>
        <?php echo CHtml::link('<span class="icon-edit icon-white"></span> Create data entry file', array('inventories/initialinventoryform'), array('class'=>'btn btn-inverse', 'style'=>'margin: 0.2em 0 0.5em 0; float:right;','title'=>'Create data entry file'));?>
    </div>
	
<?php $this->endWidget(); ?>

<?php if($data != NULL)
	       var_dump($arr);
?>

</div>	