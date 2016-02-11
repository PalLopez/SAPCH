<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Ninoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ninos', 'url'=>array('index')),
	array('label'=>'Manage Ninos', 'url'=>array('admin')),
);
?>

<h1>Create Ninos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>