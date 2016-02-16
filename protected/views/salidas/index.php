<?php
/* @var $this SalidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salidases',
);

$this->menu=array(
	array('label'=>'Create Salidas', 'url'=>array('create')),
	array('label'=>'Manage Salidas', 'url'=>array('admin')),
);
?>

<h1>Salidases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
