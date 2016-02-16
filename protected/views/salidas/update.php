<?php
/* @var $this SalidasController */
/* @var $model Salidas */

$this->breadcrumbs=array(
	'Salidases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salidas', 'url'=>array('index')),
	array('label'=>'Create Salidas', 'url'=>array('create')),
	array('label'=>'View Salidas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salidas', 'url'=>array('admin')),
);
?>

<h1>Update Salidas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>