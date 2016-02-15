<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Áreas'=>array('index'),
	'Visualización',
);

$this->menu=array(
	array('label'=>'Actualizar Área', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Área', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualización de Áreas (<?php echo $model->nombre; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
