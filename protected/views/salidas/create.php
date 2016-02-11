<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Salidases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salidas', 'url'=>array('index')),
	array('label'=>'Manage Salidas', 'url'=>array('admin')),
);
?>

<h1>Create Salidas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>