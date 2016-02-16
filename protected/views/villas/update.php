<?php
/* @var $this VillasController */
/* @var $model Villas */

$this->breadcrumbs=array(
	'Villases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Villas', 'url'=>array('index')),
	array('label'=>'Create Villas', 'url'=>array('create')),
	array('label'=>'View Villas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Villas', 'url'=>array('admin')),
);
?>

<h1>Update Villas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>