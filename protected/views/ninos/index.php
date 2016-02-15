<?php
/* @var $this NinosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control de Niños',
);

$this->menu=array(
	array('label'=>'Gestionar Niños', 'url'=>array('admin')),
	array('label'=>'Actividades Externas', 'url'=>array('')),
	array('label'=>'Visitas', 'url'=>array('')),
);
?>

<h1>Control de Niños</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
