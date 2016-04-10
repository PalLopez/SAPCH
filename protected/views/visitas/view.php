<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar visita', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar visita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Desea eliminar este registro?')),
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
	),
)); ?>
