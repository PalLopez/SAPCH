<?php
/* @var $this Ninos_salidasController */
/* @var $model NinosSalidas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ninos-salidas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Campos obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nino'); ?>
		<?php echo $form->dropDownList($model,'id_nino',CHtml::listData(Ninos::model()->findAll(),'id','nombre'),array('empty'=>'Seleccione un niño')); ?>
		<?php echo $form->error($model,'id_nino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_salida'); ?>
		<?php echo $form->dropDownList($model,'id_salida',CHtml::listData(Salidas::model()->findAll(),'id','id'),array('empty'=>'Seleccione una salida')); ?>
		<?php echo $form->error($model,'id_salida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
