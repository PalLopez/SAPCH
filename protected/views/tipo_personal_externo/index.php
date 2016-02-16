<?php
/* @var $this Tipo_personal_externoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos de Personal Externo',
);

$this->menu=array(
	array('label'=>'Administrar Tipo', 'url'=>array('admin')),
);
?>

<h1>Tipos de Personal Externo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
