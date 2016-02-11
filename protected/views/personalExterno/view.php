<?php
/* @var $this PersonalExternoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PersonalExterno', 'url'=>array('index')),
	array('label'=>'Create PersonalExterno', 'url'=>array('create')),
	array('label'=>'Update PersonalExterno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PersonalExterno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonalExterno', 'url'=>array('admin')),
);
?>

<h1>View PersonalExterno #<?php echo $model->id; ?></h1>

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
