<?php
/* @var $this Ninos_salidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Salidas',
);

$this->menu=array(
	array('label'=>'Administrar Salidas', 'url'=>array('admin')),
);
?>

<h1>Salidas de Niños</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
