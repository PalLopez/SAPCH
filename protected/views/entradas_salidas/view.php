<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Personal interno'=>array('/usuarios'),
	'Entradas / Salidas'=>array('index'),
	'Administrar'=>array('admin'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Entrada / Salida', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Entrada / Salida', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Registrar Salida', 'url'=>array('')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Entrada / Salida (ID: <?php echo $model->id; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'hr_entrada',
		'hr_salida',
		'id_usuario',
	),
)); ?>
