<?php
/* @var $this BienesController */
/* @var $model Bienes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bienes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>
 
        <div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo'); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                                                            'model'=>$model,
                                                                            'attribute'=>'fecha',
                
                                                                            'language'=>'es',
                                                                            'options'=>array(
                                                                                    'dateFormat'=>'dd-mm-yy',
                                                                                    'constraintInput'=>'false',
                                                                                    'duration'=>'fast',
                                                                                    'showAnim'=>'slide',
                                                                                            ),
                                                                             )
                                    ); ?>
                <?php #echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
                           
	</div>        
        
	<div class="row">
		<?php echo $form->labelEx($model,'categoria_id'); ?>
		<?php echo $form->dropDownList($model,'categoria_id',CHtml::listData(Categorias::model()->findAll(),'id', 'marca','descripcion'),array('empty'=>'seleccione la categoria')); ?>
		<?php echo $form->error($model,'estado_id'); ?>
                           
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_id'); ?>
		<?php //echo $form->textField($model,'estado_id'); ?>
		<?php echo $form->dropDownList($model,'estado_id',CHtml::listData(Estados::model()->findAll(),'id','descripcion'),array('empty'=>'seleccione el estado')); ?>
                <?php echo $form->error($model,'estado_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->