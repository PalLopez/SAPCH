<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitas',
);

$this->menu=array(
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
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
		array('name'=>'id_pe','value'=>'$data->idPe->nombre','type'=>'text',),
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
