<?php
/* @var $this NinosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control de Niños',
);

$this->menu=array(
	array('label'=>'Salidas', 'url'=>array('/ninos_salidas')),
	array('label'=>'Actividades Externas', 'url'=>array('/salidas')),
	array('label'=>'Administrar Niños', 'url'=>array('admin')),
);
?>

<h1>Niños</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
