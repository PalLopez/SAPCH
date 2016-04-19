<?php
/* @var $this Tipo_personal_externoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Tipos de Personal Externo',
);

$this->menu=array(
	array('label'=>'Administrar Tipo de Personal Externo', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/configuracion')),
);
?>

<h1>Tipos de Personal Externo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
