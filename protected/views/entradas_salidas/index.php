<?php
/* @var $this Entradas_salidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradas Salidases',
);

$this->menu=array(
	array('label'=>'Create EntradasSalidas', 'url'=>array('create')),
	array('label'=>'Manage EntradasSalidas', 'url'=>array('admin')),
);
?>

<h1>Entradas Salidases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
