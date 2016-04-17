<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Personal interno'=>array('/usuarios'),
	'Entradas / Salidas'=>array('index'),
	'Administrar'=>array('admin'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Entradas/Salidas (ID: <?php echo $model->id; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
