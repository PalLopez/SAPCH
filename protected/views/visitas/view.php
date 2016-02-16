<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Visita', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Visita (ID: <?php echo $model->id; ?>)</h1>

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
