<?php
/* @var $this VillasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Villas',
);

$this->menu=array(
	array('label'=>'Administrar Villas', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/configuracion')),
);
?>

<h1>Villas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
