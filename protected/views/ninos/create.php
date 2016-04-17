<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Niños'=>array('index'),
	'Administrar'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nuevo Niño</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
