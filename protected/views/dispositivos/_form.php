<?php
/* @var $this DispositivosController */
/* @var $model Dispositivos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dispositivos-form',
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
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipos_id'); ?>
		
                <?php echo $form->dropDownList($model,'tipos_id',
                   CHtml::listData(TiposDispositivos::model()->findAll(),'id','descripcion'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('Dispositivos/Selectmarcas'),
                              'update'=>'#'.CHtml::activeId($model,'marcas_id'),
                              'beforeSend' => 'function(){
                               $("#Dispositivos_marcas_id").find("option").remove();
                               $("#Dispositivos_modelos_id").find("option").remove();
                               }',  
                            ),'prompt'=>'Seleccione el tipo'
                            
                            
                        )
                        ); ?>
            
		<?php echo $form->error($model,'tipos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marcas_id'); ?>
		                    
                <?php $lista_dos = array();
                if(isset($model->marcas_id)){
                $id_uno = intval($model->tipos_id); 
                $lista_dos = CHtml::listData(Marcas::model()->findAll("tipos_id = '$id_uno'"),'id','descripcion');
                }                
                echo $form->dropDownList($model,'marcas_id',$lista_dos,
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('Dispositivos/Selectmodelos'),
                              'update'=>'#'.CHtml::activeId($model,'modelos_id'),
                              'beforeSend' => 'function(){
                              $("#Dispositivos_modelos_id").find("option").remove();
                               }',   
                                
                            ),
                            
                            'prompt'=>'Seleccione la marca')
                        ); ?>
		
                <?php echo $form->error($model,'marcas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelos_id'); ?>
		
                <?php 
                $lista_tres = array();
                if(isset($model->modelos_id)){
                $id_dos = intval($model->marcas_id); 
                $lista_tres = CHtml::listData(Modelos::model()->findAll("marcas_id = '$id_dos'"),'modelos_id','descripcion');
                }
                echo $form->dropDownList($model,'modelos_id',$lista_tres,
                        array('prompt'=>'Seleccione el modelo')
                        ); ?>                    
                
		<?php echo $form->error($model,'modelos_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado_id'); ?>
		<?php echo $form->dropDownList($model,'estado_id',CHtml::listData(Estados::model()->findAll(),'id','descripcion'),array('empty'=>'Seleccione el estado')); ?>
		<?php echo $form->error($model,'estado_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->