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

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hr_entrada'); ?>
		<?php echo $form->textField($model,'hr_entrada'); ?>
		<?php echo $form->error($model,'hr_entrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hr_salida'); ?>
		<?php echo $form->textField($model,'hr_salida'); ?>
		<?php echo $form->error($model,'hr_salida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textArea($model,'motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pe'); ?>
		<?php echo $form->textField($model,'id_pe',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_pe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nino'); ?>
		<?php echo $form->textField($model,'id_nino',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_nino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->