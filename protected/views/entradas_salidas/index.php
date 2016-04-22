<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Personal interno'=>array('/usuarios'),
	'Entradas / Salidas',
);

$this->menu=array(
	array('label'=>'Administrar Entradas / Salidas', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/usuarios')),
);

?>

<h1>Entradas / Salidas</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'entradas-salidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'fecha',
		'hr_entrada',
		'hr_salida',
		array('name'=>'id_usuario','value'=>'$data->idUsuario->nombre','type'=>'text',),
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
