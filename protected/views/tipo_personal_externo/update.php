<?php
/* @var $this Tipo_personal_externoController */
/* @var $model TipoPersonalExterno */

$this->breadcrumbs=array(
	'Tipo Personal Externos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoPersonalExterno', 'url'=>array('index')),
	array('label'=>'Create TipoPersonalExterno', 'url'=>array('create')),
	array('label'=>'View TipoPersonalExterno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoPersonalExterno', 'url'=>array('admin')),
);
?>

<h1>Update TipoPersonalExterno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>