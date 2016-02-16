<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Villases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Villas', 'url'=>array('index')),
	array('label'=>'Create Villas', 'url'=>array('create')),
	array('label'=>'Update Villas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Villas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Villas', 'url'=>array('admin')),
);
?>

<h1>View Villas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero',
		'nombre',
	),
)); ?>
