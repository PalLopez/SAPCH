<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Control de Niños'=>array('index'),
	'Gestionar Niños',
);

$this->menu=array(
	array('label'=>'Nuevo Niño', 'url'=>array('create')),
	array('label'=>'Control de Niños', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ninos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Niños</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ninos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'num_villa',
		'genero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
