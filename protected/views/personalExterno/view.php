<?php
/* @var $this PersonalExternoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo'=>array('index'),
	'Visualización',
);

$this->menu=array(
	array('label'=>'Actualizar Personal Externo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Personal Externo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Vizualización Personal Externo (<?php echo $model->nombre; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'empresa',
		'tipo',
		'genero',
	),
)); ?>
