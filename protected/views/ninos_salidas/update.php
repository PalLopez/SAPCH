<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */

$this->breadcrumbs=array(
	'Ninos Salidases'=>array('index'),
	$model->id_nino=>array('view','id'=>$model->id_nino),
	'Update',
);

$this->menu=array(
	array('label'=>'List NinosSalidas', 'url'=>array('index')),
	array('label'=>'Create NinosSalidas', 'url'=>array('create')),
	array('label'=>'View NinosSalidas', 'url'=>array('view', 'id'=>$model->id_nino)),
	array('label'=>'Manage NinosSalidas', 'url'=>array('admin')),
);
?>

<h1>Update NinosSalidas <?php echo $model->id_nino; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>