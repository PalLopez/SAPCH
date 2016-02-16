<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Salidas'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Salida (ID Niño: <?php echo $model->id_nino; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
