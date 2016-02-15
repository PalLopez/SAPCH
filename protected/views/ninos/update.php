<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Control de Niños'=>array('index'),
	'Gestionar Niños'=>array('admin'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Visualizar Niño', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Niño (<?php echo $model->nombre; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
