<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva visita', 'url'=>array('create')),
	/*Se comenta esta linea, array('label'=>'Lista de visitas', 'url'=>array('index')),*/
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visitas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Visitas</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visitas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'hr_entrada',
		'hr_salida',
		'motivo',
		'fecha',
		'agendada',
		/*
		'id_pe',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

