<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Villas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva Villa', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);

?>

<h1>Administrar Villas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'villas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'numero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
