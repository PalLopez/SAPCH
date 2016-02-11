<?php
/* @var $this NinosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ninoses',
);

$this->menu=array(
	array('label'=>'Create Ninos', 'url'=>array('create')),
	array('label'=>'Manage Ninos', 'url'=>array('admin')),
);
?>

<h1>Ninoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
