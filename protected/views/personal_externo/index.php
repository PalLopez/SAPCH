<?php
/* @var $this Personal_externoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal Externo',
);

$this->menu=array(
	array('label'=>'Administrar Personal', 'url'=>array('admin')),
);
?>

<h1>Personal Externo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
