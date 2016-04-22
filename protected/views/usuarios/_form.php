<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><span class="required">*</span> Campos obligatorios.</p>
	<p class="note"><span class="required">*</span> Para realizar una actualización en un usuario del sistema, es obligatorio ingresar una nueva contraseña.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_usuario'); ?>
		<?php echo $form->dropDownList($model,'tipo_usuario',array('0'=>'Seleccione el tipo de usuario','A'=>'Administrador','S'=>'Seguridad','C'=>'Colaborador')); ?>
		<?php echo $form->error($model,'tipo_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_empleado'); ?>
		<?php echo $form->textField($model,'num_empleado'); ?>
		<?php echo $form->error($model,'num_empleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->dropDownList($model,'genero',array('0'=>'Seleccione el sexo','F'=>'F','M'=>'M')); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->passwordField($model,'contrasena',array('size'=>60,'maxlength'=>120, 'placeholder'=>'Escriba nueva contraseña')); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_area'); ?>
		<?php echo $form->dropDownList($model,'id_area',CHtml::listData(Areas::model()->findAll(),'id','nombre'),array('empty'=>'Seleccione un área')); ?>
		<?php echo $form->error($model,'id_area'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
