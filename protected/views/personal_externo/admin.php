<?php
/* @var $this Personal_externoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Nuevo Personal', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('index')),
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

<h1>Administrar Personal Externo</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personal-externo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'empresa',
		'genero',
		array('name'=>'id_tipo_pe','value'=>'$data->idTipoPe->nombre','type'=>'text',),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
