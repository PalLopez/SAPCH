<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Personal interno'=>array('index'),
	'Administrar'=>array('admin'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Usuario (<?php echo $model->nombre; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'tipo_usuario',
		'num_empleado',
		'genero',
		'contrasena',
		'id_area',
	),
)); ?>
