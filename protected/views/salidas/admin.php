<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Actividades Externas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva Actividad', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#salidas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Actividades Externas</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'salidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha_inicio',
		'fecha_fin',
		'hr_salida',
		'hr_regreso',
		'motivo',
		/*
		'lugar',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
