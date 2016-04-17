<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Personal interno'=>array('index'),
	'Administrar'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nuevo Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
