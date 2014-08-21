<?php
/* @var $this AsignacionesController */
/* @var $model Asignaciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'destino_id'); ?>
		<?php echo $form->textField($model,'destino_id'); ?>
		<?php echo $form->error($model,'destino_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bien_id'); ?>
		<?php echo $form->textField($model,'bien_id'); ?>
		<?php echo $form->error($model,'bien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_id'); ?>
		<?php echo $form->textField($model,'tipo_id'); ?>
		<?php echo $form->error($model,'tipo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'existencia'); ?>
		<?php echo $form->textField($model,'existencia'); ?>
		<?php echo $form->error($model,'existencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->