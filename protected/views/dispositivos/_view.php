<?php
/* @var $this DispositivosController */
/* @var $data Dispositivos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipos_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipos_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marcas_id')); ?>:</b>
	<?php echo CHtml::encode($data->marcas_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelos_id')); ?>:</b>
	<?php echo CHtml::encode($data->modelos_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_id')); ?>:</b>
	<?php echo CHtml::encode($data->estado_id); ?>
	<br />


</div>