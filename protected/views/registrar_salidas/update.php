<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */

$this->breadcrumbs=array(
	'Regresar'=>array('index'),
);

?>

<div style="text-align: center;">
<h1>Registrar Salida (Usuario: <?php echo $model->id_usuario; ?>)</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
