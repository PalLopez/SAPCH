<?php
/* @var $this Entradas_salidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradas/Salidas',
);

$this->menu=array(
	array('label'=>'Administrar Entradas/Salidas', 'url'=>array('admin')),
);
?>

<h1>Entradas/Salidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
