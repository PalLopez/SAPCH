<?php
/* @var $this NinosSalidasController */
/* @var $data NinosSalidas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nino')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_nino), array('view', 'id'=>$data->id_nino)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_salida')); ?>:</b>
	<?php echo CHtml::encode($data->id_salida); ?>
	<br />


</div>