<?php
/* @var $this SalidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/ninos'),
	'Actividades Externas',
);

$this->menu=array(
	array('label'=>'Administrar Actividades', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/ninos')),
);
?>

<h1>Actividades Externas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
