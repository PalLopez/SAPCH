<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Áreas'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Lista de Áreas', 'url'=>array('index')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nueva Área</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
