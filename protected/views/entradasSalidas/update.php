<?php
/* @var $this EntradasSalidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Entradas Salidases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EntradasSalidas', 'url'=>array('index')),
	array('label'=>'Create EntradasSalidas', 'url'=>array('create')),
	array('label'=>'View EntradasSalidas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EntradasSalidas', 'url'=>array('admin')),
);
?>

<h1>Update EntradasSalidas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>