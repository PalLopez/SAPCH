<?php
/* @var $this PersonalExternoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo'=>array('index'),
	'Gestionar',
);

$this->menu=array(
	array('label'=>'Nuevo Personal Externo', 'url'=>array('create')),
	array('label'=>'Lista de Personal Externo', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personal-externo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestionar Personal Externo</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personal-externo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'empresa',
		'tipo',
		'genero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
