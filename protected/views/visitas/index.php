<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitas',
);

$this->menu=array(
	array('label'=>'Nueva visita', 'url'=>array('create')),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
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

<h1>Visitas</h1>


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

	),
)); ?>

<div class="content-bubbles">
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
