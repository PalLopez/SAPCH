<?php
/* @var $this Personal_externoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo'=>array('index'),
	'Administrar'=>array('admin'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Personal Externo (<?php echo $model->nombre; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
