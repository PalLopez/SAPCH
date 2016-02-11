<?php
/* @var $this EntradasSalidasController */
/* @var $data EntradasSalidas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_entrada')); ?>:</b>
	<?php echo CHtml::encode($data->hr_entrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hr_salida')); ?>:</b>
	<?php echo CHtml::encode($data->hr_salida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>