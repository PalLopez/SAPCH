<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Tipos de Personal Externo'=>array('index'),
	'Administrar'=>array('admin'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nuevo Tipo de Personal Externo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
