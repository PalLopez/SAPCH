<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Entradas/Salidas'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nuevo Entradas/Salidas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
