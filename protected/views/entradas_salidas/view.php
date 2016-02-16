<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Entradas Salidases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EntradasSalidas', 'url'=>array('index')),
	array('label'=>'Create EntradasSalidas', 'url'=>array('create')),
	array('label'=>'Update EntradasSalidas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EntradasSalidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EntradasSalidas', 'url'=>array('admin')),
);
?>

<h1>View EntradasSalidas #<?php echo $model->id; ?></h1>

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
