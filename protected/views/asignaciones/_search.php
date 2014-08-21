<?php
/* @var $this AsignacionesController */
/* @var $model Asignaciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destino_id'); ?>
		<?php echo $form->textField($model,'destino_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bien_id'); ?>
		<?php echo $form->textField($model,'bien_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo_id'); ?>
		<?php echo $form->textField($model,'tipo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'existencia'); ?>
		<?php echo $form->textField($model,'existencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->