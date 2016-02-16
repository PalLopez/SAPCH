<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Tipos de Personal Externo'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Personal Externo (<?php echo $model->nombre; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
