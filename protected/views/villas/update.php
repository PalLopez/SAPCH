<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Configuración'=>array('/configuracion'),
	'Villas'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Villa (#: <?php echo $model->numero; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
