<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Salidas'=>array('index'),
	'Administrar'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nueva Salida</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
