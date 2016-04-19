<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Salidas'=>array('index'),
	'Administrar'=>array('admin'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Salida', 'url'=>array('update', 'id'=>$model->id_nino)),
	array('label'=>'Eliminar Salida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nino),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Salida (ID Niño: <?php echo $model->id_nino; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_nino',
		'id_salida',
	),
)); ?>
