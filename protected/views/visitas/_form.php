<?php
/* @var $this VisitasController */
/* @var $model Visitas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Campo obligatorio.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hr_entrada'); ?>
		<?php echo $form->timeField($model,'hr_entrada'); ?>
		<?php echo $form->error($model,'hr_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hr_salida'); ?>
		<?php echo $form->timeField($model,'hr_salida'); ?>
		<?php echo $form->error($model,'hr_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->dateField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'agendada'); ?>
		<?php echo $form->textField($model,'agendada'); ?>
		<?php echo $form->error($model,'agendada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pe'); ?>
		<?php echo $form->dropDownList($model,'id_pe',CHtml::listData(PersonalExterno::model()->findAll(),'id','nombre'),array('empty'=>'Seleccione un personal externo')); ?>
		<?php echo $form->error($model,'id_pe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nino'); ?>
		<?php echo $form->dropDownList($model,'id_nino',CHtml::listData(Ninos::model()->findAll(),'id','nombre'),array('empty'=>'Seleccione un niño')); ?>
		<?php echo $form->error($model,'id_nino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
