<?php
/* @var $this ModelosController */
/* @var $data Modelos */
?>

<div class="view">
        
        <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
                      
	<b><?php echo CHtml::encode($data->getAttributeLabel('marcas_id')); ?>:</b>
	<?php echo CHtml::encode($data->marcas_id); ?>
	<br />

        -->
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->descripcion), array('view', 'id'=>$data->id)); ?>
	<br />


</div>