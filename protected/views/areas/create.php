<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Configuración'=>array('/configuracion'),
	'Areas'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nueva Area</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
