<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Control de Niños'=>array('index'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Niño', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Niño', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Nino (<?php echo $model->nombre; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'genero',
		'id_villa',
	),
)); ?>
