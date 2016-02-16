<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Entradas Salidases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EntradasSalidas', 'url'=>array('index')),
	array('label'=>'Manage EntradasSalidas', 'url'=>array('admin')),
);
?>

<h1>Create EntradasSalidas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>