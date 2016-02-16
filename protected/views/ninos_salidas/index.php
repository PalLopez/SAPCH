<?php
/* @var $this Ninos_salidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ninos Salidases',
);

$this->menu=array(
	array('label'=>'Create NinosSalidas', 'url'=>array('create')),
	array('label'=>'Manage NinosSalidas', 'url'=>array('admin')),
);
?>

<h1>Ninos Salidases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
