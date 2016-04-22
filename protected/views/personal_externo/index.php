<?php
/* @var $this Personal_externoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externo',
);

$this->menu=array(
	array('label'=>'Administrar Personal externo', 'url'=>array('admin')),
	/*array('label'=>'Lista de Personal', 'url'=>array('index')),*/
);

?>

<h1>Personal externo</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personal-externo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'empresa',
		'genero',
		array('name'=>'id_tipo_pe','value'=>'$data->idTipoPe->nombre','type'=>'text',),
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
