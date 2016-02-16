<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Tipo Personal Externos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoPersonalExterno', 'url'=>array('index')),
	array('label'=>'Manage TipoPersonalExterno', 'url'=>array('admin')),
);
?>

<h1>Create TipoPersonalExterno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>