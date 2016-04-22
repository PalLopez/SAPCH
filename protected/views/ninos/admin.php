<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Niños'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nuevo Niño', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);
?>

<h1>Administrar Niños</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ninos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'genero',
		'id_villa',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
