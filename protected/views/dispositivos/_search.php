<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php #echo $form->label($model,'id'); ?>
		<?php #echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                                            'model'=>$model,
                                                                            'attribute'=>'fecha',
                                                                            'value'=>$model->fecha,
                                                                            'language'=>'es',
                                                                            'options'=>array(
                                                                                    'dateFormat'=>'yy-mm-dd',
                                                                                    'constraintInput'=>'false',
                                                                                    'duration'=>'fast',
                                                                                    'showAnim'=>'slide',
                                                                                            ),
                                                                             )
                                    ); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipos_id'); ?>
		<?php echo $form->textField($model,'tipos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marcas_id'); ?>
		<?php echo $form->textField($model,'marcas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modelos_id'); ?>
		<?php echo $form->textField($model,'modelos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado_id'); ?>
		<?php echo $form->textField($model,'estado_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->