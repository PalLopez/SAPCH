<?php
/* @var $this AreasController */
/* @var $model Areas */

$this->breadcrumbs=array(
	'Otras Operaciones'=>array('/configuracion'),
	'Áreas',
);

$this->menu=array(
	array('label'=>'Administrar Áreas', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/configuracion')),
);

?>

<h1>Administrar Areas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'areas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
	),
)); ?>
