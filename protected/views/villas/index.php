<?php
/* @var $this VillasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Villases',
);

$this->menu=array(
	array('label'=>'Create Villas', 'url'=>array('create')),
	array('label'=>'Manage Villas', 'url'=>array('admin')),
);
?>

<h1>Villases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
