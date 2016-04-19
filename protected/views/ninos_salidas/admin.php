<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Salidas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva Salida', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);

?>

<h1>Administrar Salidas de Niños</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ninos-salidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_nino',
		'id_salida',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
