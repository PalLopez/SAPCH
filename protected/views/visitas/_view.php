<?php
/* @var $this VisitasController */
/* @var $data Visitas */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivo')); ?>:</b>
	<?php echo CHtml::encode($data->motivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('agendada')); ?>:</b>
	<?php echo CHtml::encode($data->agendada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pe')); ?>:</b>
	<?php echo CHtml::encode($data->id_pe); ?>
	<br />

</div>
