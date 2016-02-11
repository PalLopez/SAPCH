<?php
/* @var $this PersonalExternoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonalExterno', 'url'=>array('index')),
	array('label'=>'Manage PersonalExterno', 'url'=>array('admin')),
);
?>

<h1>Create PersonalExterno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>