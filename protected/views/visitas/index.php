<?php
/* @var $this VisitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitases',
);

$this->menu=array(
	array('label'=>'Gestión de Visitas', 'url'=>array('admin')),
	array('label'=>'Angenda de Visitas', 'url'=>array('')),
);
?>

<h1>Visitases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
