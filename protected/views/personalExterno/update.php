<?php
/* @var $this PersonalExternoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externos'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Visualizar Personal Externo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Personal Externo (<?php echo $model->nombre; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
