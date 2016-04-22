<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva visita', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);

?>

<h1>Administrar Visitas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visitas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hr_entrada',
		'hr_salida',
		'motivo',
		'fecha',
		array('name'=>'id_pe','value'=>'$data->idPe->nombre','type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
