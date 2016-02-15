<?php
/* @var $this AreasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Áreas',
);

$this->menu=array(
	array('label'=>'Gestonar Áreas', 'url'=>array('admin')),
);
?>

<h1>Áreas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
