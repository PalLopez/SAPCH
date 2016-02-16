<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Actividades Externas'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Actividad Externa (ID: <?php echo $model->id; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
