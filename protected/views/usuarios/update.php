<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Visualizar Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario (<?php echo $model->nombre; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
