<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Tipo Personal Externos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoPersonalExterno', 'url'=>array('index')),
	array('label'=>'Create TipoPersonalExterno', 'url'=>array('create')),
	array('label'=>'Update TipoPersonalExterno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoPersonalExterno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoPersonalExterno', 'url'=>array('admin')),
);
?>

<h1>View TipoPersonalExterno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
