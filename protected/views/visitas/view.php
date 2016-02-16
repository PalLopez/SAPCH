<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Visitas', 'url'=>array('index')),
	array('label'=>'Create Visitas', 'url'=>array('create')),
	array('label'=>'Update Visitas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Visitas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitas', 'url'=>array('admin')),
);
?>

<h1>View Visitas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hr_entrada',
		'hr_salida',
		'motivo',
		'fecha',
		'agendada',
		'id_pe',
		'id_nino',
	),
)); ?>
