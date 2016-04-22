<?php

/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Personal interno'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nuevo Usuario', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);

?>

<h1>Administrar usuarios</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'tipo_usuario',
		'num_empleado',
		'genero',
		array('name'=>'id_area','value'=>'$data->idArea->nombre','type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
