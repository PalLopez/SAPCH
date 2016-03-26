<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Configuración'=>array('/configuracion'),
	'Villas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nueva Villa', 'url'=>array('create')),
	array('label'=>'Lista de Villas', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#villas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Villas</h1>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'villas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'numero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
