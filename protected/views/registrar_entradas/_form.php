<?php
/* @var $this Entradas_salidasController */
/* @var $model EntradasSalidas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'entradas-salidas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Campos obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $nowdate = date('Y-m-d', strtotime($model->fecha)); echo CHtml::activeDateField($model, 'fecha', array('value' => $nowdate, 'min' => $nowdate, 'max' => $nowdate));?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hr_entrada'); ?>
		<?php $nowtime = date("h:i:s", strtotime($model->hr_entrada)); echo CHtml::activeTimeField($model, 'hr_entrada', array('value' => $nowtime, 'disabled' => 'true')); ?>
		<?php $nowtime = date("h:i:s", strtotime($model->hr_entrada)); echo CHtml::activeTimeField($model, 'hr_entrada', array('value' => $nowtime, 'style' => 'display: none;')); ?>
		<?php echo $form->error($model,'hr_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->dropDownList($model,'id_usuario',CHtml::listData(Usuarios::model()->findAll(),'id','nombre'),array('empty'=>'Seleccione un usuario')); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
