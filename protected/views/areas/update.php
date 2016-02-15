<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Áreas'=>array('index'),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Visualizar Área', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Área (<?php echo $model->nombre; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
