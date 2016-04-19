<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Villas'=>array('index'),
	'Administrar'=>array('admin'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Villa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Villa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Villa (#: <?php echo $model->numero; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'numero',
		'nombre',
	),
)); ?>
