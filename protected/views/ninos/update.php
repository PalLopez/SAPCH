<?php
/* @var $this NinosController */
/* @var $model Ninos */

$this->breadcrumbs=array(
	'Ninoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ninos', 'url'=>array('index')),
	array('label'=>'Create Ninos', 'url'=>array('create')),
	array('label'=>'View Ninos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ninos', 'url'=>array('admin')),
);
?>

<h1>Update Ninos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>