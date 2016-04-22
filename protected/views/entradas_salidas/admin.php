<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Personal interno'=>array('/usuarios'),
	'Entradas / Salidas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('index')),
);

?>

<h1>Administrar Entradas / Salidas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entradas-salidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha',
		'hr_entrada',
		'hr_salida',
		array('name'=>'id_usuario','value'=>'$data->idUsuario->nombre','type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
