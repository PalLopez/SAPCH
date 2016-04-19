<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Tipos de Personal Externo'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nuevo Tipo de Personal', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);

?>

<h1>Administrar Tipos de Personal Externo</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipo-personal-externo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
