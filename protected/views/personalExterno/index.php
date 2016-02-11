<?php
/* @var $this PersonalExternoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personal Externos',
);

$this->menu=array(
	array('label'=>'Create PersonalExterno', 'url'=>array('create')),
	array('label'=>'Manage PersonalExterno', 'url'=>array('admin')),
);
?>

<h1>Personal Externos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
