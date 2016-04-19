<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Villas'=>array('index'),
	'Administrar'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nueva Villa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
