<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Personal interno',
);

$this->menu=array(
	array('label'=>'Entradas / Salidas', 'url'=>array('/entradas_salidas')),
	array('label'=>'Administrar usuarios', 'url'=>array('admin')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Personal interno</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'tipo_usuario',
		'num_empleado',
		'genero',
		array('name'=>'id_area','value'=>'$data->idArea->nombre','type'=>'text',),
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
