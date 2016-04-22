<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Actividades Externas',
);

$this->menu=array(
	array('label'=>'Administrar Actividades Externas', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/control_ninos')),
);

?>

<h1>Administrar Actividades Externas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha_inicio',
		'fecha_fin',
		'hr_salida',
		'hr_regreso',
		'motivo',
		'lugar'
	),
)); ?>
