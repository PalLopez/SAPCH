<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Control de Niños'=>array('/control_ninos'),
	'Niños',
);

$this->menu=array(
	array('label'=>'Administrar Niños', 'url'=>array('admin')),
	array('label'=>'Regresar', 'url'=>array('/control_ninos')),
);

?>

<h1>Niños</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ninos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombre',
		'genero',
		'id_villa',
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
