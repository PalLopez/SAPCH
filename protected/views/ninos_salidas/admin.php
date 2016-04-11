<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Salidas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva Salida', 'url'=>array('create')),
	array('label'=>'Lista de Salidas', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ninos-salidas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Salidas de Niños</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ninos-salidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_nino',
		'id_salida',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
