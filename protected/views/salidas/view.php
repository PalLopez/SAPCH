<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Actividades Externas'=>array('index'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Actividad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Actividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Actividad Externa (ID: <?php echo $model->id; ?>)</h1>

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
