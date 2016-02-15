<?php
/* @var $this PersonalExternoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Lista de Personal Externo', 'url'=>array('index')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nuevo Personal Externo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
