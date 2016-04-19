<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Villas'=>array('index'),
	'Administrar'=>array('admin'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Villa (#: <?php echo $model->numero; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
