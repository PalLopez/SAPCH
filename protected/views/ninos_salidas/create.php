<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Ninos Salidases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NinosSalidas', 'url'=>array('index')),
	array('label'=>'Manage NinosSalidas', 'url'=>array('admin')),
);
?>

<h1>Create NinosSalidas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>