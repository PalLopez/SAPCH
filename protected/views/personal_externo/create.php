<?php
/* @var $this Personal_externoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Nuevo Personal Externo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
