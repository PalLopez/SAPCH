<?php
/* @var $this NinosSalidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Ninos Salidases'=>array('index'),
	$model->id_nino,
);

$this->menu=array(
	array('label'=>'List NinosSalidas', 'url'=>array('index')),
	array('label'=>'Create NinosSalidas', 'url'=>array('create')),
	array('label'=>'Update NinosSalidas', 'url'=>array('update', 'id'=>$model->id_nino)),
	array('label'=>'Delete NinosSalidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_nino),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NinosSalidas', 'url'=>array('admin')),
);
?>

<h1>View NinosSalidas #<?php echo $model->id_nino; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_nino',
		'id_salida',
	),
)); ?>
