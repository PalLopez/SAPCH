<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Actividades Externas'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nueva Actividad Externa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
