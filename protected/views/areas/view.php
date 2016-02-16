<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Configuración'=>array('/configuracion'),
	'Areas'=>array('index'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Area', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Area', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Area (ID: <?php echo $model->id; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
