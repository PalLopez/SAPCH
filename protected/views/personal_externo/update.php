<?php
/* @var $this Personal_externoController */
/* @var $model PersonalExterno */

$this->breadcrumbs=array(
	'Personal Externos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonalExterno', 'url'=>array('index')),
	array('label'=>'Create PersonalExterno', 'url'=>array('create')),
	array('label'=>'View PersonalExterno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PersonalExterno', 'url'=>array('admin')),
);
?>

<h1>Update PersonalExterno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>