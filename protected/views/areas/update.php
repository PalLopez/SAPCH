<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Configuración'=>array('/configuracion'),
	'Areas'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Area (ID: <?php echo $model->id; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
