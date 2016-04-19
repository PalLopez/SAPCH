<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Tipos de Personal Externo'=>array('index'),
	'Administrar'=>array('admin'),
	'Visualizar',
);

$this->menu=array(
	array('label'=>'Actualizar Tipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Tipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Visualizar Tipo de Personal Externo (<?php echo $model->nombre; ?>)</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
