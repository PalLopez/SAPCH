<?php
/* @var $this PersonalExternoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal Externos',
);

$this->menu=array(
	array('label'=>'Gestionar Personal Externo', 'url'=>array('admin')),
);
?>

<h1>Personal Externo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
