<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Salidases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Salidas', 'url'=>array('index')),
	array('label'=>'Create Salidas', 'url'=>array('create')),
	array('label'=>'Update Salidas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salidas', 'url'=>array('admin')),
);
?>

<h1>View Salidas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha_inicio',
		'fecha_fin',
		'hr_salida',
		'hr_regreso',
		'motivo',
		'lugar',
	),
)); ?>
