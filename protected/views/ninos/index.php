<?php
/* @var $this NinosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Niños',
);

$this->menu=array(
	array('label'=>'Administrar Niños', 'url'=>array('admin')),
);
?>

<h1>Niños</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
