<?php
/* @var $this Entradas_salidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Entradas/Salidas',
);

$this->menu=array(
	array('label'=>'Nueva', 'url'=>array('create')),
);
?>

<h1>Entradas/Salidas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
