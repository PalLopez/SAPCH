<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Villases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Villas', 'url'=>array('index')),
	array('label'=>'Manage Villas', 'url'=>array('admin')),
);
?>

<h1>Create Villas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>